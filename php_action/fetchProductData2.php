<?php 	

require_once 'core.php';

$sql = "SELECT id, product_name FROM purchase_product";
$result = $connect->query($sql);

$data = $result->fetch_all();

$connect->close();

echo json_encode($data);