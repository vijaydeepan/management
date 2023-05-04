<?php 	

require_once 'core.php';


$valid['success'] = array('success' => false, 'messages' => array());

$orderId = $_POST['orderId'];

if($orderId) { 

 $sql = "DELETE FROM orders2   WHERE order_id = {$orderId}";
 
  

 
 $dee = "UPDATE purchase_product INNER JOIN order_item2 ON order_item2.product_id= purchase_product.id SET purchase_product.purchase_quantity= purchase_product.purchase_quantity-order_item2.tquantity WHERE order_item2.order_id=$orderId";
				
				
 if($connect->query($sql) === TRUE && $connect->query($dee) === TRUE)  {
 	$valid['success'] = true;
	$valid['messages'] = "Successfully Removed";		
 } else {
 	$valid['success'] = false;
 	$valid['messages'] = "Error while remove the brand";
 }
 
 $connect->close();

 echo json_encode($valid);
 
} // /if $_POST