<?php 	

require_once 'core.php';


$valid['success'] = array('success' => false, 'messages' => array());

$brandId = $_POST['brandId'];

if($brandId) { 

$orderItemSql = "UPDATE purchase_product INNER JOIN sale_return ON purchase_product.product_name=sale_return.product_name SET purchase_product.purchase_quantity= purchase_product.purchase_quantity-sale_return.taken_quantity WHERE sale_return.purchase_id=$brandId";
$orderItemResult = $connect->query($orderItemSql);


 $sql = "DELETE FROM sale_return  WHERE purchase_id = {$brandId}";




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