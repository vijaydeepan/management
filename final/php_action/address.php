<?php 	

require_once 'core.php';

$valid['success'] = array('success' => false, 'messages' => array());

if($_POST) {	

	$company = $_POST['company'];
  $address = $_POST['address']; 
  $phoneno = $_POST['phoneno'];

	$sql = "UPDATE company SET company = '$company', address = '$address', phoneno = '$phoneno'";

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

?>