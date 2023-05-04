<?php 	

require_once 'core.php';

$orderId = $_POST['orderId'];

$valid = array('order' => array(), 'order_item' => array());

$sql = "SELECT orders2.order_id, orders2.order_date, orders2.client_name, orders2.client_contact, orders2.sub_total, orders2.vat, orders2.total_amount, orders2.discount, orders2.grand_total, orders2.paid, orders2.due, orders2.payment_type, orders2.payment_status FROM orders2 	
	WHERE orders2.order_id = {$orderId}";

$result = $connect->query($sql);
$data = $result->fetch_row();
$valid['order'] = $data;


$connect->close();

echo json_encode($valid);