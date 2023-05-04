<?php 	

require_once 'core.php';

$valid['success'] = array('success' => false, 'messages' => array());


if($_POST) {	
	$brandId = $_POST['brandId'];
$address3 = $_POST['orderDate'];
  $due = $_POST['due']; 
	$brandName = $_POST['clientName'];
  $brandStatus = $_POST['clientContact']; 
  $gst = $_POST['gst']; 


	$sql = "UPDATE customer SET address = '$brandName',contact = '$brandStatus',due='$due',customer_name='$address3',gstno='$gst' WHERE customer_id = '$brandId'";

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
	