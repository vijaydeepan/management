<?php 	

require_once 'core.php';

$sql = "SELECT production.id,production.product_name FROM production INNER JOIN product3 WHERE production.product_name=product3.product_name ";
$result = $connect->query($sql);

$data = $result->fetch_all();

$connect->close();

echo json_encode($data);