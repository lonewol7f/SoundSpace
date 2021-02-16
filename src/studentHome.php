<?php 
    include("../path.php"); 
    include(ROOT_PATH . "/src/controllers/users.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Home-SoundSpace</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../style/style_home.css">
        <link rel="stylesheet" href="../style/about_us.css">
        <link rel="stylesheet" href="../style/stdStyle.css">
        <link rel="stylesheet" href="../style/courese.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/3.0.1/iconfont/material-icons.min.css">
        <link rel="stylesheet" href="../style/chat.css">
        <link rel="stylesheet" href="../style/scroll_bar.css">
        <script type="text/javascript" src="../js/aboutJs.js"></script>
        <script type="text/javascript" src="../js/studentHomejs.js"></script>

    </head>
    <body style="background-image: url(../images/bagr11.jpg);" >
        <header style="background-image: url(../images/header1.jpg);">
            <?php if(!isset($_SESSION['stdNo'])): ?>
            <a href="<?php echo BASE_URL . '/src/studentReg.php' ?>">
                <img src="../images/profile.png" width="70" height="50"  alt="profile" style="float: right; margin-top: 18px;">
            </a>
            <a href="<?php echo BASE_URL . '/src/studentReg.php' ?>">
                <button class="button2"  style="float: right; margin-top:14px; height: 5%;" >Register</button><br>
            </a>
            <?php endif ?>

               <!--  User name& Password -->
               <?php if(!isset($_SESSION['stdNo'])): ?>
               <div style=" float: right;margin-top: 150px; margin-bottom: 1%;margin-left: 2%; ">
                  <form action="studentHome.php" method="POST">
                      <input type="email" name="username" placeholder="User name" required style="border-radius: 5px; border-color: #8e44ad; width: auto; height: 25px;">
                      <input type="password" name="password" placeholder="Password" required style="border-radius: 5px; border-color:#8e44ad; width: auto; height: 25px;overflow: hidden;">
                      <input  type="submit" value="Log In" name="stdLog-btn" style="height: 31px;width: 100px; border-radius: 4px;color: white;background-color:purple; ">
                  </form>
              </div>
              <?php endif ?> 


                <a href="<?php echo BASE_URL . '/index.php' ?>">
                    <img src="../images/logo1.png" alt="logo" class="logo" style="width: 200px; height: 200px; float: left;">
                </a>
                
            <hr style="border: 1px solid black; background-color: black; clear: both;">

            <!-- navigation bar -->
            <div class="menu">
                <a href="<?php echo BASE_URL . '/src/studentHome.php' ?>" class="active">Home</a>
                
                
                <div class="search-container" style="float: right;">
                    <form>
                    <input type="text" placeholder="Search.." name="search">
                    <button type="submit">🔍</button>
                    </form>
                </div>
                <?php if(isset($_SESSION['stdNo'])): ?>
                  <a href="<?php echo BASE_URL . '/src/courses.php' ?>">Courses</a>
                  <a href="<?php echo BASE_URL . '/src/stdVideos.php' ?>">Videos</a>
                  <a href="<?php echo BASE_URL . '/src/eBooks.php' ?>">E-Books</a>
                  <div class="dropdown" style="float: right;">
                        <button class="dropbtn">Profile&nbsp;&nbsp;<i style="font-size: 10px;">&#9660</i></button>
                        <div class="dropdown-content">
                            <a href="<?php echo BASE_URL . '/src/controllers/stdLogout.php' ?>" style="color: purple;">Log out</a>
                            <a href="<?php echo BASE_URL . '/src/controllers/dStudent.php' ?>" style="color: red;">Delete Account</a>
                        </div>
                    </div>
                <?php endif; ?>
              </div>
        </header>
        <?php include(ROOT_PATH . "/src/includes/messages.php"); ?>
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
            <hr style="border: 1px solid black; background-color: black;">
        <div class="slideshow-container" style="background-image: url(../images/slide10.jpg); height: 400px;">

  <!-- Full-width images with number and caption text -->
          <div class="mySlides fade">
            <div class="numbertext">1 / 3</div>
            <img src="../images/slide11.jpg"  style="width:100%;height:400px; ">
            <div class="text" style="font-size: 25px;">“Music is like a dream. One that I cannot hear”</div>
          </div>

          <div class="mySlides fade">
            <div class="numbertext">2 / 3</div>
            <img src="../images/slide12.jpg" style="width:100%;height: 400px;">
            <div class="text"style="font-size: 25px;">“Without music, life would be a mistake” </div>
          </div>

          <div class="mySlides fade">
            <div class="numbertext">3 / 3</div>
            <img src="../images/slide4.jpg" style="width:100%;height: 400px;">
            <div class="text"style="font-size: 25px;">“Music gives a soul to the universe, wings to the mind, flight to the imagination and life to everything.”</div>
          </div>

          <!-- Next and previous buttons -->
          <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
          <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <br>

<!-- The dots/circles -->
        <div style="text-align:center">
          <span class="dot" onclick="currentSlide(1)"></span>
          <span class="dot" onclick="currentSlide(2)"></span>
          <span class="dot" onclick="currentSlide(3)"></span>
        </div>
        <br>

    <div id="main">
        <div style="max-width:20%; ">    
            <div class="container" style="width: 100%; ">
              <img src="../images/keyboard.jpg" alt="Keyboards">
                <button class="btn" onclick="keyboard()">Keyboards</button>
            </div><br>

            <div class="container" style="width:100%;">
              <img src="../images/piano.jpg" alt="Piano">
                <button class="btn" onclick="piano()">Piano</button>
            </div><br>

            <div class="container" style="width:100%;">
              <img src="../images/drum.jpg" alt="Drum">
                <button class="btn" onclick="drum()">Drum</button>
            </div><br>

            <div class="container" style="width:100%;">
              <img src="../images/guitar.jpg" alt="Guitar">
                 <button class="btn" onclick="guitar()">Guitar</button>
            </div>
        </div>

    

        <div style="background-image: url(../images/bagr1.jpg);border:6px solid #4A235A; margin-left:92px;margin-right:200px;margin-top: 4%;margin-bottom: 7%; width:300px;height: 890px;">

            <div id="stdH" style="text-align: center; display: block; margin-top: 20%;">
                    <h1 style="font-size: 40px;">Welcome To The</h1>
                    <h1 style="font-size: 80px; color: #AF7AC5;">SoundSpace</h1>
                    <h1 style="font-size: 35px;">Online</h1>
                    <h1 style="font-size: 60px;">Music School</h1>

             </div>

                <!-- introduction about courses -->
               <p id="cour" style="font-size:30px;text-align: left ;padding: 4%; color: #283747;font-family: cursive;margin-top:15%;"></p>
        </div>

    </div>
        <?php if(isset($_SESSION['stdNo'])): ?>
          <a href="<?php echo BASE_URL . '/src/courses.php' ?>" >
                <button class="button1" style="border-color: purple;font-size:20px;"><span>3 Weeks courses</span> </button>
          </a>
        <?php else: ?>
          <button class="button1" onclick="alert('You must Log In as a student for access this page')" style="border-color: purple;font-size:20px;"><span>3 Weeks courses</span> </button>
        <?php endif; ?>
    <br>
        <!-- -------------------------------------------------------------------------------------- -->
        <?php include(ROOT_PATH . "/src/includes/footer.php"); ?>
        <!-- -------------------------------------------------------------------------- -->
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
        <!-- -------------------------------------------------------------------------- -->  
    </body>
</html>