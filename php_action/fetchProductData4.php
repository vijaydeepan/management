<?php 	

require_once 'core.php';

$sql = "SELECT * FROM production ";
$result = $connect->query($sql);

$data = $result->fetch_all();

$connect->close();

echo json_encode($data);