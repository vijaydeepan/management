<?php 	

require_once 'core.php';

$valid['success'] = array('success' => false, 'messages' => array());

if($_POST) {	

	$deepan = $_POST['deepan1'];
			$invoiceno = $_POST['invoice_no'];

		$totalquantity = $_POST['total_quantity1'];

		$wastage = $_POST['wastage1'];
		$note = $_POST['note'];
	$quantity = $_POST['quantity'];
	$date = date('Y-m-d', strtotime($_POST['date2']));
$suplier_name = $_POST['suplier_name'];
	$price = $_POST['price'];
	$quantity2= $_POST['quantity21'];


	$sql = "INSERT INTO customerduepay (customer_name,due,payamount,order_date) VALUES ('$deepan','$totalquantity','$quantity2','$date')";

	
$updateProductQuantitySql5 = "SELECT customer.note FROM customer WHERE customer.customer_name = '".$deepan."'";
		$updateProductQuantityData5 = $connect->query($updateProductQuantitySql5);
		
		
		while ($updateProductQuantityResult5 = $updateProductQuantityData5->fetch_row()) {
			$updateQuantity5 = $updateProductQuantityResult5[0] - $quantity2;							
				// update product table
				$updateProductTable5 = "UPDATE customer SET note = '".$updateQuantity5."' WHERE customer_name = '".$deepan."'";
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