<?php
    include("../path.php");
    include(ROOT_PATH . "/src/controllers/users.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guitars</title>
    <link rel="stylesheet" href="../style/style_home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/3.0.1/iconfont/material-icons.min.css">
    <link rel="stylesheet" href="../style/chat.css">
    <link rel="stylesheet" href="../style/scroll_bar.css">
</head>
<body style="background-color: #ECDEF2;">
    <?php include(ROOT_PATH . "/src/includes/header.php"); ?>

    <div style="width: 100%;text-align:center;margin-top:40px;">
        <div class="cato_head" style="margin-left: 5%;"><button>Acoustic Guitars</button></div>
            <div class="cato_mid">
                <div class="cato">
                    <img  src="../images/guitars/ag1.jpg">
                    <img  src="../images/guitars/ag2.jpg">
                    <img  src="../images/guitars/ag3.jpg">
                    <img  src="../images/guitars/ag4.jpg">
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
                <div class="cato_foot" style="display: flex; justify-content:space-around;margin-top:5px">
                    <form action="guitars.php" method="POST"><button type="submit" name="buy1-btn">Buy</button></form>
                    <form action="guitars.php" method="POST"><button type="submit" name="buy2-btn">Buy</button></form>
                    <form action="guitars.php" method="POST"><button type="submit" name="buy3-btn">Buy</button></form>
                    <form action="guitars.php" method="POST"><button type="submit" name="buy4-btn">Buy</button></form>
                </div>

                <div class="cato" style="margin-top: 10px;">
                    <img  src="../images/guitars/ag5.jpg">
                    <img  src="../images/guitars/ag6.jpg">
                    <img  src="../images/guitars/ag7.jpg">
                </div>
                <br><br>
                <div style="display: flex; justify-content:space-around;margin-top:-15px">
                    <span>GJ72CE&nbsp;NAT</span>
                    <span>CD-60SCE&nbsp;&nbsp;</span>
                    <span>FG-TA&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                </div><br>
                <div style="display: flex; justify-content:space-around;margin-top:-15px">
                    <span>Rs.23000/=&nbsp;</span>
                    <span>Rs.62000/=&nbsp;</span>
                    <span>Rs.116000/=</span>
                </div>
                <!-- If user had loged already  he/she can redirect catogary page if it is not he/she will redirect to login page -->
                <div class="cato_foot" style="display: flex; justify-content:space-around;margin-top:5px">
                    <button>Buy</button>
                    <button>Buy</button>
                    <button>Buy</button>
                </div>
            </div>
        </div>
    </div>

    <div style="width: 100%;text-align:center;margin-top:40px;">
        <div class="cato_head" style="margin-left: 5%;"><button>Electric Guitars</button></div>
            <div class="cato_mid">
                <div class="cato">
                    <img  src="../images/guitars/eg1.jpg">
                    <img  src="../images/guitars/eg2.jpg">
                    <img  src="../images/guitars/eg3.jpg">
                    <img  src="../images/guitars/eg4.jpg">
                </div>
                <br><br>
                <div style="display: flex; justify-content:space-around;margin-top:-15px">
                    <span>Fender FA2356</span>
                    <span>PAC 611VFM</span>
                    <span>STG-003SPL</span>
                    <span>PAC 012</span>
                </div><br>
                <div style="display: flex; justify-content:space-around;margin-top:-15px">
                    <span>Rs.62000/=</span>
                    <span>Rs.169500/=</span>
                    <span>Rs.26000/=</span>
                    <span>Rs.43250/=</span>
                </div>
                <!-- If user had loged already  he/she can redirect catogary page if it is not he/she will redirect to login page -->
                <div class="cato_foot" style="display: flex; justify-content:space-around;margin-top:5px">
                    <button>Buy</button>
                    <button>Buy</button>
                    <button>Buy</button>
                    <button>Buy</button>
                </div>

                <div class="cato" style="margin-top: 10px;">
                    <img  src="../images/guitars/eg5.jpg">
                    <img  src="../images/guitars/eg6.jpg">
                    <img  src="../images/guitars/eg7.jpg">
                </div>
                <br><br>
                <div style="display: flex; justify-content:space-around;margin-top:-15px">
                    <span>ERG 121</span>
                    <span>STRAT MN 3TS</span>
                    <span>STRAT MN BLK</span>
                </div><br>
                <div style="display: flex; justify-content:space-around;margin-top:-15px">
                    <span>Rs.70500/=</span>
                    <span>Rs.176000/=</span>
                    <span>Rs.176000/=</span>
                </div>
                <!-- If user had loged already  he/she can redirect catogary page if it is not he/she will redirect to login page -->
                <div class="cato_foot" style="display: flex; justify-content:space-around;margin-top:5px">
                    <button>Buy</button>
                    <button>Buy</button>
                    <button>Buy</button>
                </div>
            </div>
        </div>
    </div>

    <div style="width: 100%;text-align:center;margin-top:40px;">
        <div class="cato_head" style="margin-left: 5%;"><button>Bass Guitars</button></div>
            <div class="cato_mid">
                <div class="cato">
                    <img  src="../images/guitars/bg1.jpg">
                    <img  src="../images/guitars/bg2.jpg">
                    <img  src="../images/guitars/bg3.jpg">
                    <img  src="../images/guitars/bg4.jpg">
                </div>
                <br><br>
                <div style="display: flex; justify-content:space-around;margin-top:-15px">
                    <span>TRBX 304</span>
                    <span>TRBX 605</span>
                    <span>TRBX 100</span>
                    <span>TRBX 505</span>
                </div><br>
                <div style="display: flex; justify-content:space-around;margin-top:-15px">
                    <span>&nbsp;82000/=</span>
                    <span>Rs.147500/=</span>
                    <span>Rs.260500/=</span>
                    <span>Rs.122500/=</span>
                </div>
                <!-- If user had loged already  he/she can redirect catogary page if it is not he/she will redirect to login page -->
                <div class="cato_foot" style="display: flex; justify-content:space-around;margin-top:5px">
                    <button>Buy</button>
                    <button>Buy</button>
                    <button>Buy</button>
                    <button>Buy</button>
                </div>

                <div class="cato" style="margin-top: 10px;">
                    <img  src="../images/guitars/bg5.jpg">
                    <img  src="../images/guitars/bg6.jpg">
                    <img  src="../images/guitars/bg7.jpg">
                </div>
                <br><br>
                <div style="display: flex; justify-content:space-around;margin-top:-15px">
                    <span>TRBX 305</span>
                    <span>TRBX 504</span>
                    <span>TRBX 174</span>
                </div><br>
                <div style="display: flex; justify-content:space-around;margin-top:-15px">
                    <span>&nbsp;Rs.89000/=</span>
                    <span>Rs.112000/=</span>
                    <span>&nbsp;Rs.44500/=</span>
                </div>
                <!-- If user had loged already  he/she can redirect catogary page if it is not he/she will redirect to login page -->
                <div class="cato_foot" style="display: flex; justify-content:space-around;margin-top:5px">
                    <button>Buy</button>
                    <button>Buy</button>
                    <button>Buy</button>
                </div>
            </div>
        </div>
    </div>

    <?php include(ROOT_PATH . "/src/includes/footer.php"); ?>
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