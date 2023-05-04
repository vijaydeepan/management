<?php
session_start();
include('connect.php');
$a = $_POST['invoice'];
$b = $_POST['product'];
$c = $_POST['quantity'];
$w = $_POST['pt'];

$discount = $_POST['discount'];
$result = $db->prepare("SELECT * FROM product WHERE product_name= :userid");
$result->bindParam(':userid', $b);
$result->execute();
for($i=0; $row = $result->fetch(); $i++){
$asasa=$row['rate'];
$asasa1=$row['profit'];

$asasa4=$row['cgst'];
$asasa5=$row['sgst'];
$asasa6=$row['tax'];
$name=$row['product_name'];
}

//edit qty
$sql = "UPDATE product 
        SET quantity=quantity-?
		WHERE product_name=?";
$q = $db->prepare($sql);
$q->execute(array($c,$b));



$pp=$asasa*$c-$discount;
$df=$pp/100;
$hh=$df*$asasa4;


$ki=$asasa*$c-$discount;
$jj=$ki/100*$asasa5;


$hj=$asasa1-$discount;
$ee=$hj*$c;

$jk=$asasa*$c;
$kj=$jk-$discount;
$gg=$kj+$hh+$jj;


// query
$sql = "INSERT INTO sales_order (invoice,product,qty,amount,discount,cgst,cgsttotal,sgst,sgsttotal,profit,price) VALUES (:a,:b,:c,:d,:g,:h,:i,:j,:k,:l,:m)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$a,':b'=>$b,':c'=>$c,':d'=>$gg,':g'=>$discount,':h'=>$asasa4,':i'=>$hh,':j'=>$asasa5,':k'=>$jj,':l'=>$ee,':m'=>$asasa));   
header("location: sales.php?id=$w&invoice=$a")


?>