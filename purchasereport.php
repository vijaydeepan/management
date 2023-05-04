<?php require_once 'includes/header.php'; ?>

<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<i class="glyphicon glyphicon-check"></i>	Order Report
			</div>
			<!-- /panel-heading -->
			<div class="panel-body">
				
				<form class="form-horizontal" action="php_action/getOrderReport2.php" method="post" id="getOrderReportForm">
				  <div class="form-group">
				    <label for="startDate" class="col-sm-2 control-label">Start Date</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="startDate" name="startDate" placeholder="Start Date" />
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="endDate" class="col-sm-2 control-label">End Date</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="endDate" name="endDate" placeholder="End Date" />
				    </div>
				  </div>
				  
				  
				  
				  
				  
				  
				  <tbody>
			  		<?php
			  		$arrayNumber2 = 0;
			  		for($x = 1; $x < 2; $x++) { ?>
			  			<tr id="row<?php echo $x; ?>" class="<?php echo $arrayNumber; ?>">			  				
			  				<td style="margin-left:20px;">
			  																	 <div class="form-group">

				  <label for="orderDate" class="col-sm-3 control-label">Dealer Name</label>
					        	<label class="col-sm-1 control-label">: </label>
				
			    <div class="col-sm-8">
			  					<select class="form-control" name="deepan" id="deepan<?php echo $x; ?>" onchange="getProduct(<?php echo $x; ?>)" >
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

			  				</td>
														 <div class="form-group"style="display:none;">

							   <label for="orderDate" class="col-sm-3 control-label">Dealer Contact</label>
					        	<label class="col-sm-1 control-label">: </label>


			    <div class="col-sm-8">
			  				<td style="padding-left:20px;">			  					
			  					<input type="text" name="clientContact"  id="clientContact<?php echo $x; ?>"  autocomplete="off"  class="form-control" />			  					
			  				</td>
			  		</div>
								  		</div>

				  
				  
				  	 <div class="form-group" style="display:none";>

							   <label for="orderDate" class="col-sm-3 control-label">Total Quantity</label>
					        	<label class="col-sm-1 control-label">: </label>

  <div class="col-sm-8">
			  				<td style="padding-left:20px;">			  					
			  					<input type="text" name="clientName"  id="clientName<?php echo $x; ?>"  autocomplete="off"  class="form-control" />			  					
			  				</td>
			  		</div>
								  		</div>
										
				  
				  
				  
				  
				  
				  
				  
				  	
		  			<?php
		  			$arrayNumber2++;
			  		} // /for
			  		?>
			  	</tbody>	
				  
				  
				  
				  
				  
				  
				  
				  
				  <div class="form-group">
				    <div class="col-sm-offset-2 col-sm-10">
				      <button type="submit" class="btn btn-success" id="generateReportBtn"> <i class="glyphicon glyphicon-ok-sign"></i> Generate Report</button>
				    </div>
				  </div>
				</form>

			</div>
			<!-- /panel-body -->
		</div>
	</div>
	<!-- /col-dm-12 -->
</div>
<!-- /row -->

<script src="custom/js/report5.js"></script>

<?php require_once 'includes/footer.php'; ?>