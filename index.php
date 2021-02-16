<?php
    $page = 'home';
    include("path.php");
    include(ROOT_PATH . "/src/controllers/users.php");


    if (isset($_GET['password-token'])){
        $passToken = $_GET['password-token'];
        resetPassword($passToken);
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Home-SoundSpace</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style/style_home.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/3.0.1/iconfont/material-icons.min.css">
        <link rel="stylesheet" href="style/chat.css">
        <link rel="stylesheet" href="style/scroll_bar.css">
        <script src="js/items.js"></script>
        <script src="js/slider2.js"></script>
        <script src="js/slider1.js"></script>
    </head>
    <body style="background-image: linear-gradient(180deg, white ,#E6E6FA);">
        <!-- -------------------------------------------------------------------------------------- -->
        <?php include(ROOT_PATH . "/src/includes/header.php"); ?>
        <!-- -------------------------------------------------------------------------------------- -->
        <!-- Music play -->
        <div class="audiv">
            <h1 style="color:white;text-shadow: #000 4px 1px 1px;font-family:papyrus;">LET&nbsp;&nbsp;THE&nbsp;&nbsp;MUSIC&nbsp;&nbsp;EMBRACE&nbsp;&nbsp;YOU</h1><br>
            <div style="margin-left: 42%;padding:20px;">
                <audio id="audio">
                    <source src="audio/audio1.mp3" type="audio/mpeg">
                </audio>
                <button id="playpause" class="audbtn" onclick="play_pause()">Play Music &#9655;</button>
            </div>
            <script src="js/audio.js"></script>
        </div>
        <!--image slider start-->
        <div style="background: rgba(0, 0, 0, 0.068); width:100%;margin-top:10px;">
            <br>
            <div class="slider" >
                <div class="slides">
                    <!--radio buttons start-->
                    <input type="radio" name="radio-btn" id="radio1">
                    <input type="radio" name="radio-btn" id="radio2">
                    <input type="radio" name="radio-btn" id="radio3">
                    <input type="radio" name="radio-btn" id="radio4">
                    <!--radio buttons end-->
                    <!--slide images start-->
                    <div class="slide first">
                    <img src="images/slideshow/img1.jpg" alt="">
                    </div>
                    <div class="slide">
                    <img src="images/slideshow/img2.jpg" alt="">
                    </div>
                    <div class="slide">
                    <img src="images/slideshow/img3.jpg" alt="">
                    </div>
                    <div class="slide">
                    <img src="images/slideshow/img4.jpg" alt="">
                    </div>
                    <!--slide images end-->
                    <!--automatic navigation start-->
                    <div class="navigation-auto">
                    <div class="auto-btn1"></div>
                    <div class="auto-btn2"></div>
                    <div class="auto-btn3"></div>
                    <div class="auto-btn4"></div>
                    </div>
                    <!--automatic navigation end-->
                </div>
                <!--manual navigation start-->
                <div class="navigation-manual">
                    <label for="radio1" class="manual-btn"></label>
                    <label for="radio2" class="manual-btn"></label>
                    <label for="radio3" class="manual-btn"></label>
                    <label for="radio4" class="manual-btn"></label>
                </div>
            <!--manual navigation end-->
            </div>
            <!--image slider end-->
            <br>
        </div>

        <!-- main content starting point -->
        <div style="width: 100%;text-align:center;margin-top:40px;">
        <div class="cato_head" style="margin-left: 5%;"><button onclick="ag()">Acoustic Guitars</button><button onclick="eg()">Electric Guitars</button><button onclick="bg()">Bass Guitars</button></div>
            <div class="cato_mid">
                <div class="cato">
                    <img id="g1" src="images/guitars/ag1.jpg">
                    <img id="g2" src="images/guitars/ag2.jpg">
                    <img id="g3" src="images/guitars/ag3.jpg">
                    <img id="g4" src="images/guitars/ag4.jpg">
                </div>
                <br><br>
                <div style="display: flex; justify-content:space-around;margin-top:-15px">
                    <span>Aria&nbsp;MFT200MTN&nbsp;</span>
                    <span>ARIA&nbsp;MTF&nbsp;240MTL</span>
                    <span>Aria&nbsp;AK&nbsp;30C6&nbsp;&nbsp;&nbsp;</span>
                    <span>Aria&nbsp;FST200N&nbsp;&nbsp;&nbsp;</span>
                </div><br>
                <div style="display: flex; justify-content:space-around;margin-top:-15px">
                    <span>RS.33000/=</span>
                    <span>Rs.33000/=</span>
                    <span>Rs.32000/=</span>
                    <span>Rs.13000/=</span>
                </div>
                <!-- If user had loged already  he/she can redirect catogary page if it is not he/she will redirect to login page -->
                <div class="cato_foot" style="margin-top: 15px;">
                    <?php if(isset($_SESSION['regNo'])): ?>     
                         <a href="<?php echo BASE_URL . '/src/guitars.php' ?>"><button>View More</button></a>  
                    <?php else: ?>
                        <a href="<?php echo BASE_URL . '/src/login_page.php' ?>"><button>View More</button></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div style="width: 100%;text-align:center;margin-top:40px;">
        <div class="cato_head" style="margin-left: 5%;"><button onclick="ds()">Drum sets</button><button onclick="dc()">Cymbals</button><button onclick="dj()">Djembe</button></div>
            <div class="cato_mid">
                <div class="cato">
                    <img id="d1" src="images/drums/dd1.jpg">
                    <img id="d2" src="images/drums/dd2.jpg">
                    <img id="d3" src="images/drums/dd3.jpg">
                    <img id="d4" src="images/drums/dd4.png">
                </div>
                <br><br>
                <div style="display: flex; justify-content:space-around;margin-top:-15px">
                    <span>DTX 452K</span>
                    <span>DTX 402K</span>
                    <span>DTX M12</span>
                    <span>MATADOR TM</span>
                </div><br>
                <div style="display: flex; justify-content:space-around;margin-top:-15px">
                    <span>Rs.158000/=</span>
                    <span>Rs.115000/=</span>
                    <span>Rs.218000/=</span>
                    <span>Rs.76750/=&nbsp;</span>
                </div>
                <div class="cato_foot" style="margin-top: 15px;">
                    <?php if(isset($_SESSION['regNo'])): ?>     
                         <a href="<?php echo BASE_URL . '/src/drums.php' ?>"><button>View More</button></a>  
                    <?php else: ?>
                        <a href="<?php echo BASE_URL . '/src/login_page.php' ?>"><button>View More</button></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <!-- This will appear after user clicked view more image -->
        <div id="afmore" class="afdiv">
            
            <div style="width: 100%;text-align:center;margin-top:40px;">
            <div class="cato_head" style="margin-left: 5%;"><button onclick="kd()">Digital Keyboards</button><button onclick="ks()">Synthesizers</button><button onclick="kp()">Digital Pianos</button></div>
                <div class="cato_mid">
                    <div class="cato">
                        <img id="k1" src="images/keyboards/kd1.png">
                        <img id="k2" src="images/keyboards/kd2.jpg">
                        <img id="k3" src="images/keyboards/kd3.jpg">
                        <img id="k4" src="images/keyboards/kd4.jpg">
                    </div>
                    <br><br>
                    <div style="display: flex; justify-content:space-around;margin-top:-15px">
                        <span>CLP54Sr</span>
                        <span>CVP701B</span>
                        <span>CLP-565GP</span>
                        <span>DGX660</span>
                    </div><br>
                    <div style="display: flex; justify-content:space-around;margin-top:-15px">
                        <span>Rs.250000/=</span>
                        <span>Rs.536000/=</span>
                        <span>Rs.616000/=</span>
                        <span>Rs.194000/=</span>
                    </div>
                    <div class="cato_foot" style="margin-top: 15px;">
                        <?php if(isset($_SESSION['regNo'])): ?>     
                            <a href="<?php echo BASE_URL . '/src/keyboards.php' ?>"><button>View More</button></a>  
                        <?php else: ?>
                            <a href="<?php echo BASE_URL . '/src/login_page.php' ?>"><button>View More</button></a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div style="width: 100%;text-align:center;margin-top:40px;">
                <div class="cato_head" style="margin-left: 5%;"><button>Band Orchestra</button></div>
                <div class="cato_mid">
                    <div class="cato">
                        <img id="b1" src="images/band/bo1.jpg">
                        <img id="b2" src="images/band/bo2.jpg">
                        <img id="b3" src="images/band/bo3.jpg">
                        <img id="b4" src="images/band/bo4.jpg">
                    </div>
                    <br><br>
                    <div style="display: flex; justify-content:space-around;margin-top:-15px">
                        <span>YCR-2330</span>
                        <span>SVC 110</span>
                        <span>YTS-26</span>
                        <span>SV-130</span>
                    </div><br>
                    <div style="display: flex; justify-content:space-around;margin-top:-15px">
                        <span>Rs.127000/=</span>
                        <span>Rs.454000/=</span>
                        <span>Rs.344500/=</span>
                        <span>Rs.230000/=</span>
                    </div>
                    <div class="cato_foot" style="margin-top: 15px;">
                        <?php if(isset($_SESSION['regNo'])): ?>     
                            <a href="<?php echo BASE_URL . '/src/orchestra.php' ?>"><button>View More</button></a>  
                        <?php else: ?>
                            <a href="<?php echo BASE_URL . '/src/login_page.php' ?>"><button>View More</button></a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <!-- subscribe us bar -->
            <div class="subscribe" style="margin-top: 10px;">
                <br>
                <h3 class="shead">Subscribe now to get the latest updates on our products, offers and more!</h3>
                <div style="margin-top: 10px;">
                    <form>
                        <input type="text" name="sname" id="sname" placeholder="&nbsp;&nbsp;Your Name">
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="email" name="semail" id="semail" placeholder="&nbsp;&nbsp;Your E-mail" required>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <button type="submit">Subscribe</button>
                    </form>
                </div>
            </div>
        </div> 
         <!-- End of view more div -->
        <div class="vimore" style="text-align: center;" id="vmore">
            <img src="images/view_more.png" alt="View More" onclick="view_more()" class="blink"  style="height: 50px;width:50px;margin-top:15px;margin-bottom:10px;">
        </div>
        <script src="js/more.js"></script>
        <!-- Social Media icons -->   
        <hr style="border: 2px solid #7c5295; background-color: #7c5295;clear:both;">
        <div style="display: block; margin-left: 38.5%;" class="social-media">
            <a href="#" style="text-decoration: none;">
                <img src="images/facebook.png" width="30" height="30"  alt="facebook" style="padding: 2px 20px;">
            </a>
            <a href="#" style="text-decoration: none;">
                <img src="images/instagram.png" width="30" height="30"  alt="instagram" style="padding: 2px 20px;">
            </a>
            <a href="#" style="text-decoration: none;">
                <img src="images/linkedin.png" width="30" height="30"  alt="linkedin" style="padding: 2px 20px;">
            </a>
            <a href="#" style="text-decoration: none;">
                <img src="images/twitter.png" width="30" height="30"  alt="twitter" style="padding: 2px 20px;">
            </a>
        </div>
        <hr style="border: 2px solid #7c5295; background-color: #7c5295; clear: both;">
        <!-- body bottom -->
        <div style="background-color: #815b9c;display:flex;justify-content:space-around;">
            <div class="footer_block">
                <div class="footer_block_head">
                    <p><b><u>SALES & MARKETING</u></b></p>
                </div>
                <div class="footer_block_text">
                    <p>Hotline - (011) 2xxxxxx</p>
                    <a href="#"><p>Email - info@soundspace.lk</p></a>
                    <p>Fax - (011) 2xxxxxx</p>
                    <p>Address - 221/B, Bakers St, Colombo </p>
                </div>
            </div>
            <div class="footer_block">
                <div class="footer_block_head">
                    <p><b><u>SERVICE & REPAIRS</u></b></p>
                </div>
                <div class="footer_block_text">
                    <p>Tel - (011) 4xxxxxx</p>
                    <p>Hotline - xxxxxxxxx (WhatsApp/Viber)</p>
                    <p>Fax - (011) 2xxxxxx</p>
                    <a href="#"><p>Email - service@soundspace.lk</p></a>
                </div>
            </div>
            <div class="footer_block">
                <div class="footer_block_head">
                    <p><b><u>SOUNDSPACE SHOOL OF MUSIC & ARTS</u></b></p>
                </div>
                <div class="footer_block_text">
                    <p>Hotline - (076) 2927629</p>
                    <a href="#"><p>Email - support@soundspace.edu</p></a>
                </div>
            </div>
            <div style="float: right;">
                <img src="images/cc.png" alt="cc" width="300" height="75" style="margin-top: 20px;">
                <p style=" text-align:right;"><a style=" color:white;" href="<?php echo BASE_URL . '/src/feedback.php' ?>">Feedback Us</a></p>
            </div>
        </div>
        <hr style="border: 1px solid #7c5295; background-color: #7c5295; clear: both;">
        <div>
            <div style="float: left; margin-top: 20px; margin-bottom: 20px;">
                <img src="images/logo2.png" width="300" height="50" >
            </div>
            <div style="float: left; margin-left: 100px; margin-top: 30px;" class="footer">
                &#169;2020 SOUNDSPACE    <a href="#">Site Terms of Service</a>    <a href="#">Privacy</a>    <a href="#">Developers</a>    <a href="#">About SOUNDSPACE</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;Location: Sri Lanka&nbsp;&nbsp;&nbsp;&nbsp;Language: English<br>
                By purchasing this item, you are transacting with Google Payment and agreeing to the Google Payments <a href="#">Terms of Service</a>&nbsp;&nbsp;&nbsp;&nbsp;and <a href="#">Privacy Notice</a>
            </div>
        </div>
        <!-- chat box -->
        <!-- video refference : https://www.youtube.com/watch?v=C3JKS3a4R5Y&t=182s -->
        <div class="chat">
            <section>
                <button class="chat-btn"> 
                    <i class="material-icons"> comment </i>
                </button>
        
                <div class="chat-popup">
                    <div class="badge">1</div>
                    <div class="chat-area">
                    <div class="income-msg">
                        <img src="images/me.jpg" class="avatar" alt="">
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
        <script src="js/chat.js"></script>
    </body>
</html>