<?php
require_once('config.php');

echo 'from login Keep Grinding ';

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email = ? and password = ? LIMIT 1";
$stmtselect = $db->prepare($sql);
$result = $stmtselect->execute([$username, $password]);

if($result){
    $user = $stmtselect->fetch(PDO::FETCH_ASSOC);
    if($stmtselect->rowCount() > 0){
        echo '1';
    }else{
        echo ' there no user for that combo';
    }
}else{
    echo 'There were errors while connecting to database';
}

