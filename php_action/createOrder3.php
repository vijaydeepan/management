<?php 	

require_once 'core.php';

$valid['success'] = array('success' => false, 'messages' => array(), 'order_id' => '');
// print_r($valid);
if($_POST) {	
		// add into order_item
		
				$mall = $_POST['subTotalValue'];


				
	for($x = 0; $x < count($_POST['productName']); $x++) {			

				$quotationorderItemSql = "INSERT INTO production_size (order_id,product_id,quantity) 
				VALUES ( '".$_POST['product2Name']."','".$_POST['productName'][$x]."','".$_POST['quantity'][$x]."')";

				$connect->query($quotationorderItemSql);		

					
			
							
				$dd = "UPDATE orders SET purchasexpense = '".$mall."' WHERE order_id = ".$_POST['product2Name']."";
				$connect->query($dd);
				
				
				
				

				
		} // while	

}
	$valid['success'] = true;
	$valid['messages'] = "Successfully Added";		

	$connect->close();

	echo json_encode($valid);
 
//if $_POST
// echo json_encode($valid);