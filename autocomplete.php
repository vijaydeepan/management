<?php
	$q=$_GET['q'];
	$my_data=mysql_real_escape_string($q);
	$mysqli=mysqli_connect('localhost','root','','anketfinal') or die("Database Error");
	$sql="SELECT product_name FROM product WHERE product_name LIKE '%$my_data%' ORDER BY product_name";
	$result = mysqli_query($mysqli,$sql) or die(mysqli_error());
	
	if($result)
	{
		while($row=mysqli_fetch_array($result))
		{
			echo $row['product_name']."\n";
		}
	}
?>