<?php
	include_once('db.php');

	$name=$_POST['name'];

	$sql="select * from registereduser where user_name='$name'";
	$res=mysqli_query($con,$sql);
	$count=mysqli_num_rows($res);
	if($count>0){
		echo "1";
	}
	else{
		echo "0";
	}
?>