<?php 	

require_once 'core.php';

$valid['success'] = array('success' => false, 'messages' => array(), 'order_id' => '');
// print_r($valid);
if($_POST) {	

	$orderDate 						=date('Y-m-d', strtotime($_POST['orderDate']));	
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
      $subTotalValue 				= $_POST['subTotalValue'];
	   $totalAmountValue     = $_POST['totalAmountValue'];
      $cgst 					= $_POST['tax'];
    $sgst 					= $_POST['tax2'];
    $igst 					= $_POST['tax3'];
    $cgsttotal					= $_POST['vatValue'];
    $sgsttotal 					= $_POST['vatValue2'];
    $igsttotal					= $_POST['vatValue3'];

 
  
  
				
	$sql = "INSERT INTO orders4 (order_date, client_name,client_contact,billno,gstno, discount, grand_total, paid, due, payment_type, payment_status, order_status, sub_total,total_amount, cgst,sgst,igst,cgsttotal,sgsttotal,igsttotal) VALUES ('$orderDate', '$clientName', '$clientContact', '$billno','$gst',  '$discount', '$grandTotalValue', '$paid', '$dueValue', $paymentType, $paymentStatus, 1, '$subTotalValue' ,'$totalAmountValue' ,  $cgst,$sgst,$igst,$cgsttotal,$sgsttotal,$igsttotal)";
	
		$updateProductQuantitySql4 = "SELECT customer.due FROM customer WHERE customer_id = $ff";
		$updateProductQuantityData2 = $connect->query($updateProductQuantitySql4);
		while ($updateProductQuantityResult5 = $updateProductQuantityData2->fetch_row()) {
			$updateQuantity2 = $updateProductQuantityResult5[0]+ $dueValue;	
	$jolly = "UPDATE customer set due= '".$updateQuantity2."' WHERE customer_id=$ff";
				$connect->query($jolly);

				
		}
				
				
	
	$order_id;
	$orderStatus = false;
	if($connect->query($sql) === true) {
		$order_id = $connect->insert_id;
		$valid['order_id'] = $order_id;	

		$orderStatus = true;
	}

		
	// echo $_POST['productName'];
	$orderItemStatus = false;

	
	
	
	
	for($y = 0; $y < count($_POST['productName']); $y++) {			
		$updateProductQuantitySql3 = "SELECT production.altquantity FROM production WHERE production.id = ".$_POST['productName'][$y]."";
		$updateProductQuantityData3 = $connect->query($updateProductQuantitySql3);
		
		
		while ($updateProductQuantityResult3 = $updateProductQuantityData3->fetch_row()) {
			$updateQuantity3[$y] = $updateProductQuantityResult3[0] + $_POST['alquantity'][$y];							
				// update product table
				$updateProductTable3 = "UPDATE production SET altquantity = '".$updateQuantity3[$y]."' WHERE id = ".$_POST['productName'][$y]."";
				$connect->query($updateProductTable3);

	
	}}

	
	for($x = 0; $x < count($_POST['productName']); $x++) {			
		$updateProductQuantitySql = "SELECT production.quantity FROM production WHERE production.id = ".$_POST['productName'][$x]."";
		$updateProductQuantityData = $connect->query($updateProductQuantitySql);
		
		
		while ($updateProductQuantityResult = $updateProductQuantityData->fetch_row()) {
			$updateQuantity[$x] = $updateProductQuantityResult[0] + $_POST['foot'][$x];							
				// update product table
				$updateProductTable = "UPDATE production SET quantity = '".$updateQuantity[$x]."' WHERE id = ".$_POST['productName'][$x]."";
				$connect->query($updateProductTable);

				// add into order_item
				$orderItemSql = "INSERT INTO order_item8 (order_id, product_id,hsn, quantity,altquantity,feet, rate,disc, total, order_item_status) 
				VALUES ('$order_id', '".$_POST['productName'][$x]."','".$_POST['hsn'][$x]."','".$_POST['quantity'][$x]."','".$_POST['alquantity'][$x]."','".$_POST['foot'][$x]."', '".$_POST['rate'][$x]."',
				'".$_POST['yy'][$x]."', '".$_POST['total'][$x]."', 1)";

				$connect->query($orderItemSql);		

				if($x == count($_POST['productName'])) {
					$orderItemStatus = true;
				}		
		} // while	
	} // /for quantity

	$valid['success'] = true;
	$valid['messages'] = "Successfully Added";		
header("Location: success9.php");
	$connect->close();

	echo json_encode($valid);
 
} // /if $_POST
// echo json_encode($valid);