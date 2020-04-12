<?php
    session_start();
    if(!isset($_SESSION['userlogin'])){
        header("Location: login.php");
    }
    echo "this is main";
?>
    

<p>Welcom to Main</p>