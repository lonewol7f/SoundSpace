<?php 
    include("../path.php"); 
    include(ROOT_PATH . "/src/controllers/users.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Payment</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../style/style_home.css">
        <link rel="stylesheet" href="../style/payment.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/3.0.1/iconfont/material-icons.min.css">
        <link rel="stylesheet" href="../style/chat.css">
        <link rel="stylesheet" href="../style/scroll_bar.css">
        <script type="text/javascript" src="../js/payment.js"></script>
    </head>
    <body  style="background-color: #ECDEF2;">
        <?php include(ROOT_PATH . "/src/includes/header.php"); ?>
        <?php include(ROOT_PATH . "/src/includes/messages.php"); ?>
       
        <div style="border: 3px solid black; width: 47%;height: 800px; margin-top: 30px;border-color: solid black; margin-left: 30px; float: left;margin-bottom: 20px;">
           <form action="payment.php" method="POST">
           <?php include(ROOT_PATH . "/src/helpers/form_errors.php") ?>
            <div style="border: 2px solid black; width: 90%;height: 420px;margin-top: 37px; margin-left: 34px;border-color:solid black "> 
              <h3 style="margin-left: 15px;font-family: sans-serif;">Card Details:- </h3> 
             
                
                    <h5 style="margin-left: 35px; margin-bottom: 1px;font-family: sans-serif;"> Name on Card </h5><br>
                    <input style="margin-left: 70px; width: 76%;height: 25px" type="text" name="name">
                    <h5 style="margin-left: 35px; margin-bottom: 1px; font-family: sans-serif;"> Card No </h5><br>
                    <input style="margin-left: 70px; width: 76%; height: 25px" type="text" name="card">
                    <h5 style="margin-left: 35px; margin-bottom: 1px;width: 200px;margin-right:1%;font-family: sans-serif;"> Expiration Date </h5><br>
                    <input style="margin-left: 70px; width: 40%;height: 25px" type="Date" name="date">
                    <h5 style="margin-left: 35px; margin-bottom: 1px; font-family: sans-serif;"> CVV </h5><br>
                    <input style="margin-left: 70px; width: 40%;height: 25px" type="text" name="cvv">
                 
               




            </div> 

            <div style="border: 2px solid black; width: 90%;height: 250px;margin-top: 20px; margin-left: 34px;border-color:solid black "> <h3 style="margin-left: 15px;font-family: sans-serif;">Address:-</h3> 
            <textarea  id="payment" name="address" rows="7" cols="40" style="width: 80%; margin-left: 60px;  ">
            </textarea>
            </div>
            

                <center>
                <button style="margin-top: 20px;" type="submit" name="pay-btn" class="butt1">Pay Now</button>
                </center><br>
            </form> 
        </div> 


        <div style="border: 2px solid black; width: 25%; height: 400px;margin-top: 100px;margin-left: 30px; float: right; margin-right: 180px;"> 
            <div id="img" >
                    <div>
                         <img src="<?php echo BASE_URL . '/images/guitars/' . $_SESSION['photo']; ?>" width="150" height="150" alt="bass guitar" style="margin-top: 10px; padding: 2%; margin-left: 108px;">
                     
                     </div>
                    <div style="float: left; width: 100%;height: 5px; margin-left: 20px; font-family: sans-serif;">
                       <p>Item Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:- <?php echo $_SESSION['iName']; ?></p>
                       <p >Discription&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:- <?php echo $_SESSION['iDescription']; ?><br>
                       <p>Price&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:- <?php echo $_SESSION['price']; ?></p><br>
                    </div>
           </div>

           <div id="img2" style="display: none;">
                    <div>
                        <a href="#" onclick="slide3()">
                             <img src="../images/ff.png" style="float: left; width:30px;height: 40px; margin-top: 60px; margin-left: 10px;">
                        </a>
                         <img src="../images/violin.png" width="150" height="150" alt="bass guitar" style="margin-top: 10px; padding: 2%; margin-left: 40px; margin-left: 70px;">
                         <a href="#" onclick="slide4()"          >
                              <img src="../images/fff.png" style="float: right;width:30px;height: 40px; margin-top: 60px; margin-right: 10px;">
                         </a>
                     
                     </div>
                    <div style="float: left; width: 100%;height: 5px; margin-left: 20px;font-family: sans-serif; ">
                       <p>Item No&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :- #V002</p>
                       <p>Colour &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :- brown</p>
                       <p >Discription&nbsp;&nbsp;&nbsp; :- Brand:Yamaha</p>
                       <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Body material:Birch Wood</p>
                       <p>Price &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:-25000/=</p><br>
                    </div>
           </div>
        </div> 




        <div style="float: left;width:43%;height: 260px;margin-top: 10px;margin-left: 80px;">
            <div style="float: left;width:48%;height: 120px;margin-top: 0px;margin-left: 0px;">
              <img src="../images/ad1.jpg" width="100%" height="100%" >
            </div>

            <div style="float: left;width:48%;height: 120px;margin-top: 0px;margin-left: 16px;">
            <img src="../images/ad2.jpg"  width="100%"  height="100%" >
            </div>

            <div style="float: left;width:98.5%;height: 120px;margin-top: 13px;">
              <img src="../images/ad3.jpg" width="100%"  height="100%" >  
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

    




























        






















     