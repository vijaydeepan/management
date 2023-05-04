<?php require_once 'php_action/db_connect.php' ?>
<?php require_once 'includes/header.php'; ?>

<div class="row">
	<div class="col-md-12">

		<ol class="breadcrumb">
		  <li><a href="dashboard.php">Home</a></li>		  
		  <li class="active">Product</li>
		</ol>

		<div class="panel panel-default">
			<div class="panel-heading">
				<div class="page-heading"> <i class="glyphicon glyphicon-edit"></i> Manage Product</div>
			</div> <!-- /panel-heading -->
			<div class="panel-body">

				<div class="remove-messages"></div>





				
				
			
						<div class="div-action pull pull-right" style="padding-bottom:20px;">
					<button class="btn btn-default button1"   data-toggle="modal" data-target="#addStorage"> <img src="6.png" width="30" /></i> Storageunit </button>
				</div> <!-- /div-action -->	

				
				
						<div class="div-action pull pull-right" style="padding-bottom:20px;">
					<button class="btn btn-default button1"   data-toggle="modal" onclick="location.href = 'purchasereport.php';"> <img src="6.png" width="30" /></i> Sales Report </button>
				</div> <!-- /div-action -->	
				
				
				
				
	<div class="div-action pull pull-right" style="padding-bottom:20px;">			
									
				 <div class="dropdown">
    <button class="btn btn-default button1" type="button" data-toggle="dropdown">  <img src="2.png" width="30" />  <i class="glyphicon glyphicon-plus-sign"> </i> Add  Return
   </button>
    <ul class="dropdown-menu">
      <li>	<button class="btn btn-default button" data-toggle="modal" data-target="#addreturnModel"> <i class="glyphicon glyphicon-plus-sign"></i> Add Return </button></li>
      <li><button class="btn btn-default button1" onclick="location.href = 'return.php';"> <i class="glyphicon glyphicon-plus-sign"></i> Manage  Return </button></li>
    </ul>
  </div>  </div>
						<div class="div-action pull pull-right" style="padding-bottom:20px;">
	
					<button class="btn btn-default button1" data-toggle="modal" data-target="#addBrandModel"><img src="5.png" width="30" /> <i class="glyphicon glyphicon-plus-sign"></i> Add quantity for production </button>
				</div> <!-- /div-action -->				
								
			
				
				
					
				
				
				
					<div class="div-action pull pull-right" style="padding-bottom:20px;">
									 <div class="dropdown">

					<button class="btn btn-default button1" type="button" data-toggle="dropdown"   > <img src="3.png" width="30" /> <i class="glyphicon glyphicon-plus-sign"></i> Add Dealer </button>
					<ul class="dropdown-menu">
      <li>	<button class="btn btn-default button" data-toggle="modal" data-target="#addSupplierModel"> <i class="glyphicon glyphicon-plus-sign"></i> Add Dealer </button></li>
      <li><button class="btn btn-default button1" onclick="location.href = 'supplier.php?o=manord';"> <i class="glyphicon glyphicon-plus-sign"></i> Manage Dealer </button></li>
    </ul>
					</div>
				</div> <!-- /div-action -->		
				
		
				
				
				
				
									<div class="div-action pull pull-right" style="padding-bottom:20px;">			
									
				 <div class="dropdown">
    <button class="btn btn-default button1" type="button" data-toggle="dropdown">  <img src="2.png" width="30" />  <i class="glyphicon glyphicon-plus-sign"> </i> Add  Product
   </button>
    <ul class="dropdown-menu">
      <li>	<button class="btn btn-default button" data-toggle="modal" data-target="#addProductModel"> <i class="glyphicon glyphicon-plus-sign"></i> Add Product </button></li>
      <li><button class="btn btn-default button1" onclick="location.href = 'purchaseproduct.php?o=manord';"> <i class="glyphicon glyphicon-plus-sign"></i> Manage  Product </button></li>
    </ul>
  </div>  </div>

				
				
			
				
				<table class="table" id="manageProductTable">
					<thead>
						<tr>
							<th >id</th>							
							<th>Date</th>
							<th>Product name</th>							
							<th>Opening Stock</th>
							<th>Todays Quantity</th>
							<th>Return</th>
							<th>wastage</th>
							<th>sales</th>
							<th>closing</th>

						</tr>
					</thead>
				</table>
				<!-- /table -->

			</div> <!-- /panel-body -->
		</div> <!-- /panel -->		
	</div> <!-- /col-md-12 -->
</div> <!-- /row -->

<script>
    $(document).ready(function(){
      var date_input=$('input[name="date2"]'); //our date input has the name "date"
      var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
      var options={
        format: 'dd/mm/yyyy',
        container: container,
        todayHighlight: true,
        autoclose: true,
      };
      date_input.datepicker(options);
    })
</script>
<script>
    $(document).ready(function(){
      var date_input=$('input[name="date"]'); //our date input has the name "date"
      var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
      var options={
        format: 'dd/mm/yyyy',
        container: container,
        todayHighlight: true,
        autoclose: true,
      };
      date_input.datepicker(options);
    })
</script>
<div class="modal fade" id="addBrandModel" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
    	
    	<form class="form-horizontal" id="submitBrandForm" action="php_action/purchaseend.php" method="POST">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title"><i class="fa fa-plus"></i> Add Purchase</h4>
	      </div>
	      <div class="modal-body">


    
	      	<div id="add-brand-messages"></div>
<div class="form-group">
			    <label for="orderDate" class="col-sm-3 control-label">Order Date</label>
					        	<label class="col-sm-1 control-label">: </label>

				
			    <div class="col-sm-8">
        <input class="form-control" id="date" name="date" placeholder="DD/MM/YYY" type="text"/>
			    </div>
			  </div> <!--/form-group-->
		
	
	<tbody>
			  		<?php
			  		$arrayNumber2 = 0;
			  		for($x = 1; $x < 2; $x++) { ?>
			  			<tr id="row<?php echo $x; ?>" class="<?php echo $arrayNumber; ?>">			  				
			  				<td style="margin-left:20px;">
			  					<div class="form-group">
    <label for="orderDate" class="col-sm-3 control-label">Product Name</label>
					        	<label class="col-sm-1 control-label">: </label>

				
				
			    <div class="col-sm-8">
			  					<select class="form-control" name="total_quantity2" id="total_quantity2<?php echo $x; ?>" onchange="getProduct(<?php echo $x; ?>)" >
			  						<option value="">~~SELECT~~</option>
			  								<?php
			  							$productSql = "SELECT * FROM purchase_product ";
			  							$productData = $connect->query($productSql);

			  							while($row = $productData->fetch_array()) {									 		
			  									echo "<option value='".$row['id']."' id='changeProduct".$row['product_name']."'>".$row['product_name']."</option>";
										 	} // /while 

			  						?>
		  						</select>
			  					</div>
											  					</div>

			  				</td>
														 <div class="form-group">

							   <label for="orderDate" class="col-sm-3 control-label">Total Quantity</label>
					        	<label class="col-sm-1 control-label">: </label>


			    <div class="col-sm-8">
			  				<td style="padding-left:20px;">			  					
			  					<input type="text" name="total_quantity"  id="total_quantity<?php echo $x; ?>"  autocomplete="off"  class="form-control" />			  					
			  				</td>
			  		</div>
								  		</div>

										
															 <div class="form-group" style="display:none;">

							   <label for="orderDate" class="col-sm-3 control-label">Total Quantity</label>
					        	<label class="col-sm-1 control-label">: </label>

  <div class="col-sm-8">
			  				<td style="padding-left:20px;">			  					
			  					<input type="text" name="deepan"  id="deepan<?php echo $x; ?>"  autocomplete="off"  class="form-control" />			  					
			  				</td>
			  		</div>
								  		</div>
										
										
										
										

		  			<?php
		  			$arrayNumber2++;
			  		} // /for
			  		?>
			  	</tbody>		
								
			   <div class="form-group">
	        	<label for="brandName" class="col-sm-3 control-label">Today's production: </label>
	        	<label class="col-sm-1 control-label">: </label>
				    <div class="col-sm-8">
				      <input type="text" class="form-control" id="quantity2" placeholder="quantity2" onkeyup="calculate();" name="quantity2" autocomplete="off">
				    </div>
	        </div> <!-- /form-group-->	         	        

			
			
			 	
			
			
			
   <div class="form-group" style="display:none;">
	        	<label for="brandName" class="col-sm-3 control-label">Quantity: </label>
	        	<label class="col-sm-1 control-label">: </label>
				    <div class="col-sm-8">
				      <input type="text" class="form-control" id="quantity" name="quantity" placeholder="quantity" onkeyup="calculate();" name="quantity" autocomplete="off">
				    </div>
	        </div> <!-- /form-group-->	         	        

			
				
			 <div class="form-group" style="display:none;">
	        	<label for="brandName" class="col-sm-3 control-label">Wastage </label>
	        	<label class="col-sm-1 control-label">: </label>
				    <div class="col-sm-8">
				      <input type="text" class="form-control" id="wastage" placeholder="wastage" name="wastage" autocomplete="off">
				    </div>
	        </div> <!-- /form-group-->	
			
			
			<script>
  function calculate() {
    var costprice = parseInt(document.getElementById('quantity2').value);
    var quantity = parseInt(document.getElementById('quantity').value);

    //You can add more conditions to check if both values are present then only do calculation etc.
    var Totalcp = costprice - quantity;
    document.getElementById('wastage').value = Totalcp;
  }

</script>
			
			
			
			
			
			
			 
	        	    
			  

			

	      </div> <!-- /modal-body -->
	      
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        
	        <button type="submit" class="btn btn-primary" id="createBrandBtn" data-loading-text="Loading..." autocomplete="off">Save Changes</button>
	      </div>
	      <!-- /modal-footer -->
     	</form>
	     <!-- /.form -->
    </div>
    <!-- /modal-content -->
  </div>
  <!-- /modal-dailog -->
</div>
<!-- / add modal -->







<div class="modal fade" id="addreturnModel" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
    	
    	<form class="form-horizontal" id="submitBrandForm" action="php_action/purchasereturn.php" method="POST">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title"><i class="fa fa-plus"></i> Add return</h4>
	      </div>
	      <div class="modal-body">


    
	      	<div id="add-brand-messages"></div>
<div class="form-group">
			    <label for="orderDate" class="col-sm-3 control-label">Order Date</label>
					        	<label class="col-sm-1 control-label">: </label>

				
			    <div class="col-sm-8">
        <input class="form-control" id="date2" name="date2" placeholder="DD/MM/YYY" type="text"/>
			    </div>
			  </div> <!--/form-group-->
		
	
	<tbody>
			  		<?php
			  		$arrayNumber2 = 0;
			  		for($x = 1; $x < 2; $x++) { ?>
			  			<tr id="row<?php echo $x; ?>" class="<?php echo $arrayNumber; ?>">			  				
			  				<td style="margin-left:20px;">
			  					<div class="form-group">
    <label for="orderDate" class="col-sm-3 control-label">Product Name</label>
					        	<label class="col-sm-1 control-label">: </label>

				
				
			    <div class="col-sm-8">
			  					<select class="form-control" name="total_quantity21" id="total_quantity21<?php echo $x; ?>" onchange="getProduct2(<?php echo $x; ?>)" >
			  						<option value="">~~SELECT~~</option>
			  								<?php
			  							$productSql = "SELECT * FROM purchase_product ";
			  							$productData = $connect->query($productSql);

			  							while($row = $productData->fetch_array()) {									 		
			  									echo "<option value='".$row['id']."' id='changeProduct".$row['product_name']."'>".$row['product_name']."</option>";
										 	} // /while 

			  						?>
		  						</select>
			  					</div>
											  					</div>

			  				</td>
														 <div class="form-group">

							   <label for="orderDate" class="col-sm-3 control-label">Total Quantity</label>
					        	<label class="col-sm-1 control-label">: </label>


			    <div class="col-sm-8">
			  				<td style="padding-left:20px;">			  					
			  					<input type="text" name="total_quantity1"  id="total_quantity1<?php echo $x; ?>"  autocomplete="off"  class="form-control" />			  					
			  				</td>
			  		</div>
								  		</div>

										
															 <div class="form-group" style="display:none;">

							   <label for="orderDate" class="col-sm-3 control-label">Total Quantity</label>
					        	<label class="col-sm-1 control-label">: </label>

  <div class="col-sm-8">
			  				<td style="padding-left:20px;">			  					
			  					<input type="text" name="deepan1"  id="deepan1<?php echo $x; ?>"  autocomplete="off"  class="form-control" />			  					
			  				</td>
			  		</div>
								  		</div>
										
										
										
										

		  			<?php
		  			$arrayNumber2++;
			  		} // /for
			  		?>
			  	</tbody>		
								
			   <div class="form-group">
	        	<label for="brandName" class="col-sm-3 control-label">Return: </label>
	        	<label class="col-sm-1 control-label">: </label>
				    <div class="col-sm-8">
				      <input type="text" class="form-control" id="quantity21" placeholder="quantity21" onkeyup="calculate();" name="quantity21" autocomplete="off">
				    </div>
	        </div> <!-- /form-group-->	         	        

			
			
			 	
			
			
			
   <div class="form-group" style="display:none;">
	        	<label for="brandName" class="col-sm-3 control-label">Quantity: </label>
	        	<label class="col-sm-1 control-label">: </label>
				    <div class="col-sm-8">
				      <input type="text" class="form-control" id="quantity1" name="quantity1" placeholder="quantity" onkeyup="calculate();" name="quantity" autocomplete="off">
				    </div>
	        </div> <!-- /form-group-->	         	        

			
				
			 <div class="form-group" >
	        	<label for="brandName" class="col-sm-3 control-label">Wastage </label>
	        	<label class="col-sm-1 control-label">: </label>
				    <div class="col-sm-8">
				      <input type="text" class="form-control" id="wastage1" placeholder="wastage1" name="wastage1" autocomplete="off">
				    </div>
	        </div> <!-- /form-group-->	
			
			
			<script>
  function calculate() {
    var costprice = parseInt(document.getElementById('quantity2').value);
    var quantity = parseInt(document.getElementById('quantity').value);

    //You can add more conditions to check if both values are present then only do calculation etc.
    var Totalcp = costprice - quantity;
    document.getElementById('wastage').value = Totalcp;
  }

</script>
			
			
			
			
			
			
			 
	        	    
			  

			

	      </div> <!-- /modal-body -->
	      
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        
	        <button type="submit" class="btn btn-primary" id="createBrandBtn" data-loading-text="Loading..." autocomplete="off">Save Changes</button>
	      </div>
	      <!-- /modal-footer -->
     	</form>
	     <!-- /.form -->
    </div>
    <!-- /modal-content -->
  </div>
  <!-- /modal-dailog -->
</div>
<!-- / add modal -->



























<!-- edit brand -->
<div class="modal fade" id="editBrandModel" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
    	
    	<form class="form-horizontal" id="editBrandForm" action="php_action/editBrand.php" method="POST">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title"><i class="fa fa-edit"></i> Edit Brand</h4>
	      </div>
	      <div class="modal-body">

	      	<div id="edit-brand-messages"></div>

	      	<div class="modal-loading div-hide" style="width:50px; margin:auto;padding-top:50px; padding-bottom:50px;">
						<i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>
						<span class="sr-only">Loading...</span>
					</div>

		      <div class="edit-brand-result">
		      	<div class="form-group">
		        	<label for="editBrandName" class="col-sm-3 control-label">Brand Name: </label>
		        	<label class="col-sm-1 control-label">: </label>
					    <div class="col-sm-8">
					      <input type="text" class="form-control" id="editBrandName" placeholder="Brand Name" name="editBrandName" autocomplete="off">
					    </div>
		        </div> <!-- /form-group-->	         	        
		        <div class="form-group">
		        	<label for="editBrandStatus" class="col-sm-3 control-label">Status: </label>
		        	<label class="col-sm-1 control-label">: </label>
					    <div class="col-sm-8">
					      <select class="form-control" id="editBrandStatus" name="editBrandStatus">
					      	<option value="">~~SELECT~~</option>
					      	<option value="1">Available</option>
					      	<option value="2">Not Available</option>
					      </select>
					    </div>
		        </div> <!-- /form-group-->	
		      </div>         	        
		      <!-- /edit brand result -->

	      </div> <!-- /modal-body -->
	      
	      <div class="modal-footer editBrandFooter">
	        <button type="button" class="btn btn-default" data-dismiss="modal"> <i class="glyphicon glyphicon-remove-sign"></i> Close</button>
	        
	        <button type="submit" class="btn btn-success" id="editBrandBtn" data-loading-text="Loading..." autocomplete="off"> <i class="glyphicon glyphicon-ok-sign"></i> Save Changes</button>
	      </div>
	      <!-- /modal-footer -->
     	</form>
	     <!-- /.form -->
    </div>
    <!-- /modal-content -->
  </div>
  <!-- /modal-dailog -->
</div>
<!-- / add modal -->
<!-- /edit brand -->

<!-- remove brand -->


<div class="modal fade" tabindex="-1" role="dialog" id="addProductModel">
  <div class="modal-dialog">
    <div class="modal-content">
    	
    	<form class="form-horizontal" id="submitBrandForm" action="php_action/purchaseproduct.php" method="POST">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title"><i class="fa fa-plus"></i> Add Product</h4>
	      </div>
	      <div class="modal-body">

	      	<div id="add-brand-messages"></div>

	        <div class="form-group">
	        	<label for="productName" class="col-sm-3 control-label">Product Name </label>
	        	<label class="col-sm-1 control-label">: </label>
				    <div class="col-sm-8">
				      <input type="text" class="form-control" id="productName" placeholder="Product Name" name="productName" autocomplete="off">
				    </div>
	        </div> <!-- /form-group-->	         	        
	     
 <div class="form-group">
	        	<label for="rate" class="col-sm-3 control-label">Rate</label>
	        	<label class="col-sm-1 control-label">: </label>
				    <div class="col-sm-8">
				      <input type="text" class="form-control" id="rate" placeholder="Rate" name="rate" autocomplete="off">
				    </div>
	        </div> <!-- /form-group-->	         	
	      
		   <div class="form-group">
	        	<label for="rate" class="col-sm-3 control-label">quantity </label>
	        	<label class="col-sm-1 control-label">: </label>
				    <div class="col-sm-8">
				      <input type="text" class="form-control" id="rate2" placeholder="quantity" name="rate2" autocomplete="off">
				    </div>
	        </div> <!-- /form-group-->	         	
	      </div> <!-- /modal-body -->
		  
		  
		  
		  
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        
	        <button type="submit" class="btn btn-primary" id="createBrandBtn" data-loading-text="Loading..." autocomplete="off">Save Changes</button>
	      </div>
	      <!-- /modal-footer -->
     	</form>
	     <!-- /.form -->
    </div>
    <!-- /modal-content -->
  </div>
  <!-- /modal-dailog -->
</div><!-- /.modal -->



<div class="modal fade" tabindex="-1" role="dialog" id="addSupplierModel">
  <div class="modal-dialog">
    <div class="modal-content">
    	
    	<form class="form-horizontal" id="submitBrandForm" action="php_action/createSupplier.php" method="POST">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title"><i class="fa fa-plus"></i> Add Dealer</h4>
	      </div>
	      <div class="modal-body">

	      	<div id="add-brand-messages"></div>

	        <div class="form-group">
	        	<label for="brandName" class="col-sm-3 control-label">Dealer Name </label>
	        	<label class="col-sm-1 control-label">: </label>
				    <div class="col-sm-8">
				      <input type="text" class="form-control" id="suplier_name" placeholder="Dealer_name" name="suplier_name" autocomplete="off">
				    </div>
	        </div> <!-- /form-group-->	         	        
	              	          <div class="form-group">
	        	<label for="brandName" class="col-sm-3 control-label">Dealer Address  </label>
	        	<label class="col-sm-1 control-label">: </label>
				    <div class="col-sm-8">
				      <input type="text" class="form-control" id="suplier_address" placeholder="Dealer address" name="suplier_address" autocomplete="off">
				    </div>
	        </div> <!-- /form-group-->	 
			  <div class="form-group">
	        	<label for="brandName" class="col-sm-3 control-label">Dealer Contact  </label>
	        	<label class="col-sm-1 control-label">: </label>
				    <div class="col-sm-8">
				      <input type="text" class="form-control" id="suplier_contact" placeholder="suplier contact" name="suplier_contact" autocomplete="off">
				    </div>
	        </div> <!-- /form-group-->	 
			  <div class="form-group">
	        	<label for="brandName" class="col-sm-3 control-label">note </label>
	        	<label class="col-sm-1 control-label">: </label>
				    <div class="col-sm-8">
				      <input type="text" class="form-control" id="note" placeholder="note" name="note" autocomplete="off">
				    </div>
	        </div> <!-- /form-group-->	 
			

	      </div> <!-- /modal-body -->
	      
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        
	        <button type="submit" class="btn btn-primary" id="createBrandBtn" data-loading-text="Loading..." autocomplete="off">Save Changes</button>
	      </div>
	      <!-- /modal-footer -->
     	</form>
	     <!-- /.form -->
    </div>
    <!-- /modal-content -->
  </div>
  <!-- /modal-dailog -->
</div><!-- /.modal -->




<div class="modal fade" tabindex="-1" role="dialog" id="addStorage">
  <div class="modal-dialog">
    <div class="modal-content">
    	
    	<form class="form-horizontal" id="submitBrandForm" action="php_action/createSupplier.php" method="POST">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title"></i>Storage Unit</h4>
	      </div>
	      <div class="modal-body">

	      	<div id="add-brand-messages"></div>
<style>
table,  td,tr,th {
    border: 1px solid black;
    padding: 10px;
 border-collapse: separate;
    border-spacing: 2px;
	    text-align: center;
}
</style>
			<?php 
				      	$sql = "SELECT product_name,quantity,purchase_quantity,rate FROM purchase_product ";
								$result = $connect->query($sql);

							if ($result->num_rows > 0) {
    echo "<table ><tr><th>Product</th><th>Production Quantity</th><th>Purchase Quantity</th><th>Rate</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><th>"  . $row["product_name"]. "</th><th>"  . $row["quantity"]. "</th><th>"  . $row["purchase_quantity"]. "</th><th>"  . $row["rate"]. "</th></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

?> 
				   
			
			
			
			

	      </div> <!-- /modal-body -->
	      
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        
	      </div>
	      <!-- /modal-footer -->
     	</form>
	     <!-- /.form -->
    </div>
    <!-- /modal-content -->
  </div>
  <!-- /modal-dailog -->
</div><!-- /.modal -->



































<div class="modal fade" tabindex="-1" role="dialog" id="removeProductModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><i class="glyphicon glyphicon-trash"></i> Remove Product</h4>
      </div>
      <div class="modal-body">

      	<div class="removeProductMessages"></div>

        <p>Do you really want to remove ?</p>
      </div>
      <div class="modal-footer removeProductFooter">
        <button type="button" class="btn btn-default" data-dismiss="modal"> <i class="glyphicon glyphicon-remove-sign"></i> Close</button>
        <button type="button" class="btn btn-primary" id="removeProductBtn" data-loading-text="Loading..."> <i class="glyphicon glyphicon-ok-sign"></i> Save changes</button>
      </div>
	  <div class="modal fade" tabindex="-1" role="dialog" id="removeProductModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><i class="glyphicon glyphicon-trash"></i> Remove Product</h4>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- /categories brand -->


<script src="custom/js/stock.js"></script>

<?php require_once 'includes/footer.php'; ?>