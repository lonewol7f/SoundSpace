<?php
    include("../../path.php");

    session_start();

    unset($_SESSION['stdNo']);
    unset($_SESSION['stEmail']);
    unset($_SESSION['message']);
    unset($_SESSION['type']);

    header("Location:" . BASE_URL . "/src/studentHome.php");
?>