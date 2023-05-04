<?php 	

require_once 'core.php';

$valid['success'] = array('success' => false, 'messages' => array());


if($_POST) {	
	$brandId = $_POST['brandId'];
	$orderDate = $_POST['orderDate'];

	$brandName = $_POST['clientName'];
  $brandStatus = $_POST['clientContact']; 
  $due = $_POST['due']; 
  $gst = $_POST['gst']; 


	$sql = "UPDATE supliers SET suplier_address = '$brandName',suplier_contact = '$brandStatus',suplier_name = '$orderDate',note = '$due',gst='$gst' WHERE suplier_id = '$brandId'";

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
	