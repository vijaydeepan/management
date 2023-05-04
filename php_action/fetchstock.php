<?php 	

require_once 'core.php';

$sql = "SELECT 	DISTINCT purchase_order.purchase_id, purchase_order.date, purchase_order.product_name, purchase_order.total_quantity, purchase_order.taken_quantity,sale_return.taken_quantity,sale_return.wastage,order_item2.quantity,purchase_product.purchase_quantity FROM purchase_order INNER JOIN sale_return ON purchase_order.product_name=sale_return.product_name and purchase_order.date=sale_return.date INNER JOIN purchase_product ON purchase_product.product_name= purchase_order.product_name INNER JOIN orders2 ON orders2.order_date =purchase_order.date INNER JOIN order_item2 ON orders2.order_id=order_item2.order_id and purchase_product.id=order_item2.product_id  ";
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
 		 		$row[5],
 		$row[6],
 	 		$row[7],
 		$row[8],


 		); 	
 } // /while 

} // if num_rows

$connect->close();

echo json_encode($output);