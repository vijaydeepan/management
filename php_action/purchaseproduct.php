<?php 	

require_once 'core.php';

$valid['success'] = array('success' => false, 'messages' => array());

if($_POST) {	

	$productName = $_POST['productName'];
			$rate = $_POST['rate'];
			$box = $_POST['rate2'];



	$sql = "INSERT INTO purchase_product (product_name,rate,box) VALUES ('$productName','$rate','$box')";

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