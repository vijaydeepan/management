<?php 	

require_once 'core.php';

$valid['success'] = array('success' => false, 'messages' => array());

if($_POST) {	

	$product_name = $_POST['color_name'];
	$selling_price = $_POST['selling_price'];


	$sql = "INSERT INTO production (product_name,selling_price) VALUES ('$product_name','$selling_price')";
					$connect->query($sql);

					
	$sq2 = "INSERT INTO product4 (product_name) VALUES ('$product_name')";

	if($connect->query($sq2) === TRUE) {
	 	$valid['success'] = true;
		$valid['messages'] = "Successfully Added";	
				 header("Location: success2.php");

	} else {
	 	$valid['success'] = false;
	 	$valid['messages'] = "Error while adding the members";
	}
	 

	$connect->close();

	echo json_encode($valid);
 
} // /if $_POST