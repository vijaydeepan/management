<?php 	

require_once 'core.php';


$valid['success'] = array('success' => false, 'messages' => array());

$brandId = $_POST['brandId'];

if($brandId) { 

 $sql = "DELETE FROM production_order  WHERE production_id = {$brandId}";


$orderItemSql = "UPDATE production_order INNER JOIN production ON production_order.product_name=production.product_name SET production.quantity= production.quantity-production_order.quantity WHERE production_order.production_id= $brandId";
$orderItemResult = $connect->query($orderItemSql);


 if($connect->query($sql) === TRUE) {
 	$valid['success'] = true;
	$valid['messages'] = "Successfully Removed";		
 } else {
 	$valid['success'] = false;
 	$valid['messages'] = "Error while remove the brand";
 }
 
 $connect->close();

 echo json_encode($valid);
 
} // /if $_POST