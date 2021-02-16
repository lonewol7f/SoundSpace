<?php 
    include("../path.php"); 
    include(ROOT_PATH . "/src/controllers/users.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <title>ADMIN PAGE</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../style/style_home.css">
        <link rel="stylesheet" href="../style/chat.css">
        <link rel="stylesheet" type="text/css" href="../style/admin_page.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/3.0.1/iconfont/material-icons.min.css">
        <link rel="stylesheet" href="../style/chat.css">
        <link rel="stylesheet" href="../style/scroll_bar.css">
		    <script type="text/javascript" src="../js/admin_page.js"></script>


    </head>
    <body  style="background-color:#ECDEF2;">
    <?php include(ROOT_PATH . "/src/includes/header.php"); ?>
        <!-- -------------------------------------------------------------------------------------- -->

        <!-- <navigation bar> -->
  <div id="nav" class="side">
            <a href="javascript:void(0)" class="CloseButton" onclick="closeNav()">&times;</a>
            <img style="width:80px; height:80px; margin-left: 40%; border-radius: 50%;" src="../images/person.jpg">
            <h3 style="margin-left: 37%;"> <?php echo $_SESSION['fname']," " ,$_SESSION['lname']; ?> </h3>

        <div style="display: flex; justify-content: space-around;" class="social-media">
            <a href="#">
                <img src="../images/facebook.png" width="30" height="30"  alt="facebook" style="float: left; margin-right: 20px;">
            </a>
            <a href="#">
                <img src="../images/instagram.png" width="30" height="30"  alt="instagram" style=" float: left; margin-right: 20px;">
            </a>
            <a href="#">
                <img src="../images/twitter.png" width="30" height="30"  alt="twitter" style="float: left; margin-right: 20px;">
            </a>
            <br><br><br><br><br><br><br>

        </div>
        <div class="butgrp">
                <button onclick="myFunction1()" class="button2">Mail Box</button><br><br><br>
                <button onclick="myFunction2()" class= "button2">Table</button><br><br><br>
                <button onclick="myFunction3()" class="button2">Chart</button><br><br><br>
                <button onclick="myFunction4()" class="button2">Feedback</button><br><br><br>
                </div>
        </div>

  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>


  <!-- <navigation bar javascript> -->
  <script>
    
    function openNav() {
  document.getElementById("nav").style.width = "25%";
  }

  function closeNav() {
      document.getElementById("nav").style.width = "0";
  }
  </script> 

  <!-- <shortcuts> -->
  <div style="display: flex; justify-content: space-around;">

  <div style="  width: 200px; height: 150px; background-color:#4682B4;">
  <p class="para1"> 4500 </p>
  <p class="para2"> Sales </p>

  </div>

  <div style="  width: 200px; height: 150px; background-color: #6A5ACD;">
  <p class="para1"> 64% </p>
  <p class="para2"> Rate </p>

  </div>

  <div style="  width: 200px; height: 150px; background-color: #20B2AA;">
  <p class="para1"> 100% </p>
  <p class="para2"> Server States </p>

  </div>

  <div style="  width: 200px; height: 150px; background-color:#CD5C5C;">
  <p class="para1"> Good </p>
  <p class="para2"> Signal States </p>

  </div>

  </div>
  <br><br><br><br>

  <!-- <visitors table> -->
  <div id="visitor" style="width: 800px;" >
    <h2 style="color: #00BFFF; margin-bottom: 4px;"> Visitors </h2>
    <table class="tbl2">
      <thead>
        <tr>
          <th>District</th>
          <th>Visitors</th>
          <th>Status</th>
        </tr>
      </thead>
      <tr>
        <td class="dis">Colombo</td>
        <td>1540</td>
        <td class="good">Good</td>
      </tr>
      <tr>
        <td class="dis">Gampaha</td>
        <td>1102</td>
        <td class="good">Good</td>
      </tr>
      <tr>
        <td class="dis">Kaluthara</td>
        <td>540</td>
        <td class="normal">Normal</td>
      </tr>
      <tr>
        <td class="dis">Galle</td>
        <td>541</td>
        <td class="normal">Normal</td>
      </tr>
    <tr>
        <td class="dis">Mathara</td>
        <td>1100</td>
        <td class="good">Good</td>
      </tr>
    <tr>
        <td class="dis">Hambanthota</td>
        <td>300</td>
        <td class="normal">Normal</td>
      </tr>
    <tr>
        <td class="dis">Kurunegala</td>
        <td>102</td>
        <td class="bad">Bad</td>
      </tr>
    <tr>
        <td class="dis">Kegalle</td>
        <td>65</td>
        <td class="bad">Bad</td>
      </tr>
    <tr>
        <td class="dis">Ratnapura</td>
        <td>45</td>
        <td class="bad">Bad</td>
      </tr>
    <tr>
        <td class="dis">Moneragala</td>
        <td>650</td>
        <td class="normal">Normal</td>
      </tr>
    <tr>
        <td class="dis">Matale</td>
        <td>790</td>
        <td class="normal">Normal</td>
      </tr>
    <tr>
        <td class="dis">Kandy</td>
        <td>1300</td>
        <td class="good">Good</td>
      </tr>
    <tr>
        <td class="dis">Nuwara Eliya</td>
        <td>79</td>
        <td class="bad">Bad</td>
      </tr>
    <tr>
        <td class="dis">Ampara</td>
        <td>92</td>
        <td class="bad">Bad</td>
      </tr>
    <tr>
        <td class="dis">Batticaloa</td>
        <td>863</td>
        <td class="normal">Normal</td>
      </tr>
    <tr>
        <td class="dis">Polonnaruwa</td>
        <td>225</td>
        <td class="normal">Normal</td>
      </tr>
    <tr>
        <td class="dis">Anuradhapura</td>
        <td>1008</td>
        <td class="good">Good</td>
      </tr>
    <tr>
        <td class="dis">Vavuniya</td>
        <td>12</td>
        <td class="bad">Bad</td>
      </tr>
    <tr>
        <td class="dis">Jaffna</td>
        <td>03</td>
        <td class="bad">Bad</td>
      </tr>
    </table>
  </div>

  <!-- <feedback> -->
  <div hidden id="feedback" style="margin-left: 34%;width: 700px;">
                      <h3 style="color: #20B2AA;">Feedback</h3>
                      <table class="tbl2">
                          <tr>
                              <td>user1</td>
                              <td>Comment : -------------------------------------------</td>
                              <td>Rate : 4</td>
                              <td>Good</td>
                              <td>jan 08 12.34</td>
                          </tr>
                          <tr>
                              <td>user2</td>
                              <td>Comment : -------------------------------------------</td>
                              <td>Rate : 2</td>
                              <td>Normal</td>
                              <td>jan 08 12.34</td>
                          </tr>
                          <tr>
                              <td>user3</td>
                              <td>Comment : -------------------------------------------</td>
                              <td>Rate : 3</td>
                              <td>Normal</td>
                              <td>jan 08 12.34</td>
                          </tr>
                          <tr>
                              <td>user4</td>
                              <td>Comment : --------------------------------------------</td>
                              <td>Rate : 2</td>
                              <td>Normal</td>
                              <td>jan 08 12.34</td>
                          </tr>
                          <tr>
                              <td>user5</td>
                              <td>Comment : --------------------------------------------</td>
                              <td>Rate : 1</td>
                              <td>Bad</td>
                              <td>jan 08 12.34</td>
                          </tr>
                          <tr>
                              <td>user6</td>
                              <td>Comment : ---------------------------------------------</td>
                              <td>Rate : 5</td>
                              <td>Good</td>
                              <td>jan 08 12.34</td>
                          </tr>
                          <tr>
                              <td>user7</td>
                              <td>Comment : ---------------------------------------------</td>
                              <td>Rate : 1</td>
                              <td>Bad</td>
                              <td>jan 08 12.34</td>
                          </tr>
                          <tr>
                              <td>user8</td>
                              <td>Comment : ----------------------------------------------</td>
                              <td>Rate : 3</td>
                              <td>Normal</td>
                              <td>jan 08 12.34</td>
                          </tr>
                      </table>
                  </div>

  <!-- <tables> -->
                  <div hidden id="table" style="margin-left: 40%;">
                    <img style="max-width: 600px;" src="../images/table_im.png"><br><br><br>
                    <img style="max-width: 600px;" src="../images/table_im2.png"><br><br><br>
                    <img style="max-width: 600px;" src="../images/table_im3.jpg"><br><br><br>

                  </div>

  <!-- <chart> -->
                  <div hidden id="chart" style="margin-left: 40%;">
                    <img style="max-width: 600px;" src="../images/chart_im.png"><br><br><br>
                    <img style="max-width: 600px;" src="../images/chart_im2.jpg"><br><br><br>
                    <img style="max-width: 600px;" src="../images/chart_im3.jpg"><br><br><br>

                  </div>
  <!-- <chat box> -->
                  <div hidden id="chatbox" style="margin-left: 34%;width: 700px;">
                      <h3 style="color: #20B2AA;">Mail Box</h3>
                      <table class="tbl2">
                          <tr>
                              <td></td>
                              <td>jan 08 12.34</td>
                          </tr>
                          <tr>
                              <td>------------------------------------------------------------</td>
                              <td>jan 08 12.34</td>
                          </tr>
                          <tr>
                              <td>-----------------------------------------------------------------</td>
                              <td>jan 08 12.34</td>
                          </tr>
                          <tr>
                              <td>--------------------------------------------------------------------------</td>
                              <td>jan 08 12.34</td>
                          </tr>
                          <tr>
                              <td>------------------------------------------------------------</td>
                              <td>jan 08 12.34</td>
                          </tr>
                      </table>
                  </div>

  <script>

  // < show-hide javascript>
  function myFunction1()
    {
      if(document.getElementById("chatbox").style.display == "none") 
        { document.getElementById("chatbox").style.display = "block";
          document.getElementById("visitor").style.display = "none";
          document.getElementById("table").style.display = "none";
          document.getElementById("chart").style.display = "none";
          document.getElementById("feedback").style.display = "none"; }
      else 
        { document.getElementById("chatbox").style.display = "none";
          document.getElementById("visitor").style.display = "block";
          document.getElementById("table").style.display = "none";
          document.getElementById("chart").style.display = "none";
          document.getElementById("feedback").style.display = "none"; }
    }

          </script>

  <script>

  function myFunction2()
    {
      if(document.getElementById("table").style.display == "none") 
        { document.getElementById("table").style.display = "block";
          document.getElementById("visitor").style.display = "none";
          document.getElementById("chatbox").style.display = "none";
          document.getElementById("chart").style.display = "none";
          document.getElementById("feedback").style.display = "none"; }
      else 
        { document.getElementById("table").style.display = "none";
          document.getElementById("visitor").style.display = "block";
          document.getElementById("chatbox").style.display = "none";
          document.getElementById("chart").style.display = "none"; 
        document.getElementById("feedback").style.display = "none";}
    }

          </script>


  <script>

  function myFunction3()
    {
      if(document.getElementById("chart").style.display == "none") 
        { document.getElementById("chart").style.display = "block";
          document.getElementById("visitor").style.display = "none";
          document.getElementById("table").style.display = "none";
          document.getElementById("chatbox").style.display = "none";
        document.getElementById("feedback").style.display = "none";}
      else 
        { document.getElementById("chart").style.display = "none";
          document.getElementById("visitor").style.display = "block";
          document.getElementById("table").style.display = "none";
          document.getElementById("chatbox").style.display = "none"
          document.getElementById("feedback").style.display = "none"; }
    }

          </script>

  <script>

  function myFunction4()
    {
      if(document.getElementById("feedback").style.display == "none") 
        { document.getElementById("feedback").style.display = "block";
          document.getElementById("visitor").style.display = "none";
          document.getElementById("table").style.display = "none";
          document.getElementById("chart").style.display = "none";
          document.getElementById("chatbox").style.display = "none" }
      else 
        { document.getElementById("feedback").style.display = "none";
          document.getElementById("visitor").style.display = "block";
          document.getElementById("table").style.display = "none";
          document.getElementById("chart").style.display = "none";
          document.getElementById("chatbox").style.display = "none" }
    }

          </script>

  <br><br><br>


  <!-- change images -->
  <div id="im">
  <button onclick="function1()" class="button">Change Ads</button>
  <br><br>

  <div style=" margin-left: 34%; max-width:500px">
    <img class="Slides" src="../images/img 1.jpg" style="width:100%">
    <img class="Slides" src="../images/img 2.jpg" style="width:100%">
    <img class="Slides" src="../images/img 3.jpg" style="width:100%">
    <img class="Slides" src="../images/img 4.jpg" style="width:100%">
    <img class="Slides" src="../images/img 5.jpg" style="width:100%">
    <img class="Slides" src="../images/img 6.jpg" style="width:100%">
  </div>

  </div>
    
    <div hidden id="imchange" class="imchange">
              
              <form action="/admin_page.php">
      <label for="fpath">Enter path of the Image</label>
      <input type="text" id="fpath" name="Year" placeholder="Enter path..">
      <input type="submit" value="Submit">
      </form>
  </div>


  <!-- <change images javascript> -->
  <script>

  function function1() 
    {
      if(document.getElementById("imchange").style.display == "none") 
        { document.getElementById("imchange").style.display = "block";
          document.getElementById("im").style.display = "none"; }
      else 
        { document.getElementById("imchange").style.display = "none";
          document.getElementById("im").style.display = "block"; }
    }

          </script>


  <!-- <image slide javasript> -->
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