<?php 	

require_once 'core.php';

$valid['success'] = array('success' => false, 'messages' => array(), 'order_id' => '');
// print_r($valid);

	$orderDate 						= $_POST['orderDate'];	
  $clientName 					= $_POST['clientName'];
    $ff 					= $_POST['ff'];
    $clientContact 					= $_POST['dd'];
    $billno 					= $_POST['billno'];
    $gst 					= $_POST['xx'];
    $address					= $_POST['gg'];
    $phone 					= $_POST['ee'];
    $vehicle 					= $_POST['vv'];

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

 
    $product1total					= $_POST['Totalcp'];
	
	    $product2total					= $_POST['subTotalValue'];
	    $product3total					= $_POST['subTotalValue2'];
	    $word					= $_POST['word'];
    $fright					= $_POST['fright'];
    $expense					= $_POST['expense'];

	
$chkbox = $_POST['chkbox'];
 
 $chkNew = "";  
 
 foreach($chkbox as $chkNew1)  
   {  
      $chkNew .= $chkNew1 . "";  
   }  


	$sql = "INSERT INTO orders3 (order_date, client_name,client_contact ,billno,gst,  grand_total, paid, due, payment_type, payment_status, order_status,cgst,sgst,igst,cgsttotal,sgsttotal,igsttotal,aluminium,product1total,product2total,product3total,words,phoneno,address,fright,expense,vehicleno) VALUES ('$orderDate', '$clientName', '$clientContact ','$billno', '$gst',  '$grandTotalValue', '$paid', '$dueValue',' $paymentType',' $paymentStatus', 1,'$cgst','$sgst','$igst','$cgsttotal','$sgsttotal','$igsttotal','$chkNew','$product1total','$product2total',' $product3total','$word','$phone','$address','$fright','$expense','$vehicle')";
	
		$updateProductQuantitySql4 = "SELECT supliers.note FROM supliers WHERE suplier_id = $ff";
		$updateProductQuantityData2 = $connect->query($updateProductQuantitySql4);
		while ($updateProductQuantityResult5 = $updateProductQuantityData2->fetch_row()) {
			$updateQuantity2 = $updateProductQuantityResult5[0]+ $dueValue;	
	$jolly = "UPDATE supliers set note= '".$updateQuantity2."' WHERE suplier_id=$ff";
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

	for($x = 0; $x < count($_POST['productName']); $x++) {			
		$updateProductQuantitySql = "SELECT production.quantity FROM production WHERE production.id = ".$_POST['productName'][$x]."";
		$updateProductQuantityData = $connect->query($updateProductQuantitySql);
		
		
		while ($updateProductQuantityResult = $updateProductQuantityData->fetch_row()) {
			$updateQuantity[$x] = $updateProductQuantityResult[0] - $_POST['quantity'][$x];							
				// update product table
				$updateProductTable = "UPDATE production SET quantity = '".$updateQuantity[$x]."' WHERE id = ".$_POST['productName'][$x]."";
				$connect->query($updateProductTable);

				// add into order_item

				$orderItemSql = "INSERT INTO order_item6 (order_id, product_id, quantity, rate,hsn, total, order_item_status) 
				VALUES ('$order_id', '".$_POST['productName'][$x]."', '".$_POST['quantity'][$x]."', '".$_POST['rateValue'][$x]."', '".$_POST['hsnValue'][$x]."', '".$_POST['yyyValue'][$x]."', 1)";

				$connect->query($orderItemSql);	
	}}
		// Aluminium

		for($y = 0; $y < count($_POST['product1Name']); $y++) {			
$updateProductQuantitySql5 = "SELECT production.quantity FROM production WHERE production.id = ".$_POST['product1Name'][$y]."";
		$updateProductQuantityData5 = $connect->query($updateProductQuantitySql5);
				
				while ($updateProductQuantityResult5 = $updateProductQuantityData5->fetch_row()) {
			$updateQuantity5[$y] = $updateProductQuantityResult5[0] - $_POST['ssd'][$y];							
				// update product table
				$updateProductTable5 = "UPDATE production SET quantity = '".$updateQuantity5[$y]."' WHERE id = ".$_POST['product1Name'][$y]."";
				$connect->query($updateProductTable5);

$orderItemSql2 = "INSERT INTO order_item7 (order_id, product_id,hns,quantity,altquantity,rate,total) 
				VALUES ('$order_id', '".$_POST['product1Name'][$y]."', '".$_POST['hsnValue1'][$y]."', '".$_POST['xxx'][$y]."', '".$_POST['ssd'][$y]."', '".$_POST['rrdValue'][$y]."', '".$_POST['vvdValue'][$y]."' )";

				$connect->query($orderItemSql2);		
							
		}}

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
				VALUES ('$order_id', '".$_POST['product2Name'][$z]."', '".$_POST['hsn5'][$z]."', '".$_POST['size'][$z]."', '".$_POST['size2'][$z]."', '".$_POST['acpquantity'][$z]."' , '".$_POST['rate5'][$z]."', '".$_POST['rate6'][$z]."','".$_POST['zzzValue'][$z]."','".$_POST['zzzValue2'][$z]."')";

				$connect->query($orderItemSql6);		
							
		}}
		
		
		
		
		
		
		
				if($x == count($_POST['productName'])) {
					$orderItemStatus = true;
				}	
		// while	
	 // /for quantity

	$valid['success'] = true;
	$valid['messages'] = "Successfully Added";		

	$connect->close();

	echo json_encode($valid);
 
// /if $_POST
// echo json_encode($valid);