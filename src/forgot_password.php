<?php include("../path.php"); ?>
<?php include(ROOT_PATH . "/src/controllers/users.php") ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password-SoundSpace</title>
    <link rel="stylesheet" href="../style/forgot_password.css">
</head>
<body>
    <div class="body">
        <div class="main">
            <form action="forgot_password.php" name="resetForm" method="POST">
                <h2>Forgot Your Password?</h2>
                <?php include(ROOT_PATH . "/src/helpers/form_errors.php") ?>
                <br>
                <div class="middle">Enter your E-mail address and we'll send a recovery password to your E-mail with instructions</div>
                <label>
                    <span>Email Address</span>
                    <input type="email" name="email" >
                </label>
                <input type="submit" value="Reset&nbsp;&nbsp;My&nbsp;&nbsp;Password" name="reset-btn">
            </form>
        </div>
    </div>
</body>
</html>