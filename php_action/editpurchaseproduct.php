<?php 	

require_once 'core.php';

$valid['success'] = array('success' => false, 'messages' => array());


if($_POST) {	
	$brandId = $_POST['brandId'];
	$orderDate = $_POST['orderDate'];

	$brandName = $_POST['clientName'];
	$clientContact = $_POST['clientContact'];


	$sql = "UPDATE purchase_product SET product_name = '$orderDate',rate = '$brandName',box = '$clientContact' WHERE id = '$brandId'";

	if($connect->query($sql) === TRUE) {
	 	$valid['success'] = true;
		$valid['messages'] = "Successfully Updated";
		
	} else {
	 	$valid['success'] = false;
	 	$valid['messages'] = "Error while adding the members";
	}
	 
$connect->close();

	echo json_encode($valid);
 
 
} // /if $_POST
	