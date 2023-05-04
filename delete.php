<?php
	include('connect.php');
	$id=$_GET['id'];
	$c=$_GET['invoice'];
	$quantity=$_GET['quantity'];
		$sdsd=$_GET['dle'];

	$wapak=$_GET['code'];
	//edit qty
	$sql = "UPDATE product 
			SET quantity=quantity+?
			WHERE product_name=?";
	$q = $db->prepare($sql);
	$q->execute(array($quantity,$wapak));

	$result = $db->prepare("DELETE FROM sales_order WHERE transaction_id=:memid");
	$result->bindParam(':memid', $id);
	$result->execute();
	header("location: sales.php?id=$sdsd&invoice=$c");
?>