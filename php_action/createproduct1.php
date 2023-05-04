<?php 	

require_once 'core.php';

$valid['success'] = array('success' => false, 'messages' => array());

if($_POST) {	

	$product_name = $_POST['product_name'];
	$hns = $_POST['hns'];


	$sql = "INSERT INTO production (product_name,hns) VALUES ('$product_name','$hns')";
					$connect->query($sql);

					
	$sq2 = "INSERT INTO product1 (product_name) VALUES ('$product_name')";

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