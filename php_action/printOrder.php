<style>
table, th, td {
	    border-collapse: collapse;
    font-weight: normal;

    border: 1px solid black;
}

@media print
{
    #footer {
         display: block; 
         position: fixed; 
         bottom: 0;
    } 
}
    * {
      margin: 0;
      padding: 0;
    }

    html, body {
      height: 100%;
      overflow: hidden;
    }

    #wrapper {
      position: absolute;
      overflow: auto;
      left: 0;
      right: 0;
      top: 0;
      bottom: 0;
      border: 2px solid black;
    }


</style>
<?php 	

require_once 'core.php';

$orderId = $_POST['orderId'];

$sql = "SELECT order_date, client_name, client_contact, sub_total, vat, total_amount, discount, grand_total, paid, due,order_id,aluminium,product1quantity,product1rate,product1total,cgsttotal,sgsttotal,igsttotal,gst,product3total,product2total,words,phoneno,address,fright,expense,vehicleno FROM orders3 WHERE order_id = $orderId";
 
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
$xx4 = $orderData[24];
$xx5 = $orderData[25];
$vehicle = $orderData[26];



$dmy = date("d-m-Y", strtotime($orderDate));


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
   <div id="wrapper">

 <table class="blueTable2" border="0" width="100%;" >
		<tr >
		
			<th style="width:23%;">

			<img src="php_action/df2.png" alt="Smiley face" height="142" width="100%">

			</th>
			
				
		</tr>		
</table>
 
 <table class="blueTable2" border="0" width="100%;"  >
		<thead>
		
		
		
		<tr>
<td style="width: 50%;" rowspan="5">To:-	 '.$clientName.' <br/>
				'.$xx3.' <br/>

								Phoneno : '.$xx2.' <br/>

				GST no : '.$gst.'<br/>
								Vehicle no : '.$vehicle.'</td> <br/>

<td style="width: 114.667px;">Invoice No :</td>
<td style="width: 119.333px;">'.$order_id.'</td>
</tr>
<tr>
<td style="width: 114.667px;">Bill Date :</td>
<td style="width: 119.333px;"> '.$orderDate.'</td>
</tr>
		
		
		
		
		
		
		
		
		
	</thead>
</table>
<table  class="blueTable2" width="100%;" cellpadding="1" style="border:none;" >

	<tbody>

		<tr>
			<th>Product</th>
		<th>HSN</th>
			<th>alquan</th>
			<th>Rate</th>
			<th>Totalfeet</th>
			<th>Amount</th>

		</tr>';

		$x = 1;
		while($row = $orderItemResult->fetch_array()) {			
						
			$table .= '<tr>
				<th style="border:none;width:40%;">'.$row[4].'</th>
				<th style="border:none;">'.$row[5].'</th>
				<th style="border:none;">'.$row[1].'</th>
				<th style="border:none;">'.$row[7].'</th>

				<th style="border:none;">'.$row[6].'</th>
				
				<th style="border:none;">'.$row[3].'</th>

			</tr>
			';
		$x++;
		} // /while

		$table .= '
	

		<table border="0" width="30%;" cellpadding="2" style="margin-left:450.5px;">
		<tr>
			<th style="width:50%;border:none;">ACP-TOTAL Amount</th>
			<th style="border:none;">'.$product3total.'</th>			
		</tr>
		<tr>
			<th style="border:none;">CGST 9%</th>
			<th style="border:none;">'.$cgst.'</th>			
		</tr>
			<tr>
			<th style="border:none;">SGST 9%</th>
			<th style="border:none;">'.$sgst.'</th>			
		</tr>
			<tr>
			<th style="border:none;">IGST</th>
			<th style="border:none;"> '.$igst.'</th>			
		</tr>
	<tr>
			<th style="border:none;">Freight Charges</th>
			<th style="border:none;"> '.$xx4.'</th>			
		</tr>
		<tr>
			<th style="border:none;">Other Charges</th>
			<th style="border:none;"> '.$xx5.'</th>			
		</tr>
		
		<tr>
			<th style="border:none;">Grand Total</th>
			<th style="border:none;">'.$grandTotal.'</th>			
		</tr>
			
</table>
	</tbody>
</table>
 ';
 
 
 		$table .= '
<div id="hello">
 <tr>
			<th style="border:none;"><b>Net Total(in Words)</b></th><br>		</tr>

		 <tr>
	<th style="border:none;">'.$words.'</th>			
		</tr>
		</div>
 
  ';

  		$table .= '
<table id="footer" width="100%" style="border:none;"> 
<tr >
		
			<th style="width:23%;">

			<img src="php_action/ee.png" alt="Smiley face" height="142" width="100%">

			</th>
			
				
		</tr>		
</table>
   </div>

   ';

 
  // /table2
 
 
$orderItemSql2 = "SELECT order_item7.product_id, order_item7.hns, order_item7.quantity,order_item7.altquantity,order_item7.rate,order_item7.total,
production.product_name FROM order_item7
	INNER JOIN production ON order_item7.product_id = production.id 
 WHERE order_item7.order_id = $orderId";
$orderItemResult2 = $connect->query($orderItemSql2);
 $table2 = '
    <div id="wrapper">

 <table class="blueTable2" border="0" width="100%;" >
		<tr >
		
			<th style="width:23%;">

			<img src="php_action/df2.png" alt="Smiley face" height="142" width="100%">

			</th>
			
				
		</tr>		
</table>
 
<table  border="1" width="100%;" cellpadding="1" >
		<thead>
		
		
		
		<tr>
<td style="width: 50%;" rowspan="5">To:-	'.$clientName.' <br/>
				 '.$xx3.' <br/>

								Phoneno : '.$xx2.' <br/>

				GST no : '.$gst.' <br/>
												Vehicle no : '.$vehicle.'</td> <br/>

<td style="width: 114.667px;">Invoice No :</td>
<td style="width: 119.333px;">'.$order_id.'</td>
</tr>
<tr>
<td style="width: 114.667px;">Bill Date :</td>
<td style="width: 119.333px;"> '.$orderDate.'</td>
</tr>
		
		
		
		
		
		
		
		
		
	</thead>
</table>
<table  border="1" width="100%;" cellpadding="1" style="border:none;">

	<tbody>

		<tr>
			<th>Product</th>
			<th>HSN</th>
			<th>Quantity</th>
			<th>Rate</th>
			<th>Amount</th>


		</tr>';

		$y = 1;
		while($row = $orderItemResult2->fetch_array()) {			
						
			$table2 .= '<tr>
								<th style="border:none;width:40%;">'.$row[6].'</th>

				<th  style="border:none;">'.$row[1].'</th>
				<th  style="border:none;">'.$row[3].'</th>
									<th  style="border:none;">'.$row[4].'</th>
				<th  style="border:none;">'.$row[5].'</th>


			</tr>
			';
		$y++;
		} // /while

		$table2 .= '
		

		<table border="0" width="30%;" cellpadding="2" style="border:1px solid black;margin-left:450.5px;border-top-style:1px solid black;border-bottom-style:1px solid black;">
		
	
		<tr>
			<th style="width:30%;border:none;">Al-Total Amount</th>
			<th style="width:30%;border:none;">'.$product1total.'</th>			
		</tr>
		<tr>
			<th style="border:none;">CGST 9%</th>
			<th style="border:none;">'.$cgst.'</th>			
		</tr>
			<tr>
			<th style="border:none;">SGST 9%</th>
			<th style="border:none;">'.$sgst.'</th>			
		</tr>
			<tr>
			<th style="border:none;">IGST</th>
			<th style="border:none;">'.$igst.'</th>			
		</tr>
		
			<tr>
			<th style="border:none;">Freight Charges</th>
			<th style="border:none;"> '.$xx4.'</th>			
		</tr>
		<tr>
			<th style="border:none;">Other Charges</th>
			<th style="border:none;"> '.$xx5.'</th>			
		</tr>
		
		<tr>
			<th style="border:none;">Grand Total</th>
			<th style="border:none;">'.$grandTotal.'</th>			
		</tr>
			
</table>
	</tbody>
</table>
 ';
 
 
 		$table2 .= '
<div id="hello">
 <tr>
			<th style="border:none;"><b>Net Total(in Words)</b></th><br>		</tr>

		 <tr>
	<th style="border:none;">'.$words.'</th>			
		</tr>
		</div>
 
  ';
 
 	$table2 .= '
<table id="footer" width="100%" style="border:none;"> 
<tr >
		
			<th style="width:23%;">

			<img src="php_action/ee.png" alt="Smiley face" height="142" width="100%">

			</th>
			
				
		</tr>		
</table>
 
 </div>
   ';

 
 
 
 
 
 
   // /table3

 
 
 
 $orderItemSql3 = "SELECT order_item6.product_id, order_item6.hsn, order_item6.quantity,order_item6.total,order_item6.rate,
production.product_name FROM order_item6
	INNER JOIN production ON order_item6.product_id = production.id 
 WHERE order_item6.order_id = $orderId";
$orderItemResult3 = $connect->query($orderItemSql3);
 $table3 = '
    <div id="wrapper">

 <table class="blueTable2" border="0" width="100%;" >
		<tr >
		
			<th style="width:23%;">

			<img src="php_action/df2.png" alt="Smiley face" height="142" width="100%">

			</th>
			
				
		</tr>		
</table>
 
 <table class="blueTable2" border="0" width="100%;" style="border:1px solid black;border-top-style:1px solid black;border-bottom-style:1px solid black;" >
		<thead>
		
		
		
		<tr>
<td style="width: 50%;" rowspan="5">To:-	 '.$clientName.' <br/>
			'.$xx3.' <br/>

								Phoneno : '.$xx2.' <br/>

				GST no : '.$gst.'<br/>
												Vehicle no : '.$vehicle.'</td> <br/>

<td style="width: 114.667px;">Invoice No :</td>
<td style="width: 119.333px;">'.$order_id.'</td>
</tr>
<tr>
<td style="width: 114.667px;">Bill Date :</td>
<td style="width: 119.333px;"> '.$orderDate.'</td>
</tr>
		
		
		
		
		
		
		
		
		
	</thead>
</table>
<table  border="1" width="100%;" cellpadding="1" style="border:none;">

	<tbody>

		<tr>
			<th>Product</th>
			<th>HSN</th>
			<th>Quantity</th>
			<th>Rate</th>

					<th>Amount</th>


		</tr>';

		$z = 1;
		while($row = $orderItemResult3->fetch_array()) {			
						
			$table3 .= '<tr>
								<th style="border:none;width:40%;">'.$row[5].'</th>

				<th style="border:none;">'.$row[1].'</th>
				<th style="border:none;">'.$row[2].'</th>
													<th style="border:none;">'.$row[4].'</th>

									<th style="border:none;">'.$row[3].'</th>


			</tr>
			';
		$z++;
		} // /while

		$table3 .= '
		<table border="0" width="30%;" cellpadding="2" style="border:1px solid black;margin-left:450.5px;border-top-style:1px solid black;border-bottom-style:1px solid black;">
		<tr>
			<th style="border:none;" >Mat-TOTAL Amount</th>
			<th style="border:none;">'.$product2total.'</th>			
		</tr>
		<tr>
			<th style="border:none;">CGST 9%</th>
			<th style="border:none;">'.$cgst.'</th>			
		</tr>
			<tr>
			<th style="border:none;">SGST 9%</th>
			<th style="border:none;">'.$sgst.'</th>			
		</tr>
			<tr>
			<th style="border:none;">IGST</th>
			<th style="border:none;">'.$igst.'</th>			
		</tr>
	
		<tr>
			<th style="border:none;">Freight Charges</th>
			<th style="border:none;"> '.$xx4.'</th>			
		</tr>
		<tr>
			<th style="border:none;">Other Charges</th>
			<th style="border:none;"> '.$xx5.'</th>			
		</tr>
		<tr>
			<th style="border:none;">Grand Total</th>
			<th style="border:none;">'.$grandTotal.'</th>			
		</tr>
		
</table>
	</tbody>
</table>
 ';
 
 
 		$table3 .= '
<div id="hello">
 <tr>
			<th style="border:none;"><b>Net Total(in Words)</b></th><br>		</tr>

		 <tr>
	<th style="border:none;">'.$words.'</th>			
		</tr>
		</div>
 
  ';
 
 	$table3 .= '
<table id="footer" width="100%" style="border:none;"> 
<tr >
		
			<th style="width:23%;">

			<img src="php_action/ee.png" alt="Smiley face" height="142" width="100%">

			</th>
			
				
		</tr>		
</table>
 
 </div>
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
	   <div id="wrapper">

 <table class="blueTable2" border="0" width="100%;" height:"50%;" >
		<tr >
		
			<th style="width:23%;">

			<img src="php_action/df2.png" alt="Smiley face" height="142" width="100%">

			</th>
			
				
		</tr>		
</table>
 
 <table class="blueTable2" border="0" width="100%;" style="border:1px solid black;border-top-style:1px solid black;border-bottom-style:1px solid black;" >
		<thead>
		
		
		
		<tr>
<td style="width: 50%;" rowspan="5">To:-'.$clientName.' <br/>
				 '.$xx3.' <br/>
								Phoneno : '.$xx2.' <br/>

				GST no : '.$gst.' <br/>
												Vehicle no : '.$vehicle.'</td> <br/>

<td style="width: 114.667px;">Invoice No :</td>
<td style="width: 119.333px;">'.$order_id.'</td>
</tr>
<tr>
<td style="width: 114.667px;">Bill Date :</td>
<td style="width: 119.333px;"> '.$orderDate.'</td>
</tr>

		
		
	</thead>
</table>

<table  border="1" width="100%;" cellpadding="1" style="border:none;">

	<tbody>

			<tr>
			<th >Product</th>
		<th>HNS</th>
			<th>Quantity</th>
			<th>Rate</th>
			<th>Totalfeet</th>
			<th>Amount</th>

		</tr>';

		$x = 1;
		while($row = $orderItemResult4->fetch_array()) {			
						
			$table4 .= '<tr>
				<th style="border:none;width:30%;">'.$row[4].'</th>
				<th style="border:none;">'.$row[5].'</th>
				<th style="border:none;">'.$row[1].'</th>
				<th style="border:none;">'.$row[7].'</th>

				<th style="border:none;">'.$row[6].'</th>
				
				<th style="border:none;">'.$row[3].'</th>


			</tr>


			';
		$x++;
		} // /while

		
		
			$table4 .= '


	<tbody>

	';

		$y = 1;
		while($row = $orderItemResult5->fetch_array()) {			
						
			$table4 .= '<tr >
			
				<th style="border:none;">'.$row[6].'</th>
				<th style="border:none;">'.$row[1].'</th>
				<th style="border:none;">'.$row[3].'</th>
			    <th style="border:none;">'.$row[4].'</th>
			        <th style="border:none;"> </th>
				<th style="border:none;">'.$row[5].'</th>


			</tr>

			';
		$y++;
		
		} // /while
		
		


		
		
		
		
		
		
		
		
		
		

		
		
		$table4 .= '
		<table border="0" width="30%;" cellpadding="2" style="border:1px solid black;margin-left:450.5px;border-top-style:1px solid black;border-bottom-style:1px solid black;">
		<tr>
			<th style="border:none;">ACP-TOTAL Amount</th>
			<th style="border:none;">'.$product3total.'</th>			
		</tr>
			
		<tr>
			<th style="border:none;">Al-Total Amount</th>
			<th style="border:none;">'.$product1total.'</th>			
		</tr>
		
		<tr>
			<th style="border:none;">CGST 9%</th>
			<th style="border:none;">'.$cgst.'</th>			
		</tr>
			<tr>
			<th style="border:none;">SGST 9%</th>
			<th style="border:none;">'.$sgst.'</th>			
		</tr>
			<tr>
			<th style="border:none;">IGST</th>
			<th style="border:none;">'.$igst.'</th>			
		</tr>
		<tr>
			<th style="border:none;">Freight Charges</th>
			<th style="border:none;"> '.$xx4.'</th>			
		</tr>
		<tr>
			<th style="border:none;">Other Charges</th>
			<th style="border:none;"> '.$xx5.'</th>			
		</tr>
	
		<tr>
			<th style="border:none;">Grand Total</th>
			<th style="border:none;">'.$grandTotal.'</th>			
		</tr>
			
</table>
	</tbody>
</table>
 ';
 
 
 	$table4 .= '
<div id="hello">
 <tr>
			<th style="border:none;"><b>Net Total(in Words)</b></th><br>		</tr>

		 <tr>
	<th style="border:none;">'.$words.'</th>			
		</tr>
		</div>
 
 
  ';
 
 	$table4 .= '
<table id="footer" width="100%" style="border:none;"> 
<tr >
		
			<th style="width:23%;">

			<img src="php_action/ee.png" alt="Smiley face" height="142" width="100%">

			</th>
			
				
		</tr>		
</table>
 </div>
 
   ';

 
 
 
 
 
 
 
 
 
 
 
 
   // /table5
	
	$orderItemSql6 = "SELECT order_item9.product_id, order_item9.rate, order_item9.quantity, order_item9.total,
production.product_name,order_item9.hns,order_item9.totalfeet,order_item9.altquantity FROM order_item9
	INNER JOIN production ON order_item9.product_id = production.id 
 WHERE order_item9.order_id = $orderId";
$orderItemResult6 = $connect->query($orderItemSql6);

$orderItemSql7 = "SELECT order_item6.product_id, order_item6.hsn, order_item6.quantity,order_item6.total,order_item6.rate,
production.product_name FROM order_item6
	INNER JOIN production ON order_item6.product_id = production.id 
 WHERE order_item6.order_id = $orderId";
$orderItemResult7 = $connect->query($orderItemSql7);

	$table5 = '
	   <div id="wrapper">

 <table class="blueTable2" border="0" width="100%;" >
		<tr >
		
			<th style="width:23%;">

			<img src="php_action/df2.png" alt="Smiley face" height="142" width="100%">

			</th>
			
				
		</tr>		
</table>
 
 <table class="blueTable2" border="0" width="100%;" style="border:1px solid black;border-top-style:1px solid black;border-bottom-style:1px solid black;" >
		<thead>
		
		
		
		<tr>
<td style="width: 50%;" rowspan="5">To:	 '.$clientName.' <br/>
				Address : '.$xx3.' <br/>

								Phoneno : '.$xx2.' <br/>

				GST no : '.$gst.' <br/>
												Vehicle no : '.$vehicle.'</td> <br/>

<td style="width: 114.667px;">Invoice No :</td>
<td style="width: 119.333px;">'.$order_id.'</td>
</tr>
<tr>
<td style="width: 114.667px;">Bill Date :</td>
<td style="width: 119.333px;"> '.$orderDate.'</td>
</tr>
		
		
		
		
		
		
		
		
		
	</thead>
</table>

<table  border="1" width="100%;" cellpadding="1" style="border:none;">

	<tbody>

			<tr>
			<th>Product</th>
		<th>HSN</th>
			<th>Quantity</th>
			<th>Rate</th>
			<th>Totalfeet</th>
			<th>Amount</th>

		</tr>';

		$x = 1;
		while($row = $orderItemResult6->fetch_array()) {			
						
			$table5 .= '<tr>
				<th style="border:none;width:30%;">'.$row[4].'</th>
				<th style="border:none;">'.$row[5].'</th>
				<th style="border:none;">'.$row[1].'</th>
				<th style="border:none;">'.$row[7].'</th>

				<th style="border:none;">'.$row[6].'</th>
				
				<th style="border:none;">'.$row[3].'</th>

			</tr>
	

			';
		$x++;
		} // /while

		
		
			$table5 .= '


	<tbody>

		';
$z = 1;
		while($row = $orderItemResult7->fetch_array()) {			
						
			$table5 .= '<tr>
								<th style="border:none;">'.$row[5].'</th>

				<th style="border:none;">'.$row[1].'</th>
				<th style="border:none;">'.$row[2].'</th>
													<th style="border:none;">'.$row[4].'</th>
													<th style="border:none;"></th>

									<th style="border:none;">'.$row[3].'</th>


			</tr>
			
			
		
		
			';
		$z++;
		} // /while
		


		
		
		
		
		
		
		
		
		
		
		$table5 .= '
		<table border="0" width="30%;" cellpadding="2" style="border:1px solid black;margin-left:450.5px;border-top-style:1px solid black;border-bottom-style:1px solid black;">
		<tr>
			<th style="border:none;" >ACP-TOTAL Amount</th>
			<th style="border:none;" >'.$product3total.'</th>			
		</tr>
			<tr>
			<th style="border:none;">Mat-TOTAL Amount</th>
			<th style="border:none;">'.$product2total.'</th>			
		</tr>
		
		<tr>
			<th style="border:none;">CGST 9%</th>
			<th style="border:none;">'.$cgst.'</th>			
		</tr>
			<tr>
			<th style="border:none;">SGST 9%</th>
			<th style="border:none;">'.$sgst.'</th>			
		</tr>
			<tr>
			<th style="border:none;">IGST</th>
			<th style="border:none;">'.$igst.'</th>			
		</tr>
	
		<tr>
			<th style="border:none;">Freight Charges</th>
			<th style="border:none;"> '.$xx4.'</th>			
		</tr>
		<tr>
			<th style="border:none;">Other Charges</th>
			<th style="border:none;"> '.$xx5.'</th>			
		</tr>
		<tr>
			<th style="border:none;">Grand Total</th>
			<th style="border:none;">'.$grandTotal.'</th>			
		</tr>
		
		
</table>
	</tbody>
</table>
 ';
 
 
 
 	$table5 .= '
<div id="hello">
 <tr>
			<th style="border:none;"><b>Net Total(in Words)</b></th><br>		</tr>

		 <tr>
	<th style="border:none;">'.$words.'</th>			
		</tr>
		</div>
 
 
  ';
 
 	$table5 .= '
<table id="footer" width="100%" style="border:none;"> 
<tr >
		
			<th style="width:23%;">

			<img src="php_action/ee.png" alt="Smiley face" height="142" width="100%">

			</th>
			
				
		</tr>		
</table>
 </div>
 
   ';

 
 
 
 
 
 
 
    // /table6
	
$orderItemSql8 = "SELECT order_item7.product_id, order_item7.hns, order_item7.quantity,order_item7.altquantity,order_item7.rate,order_item7.total,
production.product_name FROM order_item7
	INNER JOIN production ON order_item7.product_id = production.id 
 WHERE order_item7.order_id = $orderId";
$orderItemResult8 = $connect->query($orderItemSql8);

$orderItemSql9 = "SELECT order_item6.product_id, order_item6.hsn, order_item6.quantity,order_item6.total,order_item6.rate,
production.product_name FROM order_item6
	INNER JOIN production ON order_item6.product_id = production.id 
 WHERE order_item6.order_id = $orderId";
$orderItemResult9 = $connect->query($orderItemSql9);

	$table6 = '
	   <div id="wrapper">

  <table class="blueTable2" border="0" width="100%;" >
		<tr >
		
			<th style="width:23%;">

			<img src="php_action/df2.png" alt="Smiley face" height="142" width="100%">

			</th>
			
				
		</tr>		
</table>
 
 <table class="blueTable2" border="0" width="100%;" style="border:1px solid black;border-top-style:1px solid black;border-bottom-style:1px solid black;" >
		<thead>
		
		
		
		<tr>
<td style="width: 50%;" rowspan="5">To:	 '.$clientName.' <br/>
				 '.$xx3.' <br/>

								Phoneno : '.$xx2.' <br/>

				GST no : '.$gst.' <br/>
												Vehicle no : '.$vehicle.'</td> <br/>

<td style="width: 114.667px;">Invoice No :</td>
<td style="width: 119.333px;">'.$order_id.'</td>
</tr>
<tr>
<td style="width: 114.667px;">Bill Date :</td>
<td style="width: 119.333px;"> '.$orderDate.'</td>
</tr>
		
		
		
		
		
		
		
		
		
	</thead>
</table>

<table  border="1" width="100%;" cellpadding="1" style="border:none;">

	<tbody>
		<tr>
			<th>Product</th>
			<th>HSN</th>
			<th>Quantity</th>
			<th>Rate</th>
			<th>Amount</th>

		</tr>';

		$y = 1;
		while($row = $orderItemResult8->fetch_array()) {			
						
			$table6 .= '<tr>
								<th style="border:none;width:40%;">'.$row[6].'</th>

				<th style="border:none;">'.$row[1].'</th>
				<th style="border:none;">'.$row[3].'</th>
									<th style="border:none;">'.$row[4].'</th>
				<th style="border:none;">'.$row[5].'</th>


			</tr>

			';
		$y++;
		} // /while
		
		
		
		
		
			$table6 .= '


	<tbody>

		';
$z = 1;
		while($row = $orderItemResult9->fetch_array()) {			
						
			$table6 .= '<tr>
								<th style="border:none;">'.$row[5].'</th>

				<th style="border:none;">'.$row[1].'</th>
				<th style="border:none;" >'.$row[2].'</th>
													<th style="border:none;">'.$row[4].'</th>

									<th style="border:none;">'.$row[3].'</th>


			</tr>
			
			
		
		
			';
		$z++;
		} // /while
		


		
		
		
		
		
		
		
		
		
		
		$table6 .= '
		<table border="0" width="30%;" cellpadding="2" style="border:1px solid black;margin-left:450.5px;border-top-style:1px solid black;border-bottom-style:1px solid black;">
			<tr>
			<th style="border:none;">Mat-TOTAL Amount</th>
			<th style="border:none;">'.$product2total.'</th>			
		</tr>
		
		<tr>
			<th style="border:none;">Al-Total Amount</th>
			<th style="border:none;">'.$product1total.'</th>			
		</tr>
		
		<tr>
			<th style="border:none;">CGST 9%</th>
			<th style="border:none;">'.$cgst.'</th>			
		</tr>
			<tr>
			<th style="border:none;">SGST 9%</th>
			<th style="border:none;">'.$sgst.'</th>			
		</tr>
			<tr>
			<th style="border:none;">IGST</th>
			<th style="border:none;">'.$igst.'</th>			
		</tr>
	
		<tr>
			<th style="border:none;">Freight Charges</th>
			<th style="border:none;"> '.$xx4.'</th>			
		</tr>
		<tr>
			<th style="border:none;">Other Charges</th>
			<th style="border:none;"> '.$xx5.'</th>			
		</tr>
		<tr>
			<th style="border:none;">Grand Total</th>
			<th style="border:none;">'.$grandTotal.'</th>			
		</tr>
			
		
</table>
	</tbody>
</table>
 ';
 	$table6 .= '
<div id="hello">
 <tr>
			<th style="border:none;"><b>Net Total(in Words)</b></th><br>		</tr>

		 <tr>
	<th style="border:none;">'.$words.'</th>			
		</tr>
		</div>
 
 
  ';
 
 
 	$table6 .= '
<table id="footer" width="100%" style="border:none;"> 
<tr >
		
			<th style="width:23%;">

			<img src="php_action/ee.png" alt="Smiley face" height="142" width="100%">

			</th>
			
				
		</tr>		
</table>
 </div>
 
   ';

 
 

 
 
  // /table7
	
$orderItemSql10 = "SELECT order_item7.product_id, order_item7.hns, order_item7.quantity,order_item7.altquantity,order_item7.rate,order_item7.total,
production.product_name FROM order_item7
	INNER JOIN production ON order_item7.product_id = production.id 
 WHERE order_item7.order_id = $orderId";
$orderItemResult10 = $connect->query($orderItemSql10);

$orderItemSql11 = "SELECT order_item6.product_id, order_item6.hsn, order_item6.quantity,order_item6.total,order_item6.rate,
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
	   <div id="wrapper">

<table class="blueTable2" border="0" width="100%;" >
		<tr >
		
			<th style="width:23%;">

			<img src="php_action/df2.png" alt="Smiley face" height="142" width="100%">

			</th>
			
				
		</tr>		
</table>
 
 <table  border="1" width="100%;" style="border:1px solid black;border-top-style:1px solid black;border-bottom-style:1px solid black;" >
		<thead>
		
		
		
		<tr>
<td style="width: 50%;" rowspan="5">To: '.$clientName.' <br/>
				'.$xx3.' <br/>
								Phoneno : '.$xx2.' <br/>
				GST no : '.$gst.' <br/>
					Vehicle no : '.$vehicle.' </td>

<td style="width: 114.667px;">Invoice No :</td>
<td style="width: 119.333px;">'.$order_id.'</td>
</tr>
<tr>
<td style="width: 114.667px;">Bill Date :</td>
<td style="width: 119.333px;"> '.$dmy.'</td>
</tr>
		
		
		
		
		
		
		
		
		
	</thead>
</table>


<table  border="1" width="100%;" cellpadding="1" style="border:none;">

	<tbody>

		<tr>
			<th>Product</th>
			<th>HSN</th>
			<th>Quantity</th>
			<th>Rate</th>
			<th>Totalfeet</th>

			<th>Amount</th>
		

		</tr>
		
		';

		$y = 1;
		while($row = $orderItemResult10->fetch_array()) {			
						
			$table7 .= '<tr>
								<th style="border:none;width:40%;" >'.$row[6].'</th>

				<th style="border:none;">'.$row[1].'</th>
				<th style="border:none;">'.$row[3].'</th>
									<th style="border:none;">'.$row[4].'</th>
																		<th style="border:none;"></th>

				<th style="border:none;">'.$row[5].'</th>


			</tr>

			';
		$y++;
		} // /while
		
		
		
		
		
			$table7 .= '

		';
$z = 1;
		while($row = $orderItemResult11->fetch_array()) {			
						
			$table7 .= '<tr>
								<th style="border:none;">'.$row[5].'</th>

				<th style="border:none;">'.$row[1].'</th>
				<th style="border:none;">'.$row[2].'</th>
													<th style="border:none;">'.$row[4].'</th>
																		<th style="border:none;"></th>

									<th style="border:none;">'.$row[3].'</th>


			</tr>
			

		
		
			';
		$z++;
		} // /while
		

			$table7 .= '

		
';

		$x = 1;
		while($row = $orderItemResult12->fetch_array()) {			
						
			$table7 .= '<tr>
				<th style="border:none;">'.$row[4].'</th>
				<th style="border:none;">'.$row[5].'</th>
				<th style="border:none;">'.$row[1].'</th>
				<th style="border:none;">'.$row[7].'</th>

				<th style="border:none;">'.$row[6].'</th>
				
				<th style="border:none;">'.$row[3].'</th>


			</tr>
	

			';
		$x++;
		} // /while

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		$table7 .= '
		<table border="0" width="30%;" cellpadding="2" style="border:1px solid black;margin-left:450.5px;border-top-style:1px solid black;border-bottom-style:1px solid black;">
				<tr>
			<th style="border:none;">ACP-TOTAL Amount</th>
			<th style="border:none;">'.$product3total.'</th>			
		</tr>
			<tr>
			<th style="border:none;">Mat-TOTAL Amount</th>
			<th style="border:none;">'.$product2total.'</th>			
		</tr>
			
		<tr>
			<th style="border:none;">Al-Total Amount</th>
			<th style="border:none;">'.$product1total.'</th>			
		</tr>
		
		<tr>
			<th style="border:none;">CGST 9%</th>
			<th style="border:none;">'.$cgst.'</th>			
		</tr>
			<tr>
			<th style="border:none;">SGST 9%</th>
			<th style="border:none;">'.$sgst.'</th>			
		</tr>
			<tr>
			<th style="border:none;">IGST</th>
			<th style="border:none;">'.$igst.'</th>			
		</tr>
		<tr>
			<th style="border:none;">Freight Charges</th>
			<th style="border:none;"> '.$xx4.'</th>			
		</tr>
		<tr>
			<th style="border:none;">Other Charges</th>
			<th style="border:none;"> '.$xx5.'</th>			
		</tr>
	
		<tr>
			<th style="border:none;">Grand Total</th>
			<th style="border:none;">'.$grandTotal.'</th>			
		</tr>
			
		
</table>
	</tbody>
</table>
 ';
 
 	$table7 .= '
<div id="hello">
 <tr>
			<th style="border:none;"><b>Net Total(in Words)</b></th><br>		</tr>

		 <tr>
	<th style="border:none;">'.$words.'</th>			
		</tr>
		</div>
 
  ';
 
 
 	$table7 .= '
<table id="footer" width="100%" style="border:none;"> 
<tr >
		
			<th style="width:23%;">

			<img src="php_action/ee.png" alt="Smiley face" height="142" width="100%">

			</th>
			
				
		</tr>		
</table>
 </div>
 
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