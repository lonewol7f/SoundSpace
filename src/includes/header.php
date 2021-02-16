        <header id="header" style="background-image: url(<?php echo (BASE_URL . '/images/header1.jpg')  ?>);">
            
            <a href="<?php echo (BASE_URL . '/index.php') ?>">
                <img src="<?php echo (BASE_URL . '/images/logo1.png')  ?>" alt="logo" class="logo" style="width: 300px; height: 300px;">
            </a>
            

            <!-- navigation bar -->
            <div class="menu">
                <a href="<?php echo BASE_URL . '/index.php' ?>" class="<?php if($page == 'home'){echo 'active';} ?>">Home</a>
                <a href="<?php echo BASE_URL . '/src/about_us.php' ?>" class="<?php if($page == 'about'){echo 'active';} ?>">About Us</a>
                <a href="<?php echo BASE_URL . '/src/contact_us.php' ?>" class="<?php if($page == 'contact'){echo 'active';} ?>">Contact Us</a>

                <!-- search button -->
                <div class="search-container">
                    <form>
                    <input type="text" placeholder="Search.." name="search">
                    <button type="submit">&#128269</button>
                    </form>
                </div>

                <!-- condition for view service and catogory tabs -->
                <?php if(isset($_SESSION['regNo'])): ?>
                    <!-- <a href="<?php echo BASE_URL . '/src/studenthome.php' ?>" class="<?php if($page == 'services'){echo 'active';} ?>">Services</a> -->
                    <div class="dropdown" style="margin-right: auto;">
                    <button class="dropbtn">Services <i style="font-size: 10px;">&#9660</i></button>
                        <div class="dropdown-content">
                            <a href="<?php echo BASE_URL . '/src/studenthome.php' ?>">Musical School</a>
                            <a href="<?php echo BASE_URL . '/src/feedback.php' ?>">Feedback</a>
                        </div>
                    </div>
                    <div class="dropdown">
                    <button class="dropbtn">Category <i style="font-size: 10px;">&#9660</i></button>
                        <div class="dropdown-content">
                            <a href="<?php echo BASE_URL . '/src/guitars.php' ?>">Guitars</a>
                            <a href="<?php echo BASE_URL . '/src/drums.php' ?>">Drums</a>
                            <a href="<?php echo BASE_URL . '/src/keyboards.php' ?>">Keyboards</a>
                            <a href="<?php echo BASE_URL . '/src/orchestra.php' ?>">Orchestra</a>
                        </div>
                    </div>
                    <div class="dropdown" style="float: right;">
                        <button class="dropbtn"><?php echo $_SESSION['fname']," " ,$_SESSION['lname']; ?>&nbsp;&nbsp;<i style="font-size: 10px;">&#9660</i></button>
                        <div class="dropdown-content">
                            <?php if($_SESSION['admin']): ?>
                                <a href="<?php echo BASE_URL . '/admin/dashboard.php' ?>">Dashboard</a>
                            <?php endif; ?>
                            <a href="<?php echo BASE_URL . '/src/user_profile.php' ?>">Profile</a>
                            <a href="<?php echo BASE_URL . '/src/controllers/logout.php' ?>" style="color: red;">Log out</a>
                        </div>
                    </div>
                <?php else: ?>
                    <div class="dropdown" style="float: right;">
                        <button class="dropbtn">Guest&nbsp;&nbsp;<i style="font-size: 10px;">&#9660</i></button>
                        <div class="dropdown-content">
                            <a href="<?php echo BASE_URL . '/src/login_page.php' ?>">Login or Register</a>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </header>

        <!-- Login succesfull message -->
        <?php include(ROOT_PATH . "/src/includes/messages.php"); ?>
        
        
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