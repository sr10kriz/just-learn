<?php
	include_once('db.php');
	$trash=$_POST['trash'];
	$delname=$_POST['delname'];
	$delmail=$_POST['delmail'];

	$sql="select * from requiredbooks where user_name='$delname' and user_mail='$delmail' and requiredbooks_id='$trash'";
	$res=mysqli_query($con,$sql);
	$count=mysqli_num_rows($res);
	if($count>0){
		echo "1";
	}
	else{
		echo "0";
	}

	/*if(mysqli_query($con,$sql)){
		echo "1";
	}
	else{
		echo "0";
	}*/
?>