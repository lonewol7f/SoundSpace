<!-- video refference for base : https://www.youtube.com/watch?v=sy9OI-ndKnc&t=312s  -->

<?php include("../path.php");
include(ROOT_PATH . "/src/controllers/users.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login-Soundspace</title>
        <link rel="stylesheet" href="../style/style_login.css">
        <script type="text/javascript" src="../js/login.js"></script>
    </head>
    <body style="background-color: #a076bd;">

      <div class="back-to-home">
        <a href="../index.php"><img src="../images/homeico.png" style="float: left; margin-top: 20px;" width="90" height="50"></a>
      </div>
      <div class="body"  style="justify-content: center; align-items: center;">
        <div class="contentlog">
            <div class="logform login" style="clear: both;">
              <form action="login_page.php" name="loginForm" method="POST">
                <h2>Login</h2>
                
                <?php include(ROOT_PATH . "/src/helpers/form_errors.php") ?>

                <label>
                  <span>Email Address</span>
                  <input type="email" name="email" required>
                </label>
                <label>
                  <span>Password</span>
                  <input type="password" name="password" required>
                </label>
                <input type="submit" value="Login" name="login-btn">
              </form>
              <a href="<?php echo BASE_URL . '/src/forgot_password.php' ?>" style="text-decoration: none;"><p class="forgot-pass">Forgot Password ?</p></a>
        
              <div class="social-media">
                <ul>
                  <li><img src="../images/facebook.png"></li>
                  <li><img src="../images/twitter.png"></li>
                  <li><img src="../images/linkedin.png"></li>
                  <li><img src="../images/instagram.png"></li>
                </ul>
              </div>
            </div>
            
            <div class="sub-cont">
              <div class="img">
                <div class="img-text m-up">
                  <h2>New to SoundSpace?</h2>
                  <p>Sign up and discover great amount of SoundSpace Deals!</p>
                </div>
                <div class="img-text m-in">
                  <h2>One of us?</h2>
                  <p>If you already has an account, just Login. We've missed you!</p>
                </div>
                <div class="img-btn">
                  <span class="m-up">Register</span>
                  <span class="m-in">Login</span>
                </div>
              </div>
              <form action="login_page.php" method="POST">
                <div class="logform register">
                  <h2>Register</h2>

                  <?php include(ROOT_PATH . "/src/helpers/form_errors.php") ?>

                  <label for="fname">
                    <span>First Name <span class="required">*</span></span>
                    <input type="text" id="fname" name="fname" value="<?php echo $fname; ?>" required>
                  </label>
                  <label for="lname">
                    <span>Last Name <span class="required">*</span></span>
                    <input type="text" id="lname" name="lname" value="<?php echo $lname; ?>" required>
                  </label>
                  <label for="email">
                    <span>Email <span class="required">*</span></span>
                    <input type="email" id="email" name="email" value="<?php echo $email; ?>" required>
                  </label>
                  <label for="pwd">
                    <span>Password <span class="required">*</span></span>
                    <input type="password" id="pwd" name="pwd"  minlength="6" value="<?php echo $pwd; ?>" required>
                  </label>
                  <div id="message">
                    <h3>Password must contain the following:</h3>
                    <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
                    <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
                    <p id="number" class="invalid">A <b>number</b></p>
                    <p id="length" class="invalid">Minimum <b>6 characters</b></p>
                  </div>
                  <script>
                    var myInput = document.getElementById("pwd");
                    var letter = document.getElementById("letter");
                    var capital = document.getElementById("capital");
                    var number = document.getElementById("number");
                    var length = document.getElementById("length");
                    
                    // When the user clicks on the password field, show the message box
                    myInput.onfocus = function() {
                      document.getElementById("message").style.display = "block";
                    }
                    
                    // When the user clicks outside of the password field, hide the message box
                    myInput.onblur = function() {
                      document.getElementById("message").style.display = "none";
                    }
                    
                    // When the user starts to type something inside the password field
                    myInput.onkeyup = function() {
                      // Validate lowercase letters
                      var lowerCaseLetters = /[a-z]/g;
                      if(myInput.value.match(lowerCaseLetters)) {  
                        letter.classList.remove("invalid");
                        letter.classList.add("valid");
                      } else {
                        letter.classList.remove("valid");
                        letter.classList.add("invalid");
                      }
                      
                      // Validate capital letters
                      var upperCaseLetters = /[A-Z]/g;
                      if(myInput.value.match(upperCaseLetters)) {  
                        capital.classList.remove("invalid");
                        capital.classList.add("valid");
                      } else {
                        capital.classList.remove("valid");
                        capital.classList.add("invalid");
                      }
                    
                      // Validate numbers
                      var numbers = /[0-9]/g;
                      if(myInput.value.match(numbers)) {  
                        number.classList.remove("invalid");
                        number.classList.add("valid");
                      } else {
                        number.classList.remove("valid");
                        number.classList.add("invalid");
                      }
                      
                      // Validate length
                      if(myInput.value.length >= 6) {
                        length.classList.remove("invalid");
                        length.classList.add("valid");
                      } else {
                        length.classList.remove("valid");
                        length.classList.add("invalid");
                      }
                    }
                    </script>
                  <label for="cpwd">
                    <span>Confirm Password <span class="required">*</span></span>
                    <input type="password" id="cpwd" name="cpwd" value="<?php echo $cpwd; ?>" required>
                  </label>
                  <span id='cmessage'></span>
                  <script>
                    var myInputc = document.getElementById("cpwd");

                  // When the user clicks on the password field, show the message box
                      myInputc.onfocus = function() {
                      document.getElementById("cmessage").style.display = "block";
                      }
                    
                  // When the user clicks outside of the password field, hide the message box
                      myInputc.onblur = function() {
                          document.getElementById("cmessage").style.display = "none";
                      }
                  // When the user starts to type something inside the password field
                      myInputc.onkeyup = function() {
                      if (document.getElementById('pwd').value ==
                        document.getElementById('cpwd').value) {
                        document.getElementById('cmessage').style.color = 'green';
                        document.getElementById('cmessage').innerHTML = 'Matching';
                        } else {
                        document.getElementById('cmessage').style.color = 'red';
                        document.getElementById('cmessage').innerHTML = 'Not Matching';
                        }
                      }
                  </script>
                  <input type="submit" value="Register Now " name="register-btn">
                </div>
              </form>
            </div>
        </div>
      </div>
      <script type="text/javascript" src="../js/login.js"></script>
    </body>
</html>