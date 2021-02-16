<?php 
    include("../path.php"); 
    include(ROOT_PATH . "/src/controllers/users.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Videos</title>
    </head>
    <body>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="../style/style_home.css">
            <link rel="stylesheet" href="../style/about_us.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/3.0.1/iconfont/material-icons.min.css">
            <link rel="stylesheet" href="../style/chat.css">
            <link rel="stylesheet" href="../style/scroll_bar.css">
    </head>
    <body  style="background-color: white;">
        <header style="background-image: url(../images/header1.jpg);">
            
                <a href="../index.php">
                    <img src="../images/logo1.png" alt="logo" class="logo" style="width: 200px; height: 200px; float: left;">
                </a>
                
                <hr style="border: 1px solid black; background-color: black; clear: both;">

                <div class="menu">
                    <a href="studentHome.php">Home</a>
                    <a href="courses.php" >Courses</a>
                    <a href="stdVideos.php" class="active">Videos</a>
                    <a href="<?php echo BASE_URL . '/src/eBooks.php' ?>">E-Books</a>
                    
                    <div class="search-container">
                        <form>
                        <input type="text" placeholder="Search.." name="search">
                        <button type="submit">🔍</button>
                        </form>
                    </div>
                    <?php if(isset($_SESSION['stdNo'])): ?>
                        <div class="dropdown" style="float: right;">
                            <button class="dropbtn">Profile&nbsp;&nbsp;<i style="font-size: 10px;">&#9660</i></button>
                            <div class="dropdown-content">
                                <a href="<?php echo BASE_URL . '/src/controllers/stdLogout.php' ?>" style="color: purple;">Log out</a>
                                <a href="<?php echo BASE_URL . '/src/controllers/dStudent.php' ?>" style="color: red;">Delete Account</a>
                            </div>
                        </div>
                    <?php endif; ?>
        </header>
                </div><br><br>
        <!-- Back to top button -->
	<img src="<?php echo (BASE_URL . '/images/backToTop.png')  ?>" width="50px" height="40px" onclick="topFunction()" id="topBtn" title="Go to top">
	<script>
		//Get the button
		var mybutton = document.getElementById("topBtn");
		
		// When the user scrolls down 20px from the top of the document, show the button
		window.onscroll = function() {scrollFunction()};
		
		function scrollFunction() {
			if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
			mybutton.style.display = "block";
			} else {
			mybutton.style.display = "none";
			}
		}
		
		// When the user clicks on the button, scroll to the top of the document
		function topFunction() {
			document.body.scrollTop = 0;
			document.documentElement.scrollTop = 0;
		}
	</script>

    <div style="padding: 5%;">
        <h1 style="background-color:#DDA0DD;padding: 3%;width: 95%; color: white; text-shadow: 0 0 10px purple,0 0 70px white;">Keyboard Lessons</h1>
        <div style="display: flex;justify-content: space-around;">
            <video width="400" controls>
                <source src="../videos/keyb1.mp4" type="video/mp4">
                <source src="../vid1.ogg" type="video/ogg">
            </video>

            <video width="400" controls>
                <source src="../videos/keyb2.mp4" type="video/mp4">
                <source src="../vid1.ogg" type="video/ogg">
            </video> 
            <video width="400" height="230" controls>
                <source src="../videos/piano3.mp4" type="video/mp4">
                <source src="../vid1.ogg" type="video/ogg">
            </video>
            
        </div><br>
        <h1 style="background-color: #DDA0DD;padding: 3%;width: 95%; color: white; text-shadow: 0 0 10px purple,0 0 70px white;">Piano Lessons</h1>
        <div style="display: flex;justify-content: space-around;">
            <video width="400" controls>
                <source src="../videos/piano1.mp4" type="video/mp4">
                <source src="../vid1.ogg" type="video/ogg">
            </video>
            <video width="400" height="230" controls>
                <source src="../videos/piano2.mp4" type="video/mp4">
                <source src="../vid1.ogg" type="video/ogg">
            </video>
            <video width="400" controls>
                <source src="../videos/vid3.mp4" type="video/mp4">
                <source src="../vid1.ogg" type="video/ogg">
            </video>

        </div>
        <h1 style="background-color:#DDA0DD;padding: 3%;width: 95%; color: white; text-shadow: 0 0 10px purple,0 0 70px white;">Drum Lessons</h1>
        <div style="display: flex;justify-content: space-around;">
            <video width="400" controls>
                <source src="../videos/drum1.mp4" type="video/mp4">
                <source src="../vid1.ogg" type="video/ogg">
            </video>
            <video width="400" controls>
                <source src="../videos/drum2.mp4" type="video/mp4">
                <source src="../vid1.ogg" type="video/ogg">
            </video>
            <video width="400" controls>
                <source src="../videos/drum3.mp4" type="video/mp4">
                <source src="../vid1.ogg" type="video/ogg">
            </video>
        </div>
        <h1 style="background-color:#DDA0DD;padding: 3%;width: 95%;color: white; text-shadow: 0 0 10px purple,0 0 70px white;">Guitar Lessons</h1>
        <div style="display: flex;justify-content: space-around;">
            <video width="400" controls>
                <source src="../videos/vid2.mp4" type="video/mp4">
                <source src="../vid1.ogg" type="video/ogg">
            </video>
            <video width="400" controls>
                <source src="../videos/guitar1.mp4" type="video/mp4">
                <source src="../vid1.ogg" type="video/ogg">
            </video>
            <video width="400" controls>
                <source src="../videos/guitar2.mp4" type="video/mp4">
                <source src="../vid1.ogg" type="video/ogg">
            </video>
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