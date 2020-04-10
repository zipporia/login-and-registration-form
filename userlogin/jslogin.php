<?php
require_once('config.php');

echo 'from login Keep Grinding ';

$sql = "SELECT * FROM users";
$stmtselect = $db->prepare($sql);
$result = $stmtselect->execute([]);

if($result){
    $user = $stmtselect->fetch(PDO::FETCH_ASSOC);
    var_dump($user);
}else{
    echo 'There were errors while connecting to database';
}

