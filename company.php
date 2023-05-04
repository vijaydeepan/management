<?php require_once 'includes/header.php'; ?>


<?php 
$sql = "SELECT * From company ";
$query = $connect->query($sql);
$result = $query->fetch_assoc();

$connect->close();
?>

<div class="row">
	<div class="col-md-12">
		<ol class="breadcrumb">
		  <li><a href="dashboard.php">Home</a></li>		  
		  <li class="active">Setting</li>
		</ol>

		<div class="panel panel-default">
			<div class="panel-heading">
				<div class="page-heading"> <i class="glyphicon glyphicon-wrench"></i> Setting</div>
			</div> <!-- /panel-heading -->

			<div class="panel-body">

								<form action="php_action/address.php" method="post" class="form-horizontal" id="changecompany">
<div class="form-group">

					    <label for="Company Name" class="col-sm-2 control-label">Company Name</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="company" name="company" value="<?php echo $result['company']; ?>" placeholder="CompanyName"/>
					    </div>
					  </div>
					  
					  <div class="form-group">
					    <label for="Address" class="col-sm-2 control-label">Address</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="address" name="address" value="<?php echo $result['address']; ?>"placeholder="Address"/>
					    </div>
					  </div>
					    <div class="form-group">
					    <label for="Phoneno" class="col-sm-2 control-label">Phoneno</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="phoneno" name="phoneno"value="<?php echo $result['phoneno']; ?>" placeholder="Phoneno"/>
					    </div>
					  </div>
					   <div class="form-group">
					    <div class="col-sm-offset-2 col-sm-10">
					      <button type="submit"  data-loading-text="Loading..." id="changecompanyBtn"> <i class="glyphicon glyphicon-ok-sign"></i> Save Changes </button>
					    </div>
					  </div>
					  
					  
					  
					  
					  
					  
					  
</form>
		

<?php require_once 'includes/footer.php'; ?>