<?php

    include("../../path.php"); 
    include(ROOT_PATH . "/src/controllers/users.php");

    deleteStudent('student', $_SESSION['stdNo']);
    header("Location:" . BASE_URL . "/src/controllers/stdLogout.php");


?>