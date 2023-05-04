<?php 	

require_once 'core.php';

$valid['success'] = array('success' => false, 'messages' => array());

if($_POST) {	

	$product_name = $_POST['product_name'];
	$assa = $_POST['quantity'];
	$date = date('Y-m-d', strtotime($_POST['date']));
	$cost_price = $_POST['cost_price'];
	$selling_price = $_POST['selling_price'];


	$sql = "INSERT INTO production_order (date,product_name,cost_price,quantity,selling_price) VALUES ('$date','$product_name','$cost_price','$assa','$selling_price')";
	

	if($connect->query($sql) === TRUE) {
	 	$valid['success'] = true;
		$valid['messages'] = "Successfully Added";	
	} else {
	 	$valid['success'] = false;
	 	$valid['messages'] = "Error while adding the members";
	}
	 

	$connect->close();

	echo json_encode($valid);
}
 // /if $_POST