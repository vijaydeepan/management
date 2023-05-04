<?php 
require_once 'php_action/db_connect.php'; 
require_once 'includes/header.php'; 

?>
<?php
  date_default_timezone_set("Asia/Bangkok");
  //or

?>  
<html>
<head>
<title>
POS
</title>
<link href="src/style.css" media="screen" rel="stylesheet" type="text/css" />
<!--sa poip up-->
<link rel="stylesheet" type="text/css" href="jquery.autocomplete.css" />
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="jquery.autocomplete.js"></script>

<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
<script src="src/facebox.js" type="text/javascript"></script>
<script type="text/javascript">
  jQuery(document).ready(function($) {
    $('a[rel*=facebox]').facebox({
      loadingImage : 'src/loading.gif',
      closeImage   : 'src/closelabel.png'
    })
  })
</script>
</head>
<body>

<form action="incoming.php" method="post" >
<input type="hidden" name="pt" value="<?php echo $_GET['id']; ?>" />
<input type="hidden" name="invoice" value="<?php echo $_GET['invoice']; ?>" />

<script>
$(document).ready(function(){
 $("#tag").autocomplete("autocomplete.php", {

	});

	
});
</script>


<script>
function getfocus() {
    document.getElementById("tag").focus();
}


</script>

<script>
function myFunction() {
    alert("The input value has changed. The new value is: " + val);

}


</script>






			  
			  
			  	<?php
				$id=$_GET['invoice'];
				include('connect.php');
				$result = $db->prepare("SELECT * FROM sales_bill ORDER BY no DESC LIMIT 1 ");
				$result->bindParam(':userid', $id);
				$result->execute();
				$row = $result->fetch();{
			?>
			  <div class="form-group">
			    <label for="billno" class="col-sm-2 control-label" style="color:white;" >Bill No</label>
			    <div class="col-sm-2">
			      <input type="text" class="form-control" id="billno" value="<?php echo $row['no']+1; ?>" name="billno" placeholder="Client Name" autocomplete="off" />
			    </div>
			  </div> <!--/form-group-->
			  
			  	<?php
				}
			?>
				  
<br>
<br>

<br>

<?php
	include('connect.php');
	$result = $db->prepare("SELECT * FROM product");
		$result->bindParam(':userid', $res);
		$result->execute();
		for($i=0; $row = $result->fetch(); $i++){
	?>


<?php
	}
	?>

    <input name="product" type="text" value="<?php echo $row['product_id']; ?>" id="tag" size="20" onchange="myFunction()" >






<script>
$(document).ready(function() {
		$("#orderDate").datepicker();
}

</script>





<input type="text" name="quantity" value="" placeholder="quantity" autocomplete="off" style="width: 168px; padding-top: 6px; padding-bottom: 6px; margin-right: 4px;" />
<input type="text" name="discount" value="0" autocomplete="off" style="width: 168px; padding-top: 6px; padding-bottom: 6px; margin-right: 4px;" />
<input type="submit" value="save" style="width: 168px;" onclick="getfocus()" />
</form>
<table id="resultTable" data-responsive="table">
	<thead>
		<tr>
			<th> Product Name </th>
			<th> Price  </th>
			<th> Quantity </th>
			<th> Cgst </th>
			<th> Sgst </th>
			<th> Discount </th>
			<th> Amount </th>

			<th> Action </th>
		</tr>
	</thead>
	<tbody>
		
			<?php
				$id=$_GET['invoice'];
				include('connect.php');
				$result = $db->prepare("SELECT * FROM sales_order WHERE invoice= :userid");
				$result->bindParam(':userid', $id);
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){
			?>
			<tr class="record">
			<td><?php echo $row['product']; ?></td>
			
					<td>
			<?php
			$ppp=$row['price'];
			echo formatMoney($ppp, true);
			?>
			</td>
			
			<td><?php echo $row['qty']; ?></td>
			
		
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
			$dfdf=$row['amount'];
			echo formatMoney($dfdf, true);
			?>
			</td>
			
			<td><a href="delete.php?id=<?php echo $row['transaction_id']; ?>&invoice=<?php echo $_GET['invoice']; ?>&dle=<?php echo $_GET['id']; ?>&quantity=<?php echo $row['qty'];?>&code=<?php echo $row['product'];?>"> Delete </a></td>
			</tr>
			<?php
				}
			?>
			<tr>
				<td colspan="5"><strong style="font-size: 12px; color: #222222;">Total:</strong></td>
				
				
				
				
				
				
				
				
				
	<td colspan="2"><strong style="font-size: 12px; color: #222222;">
				<?php
				function formatMoney1($number, $fractional=false) {
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
		
								<td colspan="5"><strong style="font-size: 12px; color: #222222;">CGST:</strong></td>

				<td colspan="2"><strong style="font-size: 12px; color: #222222;">
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
				$sdsd=$_GET['invoice'];
				$resultas = $db->prepare("SELECT sum(cgsttotal) FROM sales_order WHERE invoice= :a");
				$resultas->bindParam(':a', $sdsd);
				$resultas->execute();
				for($i=0; $rowas = $resultas->fetch(); $i++){
				$fgfg2=$rowas['sum(cgsttotal)'];
				echo formatMoney($fgfg2, true);
				}
				?>
				</strong></td>
			</tr>
		
		
							<td colspan="5"><strong style="font-size: 12px; color: #222222;">SGST:</strong></td>

				<td colspan="2"><strong style="font-size: 12px; color: #222222;">
				<?php
				function formatMoney2($number, $fractional=false) {
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
				$sdsd=$_GET['invoice'];
				$resultas = $db->prepare("SELECT sum(sgsttotal) FROM sales_order WHERE invoice= :a");
				$resultas->bindParam(':a', $sdsd);
				$resultas->execute();
				for($i=0; $rowas = $resultas->fetch(); $i++){
				$fgfg3=$rowas['sum(sgsttotal)'];
				echo formatMoney($fgfg3, true);
				}
				?>
				</strong></td>
			</tr>
		
		
		
		
		
		
		
		
	</tbody>
</table><br>




	
			 


<a rel="facebox" href="checkout.php?pt=<?php echo $_GET['id']?>&total=<?php echo $fgfg ?>&orderDate=<?php echo $_GET['orderDate']?>&cgsttotal=<?php echo $fgfg2 ?>&sgsttotal=<?php echo $fgfg3 ?>&invoice=<?php echo $_GET['invoice']?>&cashier=<?php echo $_SESSION['SESS_FIRST_NAME']?>"><button class="btn btn-success btn-large btn-block"><i class="icon icon-save icon-large"></i> SAVE</button></a>

    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- /edit order-->

<div class="clearfix"></div>
</div>
</body>
</html>