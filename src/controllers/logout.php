<?php
    include("../../path.php");

    session_start();

    unset($_SESSION['regNo']);
    unset($_SESSION['fname']);
    unset($_SESSION['lname']);
    unset($_SESSION['admin']);
    unset($_SESSION['email']);
    unset($_SESSION['uAddress']);
    unset($_SESSION['pPic']);
    unset($_SESSION['message']);
    unset($_SESSION['type']);

    session_destroy();

    header("Location:" . BASE_URL . "/index.php");
?>