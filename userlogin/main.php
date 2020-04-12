<?php
    session_start();
    if(!isset($_SESSION['userlogin'])){
        header("Location: login.php");
    }
    echo "this is main";

    if(isset($_GET['logout'])){
        session_destroy();
        unset($_SESSION);
        header("Location: login.php");
    }
?>
    

<p>Welcom to Main</p>

<a href="main.php?logout=true">Logout</a>