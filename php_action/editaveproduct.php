<?php 	

require_once 'core.php';

$valid['success'] = array('success' => false, 'messages' => array());


if($_POST) {	
	$orderId = $_POST['orderId'];
$product_name = $_POST['orderDate'];
	$selling_price = $_POST['clientName'];
	$hns = $_POST['hns'];
   $quantity = $_POST['quantity'];
   

	$sql = "UPDATE production SET product_name = '$product_name',selling_price = '$selling_price',hns = '$hns',
	quantity='$quantity' WHERE id = '$orderId'";

	if($connect->query($sql) === TRUE) {
	 	$valid['success'] = true;
		$valid['messages'] = "Successfully Updated";
							 header("Location: success2.php");

	} else {
	 	$valid['success'] = false;
	 	$valid['messages'] = "Error while adding the members";
	}
	 
$connect->close();

	echo json_encode($valid);
 
 
} // /if $_POST
	