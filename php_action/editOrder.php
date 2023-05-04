<?php 	

require_once 'core.php';

$valid['success'] = array('success' => false, 'messages' => array());

if($_POST) {	
	$orderId = $_POST['orderId'];

		$orderDate 						=  date('Y-m-d', strtotime($_POST['orderDate']));	
  $clientName 					= $_POST['clientName'];
   $ff 					= $_POST['ff'];
   
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
  
  
  
  
				
	$sql = "UPDATE orders SET order_date = '$orderDate',client_name = '$ff',billno = '$billno',gstno = ' $gst',discount = '$discount',grand_total = '$grandTotalValue',paid = '$paid',due = '$dueValue',payment_type = '$paymentType',payment_status = '$paymentStatus',cgst = '$cgst',sgst = '$sgst',igst = '$igst',cgsttotal = '$cgsttotal',sgsttotal = '$sgsttotal',igsttotal = '$igsttotal',sub_total = '$subtotal',total_amount= '$totalamount',
	order_status = 1 WHERE order_id = {$orderId}";	
	$connect->query($sql);
	
			// insert the order item data 
		for($x = 0; $x < count($_POST['productName']); $x++) {			
			$updateProductQuantitySql = "SELECT production.quantity FROM production WHERE production.id = ".$_POST['productName'][$x]."";
			$updateProductQuantityData = $connect->query($updateProductQuantitySql);
			
			while ($updateProductQuantityResult = $updateProductQuantityData->fetch_row()) {
				$updateQuantity[$x] = $updateProductQuantityResult[0] + $_POST['quantity'][$x];							
					// update product table
					$updateProductTable = "UPDATE production SET quantity = '".$updateQuantity[$x]."' WHERE production.id = ".$_POST['productName'][$x]."";
					$connect->query($updateProductTable);

					// add into order_item
				$orderItemSql = "INSERT INTO order_item (order_id,product_id,hns,quantity,rate, total, order_item_status) 
				VALUES ({$orderId},'".$_POST['productName'][$x]."','".$_POST['hsn'][$x]."','".$_POST['quantity'][$x]."','".$_POST['rate'][$x]."', '".$_POST['totalValue'][$x]."', 1)";

				$connect->query($orderItemSql);		
			} // while	
		} // /for quantity
	

	

	$valid['success'] = true;
	$valid['messages'] = "Successfully Updated";
     header("Location: success3.php");	
	
	$connect->close();

	echo json_encode($valid);
 
} // /if $_POST
// echo json_encode($valid);