<?php
header('Content-Type: application/json;charset=utf-8');
$s = file_get_contents('customers.txt');
echo json_encode($s);
?>