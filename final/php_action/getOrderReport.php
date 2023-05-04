<?php 

require_once 'core.php';

if($_POST) {

	$startDate = $_POST['startDate'];
	$date = DateTime::createFromFormat('m/d/Y',$startDate);
	$start_date = $date->format("Y-m-d");


	$endDate = $_POST['endDate'];
	$format = DateTime::createFromFormat('m/d/Y',$endDate);
	$end_date = $format->format("Y-m-d");

	$sql = "SELECT * FROM sales_bill WHERE date >= '$start_date' AND date <= '$end_date' ";
	$query = $connect->query($sql);

	$table = '
	<table border="1" cellspacing="0" cellpadding="0" style="width:100%;">
		<tr>
			<th>Order Date</th>
			<th>Client Name</th>
			<th>Contact</th>
			<th>Amount</th>
						<th>CGST</th>
						<th>SGST</th>

		</tr>

		<tr>';
		$totalAmount = "";
				$cgsttotal = "";
				$sgsttotal = "";

		while ($result = $query->fetch_assoc()) {
			$table .= '<tr>
				<td><center>'.$result['date'].'</center></td>
				<td><center>'.$result['name'].'</center></td>
				<td><center>'.$result['number'].'</center></td>
				<td><center>'.$result['amount'].'</center></td>
								<td><center>'.$result['cgsttotal'].'</center></td>
								<td><center>'.$result['sgsttotal'].'</center></td>


			</tr>';	
			$totalAmount += $result['amount'];
						$cgsttotal += $result['cgsttotal'];
						$sgsttotal += $result['sgsttotal'];

		}
		$table .= '
		</tr>

		<tr>
			<td colspan="5"><center>Total Amount</center></td>
			<td><center>'.$totalAmount.'</center></td>
		</tr>
		<tr>
			<td colspan="5"><center>CGST TOTAL</center></td>
			<td><center>'.$cgsttotal.'</center></td>
		</tr>
		<tr>
			<td colspan="5"><center>SGST TOTAL</center></td>
			<td><center>'.$sgsttotal.'</center></td>
		</tr>
	</table>
	';	

	echo $table;

}

?>