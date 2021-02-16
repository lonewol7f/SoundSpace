<?php 
    include("../path.php"); 
    include(ROOT_PATH . "/src/controllers/users.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Courses</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../style/style_home.css">
        <link rel="stylesheet" href="../style/about_us.css">
        <link rel="stylesheet" href="../style/stdStyle.css">
		<link rel="stylesheet" href="../style/courese.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/3.0.1/iconfont/material-icons.min.css">
		<link rel="stylesheet" href="../style/chat.css">
		<link rel="stylesheet" href="../style/scroll_bar.css">
        <script type="text/javascript" src="../js/aboutJs.js"></script>
        <script type="text/javascript" src="../js/course.js"></script>
</head>
<body style="background-color: white;">
	<header style="background-image: url(../images/header1.jpg);">
            <a href="studentReg.html">
                <img src="../images/profile.png" width="60" height="45"  alt="profile" style="float: right;">
            </a>
        
            <a href="../index.php">
                <img src="../images/logo1.png" alt="logo" class="logo" style="width: 200px; height: 200px; float: center;">
            </a> 
            <hr style="border: 1px solid #7c5295; background-color: #7c5295; clear: both;">

            <!-- navigation bar -->
            <div class="menu">
                <a href="studentHome.php">Home</a>
                <a href="courses.php"  class="active">Courses</a>
				<a href="stdVideos.php">Videos</a>
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
            </div>
	</header>
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
       		<hr style="border: 1px solid #7c5295; background-color: #7c5295;">

       		<!-- top buttons set -->
		        <div class="pill-nav" style="padding: 5%;">
		        	<center>
						  <a class="active" href="#keyboard" onclick="keyintro()" style="color: white; text-shadow: 0 0 10px white,0 0 70px black; width: 100px;">Keyboards</a>
						  <a class="active" href="#piano" onclick="pianointro()"style="color: white; text-shadow: 0 0 10px white,0 0 70px black;width: 100px;">Piano</a>
						  <a class="active" href="#drum" onclick="drumintro()"style="color: white; text-shadow: 0 0 10px white,0 0 70px black;width: 100px;">Drum</a>
						  <a class="active" href="#guitar" onclick="guitarintro()"style="color: white; text-shadow: 0 0 10px white,0 0 70px black;width: 100px;">Guitar</a>
					</center>
				</div>

			<!-- introduction about instrument -->
				<div style="font-size:25px; margin-right: 1%;margin-left: 1%; background-color:rgba(231, 121, 251, 0.45)">
					<h1 id="welcome" style="text-align: center;padding-top:150px; color: white;text-shadow: 0 0 10px purple,0 0 50px purple;">Welcome to the SoundSpace free online courses
						</h1>
					<center>
						<h2 id="demo4" style="padding-top:2%;color: purple"></h2>
					</center>
					<p id="demo" style="padding-top:auto;padding-bottom: 5%;padding-left: 5%;padding-right: 5%; font-family: Roboto Condensed, sans-serif">
						
					</p>
				</div>


				<!-- auto play videos -->
									
					<div id="divimg">
						<video style="width: 50%;float: left; max-height: 90%;"  autoplay muted loop >
						  <source src="../videos/vid3.mp4" type="video/mp4">
						  Your browser does not support HTML5 video.
						</video>
						<video style="width: 50%;float: right; max-height: 90%;" id="divimg" autoplay muted loop >
						  <source src="../videos/vid2.mp4" type="video/mp4">
						  Your browser does not support HTML5 video.
						</video>
					</div>


					<!-- 3Weeks courses image button -->
				

					<div id="div1" style="justify-content: space-around;display: none;">
						<a href="#"  onclick="ksec1()">
							<div class="container1" >
								<img src="../images/keyboard.jpg" style="width: 400px;" >
								<div class="text-block">							    		
									<h4>Week one</h4>
							    	<p>Learning The Notes</p>
							 	</div>
							</div>
						</a>

						<a href="#"  onclick="ksec2()">
							<div class="container1">
								<img src="../images/k1.jpg" style="width: 400px;height: 268px;">
								<div class="text-block">
									<h4>Week two</h4>
							    	<p>Learning Your First Scale</p>
							    </div>
							</div>	
						</a>

						<a href="#"  onclick="ksec3()">
							<div class="container1">
								<img src="../images/k2.jpg"style="width: 400px; height:268px " >
								<div class="text-block">
									<h4>week three</h4>
							    	<p>Play various songs</p>
							    </div>
							</div>
							</a>	
					</div>

					<div id="div2" style="justify-content: space-around; display: none;">
						<a href="#" onclick="pia1()">
							<div class="container1">
								<img src="../images/p1.jpg" style="width: 400px;" >
								<div class="text-block">
							    	<h4>Week one</h4>
							    	<p>Identifying Octaves</p>
							 	</div>
							</div>
							</a>
						
							<a href="#"  onclick="pia2()">
							<div class="container1">
								<img src="../images/piano.jpg" style="width: 400px;height: 268px;">
								<div class="text-block">
									<h4>Week two</h4>
							    	<p>Naming the Notes</p>
							    </div>
							</div>	
							</a>
						
							<a href="#"  onclick="pia3()">
							<div class="container1">
								<img src="../images/p2.jpg"style="width: 400px; height: 268px">
								<div class="text-block">
									<h4>week three</h4>
							    	<p>Playing Scales</p>
							    </div>
							</div>	
							</a>
						
					</div>

					<div id="div3" style="display: flex;justify-content: space-around;display: none;">
							<a href="#"  onclick="dru1()">
							<div class="container1">
								<img src="../images/d1.jpg" style="width: 400px; height: 270px;" >
								<div class="text-block">
							    	<h4>Week one</h4>
							    	<p>The Parts of a Drum Kit</p>
							 	</div>
							</div>
						</a>

							<a href="#"  onclick="dru2()">
							<div class="container1">
								<img src="../images/d2.jpg" style="width: 400px;height: 268px;">
								<div class="text-block">
									<h4>Week two</h4>
							    	<p>How to Play Drum Rudiments</p>
							    </div>
							</div>
							</a>	
						
							<a href="#"  onclick="dru3()">
							<div class="container1">
								<img src="../images/d3.jpg"style="width: 400px;">
								<div class="text-block">
									<h4>week three</h4>
							    	<p>How to Read Drum Sheet Music</p>
							    </div>
							</div>	
							</a>
						

					</div>
					<div id="div4"  style="display: flex;justify-content: space-around;display: none;">
						<a href="#" onclick="gui1()">	
							<div class="container1">
								<img src="../images/g3.jpg" style="width: 400px;" >
								<div class="text-block">
							    	<h4>Week one</h4>
							    	<p>Guitar chord voicing</p>
							 	</div>
							</div>
							</a>
						

						<a href="#"  onclick="gui2()">
							<div class="container1">
								<img src="../images/g1.jpg" style="width: 400px;height: 268px;">
								<div class="text-block">
									<h4>Week two</h4>
							    	<p>finger picking</p>
							    </div>
							</div>	
							</a>
						

						<a href="#" onclick="gui3()">
							<div class="container1">
								<img src="../images/g2.jpg"style="width: 400px;">
								<div class="text-block">
									<h4>week three</h4>
							    	<p>Play various chords</p>
							    </div>
							</div>	
							</a>

					</div>
				</div>
				

					<hr style="border: 1px solid #7c5295; background-color: #7c5295;">

					<div style="font-size: 30px;margin-right: 10%;margin-left: 10%; background-color: #ddd3ee;display: none;" id="bot">
						
						<center>
							<p id="demo3" style="padding-top:3%;font-family: Roboto Condensed, sans-serif "></p>
						</center>
						<p id="demo2" style="padding-top:1%;padding-bottom: 5%;padding-left: 5%;padding-right: 5%; font-family: Roboto Condensed, sans-serif ">Start your course</p>

					</div>
					<a href="stdVideos.php" >
						<button class="button1" style="border-color: purple;font-size:20px;"><span>Video Lessons</span> </button>
					</a>
				
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
						
</body>
</html>