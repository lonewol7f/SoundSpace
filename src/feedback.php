<?php 
    include("../path.php"); 
    include(ROOT_PATH . "/src/controllers/users.php");
?>

<!DOCTYPE html>
<html>
    <head>
    	<title>Feedback</title>
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../style/style_home.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/3.0.1/iconfont/material-icons.min.css">
        <link rel="stylesheet" href="../style/chat.css">
        <link rel="stylesheet" href="../style/scroll_bar.css">
        <link rel="stylesheet" href="../style/feedback.css">

    </head>
     <body  style="background-color: #ECDEF2;">
        <?php include(ROOT_PATH . "/src/includes/header.php"); ?>
        <?php include(ROOT_PATH . "/src/includes/messages.php"); ?>
                
                 <p><b>FEEDBACK OF OUR SERVICE</b></p>
                 <p style="font-family: sans-serif;">Please send us details about the incident you would like to report.Our Feedback Center will analyze your feedback and take the appropriate<br> measures in oder that the reported situation will not occur at any time in the future.</p>
                 <p style="margin-left: 380px; color: #0857DC ;"><b>Feedback Details*</b></p>
                 
                 <form action="feedback.php" name="feedback" method="POST" >
                    <?php include(ROOT_PATH . "/src/helpers/form_errors.php") ?>
                    <input type="email" name="fEmail" placeholder="Enter your email here" style="width: 50%; margin-left:380px; margin-right: 200px;padding-top: 5px; padding-bottom: 5px;margin-top:10px; margin-bottom:10px " >
                    <textarea name="message" rows="15" cols="70"  style="width: 50%; margin-left:380px; margin-right: 200px;padding-top: 20px; padding-bottom: 20px;" >
               
                    </textarea>
                    <center>
                        <button type="submit" class="butt" name="feedback-btn">Submit</button><br>
                    </center>
            </form>
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

                  
                 


           


















   




      

      