<?php 	

require_once 'core.php';


$valid['success'] = array('success' => false, 'messages' => array());

$orderId = $_POST['orderId'];

if($orderId) { 



 
 
 $sql = "DELETE FROM orders   WHERE order_id = {$orderId}";
 
  

 
 $dee = "UPDATE production INNER JOIN order_item ON order_item.product_id= production.id SET production.quantity= production.quantity+order_item.quantity WHERE order_item.order_id=$orderId";
				
 
 
 
 
 if($connect->query($sql) === TRUE && $connect->query($dee) === TRUE) {
 	$valid['success'] = true;
	$valid['messages'] = "Successfully Removed";		
 } else {
 	$valid['success'] = false;
 	$valid['messages'] = "Error while remove the brand";
 }
 
 $connect->close();

 echo json_encode($valid);
 
} // /if $_POST