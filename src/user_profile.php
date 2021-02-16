<?php 
    include("../path.php"); 
    include(ROOT_PATH . "/src/controllers/users.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <title>USER PROFILE</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../style/style_home.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/3.0.1/iconfont/material-icons.min.css">
        <link rel="stylesheet" href="../style/chat.css">
        <link rel="stylesheet" href="../style/scroll_bar.css">
        <link rel="stylesheet" href="../style/user_profile.css">
    </head>
    <body  style="background-color: #ECDEF2;">
        <?php include(ROOT_PATH . "/src/includes/header.php"); ?>
        <!-- -------------------------------------------------------------------------------------- -->


            <!-- <navigation bar> -->
            <div class="frame1" style="margin-top: 10px;">
                <?php if(!empty($_SESSION['pPic'])): ?>
                    <img src="<?php echo BASE_URL . '/images/uploads/' . $_SESSION['pPic'] ?>" width="200" height="200" style="margin-left: 108px ; margin-top: 50px;">
                <?php else: ?>
                    <img src="../images/unset_profile.png" width="200" height="200" style="margin-left: 108px ; margin-top: 50px;">
                <?php endif; ?>
                <div class="butgrp">
                <button onclick="myFunction1()" class="button2">Notification</button><br><br><br>
                <button onclick="myFunction2()" class= "button2">Saved Item</button><br><br><br>
                <button onclick="myFunction3()" class="button2">Order History</button><br><br><br>
                <button onclick="myFunction4()" class="button2">Chalender</button><br><br><br>
                </div>
                
            </div>

           

           <!--  <details> -->
            <div style="margin-left:25%; padding:1px 16px; height:750px; margin-top: 50px">

                <div id="Detail" style="margin-left: 200px;">
                    
                    <form class="details" action="user_profile.php" method="POST" enctype="multipart/form-data" style="border-radius:10px;">
                        <br><br>
                        <label for="fname" style="margin-left: 5%;">First Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </label>
                        <input type="text" style="width: 70%;border-radius:5px;border:none;padding:5px 0px;" name="fname" placeholder="<?php echo "&nbsp;&nbsp;&nbsp;&nbsp;", $_SESSION['fname']; ?>"><br><br><br>
                        <label for="lname" style="margin-left: 5%;">Last Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </label>
                        <input type="text" style="width: 70%;border-radius:5px;border:none;padding:5px 0px;" name="lname" placeholder="<?php echo "&nbsp;&nbsp;&nbsp;&nbsp;", $_SESSION['lname']; ?>"><br><br><br>
                        <label for="email" style="margin-left: 5%;">Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </label>
                        <?php echo "&nbsp;&nbsp;&nbsp;&nbsp;", $_SESSION['email']; ?><br><br><br>
                        <label for="address" style="margin-left: 5%;">Address&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </label>
                        <input type="text" style="width: 70%;border-radius:5px;border:none;padding:5px 0px;" name="uAddress" placeholder="<?php echo "&nbsp;&nbsp;&nbsp;&nbsp;", $_SESSION['uAddress']; ?>"><br><br><br>
                        <label for="pPic" style="margin-left: 5%;">Profile Picture : </label>
                        <input type="file" name="pPic" accept="image/*"><br><br><br>
                        <button type="submit" name="cprofile-btn" class="button" style="margin-bottom: 20px;">Change Profile</button>
                    </form>

                    <form class="delete" action="user_profile.php" method="POST">
                        <br>
                        <label for="email" style="margin-left: 5%;">Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </label>
                        <input type="email" style="width: 70%;border-radius:5px;border:none;padding:5px 0px;" name="email" placeholder="&nbsp;&nbsp;Enter your Email here" required><br><br>
                        <label for="password" style="margin-left: 5%;">Password&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </label>
                        <input type="password" style="width: 70%;border-radius:5px;border:none;padding:5px 0px;" name="password" placeholder="&nbsp;&nbsp;Enter your password for confirmation" required><br><br>
                        <button type="submit" name="dprofile-btn" class="dbutton" style="margin-bottom: 15px;">Delete Profile</button>
                    </form>
                    

                </div>

           

            <!-- <notification> -->
            <div hidden id="noti" style="margin-left: 150px;width: 700px;">
                    <h3 style="color: #20B2AA;">Notification</h3>
                    <table class="tbl">
                        <tr>
                            <td>New item</td>
                            <td>Thin body acoustic electric guitar beginner guitar mahogany material, free strings</td>
                            <td>jan 08 12.34</td>
                        </tr>
                        <tr>
                            <td>New item</td>
                            <td>Thin body acoustic electric guitar beginner guitar mahogany material, with free bag, free strings</td>
                            <td>jan 08 12.34</td>
                        </tr>
                        <tr>
                            <td>Item Sold</td>
                            <td>dsf</td>
                            <td>jan 08 12.34</td>
                        </tr>
                        <tr>
                            <td>New item</td>
                            <td>Thin body acoustic electric guitar beginner guitar, free strings</td>
                            <td>jan 08 12.34</td>
                        </tr>
                        <tr>
                            <td>New item</td>
                            <td>Thin body acoustic electric guitar beginner guitar mahogany material free strings</td>
                            <td>jan 08 12.34</td>
                        </tr>
                    </table>
            </div>


               
                <!-- <saved items> -->
                <div hidden id="sav" style="margin-left: 150px;width: 700px;">
                    <h3 style="color: #20B2AA;">Saved Items</h3>
                    <table class="tbl">
                        <tr>
                            <td>Saved Item : China firehawk Electric Guitar IB z7</td>
                            <td>jan 08 12.34</td>
                        </tr>
                        <tr>
                            <td>Saved Item : Best Price Top Quality Custom Black Color Electric Guitar</td>
                            <td>jan 08 12.34</td>
                        </tr>
                        <tr>
                            <td>Saved Item : 1pcs removable PVC Piano Sticker 54/61</td>
                            <td>jan 08 12.34</td>
                        </tr>
                        <tr>
                            <td>Saved Item : Transparent Piano Keyboard Sticker 54/61</td>
                            <td>jan 08 12.34</td>
                        </tr>
                        <tr>
                            <td>Saved Item : sa</td>
                            <td>jan 08 12.34</td>
                        </tr>
                    </table>

                </div>

               

                <!-- <history> -->
                <div hidden id="his" style="margin-left: 150px;width: 700px;">
                    <h3 style="color: #20B2AA;">Order History</h3>
                    <table class="tbl">
                        <tr>
                            <td>China firehawk Electric Guitar IB z7</td>
                            <td>24000/=</td>
                            <td>jan 08 12.34</td>
                        </tr>
                        <tr>
                            <td>Best Price Top Quality Custom Black Color Electric Guitar</td>
                            <td>31000/=</td>
                            <td>jan 08 12.34</td>
                        </tr>
                        <tr>
                            <td>1pcs removable PVC Piano Sticker 54/61</td>
                            <td>56000/=</td>
                            <td>jan 08 12.34</td>
                        </tr>
                        <tr>
                            <td>Transparent Piano Keyboard Sticker 54/61</td>
                            <td>200/=</td>
                            <td>jan 08 12.34</td>
                        </tr>
                        <tr>
                            <td>Best Price Top Quality</td>
                            <td>14500/=</td>
                            <td>jan 08 12.34</td>
                        </tr>
                        <tr>
                            <td>Electric Guitar</td>
                            <td>5000/=</td>
                            <td>jan 08 12.34</td>
                        </tr>
                        <tr>
                            <td>Transparent Piano Keyboard</td>
                            <td>1450/=</td>
                            <td>jan 08 12.34</td>
                        </tr>
                        <tr>
                            <td>sa</td>
                            <td>475000/=</td>
                            <td>jan 08 12.34</td>
                        </tr>
                    </table>

                

                <!-- <calender> -->
                </div>

                <div hidden id="date">
               <div id="calender">
        <p id="calender-day">
        </p>
        <p id="calender-date">
        </p>
        <p id="calender-month-year">
        </p><br>
        <input style="margin-left: 45px;" type="text" id="fname" name="fname"><br><br>
        <input style="margin-left: 100px;"type="submit" value="save">
        </div><br><br><br>
        
        <div id="dat" class="dat">
            
            <form action="/user_profile.php">
    <label for="fyear">Year</label>
    <input type="text" id="fyear" name="Year" placeholder="Year..">

    <label for="fmonth">Month</label>
    <select id="fmonth" name="month">
      <option value="January">January</option>
      <option value="February">February</option>
      <option value="March">March</option>
      <option value="April">April</option>
      <option value="May">May</option>
      <option value="June">June</option>
      <option value="July">July</option>
      <option value="August">August</option>
      <option value="September">September</option>
      <option value="October">October</option>
      <option value="November">November</option>
      <option value="December">December</option>
    </select>

    <label for="fday">Date</label>
    <select id="fday" name="day">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
      <option value="10">10</option>
      <option value="11">11</option>
      <option value="12">12</option>
      <option value="13">13</option>
      <option value="14">14</option>
      <option value="15">15</option>
      <option value="16">16</option>
      <option value="17">17</option>
      <option value="18">18</option>
      <option value="19">19</option>
      <option value="20">20</option>
      <option value="21">21</option>
      <option value="22">22</option>
      <option value="23">23</option>
      <option value="24">24</option>
      <option value="25">25</option>
      <option value="26">26</option>
      <option value="27">27</option>
      <option value="28">28</option>
      <option value="29">29</option>
      <option value="30">30</option>
      <option value="31">31</option>
    </select>
  
    <input type="submit" value="Submit">

  </form>

        </div>
    </div>

       
        <!-- <calender javascript> -->
        <script>
            
            function calender(){
    var day=['Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday'];
    var month= ["January","February","March","April","May","June","July",
            "August","September","October","November","December"];
    var d=new Date();
    setText('calender-day',day[d.getDay()]);
    setText('calender-date',d.getDate());
    setText('calender-month-year',month[d.getMonth()]+' '+(1900+d.getYear()));
};
function setText(id, val){
    if(val<10){
        val='0'+val;
    }
    document.getElementById(id).innerHTML=val;  
};
// call calender()
window.onload=calender;

        </script>


       
        <!-- <show hide javascript> -->
        <script>
            
function myFunction1() 
  {
    if(document.getElementById("noti").style.display == "none") 
      { document.getElementById("noti").style.display = "block";
        document.getElementById("Detail").style.display = "none";
        document.getElementById("sav").style.display = "none";
        document.getElementById("his").style.display = "none";
        document.getElementById("date").style.display = "none"; }
    else 
      { document.getElementById("noti").style.display = "none";
        document.getElementById("Detail").style.display = "block";
        document.getElementById("sav").style.display = "none";
        document.getElementById("his").style.display = "none";
        document.getElementById("date").style.display = "none"; }
  }

    
            
function myFunction2() 
  {
    if(document.getElementById("sav").style.display == "none") 
      { document.getElementById("sav").style.display = "block";
        document.getElementById("Detail").style.display = "none";
        document.getElementById("noti").style.display = "none";
        document.getElementById("his").style.display = "none";
        document.getElementById("date").style.display = "none"; }
    else 
      { document.getElementById("sav").style.display = "none";
        document.getElementById("Detail").style.display = "block";
        document.getElementById("noti").style.display = "none";
        document.getElementById("his").style.display = "none";
        document.getElementById("date").style.display = "none"; }
  }

        

        function myFunction3() 
  {
    if(document.getElementById("his").style.display == "none") 
      { document.getElementById("his").style.display = "block";
        document.getElementById("Detail").style.display = "none";
        document.getElementById("sav").style.display = "none";
        document.getElementById("noti").style.display = "none";
        document.getElementById("date").style.display = "none";  }
    else 
      { document.getElementById("his").style.display = "none";
        document.getElementById("Detail").style.display = "block";
        document.getElementById("sav").style.display = "none";
        document.getElementById("noti").style.display = "none";
        document.getElementById("date").style.display = "none";  }
  }

        
            
function myFunction4() 
  {
    if(document.getElementById("date").style.display == "none") 
      { document.getElementById("date").style.display = "block";
        document.getElementById("Detail").style.display = "none";
        document.getElementById("sav").style.display = "none";
        document.getElementById("his").style.display = "none";
        document.getElementById("noti").style.display = "none"; }
    else 
      { document.getElementById("date").style.display = "none";
        document.getElementById("Detail").style.display = "block";
        document.getElementById("sav").style.display = "none";
        document.getElementById("his").style.display = "none";
        document.getElementById("noti").style.display = "none"; }
  }

        </script>

    
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