<?php 	

require_once 'core.php';

$sql = "SELECT production_id, product_name FROM production_order";
$result = $connect->query($sql);

$data = $result->fetch_all();

$connect->close();

echo json_encode($data);