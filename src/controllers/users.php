<?php

    include(ROOT_PATH . "/database/db.php");
    include(ROOT_PATH . "/src/helpers/validate_user.php");
    require_once 'emailController.php';

    $errors = array();
    $fname = '';
    $lname = '';
    $email = '';
    $pwd = '';
    $cpwd = '';
    // $password = '';
    $table = 'user';

    function loginUser($user)
    {
         // log user in
         $_SESSION['regNo'] = $user['regNo'];
         $_SESSION['fname'] = $user['fname'];
         $_SESSION['lname'] = $user['lname'];
         $_SESSION['admin'] = $user['admin'];
         $_SESSION['email'] = $user['email'];
         $_SESSION['uAddress'] = $user['uAddress'];
         $_SESSION['pPic'] = $user['pPic'];
         $_SESSION['message'] = 'You are now logged in';
         $_SESSION['type'] = 'success';
         
         if($_SESSION['admin']){
             header("Location:" . BASE_URL . "/admin/dashboard.php"); 
         }else{
             // header("Location: /project/index.php");
             header("Location:" . BASE_URL . "/index.php");
         }
         exit();  //Comment this, if any error occured
    }


    function loginStudent($user)
    {
         // log user in
         $_SESSION['stdNo'] = $user['stdNo'];
         $_SESSION['stEmail'] = $user['stEmail'];
         $_SESSION['message'] = 'You are now logged in';
         $_SESSION['type'] = 'success';
         
         header("Location:" . BASE_URL . "/src/studentHome.php");
         exit();  //Comment this, if any error occured
    }

    function resetPassword($token)
    {
        global $table;

        $user = selectOne($table, ['token' => $token]);
        $_SESSION['email'] = $user['email'];
        header("Location:" . BASE_URL . "/src/reset_password.php");
        exit();
    }

    //validate form details
    if(isset($_POST['register-btn'])){
        
        $errors = validateUser($_POST);

        if(count($errors)===0){
            $_POST['admin'] = 0;
            $_POST['token'] = bin2hex(random_bytes(50));
            $_POST['password'] = password_hash($_POST['pwd'], PASSWORD_DEFAULT);
            unset($_POST['cpwd'], $_POST['register-btn'], $_POST['pwd']);

            $user_id = create($table, $_POST);
            $user =selectOne($table, ['regNo' => $user_id]);


            // send welcome message to user
            sendWelcomeEmail($user);
            
            // log user in
            loginUser($user);
            
        } else {
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $email = $_POST['email'];
            $pwd = $_POST['pwd'];
            $cpwd = $_POST['cpwd'];
        }
    }


    if(isset($_POST['login-btn'])){
        $errors = validateLogin($_POST);

        if(count($errors) === 0) {
            $user = selectOne($table, ['email' => $_POST['email']]);
            
            if ($user && password_verify($_POST['password'], $user['password'])) {
               loginUser($user);
            } else {
                array_push($errors, 'Invalid Email or Password');
            }
        }
    }

// ---------------------
    if(isset($_POST['reset-btn'])){
        $errors = validateResetPass($_POST);

        if(count($errors) === 0) {
            $user = selectOne($table, ['email' => $_POST['email']]);

            if ($user) {
                //sent email to user
                sendPassReset($user);
                header("Location:" . BASE_URL . "/src/pass_message.php");
            } else {
                array_push($errors, "We can't find this E-mail");
            }
            
        }
    }


    if(isset($_POST['passReset-btn'])){
        $errors = validateResetPassword($_POST);
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        if(count($errors) === 0) {
            $user = selectOne($table, ['email' => $_SESSION['email']]);

            if ($user) {
                //sent email to user
                update($table, $user['regNo'], ['password' => $password]);
                header("Location:" . BASE_URL . "/src/login_page.php");
            } else {
                array_push($errors, "Sorry, Try again later");
            }
            
        }
    }

    if(isset($_POST['register2-btn'])){
        
        $errors = validateStudent($_POST);

        if(count($errors)===0){
            $_POST['stEmail'] = $_POST['email'];
            $_POST['regNo'] = $_SESSION['regNo'];
            $_POST['stPassword'] = password_hash($_POST['password1'], PASSWORD_DEFAULT);
            unset($_POST['password1'], $_POST['register2-btn'], $_POST['password2'],$_POST['email']);

            $user_id = create('student', $_POST);
            $user =selectOne('student', ['stdNo' => $user_id]);

            
            // log student in
            loginStudent($user);
            
        } 
    }

    if(isset($_POST['stdLog-btn'])){
        $errors = validateStudentLogin($_POST);

        if(count($errors) === 0) {
            $user = selectOne('student', ['stEmail' => $_POST['username']]);
            
            if ($user && password_verify($_POST['password'], $user['stPassword'])) {
               loginStudent($user);
            } else {
                array_push($errors, 'Invalid Email or Password');
            }
        }
    }

    if(isset($_POST['feedback-btn'])){
        $errors = validateFeedback($_POST);

        if(count($errors) === 0) {
            unset($_POST['feedback-btn']);
            
            create('feedback',$_POST);
            $_SESSION['message'] = 'Feedback submited successfully';
            $_SESSION['type'] = 'success';
        }
    }

    if(isset($_POST['cprofile-btn'])){

        if(!strlen(trim($_POST['fname']))){
            unset($_POST['fname']);
        }

        if(!strlen(trim($_POST['lname']))){
            unset($_POST['lname']);
        }

        if(!strlen(trim($_POST['uAddress']))){
            unset($_POST['uAddress']);
        }

        if (!empty($_FILES['pPic']['name'])) {

            $image_name = time() . '_' . $_FILES['pPic']['name'];
            $destination = ROOT_PATH . "/images/uploads/" . $image_name;

            $result = move_uploaded_file($_FILES['pPic']['tmp_name'], $destination);

            if ($result) {
                $_POST['pPic'] = $image_name;
            } else {
                array_push($errors,'Profile picture upload failed');
            }
            

        } else {
            unset($_FILES['pPic']);
        }

        unset($_POST['cprofile-btn']);

        if(count($_POST) === 0){
            echo "<script> alert('You do not have any changes !!!'); </script>";
        }elseif(count($errors) !== 0){
            echo "<script>alert('Profile picture upload failed');</script>";
        }else {
            update($table, $_SESSION['regNo'], $_POST);
            $user = selectOne($table, ['regNo' => $_SESSION['regNo']]);
            $_SESSION['fname'] = $user['fname'];
            $_SESSION['lname'] = $user['lname'];
            $_SESSION['uAddress'] = $user['uAddress'];
            $_SESSION['pPic'] = $user['pPic'];
        }
    }

    if(isset($_POST['dprofile-btn'])){
        
        if ($_SESSION['email'] !== $_POST['email']) {
            echo "<script>alert('You must enter your email, what you use to register our system for delete your account');</script>";
        }else {
            $errors = validateduser($_POST);
            if(count($errors) === 0) {
                $user = selectOne($table, ['regNo' => $_SESSION['regNo']]);
                if (password_verify($_POST['password'], $user['password'])) {
                    delete($table, $_SESSION['regNo']);
                    header("Location:" . BASE_URL . "/src/controllers/logout.php");
                }else{
                    echo '<script>alert("You must enter your correct password for delete your profile");</script>';
                }
                
            }
        }
    }
    
    if(isset($_POST['contactUs-btn'])){
        $errors = validateContact($_POST);

        if(count($errors) === 0) {
            unset($_POST['contactUs-btn']);
            
            create('contact',$_POST);
            $_SESSION['message'] = 'Your message submited successfully';
            $_SESSION['type'] = 'success';
        }
    }

    if(isset($_POST['buy1-btn'])){

        $item = selectOne('item', ['itemNo' => '1']);

        $_SESSION['iName'] = $item['iName'];
        $_SESSION['price'] = $item['price'];
        $_SESSION['iDescription'] = $item['iDescription'];
        $_SESSION['photo'] = $item['photo']; 

        header('Location:' . BASE_URL . '/src/payment.php');

    }

    if(isset($_POST['buy2-btn'])){

        $item = selectOne('item', ['itemNo' => '2']);

        $_SESSION['iName'] = $item['iName'];
        $_SESSION['price'] = $item['price'];
        $_SESSION['iDescription'] = $item['iDescription'];
        $_SESSION['photo'] = $item['photo']; 

        header('Location:' . BASE_URL . '/src/payment.php');

    }

    if(isset($_POST['buy3-btn'])){

        $item = selectOne('item', ['itemNo' => '3']);

        $_SESSION['iName'] = $item['iName'];
        $_SESSION['price'] = $item['price'];
        $_SESSION['iDescription'] = $item['iDescription'];
        $_SESSION['photo'] = $item['photo']; 

        header('Location:' . BASE_URL . '/src/payment.php');

    }

    if(isset($_POST['buy4-btn'])){

        $item = selectOne('item', ['itemNo' => '4']);

        $_SESSION['iName'] = $item['iName'];
        $_SESSION['price'] = $item['price'];
        $_SESSION['iDescription'] = $item['iDescription'];
        $_SESSION['photo'] = $item['photo']; 

        header('Location:' . BASE_URL . '/src/payment.php');

    }

    if(isset($_POST['pay-btn'])){
        $errors = validatePayment($_POST);
        $orders = array();

        
        

        if(count($errors) === 0) {
            $orders['regNo'] = $_SESSION['regNo'];
            $orders['price'] = $_SESSION['price'];

            $order_id = create('orders', $orders);
            $order =selectOne('orders', ['orderNo' => $order_id]);

            unset($_POST['pay-btn'],$_POST['name'],$_POST['card'],$_POST['date'],$_POST['cvv']);

            $_POST['orderNo'] = $order['orderNo'];
            $_POST['regNo'] = $_SESSION['regNo'];
            create('deliveries', $_POST);

            //send payment details to user's email
            sendPaymentDetails($_SESSION);

            $_SESSION['message'] = 'Payment Successfull';
            $_SESSION['type'] = 'success';  


            
        }
        

    }

?>