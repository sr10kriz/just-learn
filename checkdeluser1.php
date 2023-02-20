<?php
	include_once('db.php');
	$trash1=$_POST['trash1'];
	$delname1=$_POST['delname1'];
	$delmail1=$_POST['delmail1'];

	$sql="select * from uploadedbooks where user_name='$delname1' and user_mail='$delmail1' and uploadedbooks_id='$trash1'";
	$res=mysqli_query($con,$sql);
	$count=mysqli_num_rows($res);
	if($count>0){
		echo "1";
	}
	else{
		echo "0";
	}
?>