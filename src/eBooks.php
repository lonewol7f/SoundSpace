<?php
    include("../path.php");
    include(ROOT_PATH . "/src/controllers/users.php");
?>


<!DOCTYPE html>
<html>
    <head>
    <title>e-books</title>
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
    <body  style="background-image: linear-gradient(180deg, white ,#E6E6FA);">
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
                <a href="courses.php" >Courses</a>
                <a href="stdVideos.php">Videos</a>
				<a href="<?php echo BASE_URL . '/src/eBooks.php' ?>" class="active">E-Books</a>
				
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

      
    <div>
        <h1 style="background-color:#DDA0DD;padding: 1%;margin-left:5%;width: 90%; color: white; text-shadow: 0 0 10px purple,0 0 70px white;">Keyboard Lessons</h1>
        <div style="justify-content: space-around;padding:20px;margin-left:8%;">
                <a href=""style="text-decoration:none;">
                    <img src="<?php echo (BASE_URL . '/images/ebook1.jpg'); ?> "style="width:250px;padding:2%;height:300px;box-shadow: 0 4px 8px 0 gray;" >
                    <img src="<?php echo (BASE_URL . '/images/ebook2.jpg'); ?> "style="width:250px;padding:2%;height:300px;box-shadow: 0 4px 8px 0 gray;" >
                    <img src="<?php echo (BASE_URL . '/images/ebook3.jpg'); ?> "style="width:250px;padding:2%;height:300px;box-shadow: 0 4px 8px 0 gray;" >
                    <img src="<?php echo (BASE_URL . '/images/ebook4.jpg'); ?> "style="width:250px;padding:2%;height:300px;box-shadow: 0 4px 8px 0 gray;" >
                </a>
         </div>
            <h1 style="background-color:#DDA0DD;padding: 1%;margin-left:5%;width: 90%; color: white; text-shadow: 0 0 10px purple,0 0 70px white;">Piano Lessons</h1>
            <div style="justify-content: space-around;padding:20px;margin-left:8%;">
                <a href=""style="text-decoration:none;">
                    <img src="<?php echo (BASE_URL . '/images/ebook5p.jpg'); ?> "style="width:250px;padding:2%;height:300px;box-shadow: 0 4px 8px 0 gray;" >
                    <img src="<?php echo (BASE_URL . '/images/ebook6p.jpg'); ?> "style="width:250px;padding:2%;height:300px;box-shadow: 0 4px 8px 0 gray;" >
                    <img src="<?php echo (BASE_URL . '/images/ebook7p.jpg'); ?> "style="width:250px;padding:2%;height:300px;box-shadow: 0 4px 8px 0 gray;" >
                    <img src="<?php echo (BASE_URL . '/images/ebook8p.jpg'); ?> "style="width:250px;padding:2%;height:300px;box-shadow: 0 4px 8px 0 gray;" >
                </a>
            </div>
            <h1 style="background-color:#DDA0DD;padding: 1%;margin-left:5%;width: 90%; color: white; text-shadow: 0 0 10px purple,0 0 70px white;">Drum Lessons</h1>
            <div style="justify-content: space-around;padding:20px;margin-left:8%;">
                <a href=""style="text-decoration:none;">
                    <img src="<?php echo (BASE_URL . '/images/ebook9d.jpg'); ?> "style="width:250px;padding:2%;height:300px;box-shadow: 0 4px 8px 0 gray;" >
                    <img src="<?php echo (BASE_URL . '/images/ebook10d.jpg'); ?> "style="width:250px;padding:2%;height:300px;box-shadow: 0 4px 8px 0 gray;" >
                    <img src="<?php echo (BASE_URL . '/images/ebook11d.jpg'); ?> "style="width:250px;padding:2%;height:300px;box-shadow: 0 4px 8px 0 gray;" >
                    <img src="<?php echo (BASE_URL . '/images/ebook12d.png'); ?> "style="width:250px;padding:2%;height:300px;box-shadow: 0 4px 8px 0 gray;" >
                </a>
            </div>
            <h1 style="background-color:#DDA0DD;padding: 1%;margin-left:5%;width: 90%; color: white; text-shadow: 0 0 10px purple,0 0 70px white;">Guitar Lessons</h1>
            <div style="justify-content: space-around;padding:20px;margin-left:8%;">
                <a href=""style="text-decoration:none;">
                    <img src="<?php echo (BASE_URL . '/images/ebook13g.jpg'); ?> "style="width:250px;padding:2%;height:300px;box-shadow: 0 4px 8px 0 gray;" >
                    <img src="<?php echo (BASE_URL . '/images/ebook14g.jpg'); ?> "style="width:250px;padding:2%;height:300px;box-shadow: 0 4px 8px 0 gray;" >
                    <img src="<?php echo (BASE_URL . '/images/ebook15g.jpg'); ?> "style="width:250px;padding:2%;height:300px;box-shadow: 0 4px 8px 0 gray;" >
                    <img src="<?php echo (BASE_URL . '/images/ebook16g.jpg'); ?> "style="width:250px;padding:2%;height:300px;box-shadow: 0 4px 8px 0 gray;" >
                </a>
            </div>
        
     </div>

<!--  FOOTER SECTION -->
    <?php
        include(ROOT_PATH . "/src/includes/footer.php");
    ?>
    </body>
</html>