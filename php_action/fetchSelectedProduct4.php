<?php 	

require_once 'core.php';

$productId = $_POST['productId'];

$sql = "SELECT note,suplier_name,gst,suplier_contact,suplier_address FROM supliers WHERE suplier_id = $productId";
$result = $connect->query($sql);

if($result->num_rows > 0) { 
 $row = $result->fetch_array();
} // if num_rows

$connect->close();

echo json_encode($row);