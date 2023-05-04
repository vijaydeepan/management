<?php 	

require_once 'core.php';

$valid['success'] = array('success' => false, 'messages' => array(), 'order_id' => '');
// print_r($valid);
if($_POST) {	
		$orderDate 						= date('Y-m-d', strtotime($_POST['orderDate']));	
  $clientName 					= $_POST['clientName'];
    $ff 					= $_POST['ff'];
    $clientContact 					= $_POST['dd'];
    $billno 					= $_POST['billno'];
    $gst 					= $_POST['xx'];

  $discount 						= $_POST['discount'];
  $grandTotalValue 			= $_POST['grandTotalValue'];
  $paid 								= $_POST['paid'];
  $dueValue 						= $_POST['dueValue'];
  $paymentType 					= $_POST['paymentType'];
  $paymentStatus 				= $_POST['paymentStatus'];

      $cgst 					= $_POST['tax'];
    $sgst 					= $_POST['tax2'];
    $igst 					= $_POST['tax3'];
    $cgsttotal					= $_POST['vatValue'];
    $sgsttotal 					= $_POST['vatValue2'];
    $igsttotal					= $_POST['vatValue3'];

     $product1quantity					= $_POST['costprice'];
    $product1rate					= $_POST['al4'];
    $product1total					= $_POST['Totalcpvalue'];
	
$chkbox = $_POST['chkbox'];
 
 $chkNew = "";  
 
 foreach($chkbox as $chkNew1)  
   {  
      $chkNew .= $chkNew1 . "";  
   }  
				
				
				$sql = "INSERT INTO orders3 (order_date, client_name,client_contact ,billno,gst, discount, grand_total, paid, due, payment_type, payment_status, order_status,cgst,sgst,igst,cgsttotal,sgsttotal,igsttotal,product1quantity,product1rate,product1total,aluminium) VALUES ('$orderDate', '$clientName', '$clientContact ','$billno', '$gst', '$discount', '$grandTotalValue', '$paid', '$dueValue',' $paymentType',' $paymentStatus', 1,'$cgst','$sgst','$igst','$cgsttotal','$sgsttotal','$igsttotal','$product1quantity','$product1rate','$product1total','$chkNew')";
				

								$connect->query($sql);

		} // while	


	$valid['success'] = true;
	$valid['messages'] = "Successfully Added";		

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	$connect->close();

	echo json_encode($valid);
 
//if $_POST
// echo json_encode($valid);