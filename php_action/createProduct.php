<?php 	

require_once 'core.php';

$valid['success'] = array('success' => false, 'messages' => array());

if($_POST) {	

	$productName 		= $_POST['productName'];
  // $productImage 	= $_POST['productImage'];
  $quantity 			= $_POST['quantity'];
  $rate 					= $_POST['rate'];
    $costprice 					= $_POST['costprice'];
  $profit 					= $_POST['profit'];
  $cgst 					= $_POST['cgst'];
    $cgsttotal 					= $_POST['cgsttotal'];

  $sgst 					= $_POST['sgst'];
      $sgsttotal 					= $_POST['sgsttotal'];

  $tax					= $_POST['tax'];
  $total 					= $_POST['total'];
  $brandName 			= $_POST['brandName'];
  $categoryName 	= $_POST['categoryName'];
  $productStatus 	= $_POST['productStatus'];

	$type = explode('.', $_FILES['productImage']['name']);
	$type = $type[count($type)-1];		
	$url = '../assests/images/stock/'.uniqid(rand()).'.'.$type;
	if(in_array($type, array('gif', 'jpg', 'jpeg', 'png', 'JPG', 'GIF', 'JPEG', 'PNG'))) {
		if(is_uploaded_file($_FILES['productImage']['tmp_name'])) {			
			if(move_uploaded_file($_FILES['productImage']['tmp_name'], $url)) {
				
				$sql = "INSERT INTO product (product_name, product_image, brand_id, categories_id, quantity, rate,costprice,profit,cgst,cgsttotal,sgst,sgsttotal,tax,total,active, status) 
				VALUES ('$productName', '$url', '$brandName', '$categoryName', '$quantity', '$rate', '$costprice','$profit','$cgst','$cgsttotal','$sgst','$sgsttotal','$tax','$total' ,'$productStatus', 1)";

				if($connect->query($sql) === TRUE) {
					$valid['success'] = true;
					$valid['messages'] = "Successfully Added";
					
				} else {
					$valid['success'] = false;
					$valid['messages'] = "Error while adding the members";
				}

			}	else {
				return false;
			}	// /else	
		} // if
	} // if in_array 		

	$connect->close();

	echo json_encode($valid);
 
} // /if $_POST