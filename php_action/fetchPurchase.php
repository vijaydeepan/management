<?php 	

require_once 'core.php';

$sql = "SELECT purchase_id,date, product_name, total_quantity, taken_quantity FROM purchase_order ";
$result = $connect->query($sql);

$output = array('data' => array());

if($result->num_rows > 0) { 

 // $row = $result->fetch_array();
 $activeBrands = ""; 

 while($row = $result->fetch_array()) {
 	$brandId = $row[0];
 	// active 
 	if($row[2] == 1) {
 		// activate member
 		$activeBrands = "<label class='label label-success'>Available</label>";
 	} else {
 		// deactivate member
 		$activeBrands = "<label class='label label-danger'>Not Available</label>";
 	}

 	$button = '<!-- Single button -->
	<div class="btn-group">
	  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	    Action <span class="caret"></span>
	  </button>
	  <ul class="dropdown-menu">
	
		
    <li><a type="button" data-toggle="modal" data-target="#removeProductModal" id="removeProductModalBtn" onclick="removeProduct('.$brandId.')"> <i class="glyphicon glyphicon-trash"></i> Remove</a></li>  
	  </ul>
	</div>';

 	$output['data'][] = array( 		
	 		$row[0], 

 		$row[1], 
 		$row[2], 		

 		$row[3], 		
 		$row[4],
 		
		$button
 		); 	
 } // /while 

} // if num_rows

$connect->close();

echo json_encode($output);