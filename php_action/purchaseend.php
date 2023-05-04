<?php 	

require_once 'core.php';

$valid['success'] = array('success' => false, 'messages' => array());

if($_POST) {	

	$deepan = $_POST['deepan'];
			$invoiceno = $_POST['invoice_no'];

		$totalquantity = $_POST['total_quantity'];

		$wastage = $_POST['wastage'];
		$note = $_POST['note'];
	$quantity = $_POST['quantity'];
	$date = date('Y-m-d', strtotime($_POST['date']));
$suplier_name = $_POST['suplier_name'];
	$price = $_POST['price'];
	$quantity2= $_POST['quantity2'];


	$sql = "INSERT INTO purchase_order (product_name,invoice_no,total_quantity,wastage,note,quantity,date,suplier_name,price,taken_quantity) VALUES ('$deepan','$invoiceno','$totalquantity','$wastage','$note','$quantity','$date','$suplier_name','$price','$quantity2')";

	
	
		$updateProductQuantitySql5 = "SELECT purchase_product.purchase_quantity FROM purchase_product WHERE purchase_product.product_name = '".$deepan."'";
		$updateProductQuantityData5 = $connect->query($updateProductQuantitySql5);
		
		
		while ($updateProductQuantityResult5 = $updateProductQuantityData5->fetch_row()) {
			$updateQuantity5 = $updateProductQuantityResult5[0] + $quantity2;							
				// update product table
				$updateProductTable5 = "UPDATE purchase_product SET purchase_quantity = '".$updateQuantity5."' WHERE product_name = '".$deepan."'";
				$connect->query($updateProductTable5);
	}
	
	
	
	
	
	

		$updateProductQuantitySql = "SELECT purchase_product.quantity FROM purchase_product WHERE purchase_product.product_name = '".$deepan."'";
		$updateProductQuantityData = $connect->query($updateProductQuantitySql);
		
		
		while ($updateProductQuantityResult = $updateProductQuantityData->fetch_row()) {
			$updateQuantity = $updateProductQuantityResult[0] + $quantity;							
				// update product table
				$updateProductTable = "UPDATE purchase_product SET quantity = '".$updateQuantity."' WHERE product_name = '".$deepan."'";
				$connect->query($updateProductTable);
	}
	
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