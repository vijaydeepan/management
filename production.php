<?php require_once 'includes/header.php'; ?>


<div class="row">
	<div class="col-md-12">

	
		<div class="panel panel-default">
			<div class="panel-heading">
<h3 class="dd" style="color: white;font-size: 1.5em;    font-weight: bold;
">Raw Materials</h3>			</div> <!-- /panel-heading -->
			<div class="panel-body">

				<div class="remove-messages"></div>

				<div class="div-action pull pull-right" style="padding-bottom:20px;">
					<button class="btn btn-default button1" data-toggle="modal" onclick="location.href = 'supplierpayment.php';"><img src="4.png" width="30" />  Supplierpayment </button>
				</div> <!-- /div-action -->		
				
				
		<div class="div-action pull pull-right" style="padding-bottom:20px;">
					<button class="btn btn-default button1" data-toggle="modal" onclick="location.href = 'report.php';"><img src="9.png" width="30" />   Purchase Report </button>
				</div> <!-- /div-action -->		
				
					<div class="div-action pull pull-right" style="padding-bottom:20px;">
													 <div class="dropdown">

				
					<button class="btn btn-default button1" type="button" data-toggle="dropdown"    > <img src="10.png" width="30" /> <i class="glyphicon glyphicon-plus-sign"></i> Purchase expense </button>
					<ul class="dropdown-menu">
      <li>	<button class="btn btn-default button" onclick="location.href = 'productionsize.php?o=add';" data-toggle="modal" > <i class="glyphicon glyphicon-plus-sign"></i>Add Purchase expense </button></li>
	  
	  
      <li>	<button class="btn btn-default button1" data-toggle="modal" data-target="#addPurchasexpenceModel">  <i class="glyphicon glyphicon-plus-sign"></i> Add Purchase expense name </button></li>
    </ul>
				</div> <!-- /div-action -->		
				
				</div>
				
							<div class="div-action pull pull-right" style="padding-bottom:20px;">
													 <div class="dropdown">

				
					<button class="btn btn-default button1" type="button" data-toggle="dropdown"    > <img src="4.png" width="30" /> <i class="glyphicon glyphicon-plus-sign"></i> ACP Purchase bill </button>
					<ul class="dropdown-menu">
      <li>	<button class="btn btn-default button" onclick="location.href = 'orders5.php?o=add';" data-toggle="modal" data-target="#addSupplierModel"> <i class="glyphicon glyphicon-plus-sign"></i>Add Purchase bill </button></li>
      <li><button class="btn btn-default button1" onclick="location.href = 'orders5.php?o=manord';" > <i class="glyphicon glyphicon-plus-sign"></i> Manage Purchase bill </button></li>
    </ul>
				</div> <!-- /div-action -->		
				
				</div>
				
			
				
				
				
				<div class="div-action pull pull-right" style="padding-bottom:20px;">
													 <div class="dropdown">

				
					<button class="btn btn-default button1" type="button" data-toggle="dropdown"    > <img src="4.png" width="30" /> <i class="glyphicon glyphicon-plus-sign"></i> Purchase bill </button>
					<ul class="dropdown-menu">
      <li>	<button class="btn btn-default button" onclick="location.href = 'orders.php?o=add';" data-toggle="modal" data-target="#addSupplierModel"> <i class="glyphicon glyphicon-plus-sign"></i>Add Purchase bill </button></li>
      <li><button class="btn btn-default button1" onclick="location.href = 'orders.php?o=manord';" > <i class="glyphicon glyphicon-plus-sign"></i> Manage Purchase bill </button></li>
    </ul>
				</div> <!-- /div-action -->		
				
				</div>
				
			
			
				
				
			
				
					
				
				
				
				
				
				
				
				
				
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
				
				<table class="table" id="manageBrandTable" style="display:none;" >
					<thead style="background-color:#dc4a4a;color:white;">
							<th>Id</th>
						
							<th>Product Name</th>
														<th>kg/litre</th>

														<th>Edit</th>

						

					</thead>
				</table>
				<!-- /table -->

			</div> <!-- /panel-body -->
		</div> <!-- /panel -->		
	</div> <!-- /col-md-12 -->
</div> <!-- /row -->
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
    	
    	<form class="form-horizontal" id="submitBrandForm" action="php_action/createStock.php" method="POST">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title"><i class="fa fa-plus"></i> Production Area</h4>
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
			  <div class="form-group">
			    <label for="orderDate" class="col-sm-3 control-label">Product Name</label>
					        	<label class="col-sm-1 control-label">: </label>
		    <div class="col-sm-8">
				      <select class="form-control" id="product_name" name="product_name">
				      	<option value="">~~SELECT~~</option>
				      			<?php
			  							$productSql = "SELECT * FROM production ";
			  							$productData = $connect->query($productSql);

			  							while($row = $productData->fetch_array()) {									 		
			  								echo "<option value='".$row['id']."' id='changeProduct".$row['product_name']."'>".$row['product_name']."</option>";
										 	} // /while 

			  						?>
				      </select>
				    </div>
	        </div> <!-- /form-group-->	

   <div class="form-group">
	        	<label for="brandName" class="col-sm-3 control-label">Quantity: </label>
	        	<label class="col-sm-1 control-label">: </label>
				    <div class="col-sm-8">
				      <input type="text" class="form-control" id="Quantity" placeholder="Quantity" name="Quantity" autocomplete="off">
				    </div>
	        </div> <!-- /form-group-->	         	        

		
	        	    	              	          <div class="form-group">
	        	<label for="brandName" class="col-sm-3 control-label">Cost Price  </label>
	        	<label class="col-sm-1 control-label">: </label>
				    <div class="col-sm-8">
				      <input type="text" class="form-control" id="cost_price" placeholder="cost price" name="cost_price" autocomplete="off">
				    </div>
	        </div> <!-- /form-group-->	 
			  <div class="form-group">
	        	<label for="brandName" class="col-sm-3 control-label">Selling Price  </label>
	        	<label class="col-sm-1 control-label">: </label>
				    <div class="col-sm-8">
				      <input type="text" class="form-control" id="selling_price" placeholder="selling price" name="selling_price" autocomplete="off">
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
    	
    	<form class="form-horizontal" id="submitBrandForm" action="php_action/createproduction.php" method="POST">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title"><i class="fa fa-plus"></i> Add Product</h4>
	      </div>
	      <div class="modal-body">

	      	<div id="add-brand-messages"></div>

	        <div class="form-group">
	        	<label for="productName" class="col-sm-3 control-label">Product Name: </label>
	        	<label class="col-sm-1 control-label">: </label>
				    <div class="col-sm-8">
				      <input type="text" class="form-control" id="product_name" placeholder="product_name" name="product_name" autocomplete="off">
				    </div>
	        </div> <!-- /form-group-->	         	        
	     
		 	
			  
			  <div class="form-group">
			    <label for="clientContact" class="col-sm-3 control-label">HNS </label>
					        	<label class="col-sm-1 control-label">: </label>

			    <div class="col-sm-8">
			      <input type="text" class="form-control" id="hns" name="hns" placeholder="HNS" autocomplete="off" />
			    </div>
			  </div> <!--/form-group-->	
			  
			  
			  
			  
			  
			    <div class="form-group">
			    <label for="clientContact" class="col-sm-3 control-label">Selling Price </label>
					        	<label class="col-sm-1 control-label">: </label>

			    <div class="col-sm-8">
			      <input type="text" class="form-control" id="selling_price" name="selling_price" placeholder="selling_price" autocomplete="off" />
			    </div>
			  </div> <!--/form-group-->	
			  
		 
		 

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








<div class="modal fade" tabindex="-1" role="dialog" id="addPurchasexpenceModel">
  <div class="modal-dialog">
    <div class="modal-content">
    	
    	<form class="form-horizontal" id="submitBrandForm" action="php_action/createproduction2.php" method="POST">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title"><i class="fa fa-plus"></i> Purchase expense Name</h4>
	      </div>
	      <div class="modal-body">

	      	<div id="add-brand-messages"></div>

	        <div class="form-group">
	        	<label for="productName" class="col-sm-3 control-label">Expense Name: </label>
	        	<label class="col-sm-1 control-label">: </label>
				    <div class="col-sm-8">
				      <input type="text" class="form-control" id="product_name" placeholder="product_name" name="product_name" autocomplete="off">
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
    	
    	<form class="form-horizontal" id="submitBrandForm" action="php_action/createStock.php" method="POST">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title"><i class="fa fa-plus"></i> Add Supplier</h4>
	      </div>
	      <div class="modal-body">

	      	<div id="add-brand-messages"></div>

	        <div class="form-group">
	        	<label for="brandName" class="col-sm-3 control-label">Supplier Name </label>
	        	<label class="col-sm-1 control-label">: </label>
				    <div class="col-sm-8">
				      <input type="text" class="form-control" id="suplier_name" placeholder="suplier_name" name="suplier_name" autocomplete="off">
				    </div>
	        </div> <!-- /form-group-->	         	        
	              	          <div class="form-group">
	        	<label for="brandName" class="col-sm-3 control-label">Supplier Address  </label>
	        	<label class="col-sm-1 control-label">: </label>
				    <div class="col-sm-8">
				      <input type="text" class="form-control" id="suplier_address" placeholder="suplier address" name="suplier_address" autocomplete="off">
				    </div>
	        </div> <!-- /form-group-->	 
			  <div class="form-group">
	        	<label for="brandName" class="col-sm-3 control-label">Supplier Contact  </label>
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
	  			    <input type="hidden" name="orderId" id="orderId" value="<?php echo $_GET['i']; ?>" />

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

<script src="custom/js/brand2.js"></script>

<?php require_once 'includes/footer.php'; ?>