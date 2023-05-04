<?php 	

require_once 'core.php';


$valid['success'] = array('success' => false, 'messages' => array());

$orderId = $_POST['orderId'];
$dd = $_POST['clientName'];

if($orderId) { 
$sql = "DELETE FROM product1 WHERE product_id = {$dd}";
 				$connect->query($sql);
 $result = "DELETE FROM production WHERE id = {$orderId}";



 if($connect->query($result) === TRUE) {
 	$valid['success'] = true;
	$valid['messages'] = "Successfully Removed";	
 		 header("Location: successremoveproduct.php");

 } else {
 	$valid['success'] = false;
 	$valid['messages'] = "Error while remove the order";
 }

 $connect->close();

 echo json_encode($valid);
 
} // /if $_POST