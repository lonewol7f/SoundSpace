<?php 
    include("../path.php"); 
    include(ROOT_PATH . "/src/controllers/users.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Student Register-soundspace</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../style/style_home.css">
        <link rel="stylesheet" href="../style/aboutStyle.css">
        <link rel="stylesheet" href="../style/stdReg.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/3.0.1/iconfont/material-icons.min.css">
        <link rel="stylesheet" href="../style/chat.css">
        <link rel="stylesheet" href="../style/scroll_bar.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
</head>
<body  style="background-color: white;">
	<header style="background-image: url(../images/bng11.jpg);">

            <a href="../index.php">
                <img src="../images/logo1.png" alt="logo" class="logo" style="width: 200px; height: 200px; float: left;">
            </a>
	 
            <hr style="border: 1px solid black; background-color: black; clear: both;">
            <!-- Back to top button -->
            <img src="<?php echo (BASE_URL . '/images/backToTop.png')  ?>" width="50px" height="40px" onclick="topFunction()" id="topBtn" title="Go to top">
            <script>
                //Get the button
                var mybutton = document.getElementById("topBtn");
                
                // When the user scrolls down 20px from the top of the document, show the button
                window.onscroll = function() {scrollFunction()};
                
                function scrollFunction() {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    mybutton.style.display = "block";
                } else {
                    mybutton.style.display = "none";
                }
                }
                
                // When the user clicks on the button, scroll to the top of the document
                function topFunction() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
                }
            </script>
            <!-- form validation -->

				 <div class="Icontainer" >
					<div class="header">
						<h2>Register Now!</h2>
					</div>
					<form id="form" class="form" action="studentReg.php" method="POST">
						<?php include(ROOT_PATH . "/src/helpers/form_errors.php") ?>
						<div class="form-control" style="margin-top: 5px;">
							<label for="username">Student Email</label>
							<input type="email" placeholder="example@gmail.com" id="email" name="email" >
							<i class="fa fa-check-circle"></i>
							<i class="fa fa-exclamation-circle"></i>
							<small>Error message</small>
						</div>
						<div class="form-control">
							<label for="username">Enter Password</label>
							<input type="password" placeholder="Password" id="password" name="password1">
							<i class="fa fa-check-circle"></i>
							<i class="fa fa-exclamation-circle"></i>
							<small>Error message</small>
						</div>
						<div class="form-control">
							<label for="username"> Re-Enter Password </label>
							<input type="password" placeholder="Enter password again" id="password2" name="password2">
							<i class="fa fa-check-circle"></i>
							<i class="fa fa-exclamation-circle"></i>
							<small>Error message</small>
						</div>
						<button type="submit" name="register2-btn">Submit</button>
					</form>
				</div>

				<!-- form validation javascrip part -->
				<!-- <script type="text/javascript">
				const form = document.getElementById('form');
				const username = document.getElementById('username');
				const lastName = document.getElementById('lastName');
				const email = document.getElementById('email');
				const password = document.getElementById('password');
				const password2 = document.getElementById('password2');

				form.addEventListener('submit', e => {
					e.preventDefault();
					
					checkInputs();
				});

				function checkInputs() {
					// trim to remove the whitespaces
					const usernameValue = username.value.trim();
					const lastNameValue = lastName.value.trim();
					const emailValue = email.value.trim();
					const passwordValue = password.value.trim();
					const password2Value = password2.value.trim();
					
					if(usernameValue === '') {
						setErrorFor(username, 'First Name cannot be blank');
					} else {
						setSuccessFor(username);
					}
					if(lastNameValue === '') {
						setErrorFor(lastName, 'Last Name cannot be blank');
					} else {
						setSuccessFor(lastName);
					}
					
					if(emailValue === '') {
						setErrorFor(email, 'Email cannot be blank');
					} else if (!isEmail(emailValue)) {
						setErrorFor(email, 'Not a valid email');
					} else {
						setSuccessFor(email);
					}
					
					if(passwordValue === '') {
						setErrorFor(password, 'Password cannot be blank');
					} else {
						setSuccessFor(password);
					}
					
					if(password2Value === '') {
						setErrorFor(password2, 'Re-enter Password cannot be blank');
					} else if(passwordValue !== password2Value) {
						setErrorFor(password2, 'Passwords does not match');
					} else{
						setSuccessFor(password2);
					}
				}

				function setErrorFor(input, message) {
					const formControl = input.parentElement;
					const small = formControl.querySelector('small');
					formControl.className = 'form-control error';
					small.innerText = message;
				}

				function setSuccessFor(input) {
					const formControl = input.parentElement;
					formControl.className = 'form-control success';
				}
					
				function isEmail(email) {
					return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
				}

				</script> -->



                <?php include(ROOT_PATH . "/src/includes/footer.php"); ?>

                    <div class="chat">
						<section>
							<button class="chat-btn"> 
								<i class="material-icons"> comment </i>
							</button>
					
							<div class="chat-popup">
								<div class="badge">1</div>
								<div class="chat-area">
								<div class="income-msg">
									<img src="../images/me.jpg" class="avatar" alt="">
									<span class="msg"> Hi, How can I help you?</span>
								</div>   
								</div>
					
								<div class="input-area">
									<input type="text">
									<button id="emoji-btn"> &#127773;</button>
									<button class="submit"> <i class="material-icons"> send</i></button>
								</div>
							</div>
						</section>
					</div>
				
					<script src="https://cdn.jsdelivr.net/npm/@joeattardi/emoji-button@3.1.1/dist/index.min.js"></script>
					<script src="../js/chat.js"></script>

</body>
</html>