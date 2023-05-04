<link href="../style.css" media="screen" rel="stylesheet" type="text/css" />
<script language="javascript">
function Clickheretoprint()
{ 
  var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,"; 
      disp_setting+="scrollbars=yes,width=800, height=400, left=100, top=25"; 
  var content_vlue = document.getElementById("content").innerHTML; 
  
  var docprint=window.open("","",disp_setting); 
   docprint.document.open(); 
   docprint.document.write('</head><body onLoad="self.print()" style="width: 800px; font-size: 13px; font-family: arial;">');          
   docprint.document.write(content_vlue); 
   docprint.document.close(); 
   docprint.focus(); 
}
</script>
<a href="javascript:Clickheretoprint()" style="font-size:20px";>Print</a>|<a href="index.php" style="font-size:20px";>Back</a>
<?php
$invoice=$_GET['invoice'];
include('connect.php');
$result = $db->prepare("SELECT * FROM sales WHERE invoice_number= :userid");
$result->bindParam(':userid', $invoice);
$result->execute();
for($i=0; $row = $result->fetch(); $i++){
$cname=$row['name'];
$invoice=$row['invoice_number'];
$cash=$row['due_date'];
$cashier=$row['cashier'];

$pt=$row['type'];
$am=$row['amount'];
if($pt=='cash'){
$cash=$row['due_date'];
$amount=$cash-$am;
}
}
?><br>
<br>
<?php
  date_default_timezone_set("Asia/Bangkok");
  //or

?>  
<div class="content" id="content">
<div style="margin: 0 auto; padding: 20px; width: 700px; font-weight: normal;">
	<div style="width: 100%; height: 190px;" >
	<div style="width: 459px; float: left;">
	<?php
				$id=$_GET['invoice'];
				include('connect.php');
				$result = $db->prepare("SELECT * FROM company ");
				$result->bindParam(':userid', $id);
				$result->execute();
				$row = $result->fetch();{
			?>

	<img src="initial.png" /><br><br>
<tr>
						<td width="25%">Company Name : </td>

			<td width="75%"><?php echo $row['company']; ?></td>
		</tr>
<tr>
<br>
									<td width="25%">Address : </td>

			<td width="75%"><?php echo $row['address']; ?></td>
		</tr><br>
		<tr>						<td width="25%">Phone No : </td>

			
			<td width="75%"><?php echo $row['phoneno']; ?></td>
		</tr>
	<div>
		<?php
				}
			?>
	
	<?php
	$resulta = $db->prepare("SELECT * FROM customer WHERE customer_name= :a");
	$resulta->bindParam(':a', $cname);
	$resulta->execute();
	for($i=0; $rowa = $resulta->fetch(); $i++){
	$address=$rowa['address'];
	$contact=$rowa['contact'];
	}
	?>
	<table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;text-align:left;width : 100%;">
		
			<?php
				$id=$_GET['invoice'];
				include('connect.php');
				$result = $db->prepare("SELECT * FROM sales_bill ORDER BY no DESC LIMIT 1 ");
				$result->bindParam(':userid', $id);
				$result->execute();
				$row = $result->fetch();{
			?>
		<tr>
			<td width="25%">Client Name : </td>
			<td width="75%"><?php echo $row['name']; ?></td>
		</tr>

		<tr>
			<td width="25%">Contact No : </td>
			<td width="75%"><?php echo $row['number']; ?></td>
		</tr>
		<?php
				}
			?>
	</table>
	</div>
	</div>
	<div style="width: 236px; float: right; height: 178px;">
	<table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;text-align:left;width : 100%;">
		<tr>
			
			  	<?php
				$id=$_GET['invoice'];
				include('connect.php');
				$result = $db->prepare("SELECT * FROM sales_bill ORDER BY no DESC LIMIT 1 ");
				$result->bindParam(':userid', $id);
				$result->execute();
				$row = $result->fetch();{
			?>
			</div>
		</tr>
		<tr>
			<td>BILL No.</td>
			<td><?php echo $row['no']; ?></td>
		</tr>
		<tr>
			<td>Date</td>
			<td><?php echo $row['date']; ?></td>
		</tr>
		
	
		
			  	<?php
				}
			?>
	</table>
	
	</div>
	<div class="clearfix"></div>
	</div>
	<div style="width: 100%">
	<table border="1" cellpadding="2" cellspacing="0" style="font-family: arial; font-size: 12px;text-align:left;" width="100%">
		<thead>
			<tr>
				<th> Product Name </th>
				<th> Qty </th>
				<th> Price </th>
				<th> Discount </th>
					<th> cgst </th>
                   <th> sgst </th>
				<th> Amount </th>
			</tr>
		</thead>
		<tbody>
			
				<?php
					$id=$_GET['invoice'];
					$result = $db->prepare("SELECT * FROM sales_order WHERE invoice= :userid");
					$result->bindParam(':userid', $id);
					$result->execute();
					for($i=0; $row = $result->fetch(); $i++){
				?>
				<tr class="record">
				<td><?php echo $row['product']; ?></td>
				<td><?php echo $row['qty']; ?></td>
				<td>
				<?php
				$ppp=$row['price'];
				echo formatMoney($ppp, true);
				?>
				</td>
				<td>
				<?php
				$ddd=$row['discount'];
				echo formatMoney($ddd, true);
				?>
				</td>
				<td>
				<?php
			$ppp1=$row['cgst'];
			echo formatMoney($ppp1, true);
			echo "</br>"; 

			$ppp=$row['cgsttotal'];
			echo formatMoney($ppp, true);
			?>
				</td>
					<td>
				<?php
			$ppp3=$row['sgst'];
			echo formatMoney($ppp3, true);
			echo "</br>"; 
			$ppp=$row['sgsttotal'];
			echo formatMoney($ppp, true);
			?>	</td>
			
			
				<td>
				<?php
				$dfdf=$row['amount'];
				echo formatMoney($dfdf, true);
				?>
				</td>
				</tr>
				<?php
					}
				?>
				<tr>
					<td colspan="5"><strong style="font-size: 12px; color: #222222;">Total:</strong></td>
					<td colspan="2"><strong style="font-size: 12px; color: #222222;">
					<?php
					$sdsd=$_GET['invoice'];
					$resultas = $db->prepare("SELECT sum(amount) FROM sales_order WHERE invoice= :a");
					$resultas->bindParam(':a', $sdsd);
					$resultas->execute();
					for($i=0; $rowas = $resultas->fetch(); $i++){
					$fgfg=$rowas['sum(amount)'];
					echo formatMoney($fgfg, true);
					}
					?>
					</strong></td>
				</tr>
					<tr>
					<td colspan="5"><strong style="font-size: 12px; color: #222222;">CGST:</strong></td>
					<td colspan="2"><strong style="font-size: 12px; color: #222222;">
					<?php
					$sdsd=$_GET['invoice'];
					$resultas = $db->prepare("SELECT sum(cgsttotal) FROM sales_order WHERE invoice= :a");
					$resultas->bindParam(':a', $sdsd);
					$resultas->execute();
					for($i=0; $rowas = $resultas->fetch(); $i++){
					$fgfg1=$rowas['sum(cgsttotal)'];
					echo formatMoney($fgfg1, true);
					}
					?>
					</strong></td>
				</tr>
				<tr>
					<td colspan="5"><strong style="font-size: 12px; color: #222222;">SGST:</strong></td>
					<td colspan="2"><strong style="font-size: 12px; color: #222222;">
					<?php
					$sdsd=$_GET['invoice'];
					$resultas = $db->prepare("SELECT sum(sgsttotal) FROM sales_order WHERE invoice= :a");
					$resultas->bindParam(':a', $sdsd);
					$resultas->execute();
					for($i=0; $rowas = $resultas->fetch(); $i++){
					$fgfg2=$rowas['sum(sgsttotal)'];
					echo formatMoney($fgfg2, true);
					}
					?>
					</strong></td>
				</tr>
			
			
			

			
			  	<?php
				$id=$_GET['invoice'];
				include('connect.php');
				$result = $db->prepare("SELECT * FROM sales_bill ORDER BY no DESC LIMIT 1 ");
				$result->bindParam(':userid', $id);
				$result->execute();
				$row = $result->fetch();{
			?>
		
		<tr>
		<td colspan="5"><strong style="font-size: 12px; color: #222222;">Due:</strong></td></center>
				<td colspan="2"><strong style="font-size: 12px; color: #222222;"><?php echo $row['due']; ?></td>
		</tr>
		
	
		
			  	<?php
				}
			?>

			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
				<tr>
					
					<?php
					function formatMoney($number, $fractional=false) {
						if ($fractional) {
							$number = sprintf('%.2f', $number);
						}
						while (true) {
							$replaced = preg_replace('/(-?\d+)(\d\d\d)/', '$1,$2', $number);
							if ($replaced != $number) {
								$number = $replaced;
							} else {
								break;
							}
						}
						return $number;
					}
				
					?>
					</strong>
				</tr>
			
		</tbody>
	</table>
	</div>
	
</div>
</div>


