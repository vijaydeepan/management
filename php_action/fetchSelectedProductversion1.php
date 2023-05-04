<?php 	

require_once 'core.php';

$productId = $_POST['productId'];

$sql = "Select production.hns,product1rate.Rate FROM production INNER JOIN product1rate ON product1rate.alhns=production.hns WHERE production.id=  $productId";
$result = $connect->query($sql);

if($result->num_rows > 0) { 
 $row = $result->fetch_array();
} // if num_rows

$connect->close();

echo json_encode($row);