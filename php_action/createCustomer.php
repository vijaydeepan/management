<?php 	

require_once 'core.php';

$valid['success'] = array('success' => false, 'messages' => array());

if($_POST) {	

	$customer_name = $_POST['customer_name'];
		$customer_address = $_POST['customer_address'];
		$customer_contact = $_POST['customer_contact'];
		$note = $_POST['note'];
		$gst = $_POST['gstno'];


	$sql = "INSERT INTO customer (customer_name,address,contact,note,gstno) VALUES ('$customer_name','$customer_address','$customer_contact','$note','$gst')";

	if($connect->query($sql) === TRUE) {
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