<?php 	

require_once 'core.php';

$valid['success'] = array('success' => false, 'messages' => array());

if($_POST) {	
	$orderId = $_POST['orderId'];

		$orderDate 						=  date('Y-m-d', strtotime($_POST['orderDate']));	
  $clientName 					= $_POST['clientName'];
    $ff 					= $_POST['ff'];
    $clientContact 					= $_POST['dd'];
    $billno 					= $_POST['billno'];
    $gst					= $_POST['gstno'];

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

      $subtotal					= $_POST['subTotalValue'];
    $totalamount					= $_POST['totalAmountValue'];
  
  
  
  
				
	$sql = "UPDATE orders4 SET order_date = '$orderDate',client_name = '$clientName',billno = '$billno',gstno = ' $gst',discount = '$discount',grand_total = '$grandTotalValue',paid = '$paid',due = '$dueValue',payment_type = '$paymentType',payment_status = '$paymentStatus',cgst = '$cgst',sgst = '$sgst',igst = '$igst',cgsttotal = '$cgsttotal',sgsttotal = '$sgsttotal',igsttotal = '$igsttotal',sub_total = '$subtotal',total_amount= '$totalamount',
	order_status = 1 WHERE order_id = {$orderId}";	
	$connect->query($sql);
	
	
	
	
	
	$readyToUpdateOrderItem = false;
	
	// add the quantity from the order item to product table
	for($x = 0; $x < count($_POST['productName']); $x++) {		
		//  product table
		$updateProductQuantitySql = "SELECT production.quantity FROM production WHERE production.id = ".$_POST['productName'][$x]."";
		$updateProductQuantityData = $connect->query($updateProductQuantitySql);			
			
		while ($updateProductQuantityResult = $updateProductQuantityData->fetch_row()) {
			// order item table add product quantity
			$orderItemTableSql = "SELECT order_item8.quantity FROM order_item8 WHERE order_item8.order_id = {$orderId}";
			$orderItemResult = $connect->query($orderItemTableSql);
			$orderItemData = $orderItemResult->fetch_row();

			$editQuantity = $updateProductQuantityResult[0] - $orderItemData[0];							

			$updateQuantitySql = "UPDATE production SET quantity = $editQuantity WHERE id = ".$_POST['productName'][$x]."";
			$connect->query($updateQuantitySql);		
		} // while	
		
		if(count($_POST['productName']) == count($_POST['productName'])) {
			$readyToUpdateOrderItem = true;			
		}
	} // /for quantity

	// remove the order item data from order item table
	for($x = 0; $x < count($_POST['productName']); $x++) {			
		$removeOrderSql = "DELETE FROM order_item8 WHERE order_id = {$orderId}";
		$connect->query($removeOrderSql);	
	} // /for quantity

	if($readyToUpdateOrderItem) {
			// insert the order item data 
		for($x = 0; $x < count($_POST['productName']); $x++) {			
			$updateProductQuantitySql = "SELECT production.quantity FROM production WHERE production.id = ".$_POST['productName'][$x]."";
			$updateProductQuantityData = $connect->query($updateProductQuantitySql);
			
			while ($updateProductQuantityResult = $updateProductQuantityData->fetch_row()) {
				$updateQuantity[$x] = $updateProductQuantityResult[0] + $_POST['foot'][$x];	
					// update product table
					$updateProductTable = "UPDATE production SET quantity = '".$updateQuantity[$x]."' WHERE production.id = ".$_POST['productName'][$x]."";
					$connect->query($updateProductTable);

					// add into order_item
				$orderItemSql = "INSERT INTO order_item8 (order_id, product_id,hsn, quantity,altquantity,feet, rate,disc, total, order_item_status) 
				VALUES ({$orderId}, '".$_POST['productName'][$x]."','".$_POST['hsnValue'][$x]."','".$_POST['quantity'][$x]."','".$_POST['alquantity'][$x]."','".$_POST['foot'][$x]."', '".$_POST['rate'][$x]."',
				'".$_POST['discount'][$x]."', '".$_POST['totalValue'][$x]."', 1)";
				$connect->query($orderItemSql);		
			} // while	
		} // /for quantity
	}

	

	$valid['success'] = true;
	$valid['messages'] = "Successfully Updated";		
	
	$connect->close();

	echo json_encode($valid);
 
} // /if $_POST
// echo json_encode($valid);