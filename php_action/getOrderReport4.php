<?php 

require_once 'core.php';

if($_POST) {

	$startDate = $_POST['startDate'];
	$date = DateTime::createFromFormat('m/d/Y',$startDate);
	$start_date = $date->format("Y-m-d");


	$endDate = $_POST['endDate'];
	$format = DateTime::createFromFormat('m/d/Y',$endDate);
	$end_date = $format->format("Y-m-d");

	$sql = "SELECT * FROM production_order WHERE date >= '$start_date' AND date <= '$end_date' ";
	$query = $connect->query($sql);

	$table = '
	<table border="1" cellspacing="0" cellpadding="0" style="width:100%;">
		<tr>
			<th>Date</th>
			<th>Product_name</th>
			<th>Quantityprodution</th>
			

		</tr>

		<tr>';
		$totalAmount = "";
				$vat = "";

		while ($result = $query->fetch_assoc()) {
			$table .= '<tr>
				<td><center>'.$result['date'].'</center></td>
				<td><center>'.$result['product_name'].'</center></td>
				<td><center>'.$result['quantity'].'</center></td>

			</tr>';	
		

		}
		$table .= '
		</tr>

	
	</table>
	';	

	echo $table;

}

?>