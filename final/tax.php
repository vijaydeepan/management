<?php 
require_once 'php_action/db_connect.php'; 
require_once 'includes/header.php'; 
?>
	      
	        <div class="form-group">
	        	<label for="costprice" class="col-sm-3 control-label">Costprice: </label>
	        	<label class="col-sm-1 control-label">: </label>
				    <div class="col-sm-8">
				      <input type="text" class="form-control" id="costprice"   onkeyup="calculate();" placeholder="Costprice" name="costprice" autocomplete="off">
				    </div>
					
	        </div> <!-- /form-group-->	    

        <div class="form-group">
	        	<label for="tax" class="col-sm-3 control-label">Tax: </label>
	        	<label class="col-sm-1 control-label">: </label>
				    <div class="col-sm-8">
				      <input type="text" class="form-control" id="tax" value="0"   onkeyup="calculate();" placeholder="tax" name="tax" autocomplete="off">
				    </div>
					
	        </div> <!-- /form-group-->	    
					

<script>
  function calculate() {
    var costprice = parseInt(document.getElementById('costprice').value);
    var quantity = parseInt(document.getElementById('quantity').value);
	    var tax = parseInt(document.getElementById('tax').value);

    //You can add more conditions to check if both values are present then only do calculation etc.
    var Totalcp = costprice * quantity + tax;
    document.getElementById('Totalcp').value = Totalcp;
  }

</script>