<?php 
require_once 'php_action/db_connect.php'; 
require_once 'includes/header.php'; 

if($_GET['o'] == 'add') { 
// add order
	echo "<div class='div-request div-hide'>add</div>";
} else if($_GET['o'] == 'manord') { 
	echo "<div class='div-request div-hide'>manord</div>";
} else if($_GET['o'] == 'editOrd') { 
	echo "<div class='div-request div-hide'>editOrd</div>";
} // /else manage order


?>

<ol class="breadcrumb">
  <li><a href="dashboard.php">Home</a></li>
  <li>Supplier</li>
  <li class="active">
  	<?php if($_GET['o'] == 'add') { ?>
  		Add Supplier
		<?php } else if($_GET['o'] == 'manord') { ?>
			Manage Supplier
		<?php } // /else manage order ?>
  </li>
</ol>


<h4>
	<i class='glyphicon glyphicon-circle-arrow-right'></i>
	<?php if($_GET['o'] == 'add') {
		echo "Add Supplier";
	} else if($_GET['o'] == 'manord') { 
		echo "Manage Supplier";
	} else if($_GET['o'] == 'editOrd') { 
		echo "Edit Supplier";
	}
	?>	
</h4>



<div class="panel panel-default">
	<div class="panel-heading">

		<?php if($_GET['o'] == 'add') { ?>
  		<i class="glyphicon glyphicon-plus-sign"></i>	Add Supplier
		<?php } else if($_GET['o'] == 'manord') { ?>
			<i class="glyphicon glyphicon-edit"></i> Manage Supplier
		<?php } else if($_GET['o'] == 'editOrd') { ?>
			<i class="glyphicon glyphicon-edit"></i> Edit Supplier
		<?php } ?>

	</div> <!--/panel-->	
	<div class="panel-body">
			
		<?php if($_GET['o'] == 'add') { 
			// add order
			?>			

			<div class="success-messages"></div> <!--/success-messages-->

  		<form class="form-horizontal" method="POST" action="php_action/createCustomer.php" id="createOrderForm">

		
		
		
		
		
		<form action="" method="post" name="RegisterForm" id="RegisterForm" enctype="multipart/form-data" onsubmit="validate_payment();">
<div class="sub-continer">
<div class="sub-hed"></div>

<div class="form">
<div class="col-sm-12">
<div class="form-group">
<div class="row">
<div class="col-sm-4">
<label>Fin Year
<input name="fin_year" id="fin_year" type="text" class="validate[required] form-control" value="20182019" readonly="">
</label>
</div>
<div class="col-sm-4">
<label>Booking No
<input name="booking_no" id="booking_no" type="text" class="validate[required] form-control" value="67004" readonly="">
</label>
</div>
<div class="col-sm-4">
<label>Booking Date
<input name="booking_date" id="booking_date" type="text" class="validate[required] form-control" value="06-04-2018" readonly="">
</label>
</div>
</div>
</div>
<div class="form-group">
<div class="row">
<div class="col-sm-6">
<label> Agency </label>
<input name="agency_name" id="agency_name" type="text" class="form-control" value="M/S. Relian Associates, Virudhunagar" readonly="">
</div>
<div class="col-sm-6">
<label>Visit Location *</label>
<select name="location" id="location" class="validate[required] form-control" style="background-color: #f5f5f5;" onchange="formrefresh();">
<option value="">-- Select --</option>
<option value="12">Bangalore</option>
<option value="13">Kochi</option>
<option value="14">Hyderabad</option>
</select>
</div>
</div>
</div>


</div>
<div class="clearfix"></div>
</div>
<div class="form"><div class="col-sm-12">
<div class="form-group">
<h4 class="form-hed">Customer Details</h4>
</div>
<div class="form-group">
<div class="row">
<div class="col-sm-6">
<label> Group *</label>
<select name="visit_group" id="visit_group" onchange="formrefresh();" class="validate[required] form-control" style="background-color: #f5f5f5;">
<option value="">-- Select --</option>
<option value="1">General Group</option>
<option value="2">School</option>
<option value="3">College</option>
<option value="4">Corporate</option>
<option value="6">Orphanage</option>
<option value="7">Sunday School</option>
</select>
</div>
<div class="col-sm-6"><label> Group Name *</label>
<input name="group_name" id="group_name" type="text" class="validate[required] form-control" style="background-color: #f5f5f5;">
</div>
</div>
</div>
<div class="form-group">
<div class="row">
<div class="col-sm-6">
<label>State*</label>
<select name="state" id="state" class="validate[required] form-control" style="background-color: #f5f5f5;" onchange="show_dis(this.value);">
<option value="">-- Select --</option>
<option value="2">Delhi</option>
<option value="3">Kerala</option>
<option value="4">Andhra Pradesh</option>
<option value="5">Madhya Pradesh</option>
<option value="6">Tamil Nadu</option>
<option value="7">Karnataka</option>
<option value="8">Goa</option>
<option value="9">Maharashtra</option>
<option value="10">Pondichery (Union Territory)</option>
<option value="11">Haryana</option>
<option value="12">Maldives</option>
<option value="13">KOLKATA</option>
<option value="14">Himachal Pradesh</option>
<option value="15">Chhattisgarh </option>
<option value="16">Gujarat</option>
<option value="17">Punjab</option>
<option value="18">PUNE &amp; MAHARASHTRA</option>
<option value="19">Rajasthan</option>
<option value="20">Telangana</option>
<option value="21">Hyderabad &amp; North India</option>
<option value="22">Assam</option>
<option value="23">Meghalaya</option>
<option value="24">Dharwad &amp; Gadag</option>
</select>
</div>
<div class="col-sm-6">
<label>District *</label>
<select name="district" id="district" class="validate[required] form-control" style="background-color: #f5f5f5;" onchange="show_taluk(this.value);">
<option value="">-- Select --</option>
</select>
</div>
</div>
</div>
<div class="form-group">
<div class="row">
<div class="col-sm-6">
<label>Taluk *</label>
<select name="taluk" id="taluk" class="validate[required] form-control" style="background-color: #f5f5f5;" onchange="show_place(this.value);">
<option value="">-- Select --</option>
</select>
</div>
<div class="col-sm-6">


<label> Contact Person *</label>
<input name="party_name" id="party_name" type="text" class="validate[required] form-control" style="background-color: #f5f5f5;">
</div>
</div>
</div>
<div class="form-group">
<div class="row">
<div class="col-sm-6">
<label>Email id *</label>
<input name="email" id="email" type="text" class="validate[required,custom[email]] form-control" style="background-color: #f5f5f5;">
</div>
<div class="col-sm-6">
<label>Phone No. *</label>
<input name="phone" id="phone" type="text" class="validate[required,custom[phone]] form-control" style="background-color: #f5f5f5;">
</div>
</div>
</div>
<div class="form-group">
<div class="row">
<div class="col-sm-6">
<label>Address *</label>
<textarea name="address" id="address" cols="20" rows="3" class="validate[required] form-control" style="background-color: #f5f5f5;"></textarea>
</div>
<div class="col-sm-6">&nbsp;</div>
</div>
</div>


<div class="form-group">
<div class="row">
<div class="col-sm-6">
<label>Identification Type </label>
<select name="id_type" id="id_type" class="form-control">
<option value="">-- Select --</option>
<option value="Passport">Passport</option>
<option value="Id Card">Id Card</option>
<option value="Licence">Licence</option>
</select>
</div>
<div class="col-sm-6">
<label>Identification No.</label>
<input name="id_no" id="id_no" type="text" class="form-control">
</div>
</div></div>
</div>
<div class="clearfix"></div>
</div>
<div class="form">
<div class="col-sm-6">
<div class="form-group">
<h4 class="form-hed">Category Details</h4>
</div>
<input name="food_details" type="hidden" value="" id="food_details">
<input name="food_rate" type="hidden" value="" id="food_rate">
<input name="food_total" type="hidden" value="" id="food_total">
<input name="category_details" type="hidden" value="" id="category_details">
<input name="cat_rate" type="hidden" value="" id="cat_rate">
<input name="season_id" type="hidden" value="" id="season_id">
<input name="cat_total" type="hidden" value="" id="cat_total">
<div class="form-group">
<div class="row">
<div class="col-sm-12">
<table class="reference" style="width:100%" cellpadding="20" id="id-form1">
<tbody><tr bgcolor="#60adb4">
<th class="color-th" width="50%">Category</th>
<th class="color-th" width="16%">No.</th>
<th class="color-th" width="17%">Rate</th>
<th class="color-th" width="17%">Amount</th>
</tr>
</tbody></table>
<div id="cat_table"></div>
<table id="id-form2" width="100%">
<tbody><tr>
<td width="48%" align="center">Total </td>
<td style="padding:0px; width:69px;"><input name="totalnum" type="text" value="" id="totalnum" class="validate[required] form-control" readonly=""></td>
<td style="padding:0px; width:69px;">&nbsp;</td>
<td style="padding:0px; width:80px;"><input name="total" type="text" value="" id="total" class=" validate[required] form-control" readonly=""></td>
</tr>
</tbody></table>
</div>
</div>
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<h4 class="form-hed">Food Details</h4>
</div>
<div class="form-group">
<div class="row">
<div class="col-sm-6">
<label>Food Category </label>
<select name="food_cat" id="food_cat" onchange="show_foodcat(this.value);" class="form-control">
<option value="">--Select --</option>
<option value="1">Breakfast</option>
<option value="2">Lunch</option>
<option value="3">Hi-tea</option>
<option value="4">Dinner</option>
<option value="5">Breakfast Combo for Institutions</option>
<option value="6">Dinner Combo for Institutions</option>
</select>
</div>
</div>
</div>
<div class="form-group">
<div class="row">
<div class="col-sm-6">
<label>Food Menu </label>
<select name="food_menu" id="food_menu" onchange="show_foodrate(this.value);" class="form-control">
<option value="">-- Select --</option>
<option value="3">North Indian Combo</option>
<option value="5">Chicken Biriyani </option>
<option value="6">Veg / Egg Biryani / Student Combo (for Institutions)</option>
<option value="20">Idly (2 nos)</option>
<option value="21">Vada (1 no.)</option>
<option value="23">Rice Bath</option>
<option value="27">Poorisagu</option>
<option value="29">Masala Dosa</option>
<option value="30">Onion Dosa</option>
<option value="31">Set Dosa</option>
<option value="40">Gobi Manchurian</option>
<option value="47">Maddur Vada / Masala Vada (2nos.)</option>
<option value="48">Samosa</option>
<option value="49">Veg / Aloo Bonda (2nos.)</option>
<option value="61">Chicken Fried Rice / Noodles</option>
<option value="63">Bread omlette</option>
<option value="64">Hot Badam Milk</option>
<option value="67">Fried Rice / Noodles</option>
<option value="79">Veg Biryani Combo</option>
<option value="80">Veg Biryani</option>
<option value="84">Pav Bhaji</option>
<option value="85">Masala Puri</option>
<option value="86">Dahi Puri</option>
<option value="88">Sev Puri</option>
<option value="89">Pani Puri</option>
<option value="90">Bhel Puri</option>
<option value="92">Aloo Tikki Chat</option>
<option value="95">Masala Dosa</option>
<option value="96">Onion Oothappam</option>
<option value="97">Poori Set</option>
<option value="98">Puttu Kadala</option>
<option value="99">Iddly Set</option>
<option value="100">Dosa Set</option>
<option value="101">Ghee Roast</option>
<option value="102">Tea </option>
<option value="103">Coffee</option>
<option value="104">Chicken Biriyani</option>
<option value="106">Non Veg Combo (Fish Curry)</option>
<option value="107">Non Veg Combo (Chicken Curry)</option>
<option value="108">Fried Rice with Chilli Chicken</option>
<option value="109">Noodles with Chilli Chicken</option>
<option value="110">Veg Biriyani</option>
<option value="111">Egg Biriyani</option>
<option value="112">Biriyani Combo</option>
<option value="113">Curd Rice Combo</option>
<option value="115">Idly Vada/ Puri Baji/Set Dosa Tea / Coffee</option>
<option value="120">Chapathi with Veg Curry </option>
<option value="122">North Indian Combo</option>
<option value="123">Chicken Fried Rice</option>
<option value="124">Chicken Noodles</option>
<option value="125">Coffee</option>
<option value="127">Idly Vada</option>
<option value="128">Pongal or Bisibele Bath</option>
<option value="129">Poori Bhaji/Curry</option>
<option value="130">VEG BIRIYANI</option>
<option value="131">CHICKEN BIRIYANI</option>
<option value="132">CHAPATHI VEG CURRY</option>
<option value="133">CHAPATHI CHICKEN CURRY</option>
<option value="134">CHAPATHI EGG CURRY</option>
<option value="135">VEG GRIED RICE</option>
<option value="136">VEG MANCHURIAN</option>
<option value="137">ANY DRY SPECIAL</option>
<option value="138">BAJJI,BONDA OR PAKODA</option>
<option value="139">COFFEE/TEA</option>
<option value="140">Ghee Roast</option>
<option value="142">Veg Fried Rice / Noodles</option>
<option value="143">Veg Fried Rice / Noodles with Chicken</option>
<option value="144">Paratha with Chicken / Paneer Curry</option>
<option value="145">South Indian Combo</option>
<option value="147">Curd Rice </option>
<option value="148">Egg Fried Rcie /Noodles</option>
<option value="149">Grilled Chicken Sandwich</option>
<option value="150">Veg / Egg Fried Rice / Veg Noodles</option>
<option value="151">Aloo Paratha</option>
</select>
</div>
</div>
</div>
<div class="form-group">
<div class="row">
<div class="col-sm-6">
<label>Qty </label>
<input type="text" name="qty" id="qty" class="form-control">
</div>
</div>
</div>
<div class="form-group">
<div class="row">
<div class="col-sm-8">
<button type="button" class="add-btn" onclick="add2();">ADD</button>
</div>
</div>
</div>
<div class="form-group">
<div class="row">
<div class="col-sm-12">
<table class="reference" style="width:100%" cellpadding="20" id="id-form1">
<tbody><tr bgcolor="#60adb4">
<th class="color-th" width="60%">Food Menu</th>
<th class="color-th" width="20%">Category</th>
<th class="color-th" width="20%">Qty</th>
<th class="color-th" width="20%">Amt</th>
<th class="color-th" width="20%">Action</th>
</tr>
</tbody></table>
<div id="divis2"></div>
</div>
</div>
</div>

</div>
<div class="clearfix"></div>
</div>
<div class="form" style="margin-bottom:0px;"><div class="col-sm-12">
<div class="form-group">
<h4 class="form-hed">Other Details</h4>
</div>
<div class="form-group">
<div class="row">
<div class="col-sm-6">
<label>No. of Gents/boys *</label>
<input name="no_gents" id="no_gents" type="text" class="validate[required] form-control" style="background-color: #f5f5f5;">
</div>
<div class="col-sm-6">
<label>No. of ladies/girls *</label>
<input name="no_ladies" id="no_ladies" type="text" class="validate[required] form-control" style="background-color: #f5f5f5;">
</div>
</div>
</div>
<hr>
<h4 class="form-hed">Dormitory Facility</h4>
<div class="form-group">
<div class="row">
<div class="col-sm-6">
<label>No. of occupants </label>
<input type="text" name="no_occ" class="form-control" id="no_occ" onkeyup="occup(this.value)">
</div>
</div>
</div>
<div class="form-group">
<div class="row">
<div class="col-sm-6">
<label>Check in date</label>
<span style="position: relative;"><input type="text" name="check_in_date" class="form-control" id="check_in_date" readonly="" globalnumber="41"><div class="JsDatePickBox" style="z-index: 3; position: absolute; display: none;"><div class="boxLeftWall"><div class="leftTopCorner"></div><div class="leftWall"></div><div class="leftBottomCorner"></div></div><div class="boxMain"><div class="boxMainInner"><div class="controlsBar" globalnumber="41"><div class="monthForwardButton" globalnumber="41"></div><div class="monthBackwardButton" globalnumber="41"></div><div class="yearForwardButton" globalnumber="41"></div><div class="yearBackwardButton" globalnumber="41"></div><div class="controlsBarText">April, 2018</div></div><div class="clearfix"></div><div class="tooltip"></div><div class="weekDaysRow"><div class="weekDay">Mon</div><div class="weekDay">Tue</div><div class="weekDay">Wed</div><div class="weekDay">Thu</div><div class="weekDay">Fri</div><div class="weekDay">Sat</div><div class="weekDay" style="margin-right: 0px;">Sun</div></div><div class="boxMainCellsContainer"><div class="skipDay"></div><div class="skipDay"></div><div class="skipDay"></div><div class="skipDay"></div><div class="skipDay"></div><div class="skipDay"></div><div globalnumber="41" isjsdatepickdisabled="1" class="dayDisabled" style="margin-right: 0px; background: url(&quot;https://s3.ap-south-1.amazonaws.com/wonderla-live/spa_booking/images/ocean_blue_dayNormal.gif&quot;) left top no-repeat;">1</div><div globalnumber="41" isjsdatepickdisabled="1" class="dayDisabled" style="background: url(&quot;https://s3.ap-south-1.amazonaws.com/wonderla-live/spa_booking/images/ocean_blue_dayNormal.gif&quot;) left top no-repeat;">2</div><div globalnumber="41" isjsdatepickdisabled="1" class="dayDisabled" style="background: url(&quot;https://s3.ap-south-1.amazonaws.com/wonderla-live/spa_booking/images/ocean_blue_dayNormal.gif&quot;) left top no-repeat;">3</div><div globalnumber="41" isjsdatepickdisabled="1" class="dayDisabled" style="background: url(&quot;https://s3.ap-south-1.amazonaws.com/wonderla-live/spa_booking/images/ocean_blue_dayNormal.gif&quot;) left top no-repeat;">4</div><div globalnumber="41" isjsdatepickdisabled="1" class="dayDisabled" style="background: url(&quot;https://s3.ap-south-1.amazonaws.com/wonderla-live/spa_booking/images/ocean_blue_dayNormal.gif&quot;) left top no-repeat;">5</div><div globalnumber="41" istoday="1" class="dayNormalToday" style="background: url(&quot;https://s3.ap-south-1.amazonaws.com/wonderla-live/spa_booking/images/ocean_blue_dayNormal.gif&quot;) left top no-repeat;">6</div><div globalnumber="41" class="dayNormal" style="background: url(&quot;https://s3.ap-south-1.amazonaws.com/wonderla-live/spa_booking/images/ocean_blue_dayNormal.gif&quot;) left top no-repeat;">7</div><div globalnumber="41" class="dayNormal" style="margin-right: 0px; background: url(&quot;https://s3.ap-south-1.amazonaws.com/wonderla-live/spa_booking/images/ocean_blue_dayNormal.gif&quot;) left top no-repeat;">8</div><div globalnumber="41" class="dayNormal" style="background: url(&quot;https://s3.ap-south-1.amazonaws.com/wonderla-live/spa_booking/images/ocean_blue_dayNormal.gif&quot;) left top no-repeat;">9</div><div globalnumber="41" class="dayNormal" style="background: url(&quot;https://s3.ap-south-1.amazonaws.com/wonderla-live/spa_booking/images/ocean_blue_dayNormal.gif&quot;) left top no-repeat;">10</div><div globalnumber="41" class="dayNormal" style="background: url(&quot;https://s3.ap-south-1.amazonaws.com/wonderla-live/spa_booking/images/ocean_blue_dayNormal.gif&quot;) left top no-repeat;">11</div><div globalnumber="41" class="dayNormal" style="background: url(&quot;https://s3.ap-south-1.amazonaws.com/wonderla-live/spa_booking/images/ocean_blue_dayNormal.gif&quot;) left top no-repeat;">12</div><div globalnumber="41" class="dayNormal" style="background: url(&quot;https://s3.ap-south-1.amazonaws.com/wonderla-live/spa_booking/images/ocean_blue_dayNormal.gif&quot;) left top no-repeat;">13</div><div globalnumber="41" class="dayNormal" style="background: url(&quot;https://s3.ap-south-1.amazonaws.com/wonderla-live/spa_booking/images/ocean_blue_dayNormal.gif&quot;) left top no-repeat;">14</div><div globalnumber="41" class="dayNormal" style="margin-right: 0px; background: url(&quot;https://s3.ap-south-1.amazonaws.com/wonderla-live/spa_booking/images/ocean_blue_dayNormal.gif&quot;) left top no-repeat;">15</div><div globalnumber="41" class="dayNormal" style="background: url(&quot;https://s3.ap-south-1.amazonaws.com/wonderla-live/spa_booking/images/ocean_blue_dayNormal.gif&quot;) left top no-repeat;">16</div><div globalnumber="41" class="dayNormal" style="background: url(&quot;https://s3.ap-south-1.amazonaws.com/wonderla-live/spa_booking/images/ocean_blue_dayNormal.gif&quot;) left top no-repeat;">17</div><div globalnumber="41" class="dayNormal" style="background: url(&quot;https://s3.ap-south-1.amazonaws.com/wonderla-live/spa_booking/images/ocean_blue_dayNormal.gif&quot;) left top no-repeat;">18</div><div globalnumber="41" class="dayNormal" style="background: url(&quot;https://s3.ap-south-1.amazonaws.com/wonderla-live/spa_booking/images/ocean_blue_dayNormal.gif&quot;) left top no-repeat;">19</div><div globalnumber="41" class="dayNormal" style="background: url(&quot;https://s3.ap-south-1.amazonaws.com/wonderla-live/spa_booking/images/ocean_blue_dayNormal.gif&quot;) left top no-repeat;">20</div><div globalnumber="41" class="dayNormal" style="background: url(&quot;https://s3.ap-south-1.amazonaws.com/wonderla-live/spa_booking/images/ocean_blue_dayNormal.gif&quot;) left top no-repeat;">21</div><div globalnumber="41" class="dayNormal" style="margin-right: 0px; background: url(&quot;https://s3.ap-south-1.amazonaws.com/wonderla-live/spa_booking/images/ocean_blue_dayNormal.gif&quot;) left top no-repeat;">22</div><div globalnumber="41" class="dayNormal" style="background: url(&quot;https://s3.ap-south-1.amazonaws.com/wonderla-live/spa_booking/images/ocean_blue_dayNormal.gif&quot;) left top no-repeat;">23</div><div globalnumber="41" class="dayNormal" style="background: url(&quot;https://s3.ap-south-1.amazonaws.com/wonderla-live/spa_booking/images/ocean_blue_dayNormal.gif&quot;) left top no-repeat;">24</div><div globalnumber="41" class="dayNormal" style="background: url(&quot;https://s3.ap-south-1.amazonaws.com/wonderla-live/spa_booking/images/ocean_blue_dayNormal.gif&quot;) left top no-repeat;">25</div><div globalnumber="41" class="dayNormal" style="background: url(&quot;https://s3.ap-south-1.amazonaws.com/wonderla-live/spa_booking/images/ocean_blue_dayNormal.gif&quot;) left top no-repeat;">26</div><div globalnumber="41" class="dayNormal" style="background: url(&quot;https://s3.ap-south-1.amazonaws.com/wonderla-live/spa_booking/images/ocean_blue_dayNormal.gif&quot;) left top no-repeat;">27</div><div globalnumber="41" class="dayNormal" style="background: url(&quot;https://s3.ap-south-1.amazonaws.com/wonderla-live/spa_booking/images/ocean_blue_dayNormal.gif&quot;) left top no-repeat;">28</div><div globalnumber="41" class="dayNormal" style="margin-right: 0px; background: url(&quot;https://s3.ap-south-1.amazonaws.com/wonderla-live/spa_booking/images/ocean_blue_dayNormal.gif&quot;) left top no-repeat;">29</div><div globalnumber="41" class="dayNormal" style="background: url(&quot;https://s3.ap-south-1.amazonaws.com/wonderla-live/spa_booking/images/ocean_blue_dayNormal.gif&quot;) left top no-repeat;">30</div></div><div class="clearfix"></div></div></div><div class="boxRightWall"><div class="rightTopCorner"></div><div class="rightWall"></div><div class="rightBottomCorner"></div></div><div class="clearfix"></div><div class="jsDatePickCloseButton" globalnumber="41"></div><div class="topWall"></div><div class="bottomWall"></div></div></span>
</div>
<div class="col-sm-6">
<label>Check out dates </label>
<span style="position: relative;"><input type="text" name="check_out_date" class="form-control" id="check_out_date" readonly="" globalnumber="530"><div class="JsDatePickBox" style="z-index: 3; position: absolute; display: none;"><div class="boxLeftWall"><div class="leftTopCorner"></div><div class="leftWall"></div><div class="leftBottomCorner"></div></div><div class="boxMain"><div class="boxMainInner"><div class="controlsBar" globalnumber="530"><div class="monthForwardButton" globalnumber="530"></div><div class="monthBackwardButton" globalnumber="530"></div><div class="yearForwardButton" globalnumber="530"></div><div class="yearBackwardButton" globalnumber="530"></div><div class="controlsBarText">April, 2018</div></div><div class="clearfix"></div><div class="tooltip"></div><div class="weekDaysRow"><div class="weekDay">Mon</div><div class="weekDay">Tue</div><div class="weekDay">Wed</div><div class="weekDay">Thu</div><div class="weekDay">Fri</div><div class="weekDay">Sat</div><div class="weekDay" style="margin-right: 0px;">Sun</div></div><div class="boxMainCellsContainer"><div class="skipDay"></div><div class="skipDay"></div><div class="skipDay"></div><div class="skipDay"></div><div class="skipDay"></div><div class="skipDay"></div><div globalnumber="530" isjsdatepickdisabled="1" class="dayDisabled" style="margin-right: 0px; background: url(&quot;https://s3.ap-south-1.amazonaws.com/wonderla-live/spa_booking/images/ocean_blue_dayNormal.gif&quot;) left top no-repeat;">1</div><div globalnumber="530" isjsdatepickdisabled="1" class="dayDisabled" style="background: url(&quot;https://s3.ap-south-1.amazonaws.com/wonderla-live/spa_booking/images/ocean_blue_dayNormal.gif&quot;) left top no-repeat;">2</div><div globalnumber="530" isjsdatepickdisabled="1" class="dayDisabled" style="background: url(&quot;https://s3.ap-south-1.amazonaws.com/wonderla-live/spa_booking/images/ocean_blue_dayNormal.gif&quot;) left top no-repeat;">3</div><div globalnumber="530" isjsdatepickdisabled="1" class="dayDisabled" style="background: url(&quot;https://s3.ap-south-1.amazonaws.com/wonderla-live/spa_booking/images/ocean_blue_dayNormal.gif&quot;) left top no-repeat;">4</div><div globalnumber="530" isjsdatepickdisabled="1" class="dayDisabled" style="background: url(&quot;https://s3.ap-south-1.amazonaws.com/wonderla-live/spa_booking/images/ocean_blue_dayNormal.gif&quot;) left top no-repeat;">5</div><div globalnumber="530" istoday="1" class="dayNormalToday" style="background: url(&quot;https://s3.ap-south-1.amazonaws.com/wonderla-live/spa_booking/images/ocean_blue_dayNormal.gif&quot;) left top no-repeat;">6</div><div globalnumber="530" class="dayNormal" style="background: url(&quot;https://s3.ap-south-1.amazonaws.com/wonderla-live/spa_booking/images/ocean_blue_dayNormal.gif&quot;) left top no-repeat;">7</div><div globalnumber="530" class="dayNormal" style="margin-right: 0px; background: url(&quot;https://s3.ap-south-1.amazonaws.com/wonderla-live/spa_booking/images/ocean_blue_dayNormal.gif&quot;) left top no-repeat;">8</div><div globalnumber="530" class="dayNormal" style="background: url(&quot;https://s3.ap-south-1.amazonaws.com/wonderla-live/spa_booking/images/ocean_blue_dayNormal.gif&quot;) left top no-repeat;">9</div><div globalnumber="530" class="dayNormal" style="background: url(&quot;https://s3.ap-south-1.amazonaws.com/wonderla-live/spa_booking/images/ocean_blue_dayNormal.gif&quot;) left top no-repeat;">10</div><div globalnumber="530" class="dayNormal" style="background: url(&quot;https://s3.ap-south-1.amazonaws.com/wonderla-live/spa_booking/images/ocean_blue_dayNormal.gif&quot;) left top no-repeat;">11</div><div globalnumber="530" class="dayNormal" style="background: url(&quot;https://s3.ap-south-1.amazonaws.com/wonderla-live/spa_booking/images/ocean_blue_dayNormal.gif&quot;) left top no-repeat;">12</div><div globalnumber="530" class="dayNormal" style="background: url(&quot;https://s3.ap-south-1.amazonaws.com/wonderla-live/spa_booking/images/ocean_blue_dayNormal.gif&quot;) left top no-repeat;">13</div><div globalnumber="530" class="dayNormal" style="background: url(&quot;https://s3.ap-south-1.amazonaws.com/wonderla-live/spa_booking/images/ocean_blue_dayNormal.gif&quot;) left top no-repeat;">14</div><div globalnumber="530" class="dayNormal" style="margin-right: 0px; background: url(&quot;https://s3.ap-south-1.amazonaws.com/wonderla-live/spa_booking/images/ocean_blue_dayNormal.gif&quot;) left top no-repeat;">15</div><div globalnumber="530" class="dayNormal" style="background: url(&quot;https://s3.ap-south-1.amazonaws.com/wonderla-live/spa_booking/images/ocean_blue_dayNormal.gif&quot;) left top no-repeat;">16</div><div globalnumber="530" class="dayNormal" style="background: url(&quot;https://s3.ap-south-1.amazonaws.com/wonderla-live/spa_booking/images/ocean_blue_dayNormal.gif&quot;) left top no-repeat;">17</div><div globalnumber="530" class="dayNormal" style="background: url(&quot;https://s3.ap-south-1.amazonaws.com/wonderla-live/spa_booking/images/ocean_blue_dayNormal.gif&quot;) left top no-repeat;">18</div><div globalnumber="530" class="dayNormal" style="background: url(&quot;https://s3.ap-south-1.amazonaws.com/wonderla-live/spa_booking/images/ocean_blue_dayNormal.gif&quot;) left top no-repeat;">19</div><div globalnumber="530" class="dayNormal" style="background: url(&quot;https://s3.ap-south-1.amazonaws.com/wonderla-live/spa_booking/images/ocean_blue_dayNormal.gif&quot;) left top no-repeat;">20</div><div globalnumber="530" class="dayNormal" style="background: url(&quot;https://s3.ap-south-1.amazonaws.com/wonderla-live/spa_booking/images/ocean_blue_dayNormal.gif&quot;) left top no-repeat;">21</div><div globalnumber="530" class="dayNormal" style="margin-right: 0px; background: url(&quot;https://s3.ap-south-1.amazonaws.com/wonderla-live/spa_booking/images/ocean_blue_dayNormal.gif&quot;) left top no-repeat;">22</div><div globalnumber="530" class="dayNormal" style="background: url(&quot;https://s3.ap-south-1.amazonaws.com/wonderla-live/spa_booking/images/ocean_blue_dayNormal.gif&quot;) left top no-repeat;">23</div><div globalnumber="530" class="dayNormal" style="background: url(&quot;https://s3.ap-south-1.amazonaws.com/wonderla-live/spa_booking/images/ocean_blue_dayNormal.gif&quot;) left top no-repeat;">24</div><div globalnumber="530" class="dayNormal" style="background: url(&quot;https://s3.ap-south-1.amazonaws.com/wonderla-live/spa_booking/images/ocean_blue_dayNormal.gif&quot;) left top no-repeat;">25</div><div globalnumber="530" class="dayNormal" style="background: url(&quot;https://s3.ap-south-1.amazonaws.com/wonderla-live/spa_booking/images/ocean_blue_dayNormal.gif&quot;) left top no-repeat;">26</div><div globalnumber="530" class="dayNormal" style="background: url(&quot;https://s3.ap-south-1.amazonaws.com/wonderla-live/spa_booking/images/ocean_blue_dayNormal.gif&quot;) left top no-repeat;">27</div><div globalnumber="530" class="dayNormal" style="background: url(&quot;https://s3.ap-south-1.amazonaws.com/wonderla-live/spa_booking/images/ocean_blue_dayNormal.gif&quot;) left top no-repeat;">28</div><div globalnumber="530" class="dayNormal" style="margin-right: 0px; background: url(&quot;https://s3.ap-south-1.amazonaws.com/wonderla-live/spa_booking/images/ocean_blue_dayNormal.gif&quot;) left top no-repeat;">29</div><div globalnumber="530" class="dayNormal" style="background: url(&quot;https://s3.ap-south-1.amazonaws.com/wonderla-live/spa_booking/images/ocean_blue_dayNormal.gif&quot;) left top no-repeat;">30</div></div><div class="clearfix"></div></div></div><div class="boxRightWall"><div class="rightTopCorner"></div><div class="rightWall"></div><div class="rightBottomCorner"></div></div><div class="clearfix"></div><div class="jsDatePickCloseButton" globalnumber="530"></div><div class="topWall"></div><div class="bottomWall"></div></div></span>
</div>
</div>
</div>
<div class="form-group">
<div class="row">
<div class="col-sm-6">
<label>Check in time</label>
<input type="text" name="check_in_time" class="form-control ui-timepicker-input" id="check_in_time" autocomplete="off">
</div>
<div class="col-sm-6">
<label>Check out time </label>
<input type="text" name="check_out_time" class="form-control ui-timepicker-input" id="check_out_time" autocomplete="off">
</div>
</div>
</div>
<div class="form-group">
<div class="row">
<div class="col-sm-6">
<label>Whether dormitory required ?
<input name="dor_required" id="dor_required" type="checkbox" value="1"></label>
</div>
<div class="col-sm-6">
<label>Whether freshup required ?
<input name="freshup_required" id="freshup_required" type="checkbox" value="1"></label>
</div>
</div>
</div>
<div class="form-group">
<div class="row">
<div class="col-sm-6">
<label>Dormitory Advance received if any </label>
<input type="text" name="dor_advance" class="form-control" id="dor_advance">
</div>
</div>
</div>
<div class="form-group">
<div class="row">
<div class="col-sm-12">
<label>Remarks </label>
<textarea name="remarks" cols="30" rows="3" class="form-control"></textarea>
</div>
</div>
</div>

<div class="form-group">
<div class="row">
<div class="col-sm-12">
<div class="addr-box2">
<p><label>Please select Payment type. </label></p>
<p><input name="pay_type" id="pay_type" type="radio" value="cash" onclick="showtype(this.value);" checked="checked"> <b>Cash</b> &nbsp;&nbsp;
<input name="pay_type" id="pay_type" type="radio" value="cheque" onclick="showtype(this.value);"> <b>Cheque</b> &nbsp;&nbsp;
<input name="pay_type" id="pay_type" type="radio" value="dd" onclick="showtype(this.value);"> <b>DD</b> &nbsp;&nbsp;
<input name="pay_type" id="pay_type" type="radio" value="online" onclick="showtype(this.value);"> <b>Online Payment</b>
</p>
<p id="receipt">
<b>Receipt No. </b><input type="text" name="receipt_no" id="receipt_no">
</p>
<p id="cheque" style="display:none;">
<b>Cheque No. </b><input type="text" name="cheque_no" id="cheque_no">

</p>
<p id="dd" style="display:none; padding-left:34px;">
<b>DD No. </b><input type="text" name="dd_no" id="dd_no">
</p>
<p id="pay_date" style=" padding-left:40px;">
<b>Date : </b>
</p>
<br>

</div>
</div>
</div>
</div>
</div>
<div id="loading" align="center" style="display:none">
<img alt="" src="images/loader.gif">
</div>
<div class="clearfix"></div>
</div>
</div>
<div class="botm-btn">
<div class="row">
<div class="col-sm-3 pull-right">
<input name="payment" id="payment" type="hidden" value="">
<input type="reset" value="Reset" class="submit_btn">
<input name="action" id="submit" type="submit" value="Submit" class="submit_btn">
</div>
</div>
</div>
</form>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
	

			  
			

			<?php
		} // /get order else  ?>


	
<?php require_once 'includes/footer.php'; ?>


	