<?php 
    include("../path.php"); 
    include(ROOT_PATH . "/database/db.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <title>RATE</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../style/style_home.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/3.0.1/iconfont/material-icons.min.css">
        <link rel="stylesheet" href="../style/chat.css">
        <link rel="stylesheet" href="../style/scroll_bar.css">
        <link rel="stylesheet" href="../style/rate.css">
        <script type="text/javascript" src="js/rate.js"></script>

    </head>
    <body  style="background-color:#ECDEF2;">
        <?php include(ROOT_PATH . "/src/includes/header.php"); ?>
        <!-- -------------------------------------------------------------------------------------- -->


<div class="frame02" style="max-width:500px; margin-top:10px;">
  <img class="Slides" src="../images/img 1.jpg" style="width:100%">
  <img class="Slides" src="../images/img 2.jpg" style="width:100%">
  <img class="Slides" src="../images/img 3.jpg" style="width:100%">
  <img class="Slides" src="../images/img 4.jpg" style="width:100%">
  <img class="Slides" src="../images/img 5.jpg" style="width:100%">
  <img class="Slides" src="../images/img 6.jpg" style="width:100%">
</div> 

<script>
    
    var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("Slides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 4000);
}

</script>

            <div class="frame0" style="margin-top: 10px;">
            <div class="frame01" >
                <img src="../images/driver.jpg" width="300" height="300" style="float: left; margin-right : 40px;">
                    <p><b><u>DILIVERY RATE</u></b></p>
                    <p>Name : </p>
                    <p>Delivery Time : </p>
                    <p>Route : </p>
                    <p>Vehicle Number : </p>
                    <br>
                    <ul class="rating">
                        <li class="rating-item" date-rate="1"></li>
                        <li class="rating-item" date-rate="2"></li>
                        <li class="rating-item" date-rate="3"></li>
                        <li class="rating-item" date-rate="4"></li>
                        <li class="rating-item" date-rate="5"></li>
                    </ul>
                    </div>
                    <br>    
            <div class="frame01">
                <img src="../images/instrument.jpg" width="300" height="300" style="float: left; margin-right : 40px;">
                    <p><b><u>ITEM RATE</u></b></p>
                    <p>Item Name : </p>
                    <p>Item Code : </p>
                    <p>Catogary : </p>
                    <br>
                    <ul class="rating">
                        <li class="rating-item" date-rate="1"></li>
                        <li class="rating-item" date-rate="2"></li>
                        <li class="rating-item" date-rate="3"></li>
                        <li class="rating-item" date-rate="4"></li>
                        <li class="rating-item" date-rate="5"></li>
                    </ul>
            </div>
            </div>  -->
            <br><br>

   
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
        <!-- -------------------------------------------------------------------------- -->
    </body>
</html>