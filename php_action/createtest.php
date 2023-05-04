<?php 	

require_once 'core.php';

$valid['success'] = array('success' => false, 'messages' => array(), 'order_id' => '');
// print_r($valid);
if($_POST) {	

	$orderDate 						= date('Y-m-d', strtotime($_POST['orderDate']));	
  $clientName 					= $_POST['clientName'];
    $ff 					= $_POST['ff'];
    $clientContact 					= $_POST['dd'];
    $billno 					= $_POST['billno'];

  $discount 						= $_POST['discount'];
  $grandTotalValue 			= $_POST['grandTotalValue'];
  $paid 								= $_POST['paid'];
  $dueValue 						= $_POST['dueValue'];
  $paymentType 					= $_POST['paymentType'];
  $paymentStatus 				= $_POST['paymentStatus'];

      $cgst 					= $_POST['tax'];
    $sgst 					= $_POST['tax2'];
    $igst 					= $_POST['tax3'];
    $cgsttotal					= $_POST['vatValue'];
    $sgsttotal 					= $_POST['vatValue2'];
    $igsttotal					= $_POST['vatValue3'];

 
  
  
				

	


	for($y = 0; $y < count($_POST['productName']); $y++) {			
		$updateProductQuantitySql = "SELECT production.quantity FROM production WHERE production.id = ".$_POST['productName'][$y]."";
		$updateProductQuantityData = $connect->query($updateProductQuantitySql);
		
		
		while ($updateProductQuantityResult = $updateProductQuantityData->fetch_row()) {
			$updateQuantity[$y] = $updateProductQuantityResult[0] + $_POST['quantity'][$y];							
				// update product table
				$updateProductTable = "UPDATE production SET quantity = '".$updateQuantity[$y]."' WHERE id = ".$_POST['productName'][$y]."";
				$connect->query($updateProductTable);

				// add into order_item
				$orderItemSql = "INSERT INTO order_item (order_id, product_id, quantity, rate, total, order_item_status) 
				VALUES ('$order_id', '".$_POST['productName'][$y]."', '".$_POST['quantity'][$y]."', '".$_POST['rateValue'][$y]."', '".$_POST['totalValue'][$y]."', 1)";

				$connect->query($orderItemSql);		

				if($y == count($_POST['productName'])) {
					$orderItemStatus = true;
				}		
		} // while	
	} // /for quantity

	$valid['success'] = true;
	$valid['messages'] = "Successfully Added";		

	$connect->close();

	echo json_encode($valid);
 
} // /if $_POST
// echo json_encode($valid);