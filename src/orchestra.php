<?php
    include("../path.php");
    include(ROOT_PATH . "/src/controllers/users.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orchestra</title>
    <link rel="stylesheet" href="../style/style_home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/3.0.1/iconfont/material-icons.min.css">
    <link rel="stylesheet" href="../style/chat.css">
    <link rel="stylesheet" href="../style/scroll_bar.css">
</head>
<body style="background-color: #ECDEF2;">
    <?php include(ROOT_PATH . "/src/includes/header.php"); ?>

    <div style="width: 100%;text-align:center;margin-top:40px;">
        <div class="cato_head" style="margin-left: 5%;"><button>Band Orchestra</button></div>
            <div class="cato_mid">
                <div class="cato">
                    <img  src="../images/band/bo1.jpg">
                    <img  src="../images/band/bo2.jpg">
                    <img  src="../images/band/bo3.jpg">
                    <img  src="../images/band/bo4.jpg">
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