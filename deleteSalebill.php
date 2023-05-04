<?php 
require_once 'php_action/db_connect.php'; 
require_once 'includes/header.php'; 

if($_GET['o'] == 'add') { 
// add order
	echo "<div class='div-request div-hide'>add</div>";
} else if($_GET['o'] == 'manord') { 
	echo "<div class='div-request div-hide'>manord</div>";
} else if($_GET['o'] == 'editOrd') { 
	echo "<div class='div-request div-hide'>editOrd</div>";
} // /else manage order


?>

<ol class="breadcrumb">
  <li><a href="dashboard.php">Home</a></li>
  <li>Order</li>
  <li class="active">
  	<?php if($_GET['o'] == 'add') { ?>
<button type="button" class="btn btn-danger">Aluminium Row - Shortcut key-S</button><button type="button" class="btn btn-primary">Material Row - Shortcut key-A</button><button type="button" class="btn btn-warning">GST - Shortcut key-F4</button> <button type="button" class="btn btn-warning">ACP SECTION - Shortcut key-D</button>			<?php } else if($_GET['o'] == 'manord') { ?>
		

			Manage Order
		<?php } // /else manage order ?>
  </li>
</ol>


<h4>
	<i class='glyphicon glyphicon-circle-arrow-right'></i>
	<?php if($_GET['o'] == 'add') {
		echo "Add Order";
	} else if($_GET['o'] == 'manord') { 
		echo "Manage Order";
	} else if($_GET['o'] == 'editOrd') { 
		echo "Edit Order";
	}
	?>	
</h4>



<div class="panel panel-default">
	<div class="panel-heading">

		<?php if($_GET['o'] == 'add') { ?>
  		<i class="glyphicon glyphicon-plus-sign"></i>	Add Order
		<?php } else if($_GET['o'] == 'manord') { ?>
			<i class="glyphicon glyphicon-edit"></i> Manage Order
		<?php } else if($_GET['o'] == 'editOrd') { ?>
			<i class="glyphicon glyphicon-edit"></i> Edit Order
		<?php } ?>

	</div> <!--/panel-->	
	<div class="panel-body">
			
		<?php if($_GET['o'] == 'add') { 
			// add order
			?>			

			<div class="success-messages"></div> <!--/success-messages-->

  		<form class="form-horizontal" method="POST" action="php_action/createOrder5.php" id="createOrderForm">

			  <div class="form-group">
			    <label for="orderDate" class="col-sm-2 control-label">Order Date</label>
			    <div class="col-sm-10">
				          <input class="form-control" id="orderDate" name="orderDate" placeholder="DD/MM/YYY" type="text"/>

			    </div>
			  </div> <!--/form-group-->
		
				<?php 

  			$sql = "SELECT MAX(order_id) FROM orders3 	
					";

				$result = $connect->query($sql);
				$data = $result->fetch_row();				
  			?>
		
				
			    <div class="form-group">
				    <label for="discount" class="col-sm-2 control-label">Billno</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="billno" value="<?php echo $data[0]+1 ?>" name="billno"   autocomplete="off" />
				    </div>
				  </div> <!--/form-group-->	
			  
	
		
		
		
			  
  	<tbody>
			  		<?php
			  		$arrayNumber2 = 0;
			  		for($x = 1; $x < 2; $x++) { ?>
			  			<tr id="row<?php echo $x; ?>" class="<?php echo $arrayNumber; ?>">			  				
			  					<div class="form-group">
			    <label for="orderDate" class="col-sm-2 control-label">Dealername</label>
			    <div class="col-sm-10">

			  					<select class="chosen-select" name="ff" id="ff<?php echo $x; ?>" onchange="getProduct(<?php echo $x; ?>)" >
			  						<option value="">~~SELECT~~</option>
			  								<?php
			  							$productSql = "SELECT * FROM supliers ";
			  							$productData = $connect->query($productSql);

			  							while($row = $productData->fetch_array()) {									 		
			  								echo "<option value='".$row['suplier_id']."' id='changeProduct".$row['suplier_name']."'>".$row['suplier_name']."</option>";
										 	} // /while 

			  						?>
		  						</select>
			  					</div>
											  					</div>

							  <div class="form-group">
			    <label for="orderDate" class="col-sm-2 control-label">Needtobepaid</label>
			    <div class="col-sm-10">
			  					<input type="text" name="dd" id="dd<?php echo $x; ?>" autocomplete="off"  class="form-control" />			  					
			    </div>
			  </div> <!--/form-group-->
							  <div class="form-group">
			    <label for="orderDate" class="col-sm-2 control-label">Address</label>
			    <div class="col-sm-10">
			  					<input type="text" name="gg" id="gg<?php echo $x; ?>" autocomplete="off"  class="form-control" />			  					
			    </div>
			  </div> <!--/form-group-->
									  <div class="form-group">
			    <label for="orderDate" class="col-sm-2 control-label">Contact no</label>
			    <div class="col-sm-10">
			  					<input type="text" name="ee" id="ee<?php echo $x; ?>" autocomplete="off"  class="form-control" />			  					
			    </div>
			  </div> <!--/form-group-->
							
							
									  <div class="form-group">
			    <label for="orderDate" class="col-sm-2 control-label">GST Number</label>
			    <div class="col-sm-10">
			  					<input type="text" name="xx" id="xx<?php echo $x; ?>" autocomplete="off"  class="form-control" />			  					
			    </div>
			  </div> <!--/form-group-->
							
							
										  	<div class="form-group" style="display:none;">

			  			<td style="padding-left:20px;">			  					
			  					<input type="text" name="clientName" id="clientName<?php echo $x; ?>" autocomplete="off"  class="form-control" />			  					
			  							  					
			  				</td>
							</div>
		  			<?php
		  			$arrayNumber2++;
			  		} // /for
			  		?>
			  	</tbody>		
				
				
				
					  <div class="form-group">
			    <label for="orderDate" class="col-sm-2 control-label">Vehicle Number</label>
			    <div class="col-sm-10">
			  					<input type="text" name="vv" id="vv" autocomplete="off"  class="form-control" />			  					
			    </div>
			  </div> <!--/form-group-->
			  			
				 
			  
			  
			  
			  
			  
			  
			  
			  
			  <table class="table" id="productTable" >
			  	<thead style="background-color:#dc4a4a;color:white;">
			  		<tr>			  			
			  			<th style="width:20%;">Aluminium Product-ADDROW-"S"</th>
			  			<th style="width:15%;">HNS</th>
			  			<th style="width:15%;">AltQuantity</th>	
			  				  					  			<th style="width:15%;">Quantity/Kg</th>	
			  			<th style="width:15%;">Rate</th>	
				  			<th style="width:15%;">Total</th>	

			  		</tr>
			  	</thead>
			  	<tbody>
			  		<?php
			  		$nana = 0;
			  		for($y = 1; $y < 2; $y++) { ?>
			  			<tr id="row<?php echo $y; ?>" class="<?php echo $nana; ?>">			  				
			  				<td style="margin-left:20px;">
			  					<div class="form-group">

								
								
								
								
								
			  					<select class="chosen-select" name="product1Name[]" id="product1Name<?php echo $y; ?>" onchange="getProductData3(<?php echo $y; ?>)" >
			  						<option value="">~~SELECT~~</option>
			  						<?php
			  							$productSql = "SELECT production.id,production.product_name FROM production INNER JOIN product1 WHERE production.product_name=product1.product_name ";
			  							$productData = $connect->query($productSql);

			  							while($row = $productData->fetch_array()) {									 		
			  								echo "<option value='".$row['id']."' id='changeProduct".$row['id']."'>".$row['product_name']."</option>";
										 	} // /while 

			  						?>
		  						</select>
			  					</div>
			  				</td>
							<td style="padding-left:20px;">			  					
			  					<input type="text" name="hsn1[]" id="hsn1<?php echo $y; ?>" autocomplete="off" class="form-control" />			  					
			  					<input type="hidden" name="hsnValue1[]" id="hsnValue1<?php echo $y; ?>" autocomplete="off" class="form-control" />			  					
			  				</td>
							<td style="padding-left:20px;">
			  					<input type="number" name="xxx[]" id="xxx<?php echo $y; ?>" autocomplete="off" class="form-control"  />
									<input type="hidden" name="xxxValue[]" id="xxxValue<?php echo $y; ?>" autocomplete="off" class="form-control" />		
			  				</td>
			<td style="padding-left:20px;">
			  					<div class="form-group">
			  					<input type="number" name="ssd[]" id="ssd<?php echo $y; ?>" onkeyup="xxtal(<?php echo $y ?>)" autocomplete="off" class="form-control" min="1" />
			  					</div>
			  				</td>
							
								<td style="padding-left:20px;">			  					
			  					<input type="text" name="rrd[]" id="rrd<?php echo $y; ?>" autocomplete="off" class="form-control" />			  					
			  					<input type="hidden" name="rrdValue[]" id="rrdValue<?php echo $y; ?>" autocomplete="off" class="form-control" />			  					
			  				</td>
							
							<td style="padding-left:20px;">			  					
			  					<input type="text" name="vvd[]" id="vvd<?php echo $y; ?>" autocomplete="off" class="form-control" disabled="true" />			  					
			  					<input type="hidden" name="vvdValue[]" id="vvdValue<?php echo $y; ?>" autocomplete="off" class="form-control" />			  					
			  				</td>
			  				<td>

			  					<button class="btn btn-default removeProductRowBtn1" type="button" id="removeProductRowBtn1" onclick="deleteRow(this)"><i class="glyphicon glyphicon-trash"></i></button>
			  				</td>
			  			</tr>
		  			<?php
		  			$nana++;
			  		} // /for
			  		?>
			  	</tbody>			  	
			  </table>
			 			
			
					
				  
     
			
				  	  <table class="table" id="productTable2">
			  	<thead style="background-color:#4a7400;color:white;">
			  		<tr>			  			
			  			<th style="width:40%;">MATERIAL Product -ADDROW-"A"</th>
			  			<th style="width:20%;">HNS</th>
			  			<th style="width:15%;">Quantity/Kg</th>
			  			<th style="width:15%;">Rate per kg/piece</th>			  			
			  			
			  			<th style="width:10%;">Total</th>
			  		</tr>
			  	</thead>
			  	<tbody>
			  		<?php
			  		$arrayNumber8 = 0;
			  		for($x = 1; $x < 4; $x++) { ?>
			  			<tr id="row<?php echo $x; ?>" id="de<?php echo $x; ?>" class="deepan">			  				
			  				<td style="margin-left:20px;">
			  					<div class="form-group">

			  					<select class="chosen-select" name="productName[]" id="productName<?php echo $x; ?>" onchange="getProductData(<?php echo $x; ?>)" >
			  						<option value="">~~SELECT~~</option>
			  						<?php
			  							$productSql = "
SELECT production.id,production.product_name FROM production INNER JOIN product5 WHERE production.product_name=product5.product_name ";
			  							$productData = $connect->query($productSql);

			  							while($row = $productData->fetch_array()) {									 		
			  								echo "<option value='".$row['id']."' id='changeProduct".$row['id']."'>".$row['product_name']."</option>";
										 	} // /while 

			  						?>
		  						</select>
			  					</div>
			  				</td>
								<td style="padding-left:20px;">			  					
			  					<input type="text" name="hsn[]" id="hsn<?php echo $x; ?>" autocomplete="off" disabled="true" class="form-control" />			  					
			  					<input type="hidden" name="hsnValue[]" id="hsnValue<?php echo $x; ?>" autocomplete="off" class="form-control" />			  					
			  				</td>
								<td style="padding-left:20px;">
			  					<div class="form-group">
			  					<input type="number" name="quantity[]" id="quantity<?php echo $x; ?>" onkeyup="getTotal2(<?php echo $x ?>)" autocomplete="off" class="form-control" min="1" />
			  					</div>
			  				</td>
			  				<td style="padding-left:20px;">			  					
			  					<input type="text" name="rate[]" id="rate<?php echo $x; ?>" autocomplete="off" class="form-control" />			  					
			  					<input type="hidden" name="rateValue[]" id="rateValue<?php echo $x; ?>" autocomplete="off" class="form-control" />			  					
			  				</td>
			  			
			  				<td style="padding-left:20px;">			  					
			  					<input type="text" name="yyy[]" id="yyy<?php echo $x; ?>" autocomplete="off" class="form-control" disabled="true" />			  					
			  					<input type="hidden" name="yyyValue[]" id="yyyValue<?php echo $x; ?>" autocomplete="off" class="form-control" />			  					
			  				</td>
			  				<td>

			  					<button class="btn btn-default removeProductRowBtn3" type="button" id="removeProductRowBtn3" onclick="deleteRow2(this)"><i class="glyphicon glyphicon-trash"></i></button>
			  				</td>
			  			</tr>
		  			<?php
		  			$arrayNumber8++;
			  		} // /for
			  		?>
			  	</tbody>			  	
			  </table>
			  
			  	  <table class="table" id="productTable3">
			  	<thead style="background-color:#4a7400;color:white;">
			  		<tr>			  			
			  			<th style="width:15%;">ACPSheet-ADDROW-"D"</th>
			  			<th style="width:8%;">HNS</th>
						<th style="width:7%;">size</th>
												<th style="width:3%;"></th>

						<th style="width:7%;">size</th>
			  						  			<th style="width:10%;">Alqua</th>			  			

			  			<th style="width:10%;">Rate</th>			  			
			  			<th style="width:10%;">S/Feet</th>

			  			<th style="width:15%;">Total Feet</th>
									  			<th style="width:15%;"> Amount</th>

			  		</tr>
			  	</thead>
			  	<tbody>
			  		<?php
			  		$vana = 0;
			  		for($z = 1; $z < 4; $z++) { ?>
			  			<tr id="row<?php echo $z; ?>" class="<?php echo $vana; ?>">			  				
			  				<td style="margin-left:20px;">
			  					<div class="form-group">

			  					<select class="chosen-select" name="product2Name[]" id="product2Name<?php echo $z; ?>" onchange="getProductData10 (<?php echo $z; ?>)" >
			  						<option value="">~~SELECT~~</option>
			  						<?php
			  								$productSql = "
SELECT production.id,production.product_name FROM production INNER JOIN product3 WHERE production.product_name=product3.product_name ";
			  							$productData = $connect->query($productSql);

			  							while($row = $productData->fetch_array()) {									 		
			  								echo "<option value='".$row['id']."' id='changeProduct".$row['id']."'>".$row['product_name']."</option>";
										 	} // /while 

			  						?>
		  						</select>
			  					</div>
			  				</td>
								<td style="padding-left:20px;">			  					
			  					<input type="text" name="hsn5[]" id="hsn5<?php echo $z; ?>" autocomplete="off"  class="form-control" />			  					
			  					<input type="hidden" name="hsnValue5[]" id="hsnValue5<?php echo $z; ?>" autocomplete="off" class="form-control" />			  					
			  				</td>
									<td style="padding-left:20px;">			  					
			  					<input type="number" name="size[]" id="size<?php echo $z; ?>" autocomplete="off"  class="form-control" />			  					
			  					<input type="hidden" name="sizeValue[]" id="sizeValue<?php echo $z; ?>" autocomplete="off" class="form-control" />
		  					
			  				</td>
							<td style="padding-left:10px;">			  					
			  				<p>x</p>			  					
			  				</td>
								<td style="padding-left:10px;">			  					
			  					<input type="number" name="size2[]" id="size2<?php echo $z; ?>" autocomplete="off"  class="form-control" />			  					
			  					<input type="hidden" name="sizeValue2[]" id="sizeValue2<?php echo $z; ?>" autocomplete="off" class="form-control" />			  					
			  				</td>
							
									<td style="padding-left:20px;">			  					
			  					<input type="text" name="rate6[]" id="rate6<?php echo $z; ?>" autocomplete="off" class="form-control" />			  					
			  					<input type="hidden" name="rateValue6[]" id="rateValue6<?php echo $z; ?>" autocomplete="off" class="form-control" />			  					
			  				</td>
			  				<td style="padding-left:20px;">			  					
			  					<input type="text" name="rate5[]" id="rate5<?php echo $z; ?>" autocomplete="off" class="form-control" />			  					
			  					<input type="hidden" name="rateValue5[]" id="rateValue5<?php echo $z; ?>" autocomplete="off" class="form-control" />			  					
			  				</td>
			  		
			  				<td style="padding-left:20px;">
			  					<div class="form-group">
			  					<input type="number" name="acpquantity[]" id="acpquantity<?php echo $z; ?>" onkeyup="getTotal3(<?php echo $z ?>)" autocomplete="off" class="form-control" min="1" />
			  					</div>
			  				</td>
								<td style="padding-left:20px;">			  					
			  					<input type="text" name="zzz2[]" id="zzz2<?php echo $z; ?>" autocomplete="off" class="form-control" disabled="true" />			  					
			  					<input type="hidden" name="zzzValue2[]" id="zzzValue2<?php echo $z; ?>" autocomplete="off" class="form-control" />			  					
			  				</td>
								<td style="padding-left:20px;">			  					
			  					<input type="text" name="zzz[]" id="zzz<?php echo $z; ?>" autocomplete="off" class="form-control" />			  					
			  					<input type="hidden" name="zzzValue[]" id="zzzValue<?php echo $z; ?>" autocomplete="off" class="form-control" />			  					
			  				</td>
							
							
			  				<td>

			  					<button class="btn btn-default removeProductRowBtn" type="button" id="removeProductRowBtn2" onclick="deleteRow3(this)"><i class="glyphicon glyphicon-trash"></i></button>
			  				</td>
			  			</tr>
		  			<?php
		  			$vana++;
			  		} // /for
			  		?>
			  	</tbody>			  	
			  </table>

					  
				  <div class="col-md-6">
			  	<div class="form-group">
				    <label for="subTotal" class="col-sm-3 control-label">Mat Total Amount</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control" id="subTotal" name="subTotal" disabled="true" />
				      <input type="hidden" class="form-control" id="subTotalValue" name="subTotalValue" />
				    </div>
				  </div> <!--/form-group-->	
 	
  	<div class="form-group">
				    <label for="subTotal" class="col-sm-3 control-label">Acp Total Amount</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control" id="subTotal2" name="subTotal2" disabled="true" />
				      <input type="hidden" class="form-control" id="subTotalValue2" name="subTotalValue2" />
				    </div>
				  </div> <!--/form-group-->	
 	  	<div class="form-group">
				    <label for="subTotal" class="col-sm-3 control-label">Aluminium total Amount</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control" id="Totalcp" name="Totalcp"  />
				      <input type="hidden" class="form-control" id="Totalcpvalue" name="Totalcpvalue" />
				    </div>
				  </div> <!--/form-group-->	
		
			<?php 

  			$sql = "SELECT cgst,sgst,igst,rate FROM product1rate	
					";

				$result = $connect->query($sql);
				$data = $result->fetch_row();				
  			?>
		 
			  	<div class="form-group">
				    <label for="tax" class="col-sm-3 control-label">CGST</label>
				    <div class="col-sm-9">
				      <input type="number" class="form-control" id="tax" value="<?php echo $data[0] ?>" onkeyup="gettax();"  name="tax" autocomplete="off"  />
				    </div>
				  </div> <!--/form-group-->	
				  <div class="form-group">
				    <label for="tax" class="col-sm-3 control-label">SGST</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control" id="tax2"  value="<?php echo $data[1] ?>" onkeyup="gettax();" name="tax2" autocomplete="off"  />
				    </div>
				  </div> <!--/form-group-->	
	
	  <div class="form-group">
				    <label for="tax" class="col-sm-3 control-label">IGST</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control" id="tax3"  value="<?php echo $data[2] ?>" onkeyup="gettax();" name="tax3" autocomplete="off"  />
				    </div>
				  </div> <!--/form-group-->	

					  <div class="form-group">
				    <label for="totalAmount" class="col-sm-3 control-label">Sub Amount</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control" id="fiAmount" name="fiAmount" disabled="true"/>
				      <input type="hidden" class="form-control" id="fiAmountValue" name="fiAmountValue" />
				    </div>
				  </div> <!--/form-group-->
					  
				  <div class="form-group">
				    <label for="totalAmount" class="col-sm-3 control-label">Total Amount</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control" id="totalAmount" name="totalAmount" disabled="true"/>
				      <input type="hidden" class="form-control" id="totalAmountValue" name="totalAmountValue" />
				    </div>
				  </div> <!--/form-group-->			  
				  <div class="form-group">
				    <label for="discount" class="col-sm-3 control-label">Discount</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control" value="0" id="discount" name="discount" onkeyup="discountFunc()" autocomplete="off" />
				    </div>
				  </div> <!--/form-group-->	
			  <div class="form-group">
				    <label for="freight" class="col-sm-3 control-label">Freight Charges</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control"  id="fright" name="fright"  autocomplete="off" />
				    </div>
				  </div> <!--/form-group-->	
				   <div class="form-group">
				    <label for="freight" class="col-sm-3 control-label">Other Expense</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control"  id="expense" name="expense"  autocomplete="off" />
				    </div>
				  </div> <!--/form-group-->	
 <div class="form-group">
				    <label for="word" class="col-sm-3 control-label">Grand Total</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control" id="grandTotal"  onfocus="document.getElementById('word').innerHTML=withDecimal(this.value)" name="grandTotal"  />
				      <input type="hidden" class="form-control" id="grandTotalValue" name="grandTotalValue" />
					  
					  
				    </div>
				  </div> <!--/form-group-->
 <div class="form-group">
			        <label for="word" class="col-sm-3 control-label"> Amount in Words </label>
			       <div class="col-sm-9">
			        <textarea type="text" class="form-control"  id="word" name="word" autocomplete="off"></textarea>
			        </div>
			          </div>	
                  			  
			  </div> <!--/col-md-6-->

<script>
function withDecimal(n) {
	debugger;
    var nums = n.toString().split('.')
    var whole = convertNumberToWords(nums[0])
    if (nums.length == 2) {
        var fraction = convertNumberToWords(nums[1])
        return whole + ' point ' + fraction;
    } else {
        return whole;
    }
}
function convertNumberToWords(amount) {
	debugger;
    var words = new Array();
	
    words[0] = '';
    words[1] = 'One';
    words[2] = 'Two';
    words[3] = 'Three';
    words[4] = 'Four';
    words[5] = 'Five';
    words[6] = 'Six';
    words[7] = 'Seven';
    words[8] = 'Eight';
    words[9] = 'Nine';
    words[10] = 'Ten';
    words[11] = 'Eleven';
    words[12] = 'Twelve';
    words[13] = 'Thirteen';
    words[14] = 'Fourteen';
    words[15] = 'Fifteen';
    words[16] = 'Sixteen';
    words[17] = 'Seventeen';
    words[18] = 'Eighteen';
    words[19] = 'Nineteen';
    words[20] = 'Twenty';
    words[30] = 'Thirty';
    words[40] = 'Forty';
    words[50] = 'Fifty';
    words[60] = 'Sixty';
    words[70] = 'Seventy';
    words[80] = 'Eighty';
    words[90] = 'Ninety';
	
	
    amount = amount.toString();
    var atemp = amount.split(".");
    var number = atemp[0].split(",").join("");
    var n_length = number.length;
    var words_string = "";
    if (n_length <= 9) {
        var n_array = new Array(0, 0, 0, 0, 0, 0, 0, 0, 0);
        var received_n_array = new Array();
        for (var i = 0; i < n_length; i++) {
            received_n_array[i] = number.substr(i, 1);
        }
        for (var i = 9 - n_length, j = 0; i < 9; i++, j++) {
            n_array[i] = received_n_array[j];
        }
        for (var i = 0, j = 1; i < 9; i++, j++) {
            if (i == 0 || i == 2 || i == 4 || i == 7) {
                if (n_array[i] == 1) {
                    n_array[j] = 10 + parseInt(n_array[j]);
                    n_array[i] = 0;
                }
            }
        }
        value = "";
        for (var i = 0; i < 9; i++) {
            if (i == 0 || i == 2 || i == 4 || i == 7) {
                value = n_array[i] * 10;
            } else {
                value = n_array[i];
            }
            if (value != 0) {
                words_string += words[value] + " ";
            }
            if ((i == 1 && value != 0) || (i == 0 && value != 0 && n_array[i + 1] == 0)) {
                words_string += "Crores ";
            }
            if ((i == 3 && value != 0) || (i == 2 && value != 0 && n_array[i + 1] == 0)) {
                words_string += "Lakhs ";
            }
            if ((i == 5 && value != 0) || (i == 4 && value != 0 && n_array[i + 1] == 0)) {
                words_string += "Thousand ";
            }
            if (i == 6 && value != 0 && (n_array[i + 1] != 0 && n_array[i + 2] != 0)) {
                words_string += "Hundred and ";
            } else if (i == 6 && value != 0) {
                words_string += "Hundred ";
            }
        }
        words_string = words_string.split("  ").join(" ");
    }
    return words_string;
}

</script>	
			  <div class="col-md-6">
			    
			  			  
				  <div class="form-group">
				    <label for="vat" class="col-sm-3 control-label">CGST Total</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control" id="vat"  name="vat" disabled="true" />
				      <input type="hidden" class="form-control" id="vatValue" name="vatValue" />
				    </div>
				  </div> <!--/form-group-->		
	  <div class="form-group">
				    <label for="vat2" class="col-sm-3 control-label">SGST Total</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control" id="vat2"  name="vat2" disabled="true" />
				      <input type="hidden" class="form-control" id="vatValue2" name="vatValue2" />
				    </div>
				  </div> <!--/form-group-->		
				    <div class="form-group">
				    <label for="vat3" class="col-sm-3 control-label">IGST Total</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control" id="vat3"  name="vat3" disabled="true" />
				      <input type="hidden" class="form-control" id="vatValue3" name="vatValue3" />
				    </div>
				  </div> <!--/form-group-->	
				  
				  
				  
				  
				  
				  
			  	<div class="form-group">
				    <label for="paid" class="col-sm-3 control-label">Paid Amount</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control" id="paid" name="paid" autocomplete="off"  onkeyup="paidAmount()" />
				    </div>
				  </div> <!--/form-group-->			  
				  <div class="form-group">
				    <label for="due" class="col-sm-3 control-label">Due Amount</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control" id="due" name="due" disabled="true" />
				      <input type="hidden" class="form-control" id="dueValue" name="dueValue" />
				    </div>
				  </div> <!--/form-group-->		
				  <div class="form-group">
				    <label for="clientContact" class="col-sm-3 control-label">Payment Type</label>
				    <div class="col-sm-9">
				      <select class="form-control" name="paymentType" id="paymentType">
				      	<option value="">~~SELECT~~</option>
				      	<option value="1">Cheque</option>
				      	<option value="2">Cash</option>
				      	<option value="3">Credit Card</option>
				      </select>
				    </div>
				  </div> <!--/form-group-->							  
				  <div class="form-group">
				    <label for="clientContact" class="col-sm-3 control-label">Payment Status</label>
				    <div class="col-sm-9">
				      <select class="form-control" name="paymentStatus" id="paymentStatus">
				      	<option value="">~~SELECT~~</option>
				      	<option value="1">Full Payment</option>
				      	<option value="2">Advance Payment</option>
				      	<option value="3">No Payment</option>
				      </select>
				    </div>
				  </div> <!--/form-group-->							  
			  </div> <!--/col-md-6-->

			  <p><b>Choose Print </b></p>
			   <input type="checkbox" name="chkbox[]" value="1"><label>AcpSheet</label><br/>
 <input type="checkbox" name="chkbox[]" value="2"><label>Aluminium</label><br/>
 <input type="checkbox" name="chkbox[]" value="3"><label>Material</label><br/>
			  

			  <div class="form-group submitButtonFooter">
			    <div class="col-sm-offset-2 col-sm-10">
			    <button type="button" class="btn btn-default" onclick="addRow()" id="addRowBtn" data-loading-text="Loading..."> <i class="glyphicon glyphicon-plus-sign"></i> Add Row </button>
 <button type="button" class="btn btn-default" onclick="addRow2()" id="addRowBtn2" data-loading-text="Loading..."> <i class="glyphicon glyphicon-plus-sign"></i> Add Row </button>
  <button type="button" class="btn btn-default" onclick="addRow3()" id="addRowBtn3" data-loading-text="Loading..."> <i class="glyphicon glyphicon-plus-sign"></i> Add Row </button>
			      <button type="submit" id="createOrderBtn" data-loading-text="Loading..." class="btn btn-success"><i class="glyphicon glyphicon-ok-sign"></i> Save Changes</button>

			      <button type="reset" class="btn btn-default" onclick="resetOrderForm()"><i class="glyphicon glyphicon-erase"></i> Reset</button>
			    </div>
			  </div>
			</form>
			
			
			
			
			
			
			
			
			
			
			
		<?php } else if($_GET['o'] == 'manord') { 
			// manage order
			?>

			<div id="success-messages"></div>
			
			<table class="table" id="manageOrderTable">
				<thead>
					<tr>
						<th>#</th>
						<th>Order Date</th>
						<th>Supplier Name</th>
						<th>Billno</th>

						<th>Due</th>
						<th>Payment Status</th>
					</tr>
				</thead>
			</table>

		<?php 
		// /else manage order
		} else if($_GET['o'] == 'editOrd') {
			// get order
			?>
			
			<div class="success-messages"></div> <!--/success-messages-->

  		<form class="form-horizontal" method="POST" action="php_action/deleteSalebill.php" id="editOrderForm">

  			<?php $orderId = $_GET['i'];

  			$sql = "SELECT orders3.order_id, orders3.order_date, orders3.client_name, orders3.client_contact, orders3.sub_total,orders3.tax, orders3.vat, orders3.total_amount, orders3.discount, orders3.grand_total, orders3.paid, orders3.due, orders3.payment_type, orders3.payment_status, orders3.order_status, orders3.billno, orders3.cgst, orders3.sgst, orders3.igst, orders3.cgsttotal, orders3.sgsttotal, orders3.igsttotal, orders3.gst, orders3.product1quantity, orders3.product1rate, orders3.product1total, orders3.aluminium, orders3.product2total, orders3.product3total, orders3.words, orders3.phoneno, orders3.address, orders3.fright, orders3.expense , orders3.vehicleno, orders3.total_amount, orders3.discount,orders3.sub_total FROM orders3	
					WHERE orders3.order_id = {$orderId}";

				$result = $connect->query($sql);
				$data = $result->fetch_row();				
  			?>
			
			
			  <div class="form-group">
			    <label for="orderDate" class="col-sm-2 control-label">Order Date</label>
			    <div class="col-sm-10">
				          <input class="form-control" id="orderDate" name="orderDate" placeholder="DD/MM/YYY" type="text" value="<?php echo $data[1] ?>"/>

			    </div>
			  </div> <!--/form-group-->
			  <div class="form-group">
				    <label for="discount" class="col-sm-2 control-label">Billno</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="billno" value="<?php echo $data[15] ?>" name="billno"   autocomplete="off" />
				    </div>
				  </div> <!--/form-group-->	
			  
	
		
		
		
			  
  	<tbody>
			  		<?php
			  		$arrayNumber2 = 0;
			  		for($x = 1; $x < 2; $x++) { ?>
			  			<tr id="row<?php echo $x; ?>" class="<?php echo $arrayNumber; ?>">			  				
			  					<div class="form-group">
			    <label for="orderDate" class="col-sm-2 control-label">Dealername</label>
			    <div class="col-sm-10">

			  					<select class="chosen-select" name="ff" id="ff<?php echo $x; ?>" onchange="getProduct(<?php echo $x; ?>)" >
			  						<option value="<?php echo $data[2] ?>"><?php echo $data[2] ?></option>
			  								<?php
			  							$productSql = "SELECT * FROM supliers ";
			  							$productData = $connect->query($productSql);

			  							while($row = $productData->fetch_array()) {									 		
			  								echo "<option value='".$row['suplier_id']."' id='changeProduct".$row['suplier_name']."'>".$row['suplier_name']."</option>";
										 	} // /while 

			  						?>
		  						</select>
			  					</div>
											  					</div>

							  <div class="form-group">
			    <label for="orderDate" class="col-sm-2 control-label">Needtobepaid</label>
			    <div class="col-sm-10">
			  					<input type="text" name="dd" id="dd<?php echo $x; ?>" autocomplete="off"  class="form-control" value="<?php echo $data[3] ?>"/>			  					
			    </div>
			  </div> <!--/form-group-->
							  <div class="form-group">
			    <label for="orderDate" class="col-sm-2 control-label">Address</label>
			    <div class="col-sm-10">
			  					<input type="text" name="gg" id="gg<?php echo $x; ?>" autocomplete="off"  class="form-control" value="<?php echo $data[31] ?>"/>			  					
			    </div>
			  </div> <!--/form-group-->
									  <div class="form-group">
			    <label for="orderDate" class="col-sm-2 control-label">Contact no</label>
			    <div class="col-sm-10">
			  					<input type="text" name="ee" id="ee<?php echo $x; ?>" autocomplete="off"  class="form-control" value="<?php echo $data[30] ?>"/>			  					
			    </div>
			  </div> <!--/form-group-->
							
							
									  <div class="form-group">
			    <label for="orderDate" class="col-sm-2 control-label">GST Number</label>
			    <div class="col-sm-10">
			  					<input type="text" name="xx" id="xx<?php echo $x; ?>" autocomplete="off"  class="form-control" value="<?php echo $data[22] ?>"/>			  					
			    </div>
			  </div> <!--/form-group-->
							
							
										  	<div class="form-group" style="display:none;">

			  			<td style="padding-left:20px;">			  					
			  					<input type="text" name="clientName" id="clientName<?php echo $x; ?>" autocomplete="off"  class="form-control" />			  					
			  							  					
			  				</td>
							</div>
		  			<?php
		  			$arrayNumber2++;
			  		} // /for
			  		?>
			  	</tbody>		
				
				
				
					  <div class="form-group">
			    <label for="orderDate" class="col-sm-2 control-label">Vehicle Number</label>
			    <div class="col-sm-10">
			  					<input type="text" name="vv" id="vv" autocomplete="off"  class="form-control" value="<?php echo $data[34] ?>"/>			  					
			    </div>
			  </div> <!--/form-group-->
			  			
				 
			  
			  
			  
			  
			  <table class="table" id="productTable" >
			  	<thead style="background-color:#dc4a4a;color:white;">
			  		<tr>			  			
			  			<th style="width:20%;">Aluminium Product-ADDROW-"S"</th>
			  			<th style="width:15%;">HNS</th>
			  			<th style="width:15%;">AltQuantity</th>	
			  			<th style="width:15%;">Quantity/Kg</th>	
			  			<th style="width:15%;">Rate</th>	
				  		<th style="width:15%;">Total</th>	

			  		</tr>
			  	</thead>
			  	<tbody>
			  		<?php

			  		$orderItemSql = "SELECT order_item7.order_item_id, order_item7.order_id, order_item7.product_id,order_item7.hns, order_item7.quantity, order_item7.rate, order_item7.total,order_item7.altquantity FROM order_item7 WHERE order_item7.order_id = {$orderId}";
						$orderItemResult = $connect->query($orderItemSql);
						// $orderItemData = $orderItemResult->fetch_all();						
						
						// print_r($orderItemData);
			  		$arrayNumber = 0;
			  		// for($x = 1; $x <= count($orderItemData); $x++) {
			  		$x = 1;
			  		while($orderItemData = $orderItemResult->fetch_array()) { 
			  			// print_r($orderItemData); ?>
			  			<tr id="row<?php echo $x; ?>" class="<?php echo $arrayNumber; ?>">			  				
			  				<td style="margin-left:20px;">
			  					<div class="form-group">
                             <select class="chosen-select" name="product1Name[]" id="product1Name<?php echo $y; ?>" onchange="getProductData3(<?php echo $y; ?>)" >
			  						<option value="">~~SELECT~~</option>
			  						<?php
			  							$productSql = "SELECT production.id,production.product_name FROM production INNER JOIN product1 WHERE production.product_name=product1.product_name ";
			  							$productData = $connect->query($productSql);

			  							while($row = $productData->fetch_array()) {									 		
			  								$selected = "";
			  								if($row['id'] == $orderItemData['product_id']) {
			  									$selected = "selected";
			  								} else {
			  									$selected = "";
			  								}

			  								echo "<option value='".$row['id']."' id='changeProduct".$row['id']."' ".$selected." >".$row['product_name']."</option>";
										 	} // /while 

			  						?>
		  						</select>
			  					</div>
			  				</td>
			  	
								<td style="padding-left:20px;">			  					
			  					<input type="text" name="hsn1[]" id="hsn1<?php echo $y; ?>" autocomplete="off" class="form-control" value="<?php echo $orderItemData['hns']; ?>"/>			  					
			  					<input type="hidden" name="hsnValue1[]" id="hsnValue1<?php echo $y; ?>" autocomplete="off" class="form-control" value="<?php echo $orderItemData['hns']; ?>"/>			  					
			  				</td>
							<td style="padding-left:20px;">
			  					<input type="number" name="xxx[]" id="xxx<?php echo $y; ?>" autocomplete="off" class="form-control"  value="<?php echo $orderItemData['quantity']; ?>"/>
									<input type="hidden" name="xxxValue[]" id="xxxValue<?php echo $y; ?>" autocomplete="off" class="form-control" value="<?php echo $orderItemData['quantity']; ?>"/>		
			  				</td>
			<td style="padding-left:20px;">
			  					<div class="form-group">
			  					<input type="number" name="ssd[]" id="ssd<?php echo $y; ?>" onkeyup="xxtal(<?php echo $y ?>)" autocomplete="off" class="form-control" min="1" value="<?php echo $orderItemData['altquantity']; ?>"/>
			  					</div>
			  				</td>
							
								<td style="padding-left:20px;">			  					
			  					<input type="text" name="rrd[]" id="rrd<?php echo $y; ?>" autocomplete="off" class="form-control" value="<?php echo $orderItemData['rate']; ?>"/>			  					
			  					<input type="hidden" name="rrdValue[]" id="rrdValue<?php echo $y; ?>" autocomplete="off" class="form-control" value="<?php echo $orderItemData['rate']; ?>"/>			  					
			  				</td>
							
							<td style="padding-left:20px;">			  					
			  					<input type="text" name="vvd[]" id="vvd<?php echo $y; ?>" autocomplete="off" class="form-control" disabled="true" value="<?php echo $orderItemData['total']; ?>"/>			  					
			  					<input type="hidden" name="vvdValue[]" id="vvdValue<?php echo $y; ?>" autocomplete="off" class="form-control" value="<?php echo $orderItemData['total']; ?>"/>			  					
			  				</td>
			  				<td>

			  					<button class="btn btn-default removeProductRowBtn1" type="button" id="removeProductRowBtn1" onclick="deleteRow(this)"><i class="glyphicon glyphicon-trash"></i></button>
			  				</td>
			  			</tr>
		  			<?php
		  			$arrayNumber++;
		  			$x++;
			  		} // /for
			  		?>
			  	</tbody>
								  	  <table class="table" id="productTable2">
			  	<thead style="background-color:#4a7400;color:white;">
			  		<tr>			  			
			  			<th style="width:40%;">MATERIAL Product -ADDROW-"A"</th>
			  			<th style="width:20%;">HNS</th>
			  			<th style="width:15%;">Quantity/Kg</th>
			  			<th style="width:15%;">Rate per kg/piece</th>			  			
			  			
			  			<th style="width:10%;">Total</th>
			  		</tr>
			  	</thead>
                <tbody>
			  		<?php

			  		$orderItemSql = "SELECT order_item6.order_item_id, order_item6.order_id, order_item6.product_id,order_item6.hsn,order_item6.quantity, order_item6.rate, order_item6.total FROM order_item6 WHERE order_item6.order_id = {$orderId}";
						$orderItemResult = $connect->query($orderItemSql);
						// $orderItemData = $orderItemResult->fetch_all();						
						
						// print_r($orderItemData);
			  		$arrayNumber1 = 0;
			  		// for($x = 1; $x <= count($orderItemData); $x++) {
			  		$x1 = 1;
			  		while($orderItemData = $orderItemResult->fetch_array()) { 
			  			// print_r($orderItemData); ?>
			  			<tr id="row<?php echo $x; ?>" class="<?php echo $arrayNumber; ?>">			  				
			  				<td style="margin-left:20px;">
			  					<div class="form-group">

			  					<select class="form-control" name="productName[]" id="productName<?php echo $x; ?>" onchange="getProductData(<?php echo $x; ?>)" >
			  						<option value="">~~SELECT~~</option>
			  						<?php
			  							$productSql = "SELECT * FROM production ";
			  							$productData = $connect->query($productSql);

			  							while($row = $productData->fetch_array()) {									 		
			  								$selected = "";
			  								if($row['id'] == $orderItemData['product_id']) {
			  									$selected = "selected";
			  								} else {
			  									$selected = "";
			  								}

			  								echo "<option value='".$row['id']."' id='changeProduct".$row['id']."' ".$selected." >".$row['product_name']."</option>";
										 	} // /while 

			  						?>
		  						</select>
			  					</div>
			  				</td>
			  	
							</td>
								<td style="padding-left:20px;">			  					
			  					<input type="text" name="hsn[]" id="hsn<?php echo $x; ?>" autocomplete="off" disabled="true" class="form-control" value="<?php echo $orderItemData['hsn']; ?>"/>			  					
			  					<input type="hidden" name="hsnValue[]" id="hsnValue<?php echo $x; ?>" autocomplete="off" class="form-control" value="<?php echo $orderItemData['hsn']; ?>"/>			  					
			  				</td>
								<td style="padding-left:20px;">
			  					<div class="form-group">
			  					<input type="number" name="quantity[]" id="quantity<?php echo $x; ?>" onkeyup="getTotal2(<?php echo $x ?>)" autocomplete="off" class="form-control" min="1" value="<?php echo $orderItemData['quantity']; ?>"/>
			  					</div>
			  				</td>
			  				<td style="padding-left:20px;">			  					
			  					<input type="text" name="rate[]" id="rate<?php echo $x; ?>" autocomplete="off" class="form-control" value="<?php echo $orderItemData['rate']; ?>"/>			  					
			  					<input type="hidden" name="rateValue[]" id="rateValue<?php echo $x; ?>" autocomplete="off" class="form-control" value="<?php echo $orderItemData['rate']; ?>"/>			  					
			  				</td>
			  			
			  				<td style="padding-left:20px;">			  					
			  					<input type="text" name="yyy[]" id="yyy<?php echo $x; ?>" autocomplete="off" class="form-control" disabled="true" value="<?php echo $orderItemData['total']; ?>"/>			  					
			  					<input type="hidden" name="yyyValue[]" id="yyyValue<?php echo $x; ?>" autocomplete="off" class="form-control" value="<?php echo $orderItemData['total']; ?>"/>			  					
			  				</td>
			  				<td>

			  					<button class="btn btn-default removeProductRowBtn3" type="button" id="removeProductRowBtn3" onclick="deleteRow2(this)"><i class="glyphicon glyphicon-trash"></i></button>
			  				</td>
			  			</tr>
		  			<?php
		  			$arrayNumber1++;
		  			$x1++;
			  		} // /for
			  		?>
			  	</tbody>				  	
			  </table>
			 			
			

			  
			  	  <table class="table" id="productTable3">
			  	<thead style="background-color:#4a7400;color:white;">
			  		<tr>			  			
			  			<th style="width:15%;">ACPSheet-ADDROW-"D"</th>
			  			<th style="width:8%;">HNS</th>
						<th style="width:7%;">size</th>
						<th style="width:3%;"></th>

						<th style="width:7%;">size</th>
			  			<th style="width:10%;">Alqua</th>			  			

			  			<th style="width:10%;">Rate</th>			  			
			  			<th style="width:10%;">S/Feet</th>

			  			<th style="width:15%;">Total Feet</th>
									  			<th style="width:15%;"> Amount</th>

			  		</tr>
			  	</thead>
			  	<tbody>
			  		<?php

			  		$orderItemSql = "SELECT order_item9.order_item_id,order_item9.order_id, order_item9.product_id,order_item9.hns,order_item9.quantity,order_item9.rate, order_item9.total,order_item9.altquantity,order_item9.size,order_item9.size1,order_item9.totalfeet FROM order_item9 WHERE order_item9.order_id = {$orderId}";
						$orderItemResult = $connect->query($orderItemSql);
						// $orderItemData = $orderItemResult->fetch_all();						
						
						// print_r($orderItemData);
			  		$arrayNumber2 = 0;
			  		// for($x = 1; $x <= count($orderItemData); $x++) {
			  		$x2 = 1;
			  		while($orderItemData = $orderItemResult->fetch_array()) { 
			  			// print_r($orderItemData); ?>
			  			<tr id="row<?php echo $x; ?>" class="<?php echo $arrayNumber; ?>">			  				
			  				<td style="margin-left:20px;">
			  					<div class="form-group">

			  					<select class="chosen-select" name="product2Name[]" id="product2Name<?php echo $z; ?>" onchange="getProductData10 (<?php echo $z; ?>)" >
			  						<option value="">~~SELECT~~</option>
			  						<?php
			  				$productSql = "
                                         SELECT production.id,production.product_name FROM production INNER JOIN product3 WHERE production.product_name=product3.product_name ";
			  							$productData = $connect->query($productSql);

			  							while($row = $productData->fetch_array()) {									 		
			  								$selected = "";
			  								if($row['id'] == $orderItemData['product_id']) {
			  									$selected = "selected";
			  								} else {
			  									$selected = "";
			  								}

			  								echo "<option value='".$row['id']."' id='changeProduct".$row['id']."' ".$selected." >".$row['product_name']."</option>";
										 	} // /while 

			  						?>
		  						</select>
			  					</div>
			  				</td>
								<td style="padding-left:20px;">			  					
			  					<input type="text" name="hsn5[]" id="hsn5<?php echo $z; ?>" autocomplete="off"  class="form-control" value="<?php echo $orderItemData['hns']; ?>"/>			  					
			  					<input type="hidden" name="hsnValue5[]" id="hsnValue5<?php echo $z; ?>" autocomplete="off" class="form-control" value="<?php echo $orderItemData['hns']; ?>"/>			  					
			  				</td>
									<td style="padding-left:20px;">			  					
			  					<input type="number" name="size[]" id="size<?php echo $z; ?>" autocomplete="off"  class="form-control" value="<?php echo $orderItemData['size']; ?>"/>			  					
			  					<input type="hidden" name="sizeValue[]" id="sizeValue<?php echo $z; ?>" autocomplete="off" class="form-control" value="<?php echo $orderItemData['size']; ?>"/>
		  					
			  				</td>
							<td style="padding-left:10px;">			  					
			  				<p>x</p>			  					
			  				</td>
								<td style="padding-left:10px;">			  					
			  					<input type="number" name="size2[]" id="size2<?php echo $z; ?>" autocomplete="off"  class="form-control" value="<?php echo $orderItemData['size1']; ?>"/>			  					
			  					<input type="hidden" name="sizeValue2[]" id="sizeValue2<?php echo $z; ?>" autocomplete="off" class="form-control" value="<?php echo $orderItemData['size1']; ?>"/>			  					
			  				</td>
							
									<td style="padding-left:20px;">			  					
			  					<input type="text" name="rate6[]" id="rate6<?php echo $z; ?>" autocomplete="off" class="form-control" value="<?php echo $orderItemData['rate']; ?>"/>			  					
			  					<input type="hidden" name="rateValue6[]" id="rateValue6<?php echo $z; ?>" autocomplete="off" class="form-control" value="<?php echo $orderItemData['rate']; ?>"/>			  					
			  				</td>
			  				<td style="padding-left:20px;">			  					
			  					<input type="text" name="rate5[]" id="rate5<?php echo $z; ?>" autocomplete="off" class="form-control" value="<?php echo $orderItemData['altquantity']; ?>"/>			  					
			  					<input type="hidden" name="rateValue5[]" id="rateValue5<?php echo $z; ?>" autocomplete="off" class="form-control" value="<?php echo $orderItemData['altquantity']; ?>"/>			  					
			  				</td>
			  		
			  				<td style="padding-left:20px;">
			  					<div class="form-group">
			  					<input type="number" name="acpquantity[]" id="acpquantity<?php echo $z; ?>" onkeyup="getTotal3(<?php echo $z ?>)" autocomplete="off" class="form-control" min="1" value="<?php echo $orderItemData['quantity']; ?>"/>
			  					</div>
			  				</td>
								<td style="padding-left:20px;">			  					
			  					<input type="text" name="zzz2[]" id="zzz2<?php echo $z; ?>" autocomplete="off" class="form-control" disabled="true" value="<?php echo $orderItemData['totalfeet']; ?>"/>			  					
			  					<input type="hidden" name="zzzValue2[]" id="zzzValue2<?php echo $z; ?>" autocomplete="off" class="form-control" value="<?php echo $orderItemData['totalfeet']; ?>"/>			  					
			  				</td>
								<td style="padding-left:20px;">			  					
			  					<input type="text" name="zzz[]" id="zzz<?php echo $z; ?>" autocomplete="off" class="form-control" value="<?php echo $orderItemData['total']; ?>"/>			  					
			  					<input type="hidden" name="zzzValue[]" id="zzzValue<?php echo $z; ?>" autocomplete="off" class="form-control" value="<?php echo $orderItemData['total']; ?>"/>			  					
			  				</td>
							
							
			  				<td>

			  					<button class="btn btn-default removeProductRowBtn" type="button" id="removeProductRowBtn2" onclick="deleteRow3(this)"><i class="glyphicon glyphicon-trash"></i></button>
			  				</td>
			  			</tr>
		  			<?php
		  			$arrayNumber2++;
		  			$x2++;
			  		} // /for
			  		?>
			  	</tbody>			  	
			  </table>

					  
				  <div class="col-md-6">
			  	<div class="form-group">
				    <label for="subTotal" class="col-sm-3 control-label">Mat Total Amount</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control" id="subTotal" name="subTotal" disabled="true" value="<?php echo $data[27] ?>"/>
				      <input type="hidden" class="form-control" id="subTotalValue" name="subTotalValue" value="<?php echo $data[27] ?>"/>
				    </div>
				  </div> <!--/form-group-->	
 	
  	<div class="form-group">
				    <label for="subTotal" class="col-sm-3 control-label">Acp Total Amount</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control" id="subTotal2" name="subTotal2" disabled="true" value="<?php echo $data[28] ?>"/>
				      <input type="hidden" class="form-control" id="subTotalValue2" name="subTotalValue2" value="<?php echo $data[28] ?>"/>
				    </div>
				  </div> <!--/form-group-->	
 	  	<div class="form-group">
				    <label for="subTotal" class="col-sm-3 control-label">Aluminium total Amount</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control" id="Totalcp" name="Totalcp"  value="<?php echo $data[25] ?>"/>
				      <input type="hidden" class="form-control" id="Totalcpvalue" name="Totalcpvalue" value="<?php echo $data[25] ?>"/>
				    </div>
				  </div> <!--/form-group-->	
		
			
		 
			  	<div class="form-group">
				    <label for="tax" class="col-sm-3 control-label">CGST</label>
				    <div class="col-sm-9">
				      <input type="number" class="form-control" id="tax" onkeyup="gettax();"  name="tax" autocomplete="off"  value="<?php echo $data[16] ?>"/>
				    </div>
				  </div> <!--/form-group-->	
				  <div class="form-group">
				    <label for="tax" class="col-sm-3 control-label">SGST</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control" id="tax2"   onkeyup="gettax();" name="tax2" autocomplete="off"  value="<?php echo $data[17] ?>"/>
				    </div>
				  </div> <!--/form-group-->	
	
	  <div class="form-group">
				    <label for="tax" class="col-sm-3 control-label">IGST</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control" id="tax3"   onkeyup="gettax();" name="tax3" autocomplete="off" value="<?php echo $data[18] ?>" />
				    </div>
				  </div> <!--/form-group-->	

					  <div class="form-group">
				    <label for="totalAmount" class="col-sm-3 control-label">Sub Amount</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control" id="fiAmount" name="fiAmount"  value="<?php echo $data[37] ?>"/>
				      <input type="hidden" class="form-control" id="fiAmountValue" name="fiAmountValue" value="<?php echo $data[37] ?>"/>
				    </div>
				  </div> <!--/form-group-->
					  
				  <div class="form-group">
				    <label for="totalAmount" class="col-sm-3 control-label">Total Amount</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control" id="totalAmount" name="totalAmount" value="<?php echo $data[35] ?>"/>
				      <input type="hidden" class="form-control" id="totalAmountValue" name="totalAmountValue" value="<?php echo $data[35] ?>"/>
				    </div>
				  </div> <!--/form-group-->			  
				  <div class="form-group">
				    <label for="discount" class="col-sm-3 control-label">Discount</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control"  id="discount" name="discount" onkeyup="discountFunc()" autocomplete="off" value="<?php echo $data[36] ?>"/>
				    </div>
				  </div> <!--/form-group-->	
			  <div class="form-group">
				    <label for="freight" class="col-sm-3 control-label">Freight Charges</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control"  id="fright" name="fright"  autocomplete="off" value="<?php echo $data[32] ?>"/>
				    </div>
				  </div> <!--/form-group-->	
				   <div class="form-group">
				    <label for="freight" class="col-sm-3 control-label">Other Expense</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control"  id="expense" name="expense"  autocomplete="off" value="<?php echo $data[33] ?>"/>
				    </div>
				  </div> <!--/form-group-->	
 <div class="form-group">
				    <label for="word" class="col-sm-3 control-label">Grand Total</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control" id="grandTotal"  onfocus="document.getElementById('word').innerHTML=withDecimal(this.value)" name="grandTotal"  value="<?php echo $data[9] ?>"/>
				      <input type="hidden" class="form-control" id="grandTotalValue" name="grandTotalValue" value="<?php echo $data[9] ?>"/>
					  
					  
				    </div>
				  </div> <!--/form-group-->
 <div class="form-group">
			        <label for="word" class="col-sm-3 control-label"> Amount in Words </label>
			       <div class="col-sm-9">
			        <input type="text" class="form-control"  id="words1" name="words1" autocomplete="off" value="<?php echo $data[29] ?>"/>
			        </div>
			          </div>	
                  			  
			  </div> <!--/col-md-6-->
			
			  <div class="col-md-6">
			    
			  			  
				  <div class="form-group">
				    <label for="vat" class="col-sm-3 control-label">CGST Total</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control" id="vat"  name="vat" disabled="true" value="<?php echo $data[19] ?>"/>
				      <input type="hidden" class="form-control" id="vatValue" name="vatValue" value="<?php echo $data[19] ?>"/>
				    </div>
				  </div> <!--/form-group-->		
	  <div class="form-group">
				    <label for="vat2" class="col-sm-3 control-label">SGST Total</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control" id="vat2"  name="vat2" disabled="true" value="<?php echo $data[20] ?>"/>
				      <input type="hidden" class="form-control" id="vatValue2" name="vatValue2" value="<?php echo $data[20] ?>"/>
				    </div>
				  </div> <!--/form-group-->		
				    <div class="form-group">
				    <label for="vat3" class="col-sm-3 control-label">IGST Total</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control" id="vat3"  name="vat3" disabled="true" value="<?php echo $data[21] ?>"/>
				      <input type="hidden" class="form-control" id="vatValue3" name="vatValue3" value="<?php echo $data[21] ?>"/>
				    </div>
				  </div> <!--/form-group-->	
				  
				  
				  
				  
				  
				  
			  	<div class="form-group">
				    <label for="paid" class="col-sm-3 control-label">Paid Amount</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control" id="paid" name="paid" autocomplete="off"  onkeyup="paidAmount()" value="<?php echo $data[10] ?>"/>
				    </div>
				  </div> <!--/form-group-->			  
				  <div class="form-group">
				    <label for="due" class="col-sm-3 control-label">Due Amount</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control" id="due" name="due" disabled="true" value="<?php echo $data[11] ?>" />
				      <input type="hidden" class="form-control" id="dueValue" name="dueValue" value="<?php echo $data[11] ?>"/>
				    </div>
				  </div> <!--/form-group-->		
				  <div class="form-group">
				    <label for="clientContact" class="col-sm-3 control-label">Payment Type</label>
				    <div class="col-sm-9">
				      <select class="form-control" name="paymentType" id="paymentType">
				      	<option value="">~~SELECT~~</option>
				      	<option value="1" <?php if($data[12] == 1) {
				      		echo "selected";
				      	} ?> >Cheque</option>
				      	<option value="2" <?php if($data[12] == 2) {
				      		echo "selected";
				      	} ?>  >Cash</option>
				      	<option value="3" <?php if($data[12] == 3) {
				      		echo "selected";
				      	} ?> >Credit Card</option>
				      </select>
				    </div>
				  </div> <!--/form-group-->							  
				  <div class="form-group">
				    <label for="clientContact" class="col-sm-3 control-label">Payment Status</label>
				    <div class="col-sm-9">
				      <select class="form-control" name="paymentStatus" id="paymentStatus">
				      	<option value="">~~SELECT~~</option>
				      	<option value="1" <?php if($data[13] == 1) {
				      		echo "selected";
				      	} ?>  >Full Payment</option>
				      	<option value="2" <?php if($data[13] == 2) {
				      		echo "selected";
				      	} ?> >Advance Payment</option>
				      	<option value="3" <?php if($data[11] == 3) {
				      		echo "selected";
				      	} ?> >No Payment</option>
				      </select>
				    </div>
				  </div> <!--/form-group-->							  
			  </div> <!--/col-md-6-->

			  <p><b>Choose Print </b></p>
			   <input type="checkbox" name="chkbox[]" value="1"><label>AcpSheet</label><br/>
 <input type="checkbox" name="chkbox[]" value="2"><label>Aluminium</label><br/>
 <input type="checkbox" name="chkbox[]" value="3"><label>Material</label><br/>
			  
			  
			  
			  
			  
			  <div class="form-group editButtonFooter">
			    <div class="col-sm-offset-2 col-sm-10">
			    <button type="button" class="btn btn-default" onclick="addRow()" id="addRowBtn" data-loading-text="Loading..."> <i class="glyphicon glyphicon-plus-sign"></i> Add Row </button>

			    <input type="hidden" name="orderId" id="orderId" value="<?php echo $_GET['i']; ?>" />

			    <button type="submit" id="editOrderBtn" data-loading-text="Loading..." class="btn btn-success"><i class="glyphicon glyphicon-ok-sign"></i> Save Changes</button> 
			      
			    </div>
			  </div>
			</form>

			<?php
		} // /get order else  ?>


	</div> <!--/panel-->	
</div> <!--/panel-->	


<!-- edit order -->
<div class="modal fade" tabindex="-1" role="dialog" id="paymentOrderModal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><i class="glyphicon glyphicon-edit"></i> Edit Payment</h4>
      </div>      

      <div class="modal-body form-horizontal" style="max-height:500px; overflow:auto;" >

      	<div class="paymentOrderMessages"></div>

      	     				 				 
			  <div class="form-group">
			    <label for="due" class="col-sm-3 control-label">Due Amount</label>
			    <div class="col-sm-9">
			      <input type="text" class="form-control" id="due" name="due" disabled="true" />					
			    </div>
			  </div> <!--/form-group-->		
			  <div class="form-group">
			    <label for="payAmount" class="col-sm-3 control-label">Pay Amount</label>
			    <div class="col-sm-9">
			      <input type="text" class="form-control" id="payAmount" name="payAmount"/>					      
			    </div>
			  </div> <!--/form-group-->		
			  <div class="form-group">
			    <label for="clientContact" class="col-sm-3 control-label">Payment Type</label>
			    <div class="col-sm-9">
			      <select class="form-control" name="paymentType" id="paymentType" >
			      	<option value="">~~SELECT~~</option>
			      	<option value="1">Cheque</option>
			      	<option value="2">Cash</option>
			      	<option value="3">Credit Card</option>
			      </select>
			    </div>
			  </div> <!--/form-group-->							  
			  <div class="form-group">
			    <label for="clientContact" class="col-sm-3 control-label">Payment Status</label>
			    <div class="col-sm-9">
			      <select class="form-control" name="paymentStatus" id="paymentStatus">
			      	<option value="">~~SELECT~~</option>
			      	<option value="1">Full Payment</option>
			      	<option value="2">Advance Payment</option>
			      	<option value="3">No Payment</option>
			      </select>
			    </div>
			  </div> <!--/form-group-->							  				  
      	        <div id="word"></div>
      </div> <!--/modal-body-->
      <div class="modal-footer">
      	<button type="button" class="btn btn-default" data-dismiss="modal"> <i class="glyphicon glyphicon-remove-sign"></i> Close</button>
        <button type="button" class="btn btn-primary" id="updatePaymentOrderBtn" data-loading-text="Loading..."> <i class="glyphicon glyphicon-ok-sign"></i> Save changes</button>	
      </div>           
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- /edit order-->

<!-- remove order -->
<div class="modal fade" tabindex="-1" role="dialog" id="removeOrderModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><i class="glyphicon glyphicon-trash"></i> Remove Order</h4>
      </div>
      <div class="modal-body">

      	<div class="removeOrderMessages"></div>

        <p>Do you really want to remove ?</p>
      </div>
      <div class="modal-footer removeProductFooter">
        <button type="button" class="btn btn-default" data-dismiss="modal"> <i class="glyphicon glyphicon-remove-sign"></i> Close</button>
        <button type="button" class="btn btn-primary" id="removeOrderBtn" data-loading-text="Loading..."> <i class="glyphicon glyphicon-ok-sign"></i> Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- /remove order-->



<script src = "js/chosen.jquery.js"></script>
<script type = "text/javascript">
	$('.chosen-select').chosen({width: "100%"});
</script>









<script src="custom/js/sales.js"></script>

<?php require_once 'includes/footer.php'; ?>


	