<?php
session_start();
include('connect.php');
$a = $_POST['invoice'];
$d = $_POST['ptype'];
$c = date('Y-m-d', strtotime($_POST['date']));
$w = $_POST['number'];

$d = $_POST['ptype'];
$e = $_POST['amount'];
$j = $_POST['amount2'];
$k = $_POST['amount3'];

$cname = $_POST['cname'];
if($d=='credit') {
$f = $_POST['due'];
$sql = "INSERT INTO sales_bill2 (product,date,amount,due,name,cgsttotal,sgsttotal) VALUES (:a,:c,:e,:f,:g,:j,:k,:w)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$a,':c'=>$c,':e'=>$e,':f'=>$f,':g'=>$cname,':j'=>$j,':k'=>$k,':w'=>$w));
header("location: preview.php?invoice=$a");
exit();
}
if($d=='cash') {
$f = $_POST['cash'];
$sql = "INSERT INTO sales_bill2 (product,date,amount,due,name,cgsttotal,sgsttotal,number) VALUES (:a,:c,:e,:f,:g,:j,:k,:w)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$a,':c'=>$c,':e'=>$e,':f'=>$f,':g'=>$cname,':j'=>$j,':k'=>$k,':w'=>$w));
header("location: preview2.php?invoice=$a");
exit();
}
// query



?>