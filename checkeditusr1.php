<?php
	include_once('db.php');
	$edit1=$_POST['edit1'];
	$checkname1=$_POST['checkname1'];
	$checkmail1=$_POST['checkmail1'];

	$sql="select * from uploadedbooks where user_name='$checkname1' and user_mail='$checkmail1' and uploadedbooks_id='$edit1'";
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