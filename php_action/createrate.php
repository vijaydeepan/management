<?php 	

require_once 'core.php';

$valid['success'] = array('success' => false, 'messages' => array());

if($_POST) {	

	$rate = $_POST['rate'];
	$cgst = $_POST['cgst'];
	$sgst = $_POST['sgst'];
	$igst = $_POST['igst'];
	$acp = $_POST['acp'];
	$mat = $_POST['mat'];
	$alu = $_POST['alu'];

	$updateProductTable = "UPDATE product1rate SET Rate = '$rate',cgst='$cgst',sgst='$sgst',igst='$igst',alhns='$alu',mathns='$mat',acphns='$acp'";
	
	
	

					

	if($connect->query($updateProductTable) === TRUE) {
	 	$valid['success'] = true;
		$valid['messages'] = "Successfully Added";	
				 header("Location: successrate.php");

	} else {
	 	$valid['success'] = false;
	 	$valid['messages'] = "Error while adding the members";
	}
	 

	$connect->close();

	echo json_encode($valid);
 
} // /if $_POST