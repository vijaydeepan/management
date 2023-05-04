<?php 	

require_once 'core.php';


$valid['success'] = array('success' => false, 'messages' => array());

$brandId = $_POST['brandId'];

if($brandId) { 

 $sql = "DELETE FROM purchase_order  WHERE purchase_id = {$brandId}";


$orderItemSql = "UPDATE purchase_product INNER JOIN purchase_order ON purchase_product.product_name=purchase_order.product_name SET purchase_product.quantity= purchase_product.quantity-purchase_order.quantity WHERE purchase_order.purchase_id=$brandId";
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