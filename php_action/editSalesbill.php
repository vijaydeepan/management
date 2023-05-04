<?php 	

require_once 'core.php';

$valid['success'] = array('success' => false, 'messages' => array());

if($_POST) {	
	$orderId = $_POST['orderId'];

	$orderDate 						= date('Y-m-d', strtotime($_POST['orderDate']));
  $clientName 					= $_POST['clientName'];
    $ff 					= $_POST['ff'];
    $clientContact 					= $_POST['dd'];
    $billno 					= $_POST['billno'];
    $gst 					= $_POST['xx'];
    $address					= $_POST['gg'];
    $phone 					= $_POST['ee'];
    $vehicle 					= $_POST['vv'];


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

 
    $product1total					= $_POST['Totalcp'];
	
	    $product2total					= $_POST['subTotalValue'];
	    $product3total					= $_POST['subTotalValue2'];
	    $words1					= $_POST['words1'];
    $fright					= $_POST['fright'];
    $expense					= $_POST['expense'];
     $totalAmountValue					= $_POST['totalAmountValue'];
      $discount					= $_POST['discount'];
	  $fiAmountValue					= $_POST['fiAmountValue'];
  $chkbox = $_POST['chkbox'];
  
   $chkbox = $_POST['chkbox'];
 
 $chkNew = "";  
 
 foreach($chkbox as $chkNew1)  
   {  
      $chkNew .= $chkNew1 . "";  
   }  
				
	$sql = "UPDATE orders3 SET order_date = '$orderDate', client_name = '$ff', client_contact ='$clientContact', billno = '$billno', gst = '$discount', grand_total = '$grandTotalValue',paid = '$paid',due = '$dueValue', payment_type = '$paymentType', payment_status = '$paymentStatus', cgst = '$cgst', sgst = '$sgst',igst = '$igst', cgsttotal = '$cgsttotal', sgsttotal = '$sgsttotal', igsttotal = '$igsttotal', sub_total = '$fiAmountValue',  product1total='$product1total', product2total='$product2total', product3total='$product3total', words='$words1', phoneno='$phone', address='$address', fright='$fright', expense='$expense', vehicleno = '$vehicle', aluminium = '$chkNew', discount='$discount', total_amount= '$totalAmountValue',
	order_status = 1 WHERE order_id = {$orderId}";	
	$connect->query($sql);
	
	$readyToUpdateOrderItem = false;
	
   ///edit order_item6	
	for($x = 0; $x < count($_POST['productName']); $x++) {		
		//  product table
		$updateProductQuantitySql = "SELECT production.quantity FROM production WHERE production.id = ".$_POST['productName'][$x]."";
		$updateProductQuantityData = $connect->query($updateProductQuantitySql);			
			
		while ($updateProductQuantityResult = $updateProductQuantityData->fetch_row()) {
			// order item table add product quantity
			$orderItemTableSql = "SELECT order_item6.quantity FROM order_item6 WHERE order_item6.order_id = {$orderId}";
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
		$removeOrderSql = "DELETE FROM order_item6 WHERE order_id = {$orderId}";
		$connect->query($removeOrderSql);	
	} // /for quantity
	
	if($readyToUpdateOrderItem) {
			// insert the order item data 
		for($x = 0; $x < count($_POST['productName']); $x++) {			
		$updateProductQuantitySql = "SELECT production.quantity FROM production WHERE production.id = ".$_POST['productName'][$x]."";
		$updateProductQuantityData = $connect->query($updateProductQuantitySql);
		
		
		while ($updateProductQuantityResult = $updateProductQuantityData->fetch_row()) {
			$updateQuantity[$x] = $updateProductQuantityResult[0] - $_POST['quantity'][$x];							
				// update product table
				$updateProductTable = "UPDATE production SET quantity = '".$updateQuantity[$x]."' WHERE id = ".$_POST['productName'][$x]."";
				$connect->query($updateProductTable);

				// add into order_item

				$orderItemSql = "INSERT INTO order_item6 (order_id, product_id, quantity, rate,hsn, total) 
				VALUES ({$orderId}, '".$_POST['productName'][$x]."', '".$_POST['quantity'][$x]."', '".$_POST['rateValue'][$x]."', '".$_POST['hsnValue'][$x]."', '".$_POST['yyyValue'][$x]."')";

				$connect->query($orderItemSql);	
	}}// /for quantity
	}

	
	///edit order_item7	
	
	for($y = 0; $y < count($_POST['productName']); $y++) {		
		//  product table
		$updateProductQuantitySql1 = "SELECT production.quantity FROM production WHERE production.id = ".$_POST['productName'][$y]."";
		$updateProductQuantityData1 = $connect->query($updateProductQuantitySql1);			
			
		while ($updateProductQuantityResult1 = $updateProductQuantityData1->fetch_row()) {
			// order item table add product quantity
			$orderItemTableSql1 = "SELECT order_item7.quantity FROM order_item7 WHERE order_item7.order_id = {$orderId}";
			$orderItemResult1 = $connect->query($orderItemTableSql1);
			$orderItemData = $orderItemResult1->fetch_row();

			$editQuantity = $updateProductQuantityResult1[0] - $orderItemData[0];							

			$updateQuantitySql1 = "UPDATE production SET quantity = $editQuantity WHERE id = ".$_POST['productName'][$x]."";
			$connect->query($updateQuantitySql1);		
		} // while	
		
		if(count($_POST['productName']) == count($_POST['productName'])) {
			$readyToUpdateOrderItem = true;			
		}
	} // /for quantity

	// remove the order item data from order item table
	for($y = 0; $y < count($_POST['productName']); $y++) {			
		$removeOrderSql = "DELETE FROM order_item7 WHERE order_id = {$orderId}";
		$connect->query($removeOrderSql);	
	} // /for quantity

	if($readyToUpdateOrderItem) {
			// insert the order item data 
		 for($y = 0; $y < count($_POST['product1Name']); $y++) {			
     $updateProductQuantitySql5 = "SELECT production.quantity FROM production WHERE production.id = ".$_POST['product1Name'][$y]."";
		$updateProductQuantityData5 = $connect->query($updateProductQuantitySql5);
				
				while ($updateProductQuantityResult5 = $updateProductQuantityData5->fetch_row()) {
			$updateQuantity5[$y] = $updateProductQuantityResult5[0] - $_POST['ssd'][$y];							
				// update product table
				$updateProductTable5 = "UPDATE production SET quantity = '".$updateQuantity5[$y]."' WHERE id = ".$_POST['product1Name'][$y]."";
				$connect->query($updateProductTable5);

    $orderItemSql2 = "INSERT INTO order_item7 (order_id, product_id,hns,quantity,altquantity,rate,total) 
				VALUES ({$orderId}, '".$_POST['product1Name'][$y]."', '".$_POST['hsnValue1'][$y]."', '".$_POST['xxx'][$y]."', '".$_POST['ssd'][$y]."','".$_POST['rrd'][$y]."', '".$_POST['vvdValue'][$y]."' )";

				$connect->query($orderItemSql2);		
							
		}}
	}

	//edit order_item9
	for($z = 0; $z < count($_POST['product2Name']); $z++) {		
		//  product table
		$updateProductQuantitySql3 = "SELECT production.quantity FROM production WHERE production.id = ".$_POST['product2Name'][$z]."";
		$updateProductQuantityData3 = $connect->query($updateProductQuantitySql3);			
			
		while ($updateProductQuantityResult3 = $updateProductQuantityData3->fetch_row()) {
			// order item table add product quantity
			$orderItemTableSql3 = "SELECT order_item9.quantity FROM order_item9 WHERE order_item9.order_id = {$orderId}";
			$orderItemResult3 = $connect->query($orderItemTableSql3);
			$orderItemData3 = $orderItemResult3->fetch_row();

			$editQuantity = $updateProductQuantityResult3[0] - $orderItemData3[0];							

			$updateQuantitySql2 = "UPDATE production SET quantity = $editQuantity WHERE id = ".$_POST['product2Name'][$z]."";
			$connect->query($updateQuantitySql2);		
		} // while	
		
		if(count($_POST['product2Name']) == count($_POST['product2Name'])) {
			$readyToUpdateOrderItem = true;			
		}
	} // /for quantity

	// remove the order item data from order item table
	for($z = 0; $z < count($_POST['product2Name']); $z++) {			
		$removeOrderSql = "DELETE FROM order_item9 WHERE order_id = {$orderId}";
		$connect->query($removeOrderSql);	
	} // /for quantity

	if($readyToUpdateOrderItem) {
			// insert the order item data 
	for($g = 0; $g < count($_POST['product2Name']); $g++) {			
    $updateProductQuantitySql7 = "SELECT production.quantity FROM production WHERE production.id = ".$_POST['product2Name'][$g]."";
		$updateProductQuantityData7 = $connect->query($updateProductQuantitySql7);
				
				while ($updateProductQuantityResult7 = $updateProductQuantityData7->fetch_row()) {
			$updateQuantity7[$g] = $updateProductQuantityResult7[0] - $_POST['zzzValue2'][$g];							
				// update product table
				$updateProductTable7 = "UPDATE production SET quantity = '".$updateQuantity7[$g]."' WHERE id = ".$_POST['product2Name'][$g]."";
		$connect->query($updateProductTable7); }}
		
		
		
    for($z = 0; $z < count($_POST['product2Name']); $z++) {			
    $updateProductQuantitySql6 = "SELECT production.altquantity FROM production WHERE production.id = ".$_POST['product2Name'][$z]."";
		$updateProductQuantityData6 = $connect->query($updateProductQuantitySql6);
				
				while ($updateProductQuantityResult6 = $updateProductQuantityData6->fetch_row()) {
			$updateQuantity6[$z] = $updateProductQuantityResult6[0] - $_POST['rate6'][$z];							
				// update product table
				$updateProductTable6 = "UPDATE production SET altquantity = '".$updateQuantity6[$z]."' WHERE id = ".$_POST['product2Name'][$z]."";
				$connect->query($updateProductTable6);

                 $orderItemSql6 = "INSERT INTO order_item9 (order_id, product_id,hns,size,size1,quantity,altquantity,rate,total,totalfeet) 
				VALUES ({$orderId}, '".$_POST['product2Name'][$z]."', '".$_POST['hsn5'][$z]."', '".$_POST['size'][$z]."', '".$_POST['size2'][$z]."', '".$_POST['acpquantity'][$z]."' , '".$_POST['rate5'][$z]."', '".$_POST['rate6'][$z]."','".$_POST['zzzValue'][$z]."','".$_POST['zzzValue2'][$z]."')";

				$connect->query($orderItemSql6);		
							
		}}
		
		
	}

	$valid['success'] = true;
	$valid['messages'] = "Successfully Updated";
      header("Location: success5.php");		
	
	$connect->close();

	echo json_encode($valid);
 
} // /if $_POST
// echo json_encode($valid);