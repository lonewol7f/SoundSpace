<?php
    $page = 'about'; 
    include("../path.php"); 
    include(ROOT_PATH . "/src/controllers/users.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Contact Us-SoundSpace</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../style/style_home.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/3.0.1/iconfont/material-icons.min.css">
        <link rel="stylesheet" href="../style/chat.css">
        <link rel="stylesheet" href="../style/scroll_bar.css">
        <link rel="stylesheet" href="../style/about_us.css">
        <script type="text/javascript" src="../js/aboutJs.js"></script>
    </head>
    <body  style="background-color: #ECDEF2;">
        <?php include(ROOT_PATH . "/src/includes/header.php"); ?>
        <!-- -------------------------------------------------------------------------------------- -->
        <br><br><br>
        

        <div class="slideshow-container" style="background-image: url(../images/slide11.jpg); height: 400px;">

              <!-- Full-width images with number and caption text -->
              <div class="mySlides fade">
                <div class="numbertext">1</div>
                <img src="../images/slide8.jpg"  style="width:100%;height: 400px; ">
                <div class="text" style="font-size: 30px; text-shadow: 1px 1px 2px black, 0 0 1em blue, 0 0 0.2em blue;">“Music is the shorthand of emotion.”</div>
              </div>

              <div class="mySlides fade">
                <div class="numbertext">2</div>
                <img src="../images/slide5.jpg" style="width:100%;height: 400px;">
                <div class="text"style="font-size: 30px; text-shadow: #FC0 1px 0 10px;">“The most exciting rhythms seem unexpected and complex, the most beautiful melodies simple and inevitable.”</div>
              </div>

              <div class="mySlides fade">
                <div class="numbertext">3</div>
                <img src="../images/slide9.jpg" style="width:100%;height: 400px;">
                <div class="text"style="font-size: 30px; text-shadow: #FC0 5px 0 10px;">“Music touches us emotionally, where words alone can’t.”</div>
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

        <br><br><br>

        <img src="../images/backToTop.png" width="80px" height="65px" onclick="topFunction()" id="topBtn" title="Go to top">
        <script type="text/javascript">var mybutton = document.getElementById("topBtn");
            
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


            <!-- side buttons -->
            <div id="main" style="width: 100%; height: auto;">
                <div class="btt" style="max-width: 30%">
                    <button class="button" style="vertical-align:middle"onclick="overView()"><span>Over view</span></button><br><br>
                    <button class="button" style="vertical-align:middle" onclick="team()"><span>Team</span></button><br><br>              
                    <button class="button" style="vertical-align:middle" onclick="history()"><span>History</span></button><br><br>
                    <button class="button" style="vertical-align:middle" onclick="locat()"><span>Location</span></button><br><br><br>
                </div>
                <div class="center">
                    <p id="demo"></p>
                </div>
                <div id="aimg" style="float: right; width:100%;margin-right: 150px;">
                    <img style="width: 800px;" src="../images/d3.jpg">
                </div>
            </div>
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