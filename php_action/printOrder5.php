<style>
table, th, td {
	    border-collapse: collapse;

    border: 1px solid black;
}

table.blueTable {
  border: 3px solid #1C6EA4;
  background-color: #EEEEEE;
  width: 100%;
  text-align: center;
  border-collapse: collapse;
  
}
table.blueTable td, table.blueTable th {
  border: 1px solid #000000;
  padding: 7px 10px;
}
table.blueTable tbody td {
  font-size: 13px;
}
table.blueTable tr:nth-child(even) {
  background: #D0E4F5;
}
table.blueTable thead {
  background: #1C6EA4;
  background: -moz-linear-gradient(top, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
  background: -webkit-linear-gradient(top, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
  background: linear-gradient(to bottom, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
  border-bottom: 2px solid #444444;
}
table.blueTable thead th {
  font-size: 15px;
  font-weight: bold;
  color: #000000;
  border-left: 2px solid #D0E4F5;
}
table.blueTable thead th:first-child {
  border-left: none;
}

table.blueTable tfoot {
  font-weight: bold;
}
table.blueTable2 {
  border: 3px solid #000000;
  width: 100%;
  text-align: center;
  border-collapse: collapse;
}
table.blueTable2 td, table.blueTable2 th {
  border: 1px solid #000000;
  padding: 7px 10px;
}
table.blueTable2 tbody td {
  font-size: 13px;
}
table.blueTable2 tr:nth-child(even) {
  background: #D0E4F5;
}

table.blueTable2 thead th {
  font-size: 15px;
  font-weight: bold;
  color: #000000;
  border-left: 2px solid #000000;
}
table.blueTable2 thead th:first-child {
  border-left: none;
}

table.blueTable2 tfoot {
  font-weight: bold;
}



</style>
<?php 	

require_once 'core.php';

$orderId = $_POST['orderId'];

$sql = "SELECT order_date, client_name, client_contact, sub_total, vat, total_amount, discount, grand_total, paid, due,order_id,aluminium,product1quantity,product1rate,product1total,cgsttotal,sgsttotal,igsttotal,gst,product3total,product2total,words,phoneno,address FROM orders3 WHERE order_id = $orderId";
 
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
$print = $orderData[11];
$product1quantity = $orderData[12];
$product1rate = $orderData[13];
$product1total = $orderData[14];
$cgst = $orderData[15];
$sgst = $orderData[16];
$igst = $orderData[17];
$gst = $orderData[18];
$product3total = $orderData[19];
$product2total = $orderData[20];
$words = $orderData[21];
$xx2 = $orderData[22];
$xx3 = $orderData[23];




$companysql = "SELECT company,phoneno,address FROM company";
$companyresult = $connect->query($companysql);
$companyresult1 = $companyresult->fetch_array();

$company = $companyresult1[0];
$address= $companyresult1[1];
$phoneno = $companyresult1[2];

$orderItemSql = "SELECT order_item9.product_id, order_item9.rate, order_item9.quantity, order_item9.total,
production.product_name,order_item9.hns,order_item9.totalfeet,order_item9.altquantity FROM order_item9
	INNER JOIN production ON order_item9.product_id = production.id 
 WHERE order_item9.order_id = $orderId";
$orderItemResult = $connect->query($orderItemSql);


 $table = '
 <table style="width:715px;height:179px;" id="Table1">
<tr>
<td class="cell0">
<center>
<img src="images/D.png" id="Image1" alt="" height="72" width="122">
<br/>
<span style="color:#000000;font-family:Impact;font-size:37px;line-height:45px;">ANNAI METALS<br></span><span style="color:#000000;font-family:Arial;font-size:16px;line-height:18px;">74/80 Annai Garden,Kovaikulam Road,<br>Kongathanpari Post-Tirunelveli 627007,<br>Tamilnadu.<br>CONTACT NO:-9894065601,7358077720.<br>Email:- acrannaltraders@gmail.com.<br>GSTIN:- 33AKTPC7343R1ZH.</span></td></center>
</td>
</tr>
</table>
 
 <table class="blueTable2" border="0" width="100%;" style="border:1px solid black;border-top-style:1px solid black;border-bottom-style:1px solid black;" >
		<thead>
		<tr >
		
			<th style="width:23%;">

			<center>
				<center>Client Name : '.$clientName.'</center>
								<center>Phoneno : '.$xx2.'</center>
				<center>Address : '.$xx3.'</center>

				<center>GST no : '.$gst.'</center>
			</center>		
			</th>
			<th style="width:20%;">

				Invoice No : '.$order_id.'<br/>
				Bill Date : '.$orderDate.'
			
			</th>
				
		</tr>		
	</thead>
</table>
<table class="blueTable" border="0" width="100%;" cellpadding="5" style="border:1px solid black;border-top-style:1px solid black;border-bottom-style:1px solid black;">

	<tbody>

		<tr>
			<th>S.no</th>
			<th>Product</th>
		<th>Hns</th>
			<th>alquan</th>
			<th>Rate</th>
			<th>Totalfeet</th>
			<th>Amount</th>

		</tr>';

		$x = 1;
		while($row = $orderItemResult->fetch_array()) {			
						
			$table .= '<tr>
				<th>'.$x.'</th>
				<th>'.$row[4].'</th>
				<th>'.$row[5].'</th>
				<th>'.$row[1].'</th>
				<th>'.$row[7].'</th>

				<th>'.$row[6].'</th>
				
				<th>'.$row[3].'</th>

			</tr>
			';
		$x++;
		} // /while

		$table .= '
		<table border="0" width="100%;" cellpadding="2" style="border:1px solid black;border-top-style:1px solid black;border-bottom-style:1px solid black;">
		<tr>
			<th>ACP-TOTAL Amount</th>
			<th>'.$product3total.'</th>			
		</tr>
		<tr>
			<th>CGST</th>
			<th>'.$cgst.'</th>			
		</tr>
			<tr>
			<th>SGST</th>
			<th>'.$sgst.'</th>			
		</tr>
			<tr>
			<th>IGST</th>
			<th>'.$igst.'</th>			
		</tr>
	
		
		<tr>
			<th>Grand Total</th>
			<th>'.$grandTotal.'</th>			
		</tr>
			<tr>
			<th>Words</th>
			<th>'.$words.'</th>			
		</tr>
</table>
	</tbody>
</table>
 ';
 
 
 
 
 
 
 
 
 
 
  // /table2
 
 
$orderItemSql2 = "SELECT order_item7.product_id, order_item7.hns, order_item7.quantity,order_item7.altquantity,order_item7.rate,order_item7.total,
production.product_name FROM order_item7
	INNER JOIN production ON order_item7.product_id = production.id 
 WHERE order_item7.order_id = $orderId";
$orderItemResult2 = $connect->query($orderItemSql2);
 $table2 = '
   <table class="blueTable2" border="0" width="100%;" style="border:1px solid black;border-top-style:1px solid black;border-bottom-style:1px solid black;" >
	<thead>
		<tr >
		
			<th style="width:23%;">

			<img src="php_action/3.png" alt="Smiley face" height="142" width="442">

			</th>
			
				
		</tr>		
	</thead>
</table>
 <table>
	<thead>
		<tr >
		
			<th style="width:23%;">

			<center>
				<center>Client Name : '.$clientName.'</center>
								<center>Phoneno : '.$xx2.'</center>
				<center>Address : '.$xx3.'</center>
				<center>GST no : '.$gst.'</center>
				
			</center>		
			</th>
			<th style="width:20%;">

				Invoice No : '.$order_id.'<br/>
				Bill Date : '.$orderDate.'
			
			</th>
				
		</tr>		
	</thead>
</table>
<table border="0" width="100%;" cellpadding="5" style="border:1px solid black;border-top-style:1px solid black;border-bottom-style:1px solid black;">

	<tbody>

		<tr>
			<th>S.no</th>
			<th>Product</th>
			<th>HSN</th>
			<th>AlQuantity</th>
			<th>PerKgRate</th>
			<th>Amount</th>


		</tr>';

		$y = 1;
		while($row = $orderItemResult2->fetch_array()) {			
						
			$table2 .= '<tr>
				<th>'.$y.'</th>
								<th>'.$row[6].'</th>

				<th>'.$row[1].'</th>
				<th>'.$row[3].'</th>
									<th>'.$row[4].'</th>
				<th>'.$row[5].'</th>


			</tr>
			';
		$y++;
		} // /while

		$table2 .= '
		<table border="0" width="50%;"  cellpadding="2" style="border:1px solid black;border-top-style:1px solid black;border-bottom-style:1px solid black; margin-left:351px;">
		
	
		<tr>
			<th style="width:30%">Al-Total Amount</th>
			<th style="width:30%">'.$product1total.'</th>			
		</tr>
		<tr>
			<th>CGST</th>
			<th>'.$cgst.'</th>			
		</tr>
			<tr>
			<th>SGST</th>
			<th>'.$sgst.'</th>			
		</tr>
			<tr>
			<th>IGST</th>
			<th>'.$igst.'</th>			
		</tr>
		
		
		
		<tr>
			<th>Grand Total</th>
			<th>'.$grandTotal.'</th>			
		</tr>
			<tr>
			<th>Words</th>
			<th>'.$words.'</th>			
		</tr>
</table>
	</tbody>
</table>
 ';
 
 
 
 
 
 
 
 
 
 
   // /table3

 
 
 
 $orderItemSql3 = "SELECT order_item6.product_id, order_item6.hsn, order_item6.quantity,order_item6.total,
production.product_name FROM order_item6
	INNER JOIN production ON order_item6.product_id = production.id 
 WHERE order_item6.order_id = $orderId";
$orderItemResult3 = $connect->query($orderItemSql3);
 $table3 = '
   <table class="blueTable2" border="0" width="100%;" style="border:1px solid black;border-top-style:1px solid black;border-bottom-style:1px solid black;" >
	<thead>
		<tr >
		
			<th style="width:23%;">

			<img src="php_action/3.png" alt="Smiley face" height="142" width="442">

			</th>
			
				
		</tr>		
	</thead>
</table>
 <table>
	<thead>
		<tr >
		
			<th style="width:23%;">

			<center>
				<center>Client Name : '.$clientName.'</center>
								<center>Phoneno : '.$xx2.'</center>
				<center>Address : '.$xx3.'</center>
				<center>GST no : '.$gst.'</center>
			</center>		
			</th>
			<th style="width:20%;">

				Invoice No : '.$order_id.'<br/>
				Bill Date : '.$orderDate.'
			
			</th>
				
		</tr>		
	</thead>
</table>
<table border="0" width="100%;" cellpadding="5" style="border:1px solid black;border-top-style:1px solid black;border-bottom-style:1px solid black;">

	<tbody>

		<tr>
			<th>S.no</th>
			<th>Product</th>
			<th>HSN</th>
			<th>Quantity</th>
					<th>Total</th>


		</tr>';

		$z = 1;
		while($row = $orderItemResult3->fetch_array()) {			
						
			$table3 .= '<tr>
				<th>'.$z.'</th>
								<th>'.$row[4].'</th>

				<th>'.$row[1].'</th>
				<th>'.$row[2].'</th>
									<th>'.$row[3].'</th>


			</tr>
			';
		$z++;
		} // /while

		$table3 .= '
		<table border="0" width="100%;" cellpadding="2" style="border:1px solid black;border-top-style:1px solid black;border-bottom-style:1px solid black;">
		<tr>
			<th>Mat-TOTAL Amount</th>
			<th>'.$product2total.'</th>			
		</tr>
		<tr>
			<th>CGST</th>
			<th>'.$cgst.'</th>			
		</tr>
			<tr>
			<th>SGST</th>
			<th>'.$sgst.'</th>			
		</tr>
			<tr>
			<th>IGST</th>
			<th>'.$igst.'</th>			
		</tr>
	
	
		<tr>
			<th>Grand Total</th>
			<th>'.$grandTotal.'</th>			
		</tr>
			<tr>
			<th>Words</th>
			<th>'.$words.'</th>			
		</tr>
</table>
	</tbody>
</table>
 ';
 
 
 
 
 
 
    // /table4
	
	$orderItemSql4 = "SELECT order_item9.product_id, order_item9.rate, order_item9.quantity, order_item9.total,
production.product_name,order_item9.hns,order_item9.totalfeet,order_item9.altquantity FROM order_item9
	INNER JOIN production ON order_item9.product_id = production.id 
 WHERE order_item9.order_id = $orderId";
$orderItemResult4 = $connect->query($orderItemSql4);

$orderItemSql5 = "SELECT order_item7.product_id, order_item7.hns, order_item7.quantity,order_item7.altquantity,order_item7.rate,order_item7.total,
production.product_name FROM order_item7
	INNER JOIN production ON order_item7.product_id = production.id 
 WHERE order_item7.order_id = $orderId";
$orderItemResult5 = $connect->query($orderItemSql5);

	$table4 = '
   <table class="blueTable2" border="0" width="100%;" style="border:1px solid black;border-top-style:1px solid black;border-bottom-style:1px solid black;" >
	<thead>
		<tr >
		
			<th style="width:23%;">

			<img src="php_action/3.png" alt="Smiley face" height="142" width="442">

			</th>
			
				
		</tr>		
	</thead>
</table>
 <table>
	<thead>
		<tr >
		
			<th style="width:23%;">

			<center>
				<center>Client Name : '.$clientName.'</center>
								<center>Phoneno : '.$xx2.'</center>
				<center>Address : '.$xx3.'</center>
				<center>GST no : '.$gst.'</center>
				
			</center>		
			</th>
			<th style="width:20%;">

				Invoice No : '.$order_id.'<br/>
				Bill Date : '.$orderDate.'
			
			</th>
				
		</tr>		
	</thead>
</table>

<h3>ACP SECTION </h3>
<table class="blueTable" border="0" width="100%;" cellpadding="5" style="border:1px solid black;border-top-style:1px solid black;border-bottom-style:1px solid black;">

	<tbody>

			<tr>
			<th>S.no</th>
			<th>Product</th>
		<th>Hns</th>
			<th>alquan</th>
			<th>Rate</th>
			<th>Totalfeet</th>
			<th>Amount</th>

		</tr>';

		$x = 1;
		while($row = $orderItemResult4->fetch_array()) {			
						
			$table4 .= '<tr>
					<th>'.$x.'</th>
				<th>'.$row[4].'</th>
				<th>'.$row[5].'</th>
				<th>'.$row[1].'</th>
				<th>'.$row[7].'</th>

				<th>'.$row[6].'</th>
				
				<th>'.$row[3].'</th>


			</tr>
	
								</table>

			';
		$x++;
		} // /while

		
		
			$table4 .= '
		<br><br/>
	<h3>ALUMINIUM SECTION </h3>

		<table border="0" width="100%;" cellpadding="5" style="border:1px solid black;border-top-style:1px solid black;border-bottom-style:1px solid black;">

	<tbody>

		<tr>
			<th>S.no</th>
			<th>Product</th>
			<th>HSN</th>
			<th>AlQuantity</th>
			<th>PerKgRate</th>
			<th>Amount</th>
		

		</tr>';

		$y = 1;
		while($row = $orderItemResult5->fetch_array()) {			
						
			$table4 .= '<tr>
				<th>'.$y.'</th>
								<th>'.$row[6].'</th>

				<th>'.$row[1].'</th>
				<th>'.$row[3].'</th>
									<th>'.$row[4].'</th>
				<th>'.$row[5].'</th>


			</tr>
					</table>
				<br><br/>

			';
		$y++;
		} // /while
		
		


		
		
		
		
		
		
		
		
		
		
		
		
		
		$table4 .= '
		<table border="0" width="100%;" cellpadding="2" style="border:1px solid black;border-top-style:1px solid black;border-bottom-style:1px solid black;">
		<tr>
			<th>ACP-TOTAL Amount</th>
			<th>'.$product3total.'</th>			
		</tr>
			
		<tr>
			<th>Al-Total Amount</th>
			<th>'.$product1total.'</th>			
		</tr>
		
		<tr>
			<th>CGST</th>
			<th>'.$cgst.'</th>			
		</tr>
			<tr>
			<th>SGST</th>
			<th>'.$sgst.'</th>			
		</tr>
			<tr>
			<th>IGST</th>
			<th>'.$igst.'</th>			
		</tr>
	
	
		<tr>
			<th>Grand Total</th>
			<th>'.$grandTotal.'</th>			
		</tr>
			<tr>
			<th>Words</th>
			<th>'.$words.'</th>			
		</tr>
</table>
	</tbody>
</table>
 ';
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
   // /table5
	
	$orderItemSql6 = "SELECT order_item9.product_id, order_item9.rate, order_item9.quantity, order_item9.total,
production.product_name,order_item9.hns,order_item9.totalfeet,order_item9.altquantity FROM order_item9
	INNER JOIN production ON order_item9.product_id = production.id 
 WHERE order_item9.order_id = $orderId";
$orderItemResult6 = $connect->query($orderItemSql6);

$orderItemSql7 = "SELECT order_item6.product_id, order_item6.hsn, order_item6.quantity,order_item6.total,
production.product_name FROM order_item6
	INNER JOIN production ON order_item6.product_id = production.id 
 WHERE order_item6.order_id = $orderId";
$orderItemResult7 = $connect->query($orderItemSql7);

	$table5 = '
   <table class="blueTable2" border="0" width="100%;" style="border:1px solid black;border-top-style:1px solid black;border-bottom-style:1px solid black;" >
	<thead>
		<tr >
		
			<th style="width:23%;">

			<img src="php_action/3.png" alt="Smiley face" height="142" width="442">

			</th>
			
				
		</tr>		
	</thead>
</table>
 <table>
	<thead>
		<tr >
		
			<th style="width:23%;">

			<center>
				<center>Client Name : '.$clientName.'</center>
						<center>Phoneno : '.$xx2.'</center>
				<center>Address : '.$xx3.'</center>
				<center>GST no : '.$gst.'</center>
			</center>		
			</th>
			<th style="width:20%;">

				Invoice No : '.$order_id.'<br/>
				Bill Date : '.$orderDate.'
			
			</th>
				
		</tr>		
	</thead>
</table>

<h3>ACP SECTION </h3>
<table class="blueTable" border="0" width="100%;" cellpadding="5" style="border:1px solid black;border-top-style:1px solid black;border-bottom-style:1px solid black;">

	<tbody>

			<tr>
			<th>S.no</th>
			<th>Product</th>
		<th>Hns</th>
			<th>alquan</th>
			<th>Rate</th>
			<th>Totalfeet</th>
			<th>Amount</th>

		</tr>';

		$x = 1;
		while($row = $orderItemResult6->fetch_array()) {			
						
			$table5 .= '<tr>
					<th>'.$x.'</th>
				<th>'.$row[4].'</th>
				<th>'.$row[5].'</th>
				<th>'.$row[1].'</th>
				<th>'.$row[7].'</th>

				<th>'.$row[6].'</th>
				
				<th>'.$row[3].'</th>

			</tr>
	
								</table>

			';
		$x++;
		} // /while

		
		
			$table5 .= '
		<br><br/>
	<h3>Material SECTION </h3>

		<table border="0" width="100%;" cellpadding="5" style="border:1px solid black;border-top-style:1px solid black;border-bottom-style:1px solid black;">

	<tbody>

		<tr>
		<tr>
			<th>S.no</th>
			<th>Product</th>
			<th>HSN</th>
			<th>Quantity</th>
					<th>Total</th>
		</tr>';
$z = 1;
		while($row = $orderItemResult7->fetch_array()) {			
						
			$table5 .= '<tr>
				<th>'.$z.'</th>
								<th>'.$row[4].'</th>

				<th>'.$row[1].'</th>
				<th>'.$row[2].'</th>
									<th>'.$row[3].'</th>


			</tr>
			
			
		</table>
				<br><br/>
		
		
			';
		$z++;
		} // /while
		


		
		
		
		
		
		
		
		
		
		
		$table5 .= '
		<table border="0" width="100%;" cellpadding="2" style="border:1px solid black;border-top-style:1px solid black;border-bottom-style:1px solid black;">
		<tr>
			<th>ACP-TOTAL Amount</th>
			<th>'.$product3total.'</th>			
		</tr>
			<tr>
			<th>Mat-TOTAL Amount</th>
			<th>'.$product2total.'</th>			
		</tr>
		
		<tr>
			<th>CGST</th>
			<th>'.$cgst.'</th>			
		</tr>
			<tr>
			<th>SGST</th>
			<th>'.$sgst.'</th>			
		</tr>
			<tr>
			<th>IGST</th>
			<th>'.$igst.'</th>			
		</tr>
	
	
		<tr>
			<th>Grand Total</th>
			<th>'.$grandTotal.'</th>			
		</tr>
			<tr>
			<th>Words</th>
			<th>'.$words.'</th>			
		</tr>
		
</table>
	</tbody>
</table>
 ';
 
 
 
 
 
 
 
 
 
 
 
 
 
    // /table6
	
$orderItemSql8 = "SELECT order_item7.product_id, order_item7.hns, order_item7.quantity,order_item7.altquantity,order_item7.rate,order_item7.total,
production.product_name FROM order_item7
	INNER JOIN production ON order_item7.product_id = production.id 
 WHERE order_item7.order_id = $orderId";
$orderItemResult8 = $connect->query($orderItemSql8);

$orderItemSql9 = "SELECT order_item6.product_id, order_item6.hsn, order_item6.quantity,order_item6.total,
production.product_name FROM order_item6
	INNER JOIN production ON order_item6.product_id = production.id 
 WHERE order_item6.order_id = $orderId";
$orderItemResult9 = $connect->query($orderItemSql9);

	$table6 = '
   <table class="blueTable2" border="0" width="100%;" style="border:1px solid black;border-top-style:1px solid black;border-bottom-style:1px solid black;" >
	<thead>
		<tr >
		
			<th style="width:23%;">

			<img src="php_action/3.png" alt="Smiley face" height="142" width="442">

			</th>
			
				
		</tr>		
	</thead>
</table>
 <table>
	<thead>
		<tr >
		
			<th style="width:23%;">

			<center>
				<center>Client Name : '.$clientName.'</center>
								<center>Phoneno : '.$xx2.'</center>
				<center>Address : '.$xx3.'</center>
				<center>GST no : '.$gst.'</center>
			</center>		
			</th>
			<th style="width:20%;">

				Invoice No : '.$order_id.'<br/>
				Bill Date : '.$orderDate.'
			
			</th>
				
		</tr>		
	</thead>
</table>

	<h3>ALUMINIUM SECTION </h3>

		<table border="0" width="100%;" cellpadding="5" style="border:1px solid black;border-top-style:1px solid black;border-bottom-style:1px solid black;">

	<tbody>

		<tr>
			<th>S.no</th>
			<th>Product</th>
			<th>HSN</th>
			<th>AlQuantity</th>
			<th>PerKgRate</th>
			<th>Amount</th>

		</tr>';

		$y = 1;
		while($row = $orderItemResult8->fetch_array()) {			
						
			$table6 .= '<<tr>
				<th>'.$y.'</th>
								<th>'.$row[6].'</th>

				<th>'.$row[1].'</th>
				<th>'.$row[3].'</th>
									<th>'.$row[4].'</th>
				<th>'.$row[5].'</th>


			</tr>
					</table>
				<br><br/>

			';
		$y++;
		} // /while
		
		
		
		
		
			$table6 .= '
		<br><br/>
	<h3>Material SECTION </h3>

		<table border="0" width="100%;" cellpadding="5" style="border:1px solid black;border-top-style:1px solid black;border-bottom-style:1px solid black;">

	<tbody>

		<tr>
		<tr>
			<th>S.no</th>
			<th>Product</th>
			<th>HSN</th>
			<th>Quantity</th>
					<th>Total</th>
		</tr>';
$z = 1;
		while($row = $orderItemResult9->fetch_array()) {			
						
			$table6 .= '<tr>
				<th>'.$z.'</th>
								<th>'.$row[4].'</th>

				<th>'.$row[1].'</th>
				<th>'.$row[2].'</th>
									<th>'.$row[3].'</th>


			</tr>
			
			
		</table>
				<br><br/>
		
		
			';
		$z++;
		} // /while
		


		
		
		
		
		
		
		
		
		
		
		$table6 .= '
		<table border="0" width="100%;" cellpadding="2" style="border:1px solid black;border-top-style:1px solid black;border-bottom-style:1px solid black;">
			<tr>
			<th>Mat-TOTAL Amount</th>
			<th>'.$product2total.'</th>			
		</tr>
		
		<tr>
			<th>Al-Total Amount</th>
			<th>'.$product1total.'</th>			
		</tr>
		
		<tr>
			<th>CGST</th>
			<th>'.$cgst.'</th>			
		</tr>
			<tr>
			<th>SGST</th>
			<th>'.$sgst.'</th>			
		</tr>
			<tr>
			<th>IGST</th>
			<th>'.$igst.'</th>			
		</tr>
	
	
		<tr>
			<th>Grand Total</th>
			<th>'.$grandTotal.'</th>			
		</tr>
			<tr>
			<th>Words</th>
			<th>'.$words.'</th>			
		</tr>
		
</table>
	</tbody>
</table>
 ';
 
 
 
 
 
 

 
 
  // /table7
	
$orderItemSql10 = "SELECT order_item7.product_id, order_item7.hns, order_item7.quantity,order_item7.altquantity,order_item7.rate,order_item7.total,
production.product_name FROM order_item7
	INNER JOIN production ON order_item7.product_id = production.id 
 WHERE order_item7.order_id = $orderId";
$orderItemResult10 = $connect->query($orderItemSql10);

$orderItemSql11 = "SELECT order_item6.product_id, order_item6.hsn, order_item6.quantity,order_item6.total,
production.product_name FROM order_item6
	INNER JOIN production ON order_item6.product_id = production.id 
 WHERE order_item6.order_id = $orderId";
$orderItemResult11 = $connect->query($orderItemSql11);

	$orderItemSql12 = "SELECT order_item9.product_id, order_item9.rate, order_item9.quantity, order_item9.total,
production.product_name,order_item9.hns,order_item9.totalfeet,order_item9.altquantity FROM order_item9
	INNER JOIN production ON order_item9.product_id = production.id 
 WHERE order_item9.order_id = $orderId";
$orderItemResult12 = $connect->query($orderItemSql12);









	$table7 = '
   <table class="blueTable2" border="0" width="100%;" style="border:1px solid black;border-top-style:1px solid black;border-bottom-style:1px solid black;" >
	<thead>
		<tr >
		
			<th style="width:23%;">

			<img src="php_action/3.png" alt="Smiley face" height="142" width="442">

			</th>
			
				
		</tr>		
	</thead>
</table>
 <table>
	<thead>
		<tr >
		
			<th style="width:23%;">

			<center>
				<center>Client Name : '.$clientName.'</center>
							<center>Phoneno : '.$xx2.'</center>
				<center>Address : '.$xx3.'</center>
				<center>GST no : '.$gst.'</center>
			</center>		
			</th>
			<th style="width:20%;">

				Invoice No : '.$order_id.'<br/>
				Bill Date : '.$orderDate.'
			
			</th>
				
		</tr>		
	</thead>
</table>

	<h3>ALUMINIUM SECTION </h3>

		<table border="0" width="100%;" cellpadding="5" style="border:1px solid black;border-top-style:1px solid black;border-bottom-style:1px solid black;">

	<tbody>

		<tr>
			<th>S.no</th>
			<th>Product</th>
			<th>HSN</th>
			<th>AlQuantity</th>
			<th>PerKgRate</th>
			<th>Amount</th>
		

		</tr>';

		$y = 1;
		while($row = $orderItemResult10->fetch_array()) {			
						
			$table7 .= '<tr>
				<th>'.$y.'</th>
								<th>'.$row[6].'</th>

				<th>'.$row[1].'</th>
				<th>'.$row[3].'</th>
									<th>'.$row[4].'</th>
				<th>'.$row[5].'</th>


			</tr>
					</table>

			';
		$y++;
		} // /while
		
		
		
		
		
			$table7 .= '
	<h3>Material SECTION </h3>

		<table border="0" width="100%;" cellpadding="5" style="border:1px solid black;border-top-style:1px solid black;border-bottom-style:1px solid black;">

	<tbody>

		<tr>
		<tr>
			<th>S.no</th>
			<th>Product</th>
			<th>HSN</th>
			<th>Quantity</th>
					<th>Total</th>
		</tr>';
$z = 1;
		while($row = $orderItemResult11->fetch_array()) {			
						
			$table7 .= '<tr>
				<th>'.$z.'</th>
								<th>'.$row[4].'</th>

				<th>'.$row[1].'</th>
				<th>'.$row[2].'</th>
									<th>'.$row[3].'</th>


			</tr>
			
			
		</table>
		
		
			';
		$z++;
		} // /while
		

			$table7 .= '

		
		<h3>ACP SECTION </h3>
<table class="blueTable" border="0" width="100%;" cellpadding="5" style="border:1px solid black;border-top-style:1px solid black;border-bottom-style:1px solid black;">

	<tbody>

			<tr>
			<th>S.no</th>
			<th>Product</th>
		<th>Hns</th>
			<th>alquan</th>
			<th>Rate</th>
			<th>Totalfeet</th>
			<th>Amount</th>

		</tr>';

		$x = 1;
		while($row = $orderItemResult12->fetch_array()) {			
						
			$table7 .= '<tr>
				<th>'.$x.'</th>
				<th>'.$row[4].'</th>
				<th>'.$row[5].'</th>
				<th>'.$row[1].'</th>
				<th>'.$row[7].'</th>

				<th>'.$row[6].'</th>
				
				<th>'.$row[3].'</th>


			</tr>
	
								</table>

			';
		$x++;
		} // /while

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		$table7 .= '
		<table border="0" width="100%;" cellpadding="2" style="border:1px solid black;border-top-style:1px solid black;border-bottom-style:1px solid black;">
				<tr>
			<th>ACP-TOTAL Amount</th>
			<th>'.$product3total.'</th>			
		</tr>
			<tr>
			<th>Mat-TOTAL Amount</th>
			<th>'.$product2total.'</th>			
		</tr>
			
		<tr>
			<th>Al-Total Amount</th>
			<th>'.$product1total.'</th>			
		</tr>
		
		<tr>
			<th>CGST</th>
			<th>'.$cgst.'</th>			
		</tr>
			<tr>
			<th>SGST</th>
			<th>'.$sgst.'</th>			
		</tr>
			<tr>
			<th>IGST</th>
			<th>'.$igst.'</th>			
		</tr>
	
	
		<tr>
			<th>Grand Total</th>
			<th>'.$grandTotal.'</th>			
		</tr>
			<tr>
			<th>Words</th>
			<th>'.$words.'</th>			
		</tr>
		
</table>
	</tbody>
</table>
 ';
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
					if ($print == '1') 
					{
echo $table;
					}		
	if ($print == '2') 
					{
echo $table2;
					}	
	if ($print == '3') 
					{
echo $table3;
					}	

	if ($print == '12') 
					{
echo $table4;
					}	

	if ($print == '13') 
					{
echo $table5;
					}	
	if ($print == '23') 
					{
echo $table6;
					}	

	if ($print == '21') 
					{
echo $table4;
					}	

if ($print == '31') 
					{
echo $table5;
					}	

if ($print == '32') 
					{
echo $table6;
					}	
				
if ($print == '123') 
					{
echo $table7;
					}	

	if ($print == '131') 
					{
echo $table7;
					}	
if ($print == '213') 
					{
echo $table7;
					}	
if ($print == '231') 
					{
echo $table7;
					}

if ($print == '312') 
					{
echo $table7;
					}	
if ($print == '321') 
					{
echo $table7;
					}	

					
?>