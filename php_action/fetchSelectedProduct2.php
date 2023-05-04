<?php 	

require_once 'core.php';

$productId = $_POST['productId'];

$sql = "SELECT cost_price,quantity FROM production_order WHERE production_id = $productId";
$result = $connect->query($sql);

if($result->num_rows > 0) { 
 $row = $result->fetch_array();
} // if num_rows

$connect->close();

echo json_encode($row);