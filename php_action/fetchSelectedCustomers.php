<?php 	

require_once 'core.php';

$brandId = $_POST['brandId'];

$sql = "SELECT customer_id, customer_name, address,note,contact,due FROM customer WHERE customer_id = $brandId";
$result = $connect->query($sql);

if($result->num_rows > 0) { 
 $row = $result->fetch_array();
} // if num_rows

$connect->close();

echo json_encode($row);