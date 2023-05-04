<?php 	

require_once 'core.php';

$valid['success'] = array('success' => false, 'messages' => array(), 'order_id' => '');
// print_r($valid);

		$mall = $_POST['Quantity2'];
	$product_name = $_POST['product_name'];

	$orderDate 						= date('Y-m-d', strtotime($_POST['orderDate']));	
	$cost_price = $_POST['cost_price'];
	$selling_price = $_POST['selling_price'];

$sql = "INSERT INTO production_order (date,product_name,cost_price,quantity,selling_price) VALUES ('$orderDate','$product_name','$cost_price','$mall','$selling_price')";
				$connect->query($sql);


				$hello = "SELECT quantity FROM production WHERE id = ".$_POST['product_name5']."";
		$win = $connect->query($hello);

	while ($zero = $win->fetch_row()) {
			$nana = $zero[0] - $_POST['Quantity2'];							
				// update product table
				$leak= "UPDATE production SET quantity = '".$nana."' WHERE id = ".$_POST['product_name5']."";
				$connect->query($leak);	
				
				
				
	}
				



if($_POST) {	

		
	// echo $_POST['productName'];
	$orderItemStatus = false;

	for($x = 0; $x < count($_POST['product_id']); $x++) {			
		$updateProductQuantitySql = "SELECT purchase_product.quantity FROM purchase_product WHERE purchase_product.id = ".$_POST['product_id'][$x]."";
		$updateProductQuantityData = $connect->query($updateProductQuantitySql);
		
		
		while ($updateProductQuantityResult = $updateProductQuantityData->fetch_row()) {
			$updateQuantity[$x] = $updateProductQuantityResult[0] - $_POST['quantity'][$x]*$mall;							
				// update product table
				$updateProductTable = "UPDATE purchase_product SET quantity = '".$updateQuantity[$x]."' WHERE id = ".$_POST['product_id'][$x]."";
				$connect->query($updateProductTable);
	

				
				if($x == count($_POST['product_id'])) {
					$orderItemStatus = true;
				}		
		} // while	
	} // /for quantity

	$valid['success'] = true;
	$valid['messages'] = "Successfully Added";		
					 header("Location: success2.php");

	$connect->close();

	echo json_encode($valid);
 
} // /if $_POST
// echo json_encode($valid);