<?php
	include_once('db.php');
	$edit=$_POST['edit'];
	$checkname=$_POST['checkname'];
	$checkmail=$_POST['checkmail'];

	$sql="select * from requiredbooks where user_name='$checkname' and user_mail='$checkmail' and requiredbooks_id='$edit'";
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