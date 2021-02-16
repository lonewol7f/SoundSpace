<?php
    include("../path.php");
    include(ROOT_PATH . "/src/controllers/users.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drums</title>
    <link rel="stylesheet" href="../style/style_home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/3.0.1/iconfont/material-icons.min.css">
    <link rel="stylesheet" href="../style/chat.css">
    <link rel="stylesheet" href="../style/scroll_bar.css">
</head>
<body style="background-color: #ECDEF2;">
    <?php include(ROOT_PATH . "/src/includes/header.php"); ?>

    <div style="width: 100%;text-align:center;margin-top:40px;">
        <div class="cato_head" style="margin-left: 5%;"><button>Drum Sets</button></div>
            <div class="cato_mid">
                <div class="cato">
                    <img  src="../images/drums/dd1.jpg">
                    <img  src="../images/drums/dd2.jpg">
                    <img  src="../images/drums/dd3.jpg">
                    <img  src="../images/drums/dd4.png">
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
        <div class="cato_head" style="margin-left: 5%;"><button>Cymbals</button></div>
            <div class="cato_mid">
                <div class="cato">
                    <img  src="../images/drums/dc1.jpg">
                    <img  src="../images/drums/dc2.png">
                    <img  src="../images/drums/dc3.jpg">
                    <img  src="../images/drums/dc4.jpg">
                </div>
                <br><br>
                <div style="display: flex; justify-content:space-around;margin-top:-15px">
                    <span>18XSR</span>
                    <span>XSR1600B</span>
                    <span>XSR1402</span>
                    <span>XSR1607B</span>
                </div><br>
                <div style="display: flex; justify-content:space-around;margin-top:-15px">
                    <span>Rs.107500/=</span>
                    <span>Rs.33500/=&nbsp;</span>
                    <span>Rs.45500/=&nbsp;</span>
                    <span>Rs.30500/=&nbsp;</span>
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
        <div class="cato_head" style="margin-left: 5%;"><button>Djembe</button></div>
            <div class="cato_mid">
                <div class="cato">
                    <img  src="../images/drums/dj1.jpg">
                    <img  src="../images/drums/dj2.jpg">
                    <img  src="../images/drums/dj3.jpg">
                    <img  src="../images/drums/dj4.jpg">
                </div>
                <br><br>
                <div style="display: flex; justify-content:space-around;margin-top:-15px">
                    <span>121/2" Head</span>
                    <span>LP ASPIRE</span>
                    <span>Tuned 12.5</span>
                    <span>Richie Gajate</span>
                </div><br>
                <div style="display: flex; justify-content:space-around;margin-top:-15px">
                    <span>Rs.33250/=</span>
                    <span>Rs.40750/=</span>
                    <span>Rs.46750/=</span>
                    <span>Rs.88250/=</span>
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