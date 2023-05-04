<?php require_once 'includes/header.php'; ?>


<div class="row">
	<div class="col-md-12">

	
		<div class="panel panel-default">
			<div class="panel-heading">
<h3 class="dd" style="color: white;font-size: 1.5em;    font-weight: bold;
">Raw Materials</h3>			</div> <!-- /panel-heading -->
			<div class="panel-body">

				<div class="remove-messages"></div>

				
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
				
				<table class="table" id="manageBrandTable">
					<thead style="background-color:#dc4a4a;color:white;">
							<th>Id</th>
						     
							<th>Product Name</th>														
                            <th>Feet</th>
							<th>altquantity</th>
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

<script src="custom/js/acp.js"></script>

<?php require_once 'includes/footer.php'; ?>