<?php 	

require_once 'core.php';

$$orderId = $_POST['$orderId'];

$sql = "SELECT id, production_id, product_id, quantity FROM production_size WHERE production_id = $brandId";
$result = $connect->query($sql);

if($result->num_rows > 0) { 
 $row = $result->fetch_array();
} // if num_rows

$connect->close();

echo json_encode($row);