<?php 	

require_once 'core.php';


$valid['success'] = array('success' => false, 'messages' => array());

$brandId = $_POST['brandId'];

if($brandId) { 

$orderItemSql = "UPDATE supliers INNER JOIN suplierduepay ON suplierduepay.suplier_name=supliers.suplier_name SET supliers.note= supliers.note-suplierduepay.payamount WHERE suplierduepay.suplier_id=$brandId";
$orderItemResult = $connect->query($orderItemSql);

 $sql = "DELETE FROM suplierduepay  WHERE suplier_id = {$brandId}";





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