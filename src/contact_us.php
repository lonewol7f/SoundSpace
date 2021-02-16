<?php 
    $page = 'contact';
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
        <link rel="stylesheet" href="../style/contact_us.css">
    </head>
    <body style="background-color: white;">
        <?php include(ROOT_PATH . "/src/includes/header.php"); ?>
        <?php include(ROOT_PATH . "/src/includes/messages.php"); ?>
        <!-- -------------------------------------------------------------------------------------- -->
        <div style="background-image: url(../images/ad1.jpg);">
            <section class="contact">
                <!-- <div class="content">
                    <h2>Contact Us</h2>
                    <p>message ekak wage deyak</p>
                </div> -->
                <div class="container">
                    <div class="contactInfo">
                        <div class="box">
                            <div class="icon"><img src="../images/address.png" width="50" height="50"></div>
                            <div class="text">
                                <h3>Address</h3>
                                <p>221/B,<br> Bakers St,<br>Colombo</p>
                            </div>
                        </div>
                        <div class="box">
                            <div class="icon"><img src="../images/call.png" width="50" height="50"></div>
                            <div class="text">
                                <h3>Phone</h3>
                                <p>Sales & Marketing&nbsp;&nbsp;&nbsp;&nbsp;: (011) 2xxxxxx<br>Service Center&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: (011) 4xxxxxx<br>SoundSpace School&nbsp;&nbsp;: (076) 2927629</p>
                            </div>
                        </div>
                        <div class="box">
                            <div class="icon"><img src="../images/email.png" width="50" height="50"></div>
                            <div class="text">
                                <h3>Email</h3>
                                <p>Sales & Marketing&nbsp;&nbsp;&nbsp;&nbsp;: info@soundspace.lk<br>Service Center&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: service@soundspace.lk<br>SoundSpace School&nbsp;&nbsp;: support@soundspace.edu</p>
                            </div>
                        </div>
                    </div>
                    <div class="contactForm">
                        <form action="contact_us.php" method="POST">
                            <h2>Contact Us</h2>
                            <?php include(ROOT_PATH . "/src/helpers/form_errors.php") ?>
                            <div class="inputBox">
                                <input type="text" name="name">
                                <span>Full Name</span>
                            </div>
                            <div class="inputBox">
                                <input type="email" name="email">
                                <span>E-mail</span>
                            </div>
                            <div class="inputBox">
                                <textarea name="message"></textarea>
                                <span>Enter Your Message Here</span>
                            </div>
                            <div class="inputBox">
                                <input type="submit" name="contactUs-btn" value="Send">
                            </div>
                        </form>
                    </div>
                </div>
            </section>
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