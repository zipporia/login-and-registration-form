<?php
require_once('config.php');

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE user_email = ? and user_pass = ? LIMIT 1";
$stmtselect = $db->prepare($sql);
$result = $stmtselect->execute([$username, $password]);

if($result){
    $user = $stmtselect->fetch(PDO::FETCH_ASSOC);
    if($stmtselect->rowCount() > 0){
        var_dump($user);
    }else{
        echo ' there no user for that combo';
    }
}else{
    echo 'There were errors while connecting to database';
}

