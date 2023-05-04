<?php 	

require_once 'core.php';


$valid['success'] = array('success' => false, 'messages' => array());

$brandId = $_POST['brandId'];

if($brandId) { 

$orderItemSql = "UPDATE customer INNER JOIN customerduepay ON customerduepay.customer_name=customer.customer_name SET customer.note= customer.note-customerduepay.payamount WHERE customerduepay.customer_id=$brandId";
$orderItemResult = $connect->query($orderItemSql);

 $sql = "DELETE FROM customerduepay  WHERE customer_id = {$brandId}";





 if($connect->query( $sql) === TRUE) {
 	$valid['success'] = true;
	$valid['messages'] = "Successfully Removed";		
 } else {
 	$valid['success'] = false;
 	$valid['messages'] = "Error while remove the brand";
 }
 
 $connect->close();

 echo json_encode($valid);
 
} // /if $_POST