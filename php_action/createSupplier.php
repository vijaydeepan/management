<?php 	

require_once 'core.php';

$valid['success'] = array('success' => false, 'messages' => array());

if($_POST) {	

	$suplier_name = $_POST['suplier_name'];
		$suplier_address = $_POST['suplier_address'];
		$suplier_contact = $_POST['suplier_contact'];
		$note = $_POST['note'];
		$gst = $_POST['gst'];


	$sql = "INSERT INTO supliers (suplier_name,suplier_address,suplier_contact,gst,note) VALUES ('$suplier_name','$suplier_address','$suplier_contact','$gst','$note')";

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