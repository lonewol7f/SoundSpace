<?php 

    function validateUser($user)
    {
        $errors = array();

        if(empty($user['fname'])){
            array_push($errors, 'First Name is required');
        }

        if(empty($user['lname'])){
            array_push($errors, 'Last Name is required');
        }

        if(empty($user['email'])){
            array_push($errors, 'Email is required');
        }

        if(empty($user['pwd'])){
            array_push($errors, 'Password is required');
        }

        if(empty($user['cpwd'])){
            array_push($errors, 'Password confirmation is required');
        }

        if($user['pwd'] !== $user['cpwd']){
            array_push($errors, 'Passwords do not match');
        }

        $existingUser = selectOne('user',['email' => $user['email']]);
        if (isset($existingUser)){
            array_push($errors, 'Email already exists');
        }

        return $errors;
    }


    function validateLogin($user)
    {
        $errors = array();

        

        if(empty($user['email'])){
            array_push($errors, 'Email is required');
        }

        if(empty($user['password'])){
            array_push($errors, 'Password is required');
        }


        return $errors;
    }

    // -------------------
    function validateResetPass($user)
    {
        $errors = array();

        if(empty($user['email'])){
            array_push($errors, 'Email is required');
        }

        return $errors;
    }

    function validateResetPassword($user)
    {
        $errors = array();

        if(empty($user['password'])){
            array_push($errors, 'New password is required');
        }

        if($user['password'] !== $user['cpwd']){
            array_push($errors, 'Passwords do not match');
        }

        return $errors;
    }

    function validateStudent($user)
    {
        $errors = array();

        if(empty($user['email'])){
            array_push($errors, 'Email is required');
        }

        if(empty($user['password1'])){
            array_push($errors, 'Password is required');
        }

        if(empty($user['password2'])){
            array_push($errors, 'Password confirmation is required');
        }

        if($user['password1'] !== $user['password2']){
            array_push($errors, 'Passwords do not match');
        }

        return $errors;
    }

    function validateStudentLogin($user)
    {
        $errors = array();

        

        if(empty($user['username'])){
            array_push($errors, 'Email is required');
        }

        if(empty($user['password'])){
            array_push($errors, 'Password is required');
        }


        return $errors;
    }

    function validateFeedback($user)
    {
        $errors = array();

        if(empty($user['fEmail'])){
            array_push($errors, 'Email is required');
        }

        if(!strlen(trim($user['message']))){
            array_push($errors, 'You should enter your feedback');
        }

        return $errors;
    }

    function validateduser($user)
    {
        $errors = array();


        if(empty($user['email'])){
                array_push($errors, 'Email is required to delete your profile');
        }
            
        if(!strlen(trim($user['password']))){
            array_push($errors, 'You must enter your password to delete your profile');
        }

        

        return $errors;
    } 

    function validateContact($user)
    {
        $errors = array();

        if(empty($user['name'])){
            array_push($errors, 'Name is required');
        }

        if(empty($user['email'])){
            array_push($errors, 'Email is required');
        }

        if(!strlen(trim($user['message']))){
            array_push($errors, 'You should enter your message');
        }

        return $errors;
    }

    function validatePayment($user)
    {
        $errors = array();

        if(empty($user['name'])){
            array_push($errors, "Card Holder's Name is required");
        }

        if(empty($user['card'])){
            array_push($errors, 'Card Number is required');
        }

        if(empty($user['date'])){
            array_push($errors, 'Expire Date is required');
        }

        if(empty($user['cvv'])){
            array_push($errors, 'CVV is required');
        }

        if(!strlen(trim($user['address']))){
            array_push($errors, 'You should enter delivery address');
        }

        return $errors;
    }

?>