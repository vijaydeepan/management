<?php 	



require_once 'core.php';

$sql = "SELECT production_order.production_id, production_order.date, production_order.quantity, production_order.product_name,
 		production_order.cost_price, production_order.selling_price FROM production_order
		";

$result = $connect->query($sql);

$output = array('data' => array());

if($result->num_rows > 0) { 

 // $row = $result->fetch_array();

 while($row = $result->fetch_array()) {
 	$productId = $row[0];
 	// active 
 
 	$button = '<!-- Single button -->
	<div class="btn-group">
	  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	    Action <span class="caret"></span>
	  </button>
	  <ul class="dropdown-menu">
	    <li><a type="button" data-toggle="modal" data-target="#removeProductModal" id="removeProductModalBtn" onclick="removeProduct('.$productId.')"> <i class="glyphicon glyphicon-trash"></i> Remove</a></li>       
	  </ul>
	</div>';

	// $brandId = $row[3];
	// $brandSql = "SELECT * FROM brands WHERE brand_id = $brandId";
	// $brandData = $connect->query($sql);
	// $brand = "";
	// while($row = $brandData->fetch_assoc()) {
	// 	$brand = $row['brand_name'];
	// }



 	$output['data'][] = array( 		
 		// image
 		// product name
		 		$row[0], 

 		$row[1], 
 		// rate
 			 		$row[2], 
 			 		$row[3], 
 			 		$row[4], 
 			 		$row[5], 

 		// button
 		$button 		
 		); 	
 } // /while 

}// if num_rows

$connect->close();

echo json_encode($output);