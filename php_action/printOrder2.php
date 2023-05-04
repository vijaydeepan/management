<style>
table, th, td {
	    border-collapse: collapse;

    border: 1px solid black;
}
</style>
<?php 	

require_once 'core.php';

$orderId = $_POST['orderId'];

$sql = "SELECT order_date, client_name, client_contact, sub_total, vat, total_amount, discount, grand_total, paid, due,order_id FROM orders2 WHERE order_id = $orderId";
 
$orderResult = $connect->query($sql);
$orderData = $orderResult->fetch_array();

$orderDate = $orderData[0];
$clientName = $orderData[1];
$clientContact = $orderData[2]; 
$subTotal = $orderData[3];
$vat = $orderData[4];
$totalAmount = $orderData[5]; 
$discount = $orderData[6];
$grandTotal = $orderData[7];
$paid = $orderData[8];
$due = $orderData[9];
$order_id = $orderData[10];

$companysql = "SELECT company,phoneno,address FROM company";
$companyresult = $connect->query($companysql);
$companyresult1 = $companyresult->fetch_array();

$company = $companyresult1[0];
$address= $companyresult1[1];
$phoneno = $companyresult1[2];

$orderItemSql = "SELECT order_item2.product_id, order_item2.rate, order_item2.quantity, order_item2.total,
purchase_product.product_name FROM order_item2
	INNER JOIN purchase_product ON order_item2.product_id = purchase_product.id 
 WHERE order_item2.order_id = $orderId";
$orderItemResult = $connect->query($orderItemSql);

 $table = '
 <table ">
	<thead>
		<tr >
		
			<th colspan="2">

			<center>
				Company Name : '.$companyresult1[0].' </br>
				Address : '.$companyresult1[2].'
				<center>Phone no : '.$companyresult1[1].'</center>
			</center>		
			</th>
			<th colspan="5"     text-align: right;>

				Invoice No : '.$order_id.'<br/>
				Quotation Date : '.$orderDate.'
				<center>Client Name : '.$clientName.'</center>
				Contact : '.$clientContact.'
			</th>
				
		</tr>		
	</thead>
</table>
<table border="0" width="100%;" cellpadding="5" style="border:1px solid black;border-top-style:1px solid black;border-bottom-style:1px solid black;">

	<tbody>

		<tr>
			<th>S.no</th>
			<th>Product</th>
			<th>Rate</th>
			<th>Quantity</th>
			<th>Total</th>
		</tr>';

		$x = 1;
		while($row = $orderItemResult->fetch_array()) {			
						
			$table .= '<tr>
				<th>'.$x.'</th>
				<th>'.$row[4].'</th>
				<th>'.$row[1].'</th>
				<th>'.$row[2].'</th>
				<th>'.$row[3].'</th>
			</tr>
			';
		$x++;
		} // /while

		$table .= '
		<table border="0" width="100%;" cellpadding="2" style="border:1px solid black;border-top-style:1px solid black;border-bottom-style:1px solid black;">
		<tr>
			<th>Sub Amount</th>
			<th>'.$subTotal.'</th>			
		</tr>
		<tr>
			<th>GST</th>
			<th>'.$vat.'</th>			
		</tr>
		<tr>
			<th>Total Amount</th>
			<th>'.$totalAmount.'</th>			
		</tr>	
		<tr>
			<th>Discount</th>
			<th>'.$discount.'</th>			
		</tr>
		<tr>
			<th>Grand Total</th>
			<th>'.$grandTotal.'</th>			
		</tr>
</table>
	</tbody>
</table>
 ';


$connect->close();

echo $table;