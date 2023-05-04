<?php 	

require_once 'core.php';

$valid['success'] = array('success' => false, 'messages' => array());

if($_POST) {	

	$deepan = $_POST['deepan'];
			$invoiceno = $_POST['invoice_no'];

		$totalquantity = $_POST['total_quantity'];

		$wastage = $_POST['wastage'];
		$note = $_POST['note'];
	$quantity = $_POST['quantity'];
	$date = date('Y-m-d', strtotime($_POST['date']));
$suplier_name = $_POST['suplier_name'];
	$price = $_POST['price'];
	$quantity2= $_POST['quantity2'];


	$sql = "INSERT INTO suplierduepay (suplier_name,due,payamount,order_date) VALUES ('$deepan','$totalquantity','$quantity2','$date')";

	
	
		$updateProductQuantitySql5 = "SELECT supliers.note FROM supliers WHERE supliers.suplier_name = '".$deepan."'";
		$updateProductQuantityData5 = $connect->query($updateProductQuantitySql5);
		
		
		while ($updateProductQuantityResult5 = $updateProductQuantityData5->fetch_row()) {
			$updateQuantity5 = $updateProductQuantityResult5[0] - $quantity2;							
				// update product table
				$updateProductTable5 = "UPDATE supliers SET note = '".$updateQuantity5."' WHERE suplier_name = '".$deepan."'";
				$connect->query($updateProductTable5);
	}
	
	

		
	
	if($connect->query($sql) === TRUE) {
	 	$valid['success'] = true;
		$valid['messages'] = "Successfully Added";
		 header("Location: success.php");
		
	} else {
	 	$valid['success'] = false;
	 	$valid['messages'] = "Error while adding the members";
	}
	 

	$connect->close();

	echo json_encode($valid);
 
} // /if $_POST