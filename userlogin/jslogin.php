<?php
echo 'Keep Grinding';

$sql = "SELECT * FROM users";
$stmtselect = $db->prepare($sql);
$result = $stmtselect->exectute([]);