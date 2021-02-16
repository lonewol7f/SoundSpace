<?php
    include("../path.php");
    include(ROOT_PATH . "/src/controllers/users.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keyboards</title>
    <link rel="stylesheet" href="../style/style_home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/3.0.1/iconfont/material-icons.min.css">
    <link rel="stylesheet" href="../style/chat.css">
    <link rel="stylesheet" href="../style/scroll_bar.css">
</head>
<body style="background-color: #ECDEF2;">
    <?php include(ROOT_PATH . "/src/includes/header.php"); ?>

    <div style="width: 100%;text-align:center;margin-top:40px;">
        <div class="cato_head" style="margin-left: 5%;"><button>Digital Keyboards</button></div>
            <div class="cato_mid">
                <div class="cato">
                    <img  src="../images/keyboards/kd1.png">
                    <img  src="../images/keyboards/kd2.jpg">
                    <img  src="../images/keyboards/kd3.jpg">
                    <img  src="../images/keyboards/kd4.jpg">
                </div>
                <br><br>
                <div style="display: flex; justify-content:space-around;margin-top:-15px">
                    <span>PA-700</span>
                    <span>PSRE463</span>
                    <span>PSRF51</span>
                    <span>PSREW410</span>
                </div><br>
                <div style="display: flex; justify-content:space-around;margin-top:-15px">
                    <span>Rs.228000/=</span>
                    <span>Rs.64500/=</span>
                    <span>Rs.24500/=</span>
                    <span>Rs.79000/=</span>
                </div>
                <!-- If user had loged already  he/she can redirect catogary page if it is not he/she will redirect to login page -->
                <div class="cato_foot" style="display: flex; justify-content:space-around;margin-top:5px">
                    <button>Buy</button>
                    <button>Buy</button>
                    <button>Buy</button>
                    <button>Buy</button>
                </div>
            </div>
        </div>
    </div>

    <div style="width: 100%;text-align:center;margin-top:40px;">
        <div class="cato_head" style="margin-left: 5%;"><button>Synthesizers</button></div>
            <div class="cato_mid">
                <div class="cato">
                    <img  src="../images/keyboards/ks1.jpg">
                    <img  src="../images/keyboards/ks2.jpg">
                    <img  src="../images/keyboards/ks3.jpg">
                    <img  src="../images/keyboards/ks4.jpg">
                </div>
                <br><br>
                <div style="display: flex; justify-content:space-around;margin-top:-15px">
                    <span>MONTAGE 7</span>
                    <span>MONTAGE 6</span>
                    <span>MOXF8</span>
                    <span>SHS-500</span>
                </div><br>
                <div style="display: flex; justify-content:space-around;margin-top:-15px">
                    <span>Rs.777000/=</span>
                    <span>Rs.717000/=</span>
                    <span>Rs.369000/=</span>
                    <span>Rs.53000/=&nbsp;</span>
                </div>
                <!-- If user had loged already  he/she can redirect catogary page if it is not he/she will redirect to login page -->
                <div class="cato_foot" style="display: flex; justify-content:space-around;margin-top:5px">
                    <button>Buy</button>
                    <button>Buy</button>
                    <button>Buy</button>
                    <button>Buy</button>
                </div>
            </div>
        </div>
    </div>

    <div style="width: 100%;text-align:center;margin-top:40px;">
        <div class="cato_head" style="margin-left: 5%;"><button>Digital Pinaos</button></div>
            <div class="cato_mid">
                <div class="cato">
                    <img  src="../images/keyboards/kp1.jpg">
                    <img  src="../images/keyboards/kp2.jpg">
                    <img  src="../images/keyboards/kp3.jpg">
                    <img  src="../images/keyboards/kp4.jpg">
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
                <!-- If user had loged already  he/she can redirect catogary page if it is not he/she will redirect to login page -->
                <div class="cato_foot" style="display: flex; justify-content:space-around;margin-top:5px">
                    <button>Buy</button>
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