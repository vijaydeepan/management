<?php 	

require_once 'core.php';



$sql = "SELECT production.id, production.product_name,production.quantity ,production.altquantity FROM production INNER JOIN product3 ON product3.product_name = production.product_name ";
$result = $connect->query($sql);

$output = array('data' => array());

if($result->num_rows > 0) { 

 // $row = $result->fetch_array();

 while($row = $result->fetch_array()) {
 	$orderId = $row[0];
 	// active 

 	$button = '<!-- Single button -->
	<div class="btn-group">
	  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	    EDIT <span class="caret"></span>
	  </button>
	  <ul class="dropdown-menu">
	
   <li><a href="acpedit.php?o=editOrd&i='.$orderId.'" id="editOrderModalBtn"> <i class="glyphicon glyphicon-edit"></i> edit product</a></li>
	    
	
	    <li><a href="purchasedeleteorder.php?o=editOrd&i='.$orderId.'" id="editOrderModalBtn"> <i class="glyphicon glyphicon-edit"></i>Remove  product </a></li>
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

} // if num_rows

$connect->close();

echo json_encode($output);