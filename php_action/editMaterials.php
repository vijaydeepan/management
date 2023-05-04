<?php 	

require_once 'core.php';

$valid['success'] = array('success' => false, 'messages' => array());

if($_POST) {	
	$orderId = $_POST['orderId'];

	
    $product_name = $_POST['product_name'];
	$quantity = $_POST['quantity'];
	$kgl = $_POST['kgl'];
	$selling_price = $_POST['selling_price'];

				
	$sql = "UPDATE production SET product_name = '$product_name', quantity = '$kgl',hns ='$hns',altquantity='$selling_price'  WHERE production.id = {$orderId}";	
	$connect->query($sql);
	

	$valid['success'] = true;
	$valid['messages'] = "Successfully Updated";
       header("Location: success2.php");
	
	$connect->close();

	echo json_encode($valid);
 
} // /if $_POST
// echo json_encode($valid);