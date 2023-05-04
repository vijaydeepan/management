<?php 	

require_once 'core.php';

$sql = "SELECT id, product_name,purchase_quantity,rate FROM purchase_product ";
$result = $connect->query($sql);

$output = array('data' => array());


 while($row = $result->fetch_array()) {
 	$brandId = $row[0];
 	// active 
 
 	$button = '<!-- Single button -->
	<div class="btn-group">
	  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	    Action <span class="caret"></span>
	  </button>
	  <ul class="dropdown-menu">
	  
	  
	  	    <li><a href="purchaseproduct.php?o=editOrd&i='.$brandId.'" id="editOrderModalBtn"> <i class="glyphicon glyphicon-edit"></i> Edit</a></li>
	    

	    
	    <li><a type="button" data-toggle="modal" data-target="#removeOrderModal" id="removeOrderModalBtn" onclick="removeOrder('.$brandId.')"> <i class="glyphicon glyphicon-trash"></i> Remove</a></li>       
	  
	  
	  
	 
	  </ul>
	</div>';

 	$output['data'][] = array( 		
	 		$row[0], 

 		$row[1], 
 		$row[2], 		

 		$row[3], 	
		 			

		$button
 		); 	
 } // /while 


$connect->close();

echo json_encode($output);