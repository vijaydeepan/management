<?php 	

require_once 'core.php';


$valid['success'] = array('success' => false, 'messages' => array());

$purchase_id = $_POST['purchase_id'];

if($purchase_id) { 


 	$updateProductQuantitySql = "SELECT purchase_product.quantity FROM purchase_product WHERE purchase_product.purchase_id = '".$purchase_id."'";
		$updateProductQuantityData = $connect->query($updateProductQuantitySql);
		
		
		while ($updateProductQuantityResult = $updateProductQuantityData->fetch_row()) {
			$updateQuantity = $updateProductQuantityResult[0] - $quantity;							
				// update product table
				$updateProductTable = "UPDATE purchase_product SET quantity = '".$updateQuantity."' WHERE purchase_id = '".$purchase_id."'";
				$connect->query($updateProductTable);
	}
 
 
 
 $orderItemSql = "UPDATE purchase_product INNER JOIN production ON production_order.product_name=production.product_name SET production.quantity= production.quantity-production_order.quantity WHERE production_order.production_id=$productId";
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