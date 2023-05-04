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
  		Add Order
		<?php } else if($_GET['o'] == 'manord') { ?>
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

  		<form class="form-horizontal" method="POST" action="php_action/createOrder10.php" id="createOrderForm">

			  <div class="form-group">
			    <label for="orderDate" class="col-sm-2 control-label">Invoice Date</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="orderDate" name="orderDate" autocomplete="off" />
			    </div>
			  </div> <!--/form-group-->
		
		
				
			    <div class="form-group">
				    <label for="discount" class="col-sm-2 control-label">Invoice no</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="billno" name="billno"   autocomplete="off" />
				    </div>
				  </div> <!--/form-group-->	
			  
		
		
		
		
			  
  	<tbody>
			  		<?php
			  		$arrayNumber2 = 0;
			  		for($x = 1; $x < 2; $x++) { ?>
			  			<tr id="row<?php echo $x; ?>" class="<?php echo $arrayNumber; ?>">			  				
			  					<div class="form-group">
			    <label for="orderDate" class="col-sm-2 control-label">Suppliername</label>
			    <div class="col-sm-10">

			  					<select class="form-control" name="ff" id="ff<?php echo $x; ?>" onchange="getProduct(<?php echo $x; ?>)" >
			  						<option value="">~~SELECT~~</option>
			  								<?php
			  							$productSql = "SELECT * FROM customer ";
			  							$productData = $connect->query($productSql);

			  							while($row = $productData->fetch_array()) {									 		
			  									echo "<option value='".$row['customer_id']."' id='changeProduct".$row['customer_name']."'>".$row['customer_name']."</option>";
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
			  <table class="table" id="productTable">
			  	<thead>
			  		<tr>			  			
			  			<th style="width:20%;">Product</th>
												<th style="width:20%; display:none;">Hello</th>

						<th style="width:20%;">HSN</th>

			  			<th style="width:20%;">Rate Per piece/Kg</th>
			  			<th style="width:15%;">Total Piece/Kg</th>			  			
			  			<th style="width:15%;">Total</th>			  			
			  			<th style="width:10%;"></th>
			  		</tr>
			  	</thead>
			  	<tbody>
			  		<?php
			  		$arrayNumber = 0;
			  		for($x = 1; $x < 4; $x++) { ?>
			  			<tr id="row<?php echo $x; ?>" class="<?php echo $arrayNumber; ?>">			  				
			  				<td style="margin-left:20px;">
			  					<div class="form-group">

			  					<select class="form-control" name="productName[]" id="productName<?php echo $x; ?>" onchange="getProductData(<?php echo $x; ?>)" >
			  						<option value="">~~SELECT~~</option>
			  					<?php
			  							$productSql = "SELECT * FROM bags
  ";
			  							$productData = $connect->query($productSql);

			  							while($row = $productData->fetch_array()) {									 		
			  								echo "<option value='".$row['id']."' id='changeProduct".$row['id']."'>".$row['product_name']."</option>";
										 	} // /while 

			  						?>
		  						</select>
			  					</div>
			  				</td>
							
									<td style="padding-left:20px;display:none;"  >			  					
			  					<input type="text" name="hello[]" id="hello<?php echo $x; ?>" autocomplete="off"  class="form-control" />			  					
			  					<input type="hidden" name="helloValue[]" id="helloValue<?php echo $x; ?>" autocomplete="off" class="form-control" />			  					
			  				</td>
								<td style="padding-left:20px;">			  					
			  					<input type="text" name="hsn[]" id="hsn<?php echo $x; ?>" autocomplete="off"  class="form-control" />			  					
			  					<input type="hidden" name="hsnValue[]" id="hsnValue<?php echo $x; ?>" autocomplete="off" class="form-control" />			  					
			  				</td>
							
			  				<td style="padding-left:20px;">			  					
			  					<input type="text" name="rate[]" id="rate<?php echo $x; ?>" autocomplete="off"  class="form-control" />			  					
			  					<input type="hidden" name="rateValue[]" id="rateValue<?php echo $x; ?>" autocomplete="off" class="form-control" />			  					
			  				</td>
			  				<td style="padding-left:20px;">
			  					<div class="form-group">
			  					<input type="text" name="quantity[]" id="quantity<?php echo $x; ?>" onkeyup="getTotal(<?php echo $x ?>)" autocomplete="off" class="form-control" min="1" />
			  					</div>
			  				</td>
			  				<td style="padding-left:20px;">			  					
			  					<input type="text" name="total[]" id="total<?php echo $x; ?>" autocomplete="off" class="form-control" />			  					
			  					<input type="hidden" name="totalValue[]" id="totalValue<?php echo $x; ?>" autocomplete="off" class="form-control" />			  					
			  				</td>
			  				<td>

			  					<button class="btn btn-default removeProductRowBtn" type="button" id="removeProductRowBtn" onclick="removeProductRow(<?php echo $x; ?>)"><i class="glyphicon glyphicon-trash"></i></button>
			  				</td>
			  			</tr>
		  			<?php
		  			$arrayNumber++;
			  		} // /for
			  		?>
			  	</tbody>			  	
			  </table>

 <div class="col-md-6">
			  	<div class="form-group">
				    <label for="subTotal" class="col-sm-3 control-label">Sub Amount</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control" id="subTotal" name="subTotal" disabled="true" />
				      <input type="hidden" class="form-control" id="subTotalValue" name="subTotalValue" />
				    </div>
				  </div> <!--/form-group-->	


		
			  	<div class="form-group">
				    <label for="tax" class="col-sm-3 control-label">CGST</label>
				    <div class="col-sm-9">
				      <input type="number" class="form-control" id="tax" onkeyup="gettax();"  name="tax" autocomplete="off"  />
				    </div>
				  </div> <!--/form-group-->	
				  <div class="form-group">
				    <label for="tax" class="col-sm-3 control-label">SGST</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control" id="tax2" onkeyup="gettax();" name="tax2" autocomplete="off"  />
				    </div>
				  </div> <!--/form-group-->	
	
	  <div class="form-group">
				    <label for="tax" class="col-sm-3 control-label">IGST</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control" id="tax3" onkeyup="gettax();" name="tax3" autocomplete="off"  />
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
				      <input type="text" class="form-control" id="discount" name="discount" onkeyup="discountFunc()" autocomplete="off" />
				    </div>
				  </div> <!--/form-group-->	
				  <div class="form-group">
				    <label for="grandTotal" class="col-sm-3 control-label">Grand Total</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control" id="grandTotal" name="grandTotal" disabled="true" />
				      <input type="hidden" class="form-control" id="grandTotalValue" name="grandTotalValue" />
				    </div>
				  </div> <!--/form-group-->			  		  
			  </div> <!--/col-md-6-->

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
			  </div>
			  <div class="col-md-6">
			  	<div class="form-group">
				    <label for="paid" class="col-sm-3 control-label">Paid Amount</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control" id="paid" name="paid" autocomplete="off" onkeyup="paidAmount()" />
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


			  <div class="form-group submitButtonFooter">
			    <div class="col-sm-offset-2 col-sm-10">
			    <button type="button" class="btn btn-default" onclick="addRow()" id="addRowBtn" data-loading-text="Loading..."> <i class="glyphicon glyphicon-plus-sign"></i> Add Row </button>

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
						<th>Total products</th>
						<th>Payment Status</th>
						<th>Option</th>
					</tr>
				</thead>
			</table>

		<?php 
		// /else manage order
		} else if($_GET['o'] == 'editOrd') {
			// get order
			?>
			
				<div class="success-messages"></div> <!--/success-messages-->

  		<form class="form-horizontal" method="POST" action="php_action/editOrder.php" id="editOrderForm">

  			<?php $orderId = $_GET['i'];

  			$sql = "SELECT orders5.order_id, orders5.order_date, orders5.client_name, orders5.client_contact, orders5.sub_total,orders5.tax, orders5.vat, orders5.total_amount, orders5.discount, orders5.grand_total, orders5.paid, orders5.due, orders5.payment_type, orders5.payment_status,orders5.billno,orders5.cgst,orders5.sgst,orders5.igst,orders5.cgsttotal,orders5.sgsttotal,orders5.igsttotal FROM orders5	
					WHERE orders5.order_id = {$orderId}";

				$result = $connect->query($sql);
				$data = $result->fetch_row();				
  			?>

			  <div class="form-group">
			    <label for="orderDate" class="col-sm-2 control-label">Order Date</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="orderDate" name="orderDate" autocomplete="off" value="<?php echo $data[1] ?>" />
			    </div>
			  </div> <!--/form-group-->
			  <div class="form-group">
			    <label for="clientName" class="col-sm-2 control-label">Client Name</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="clientName" name="clientName" placeholder="Client Name" autocomplete="off" value="<?php echo $data[2] ?>" />
			    </div>
			  </div> <!--/form-group-->
			  <div class="form-group"style="display:none;">
			    <label for="clientContact" class="col-sm-2 control-label">Client Contact</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="clientContact" name="clientContact" placeholder="Contact Number" autocomplete="off" value="<?php echo $data[3] ?>" />
			    </div>
			  </div> <!--/form-group-->			  
	  <div class="form-group">
			    <label for="clientContact" class="col-sm-2 control-label">Billno</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="clientContact" name="clientContact" placeholder="Contact Number" autocomplete="off" value="<?php echo $data[14] ?>" />
			    </div>
			  </div> <!--/form-group-->			  
			  <table class="table" id="productTable">
			  	<thead>
			  		<tr>			  			
			  			<th style="width:20%;">Product</th>
									  			<th style="width:20%;">HSN</th>

			  			<th style="width:20%;">Rate</th>
			  			<th style="width:15%;">Quantity</th>			  			
			  			<th style="width:15%;">Total</th>			  			
			  			<th style="width:10%;"></th>
			  		</tr>
			  	</thead>
			  	<tbody>
			  		<?php

			  		$orderItemSql = "SELECT order_item5.order_item_id, order_item5.order_id,order_item5.hsn, order_item5.product_id, order_item5.quantity, order_item5.rate, order_item5.total FROM order_item5 WHERE order_item5.order_id = {$orderId}";
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

			  					<select class="form-control" name="productName[]" id="productName<?php echo $x; ?>" onchange="getProductData(<?php echo $x; ?>)" >
			  						<option value="">~~SELECT~~</option>
			  						<?php
			  							$productSql = "SELECT * FROM bags ";
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
			  					<input type="text" name="hsn[]" id="hsn<?php echo $x; ?>" autocomplete="off" disabled="true" class="form-control" value="<?php echo $orderItemData['hsn']; ?>" />			  					
			  					<input type="hidden" name="hsnValue[]" id="hsnValue<?php echo $x; ?>" autocomplete="off" class="form-control" value="<?php echo $orderItemData['hsn']; ?>" />			  					
			  				</td>
			  				<td style="padding-left:20px;">			  					
			  					<input type="text" name="rate[]" id="rate<?php echo $x; ?>" autocomplete="off" disabled="true" class="form-control" value="<?php echo $orderItemData['rate']; ?>" />			  					
			  					<input type="hidden" name="rateValue[]" id="rateValue<?php echo $x; ?>" autocomplete="off" class="form-control" value="<?php echo $orderItemData['rate']; ?>" />			  					
			  				</td>
			  				<td style="padding-left:20px;">
			  					<div class="form-group">
			  					<input type="number" name="quantity[]" id="quantity<?php echo $x; ?>" onkeyup="getTotal(<?php echo $x ?>)" autocomplete="off" class="form-control" min="1" value="<?php echo $orderItemData['quantity']; ?>" />
			  					</div>
			  				</td>
			  				<td style="padding-left:20px;">			  					
			  					<input type="text" name="total[]" id="total<?php echo $x; ?>" autocomplete="off" class="form-control" disabled="true" value="<?php echo $orderItemData['total']; ?>"/>			  					
			  					<input type="hidden" name="totalValue[]" id="totalValue<?php echo $x; ?>" autocomplete="off" class="form-control" value="<?php echo $orderItemData['total']; ?>"/>			  					
			  				</td>
			  				<td>

			  					<button class="btn btn-default removeProductRowBtn" type="button" id="removeProductRowBtn" onclick="removeProductRow(<?php echo $x; ?>)"><i class="glyphicon glyphicon-trash"></i></button>
			  				</td>
			  			</tr>
		  			<?php
		  			$arrayNumber++;
		  			$x++;
			  		} // /for
			  		?>
			  	</tbody>			  	
			  </table>

			  <div class="col-md-6">
			  		  
				 <div class="form-group">
				    <label for="tax" class="col-sm-3 control-label">CGST</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control" id="tax" value="<?php echo $data[15] ?>" name="tax" autocomplete="off"  />
				    </div>
				  </div> <!--/form-group-->	
				  <div class="form-group">
				    <label for="tax" class="col-sm-3 control-label">SGST</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control" id="tax2"value="<?php echo $data[16] ?>" name="tax2" autocomplete="off"  />
				    </div>
				  </div> <!--/form-group-->	
	
	  <div class="form-group">
				    <label for="tax" class="col-sm-3 control-label">IGST</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control" id="tax3"value="<?php echo $data[17] ?>" name="tax3" autocomplete="off"  />
				    </div>
				  </div> <!--/form-group-->	
	
		  
				  <div class="form-group">
				    <label for="discount" class="col-sm-3 control-label">Discount</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control" id="discount" name="discount" onkeyup="discountFunc()" autocomplete="off" value="<?php echo $data[8] ?>" />
				    </div>
				  </div> <!--/form-group-->	
				  <div class="form-group">
				    <label for="grandTotal" class="col-sm-3 control-label">Grand Total</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control" id="grandTotal" name="grandTotal" disabled="true" value="<?php echo $data[9] ?>"  />
				      <input type="hidden" class="form-control" id="grandTotalValue" name="grandTotalValue" value="<?php echo $data[9] ?>"  />
				    </div>
				  </div> <!--/form-group-->			  		  
			  </div> <!--/col-md-6-->

			  <div class="col-md-6">
			  
			    <div class="form-group">
				    <label for="vat" class="col-sm-3 control-label">CGST Total</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control" id="vat" value="<?php echo $data[18] ?>" name="vat" disabled="true" />
				      <input type="hidden" class="form-control" value="<?php echo $data[18] ?>"id="vatValue" name="vatValue" />
				    </div>
				  </div> <!--/form-group-->		
	  <div class="form-group">
				    <label for="vat2" class="col-sm-3 control-label">SGST Total</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control" id="vat2" value="<?php echo $data[19] ?>" name="vat2" disabled="true" />
				      <input type="hidden" class="form-control" value="<?php echo $data[19] ?>" id="vatValue2" name="vatValue2" />
				    </div>
				  </div> <!--/form-group-->		
				    <div class="form-group">
				    <label for="vat3" class="col-sm-3 control-label">IGST Total</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control" value="<?php echo $data[20] ?>" id="vat3"  name="vat3" disabled="true" />
				      <input type="hidden" class="form-control" value="<?php echo $data[20] ?>" id="vatValue3" name="vatValue3" />
				    </div>
				  </div> <!--/form-group-->	
			  
			  
			  
			  	<div class="form-group">
				    <label for="paid" class="col-sm-3 control-label">Paid Amount</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control" id="paid" name="paid" autocomplete="off" onkeyup="paidAmount()" value="<?php echo $data[10] ?>"  />
				    </div>
				  </div> <!--/form-group-->			  
				  <div class="form-group">
				    <label for="due" class="col-sm-3 control-label">Due Amount</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control" id="due" name="due" disabled="true" value="<?php echo $data[11] ?>"  />
				      <input type="hidden" class="form-control" id="dueValue" name="dueValue" value="<?php echo $data[11] ?>"  />
				    </div>
				  </div> <!--/form-group-->		
				  <div class="form-group">
				    <label for="clientContact" class="col-sm-3 control-label">Payment Type</label>
				    <div class="col-sm-9">
				      <select class="form-control" name="paymentType" id="paymentType" >
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


<script src="custom/js/2.js"></script>

<?php require_once 'includes/footer.php'; ?>


	