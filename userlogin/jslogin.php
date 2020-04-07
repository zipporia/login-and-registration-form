<?php
require_once('config.php');

echo 'Keep Grinding ';

$sql = "SELECT * FROM users";
$stmtselect = $db->prepare($sql);
$result = $stmtselect->execute([]);

if($result){
    echo 'you are login';
}else{
    echo 'There were errors while connecting to database';
}

