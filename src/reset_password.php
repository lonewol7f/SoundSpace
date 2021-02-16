<?php include("../path.php"); ?>
<?php include(ROOT_PATH . "/src/controllers/users.php") ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password-SoundSpace</title>
    <link rel="stylesheet" href="../style/reset_password.css">
</head>
<body>
    <div class="body">
        <div class="main">
            <form action="reset_password.php" name="resetPassForm" method="POST">
                <h2>Reset Your Password</h2>
                <?php include(ROOT_PATH . "/src/helpers/form_errors.php") ?>
                <br>
                <div class="middle">Enter your new Password and confirm it. Make sure to remember password.</div>
                <label for="password">
                    <span>Password</span>
                    <input type="password" id="password" name="password"  minlength="6" value="<?php echo $pwd; ?>" required>
                </label>
                <label for="cpwd">
                    <span>Confirm Password</span>
                    <input type="password" id="cpwd" name="cpwd" value="<?php echo $cpwd; ?>" required>
                </label>
                <input type="submit" value="Reset Now" name="passReset-btn">
            </form>
        </div>
    </div>
</body>
</html>