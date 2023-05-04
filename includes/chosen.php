<?php require_once 'php_action/core.php'; ?>

<!DOCTYPE html>
<html>
<head>
<?php
function createRandomPassword() {
	$chars = "003232303232023232023456789";
	srand((double)microtime()*1000000);
	$i = 0;
	$pass = '' ;
	while ($i <= 7) {

		$num = rand() % 33;

		$tmp = substr($chars, $num, 1);

		$pass = $pass . $tmp;

		$i++;

	}
	return $pass;
}
$finalcode='RS-'.createRandomPassword();
?>
  <meta charset="UTF-8">

	<title>Stock Management System</title>
<link rel="stylesheet" type="text/css" media="all" href="css/demo.css" />

	<!-- bootstrap -->
	<link rel="stylesheet" href="assests/bootstrap/css/bootstrap.min.css">
	<!-- bootstrap theme-->
	<link rel="stylesheet" href="assests/bootstrap/css/bootstrap-theme.min.css">
	<!-- font awesome -->
	<link rel="stylesheet" href="assests/font-awesome/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<script type="text/javascript" src="js/jquery.min.js"></script>

<!--Bootstrap-->
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
<!--Bootstrap-->

<!--Main Menu File-->
<link rel="stylesheet" type="text/css" media="all" href="css/webslidemenu.css" />
<!--Main Menu File-->

<!-- font awesome -->
<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" />
  <!-- custom css -->
  <link rel="stylesheet" href="custom/css/custom.css">
								<link rel = "stylesheet" type = "text/css" href = "css/chosen.css" />

	<!-- DataTables -->
  <link rel="stylesheet" href="assests/plugins/datatables/jquery.dataTables.min.css">

  <!-- file input -->
  <link rel="stylesheet" href="assests/plugins/fileinput/css/fileinput.min.css">

  <!-- jquery -->
	<script src="assests/jquery/jquery.min.js"></script>
  <!-- jquery ui -->  
  <link rel="stylesheet" href="assests/jquery-ui/jquery-ui.min.css">
  <script src="assests/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/webslidemenu.js"></script>

  <!-- bootstrap js -->

</head>
            	<div class="wsmain ">

        <div class="smllogo"><a href="#"><img src="images/sml-logo.png" alt=""/></a></div>

           <nav class="wsmenu clearfix red">
                <ul class="mobile-sub wsmenu-list">
          	      <li class="rightmenu">
            
	      </li>
		  
		                    <li><a href="#" class="active menuhomeicon"><i class="fa fa-home"></i><span class="mobiletext">Home</span></a></li>

            <li class="carticon">
                  	<a href="index.php"> <span class="glyphicon">&#xe236;</span>
 Dashboard<span class="mobiletext">Shopping Cart</span></a>
                  </li>
				
 
 
 
    <li><a href="#"><i class="fa fa-align-justify"></i>Al-Product <span class="arrow"></span></a>
                    <ul class="wsmenu-submenu">
                      <li><a href="product1.php?o=add"><i class="fa fa-angle-right"></i>Add Al-Product </a></li>
					    <li><a href="rate.php?o=add"><i class="fa fa-angle-right"></i>Rate </a></li>
                      <li><a href="alstorage.php"><i class="fa fa-angle-right"></i>Manage Al-Product </a></li>
                   
				   
				   
                  
                    </ul>
                  </li>
 
 
     
 
    <li><a href="#"><i class="fa fa-align-justify"></i>ACP-Product <span class="arrow"></span></a>
                    <ul class="wsmenu-submenu">
                      <li><a href="product3.php?o=add"><i class="fa fa-angle-right"></i>Add ACP-Product </a></li>
                      <li><a href="acpstorage.php"><i class="fa fa-angle-right"></i>Manage ACP-Product </a></li>
                   
				   
				   
                  
                    </ul>
                  </li>
 
 <li><a href="materials.php"><i class="fa fa-align-justify"></i>Mat-Product <span class="arrow"></span></a>
                   
                  </li>
 

 
 
   <li><a href="#"><i class="fa fa-align-justify"></i>Supplier <span class="arrow"></span></a>
                    <ul class="wsmenu-submenu">
                      <li><a href="customer2.php?o=add"><i class="fa fa-angle-right"></i>Add Supplier </a></li>
                      <li><a href="customer2.php?o=manord"><i class="fa fa-angle-right"></i>Manage Supplier</a></li>
                   
				   
				   
                  
                    </ul>
                  </li>
				  <li class="carticon">
                  	<a href="production.php">        <span class="glyphicon">&#xe078;</span>
Purchase<span class="mobiletext">Shopping Cart</span></a>
                  </li>
				    <li class="carticon">
                  	<a href="purchase.php">        <span class="glyphicon">&#xe008;</span>
Dealer<span class="mobiletext">Shopping Cart</span></a>
                  </li>
				                  

									
                  <li><a href="#"><i class="fa fa-align-justify"></i>Bill <span class="arrow"></span></a>
                    <ul class="wsmenu-submenu">
                      <li><a href="salesbill.php?o=add"><i class="fa fa-angle-right"></i>Sales Bill </a></li>
                      <li><a href="salesbill.php?o=manord"><i class="fa fa-angle-right"></i>Manage Bill</a></li>
                   
				   
				   
                  
                    </ul>
                  </li>
				  		
          
				  
				  		 
                  <li><a href="#">        <span class="glyphicon">&#xe105;</span>
Report <span class="arrow"></span></a>
                    <ul class="wsmenu-submenu">
                      <li><a href="report.php"><i class="fa fa-angle-right"></i>Purchase Report </a></li>
                      <li><a href="purchasereport.php"><i class="fa fa-angle-right"></i>Sales Report</a></li>
                   
				   
				   
                  
                    </ul>
                  </li>
				       <li><a href="#"><i class="fa fa-align-justify"></i>Setting<span class="arrow"></span></a>
                    <ul class="wsmenu-submenu">
                      <li><a href="company.php"><i class="fa fa-angle-right"></i>Companyinfo </a></li>
                      <li><a href="setting.php"><i class="fa fa-angle-right"></i>Setting</a></li>
                                         <li><a href="backupindex.php"><i class="fa fa-angle-right"></i>Backup</a></li>

				   
				   
                  
                    </ul>
                  </li>
                 
                   
                   
                   
                  
                   
                   
                   
                  
                </ul>
              </nav>
  </div>
    	
    </div>
