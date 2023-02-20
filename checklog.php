<?php
	session_start();
	include_once('db.php');

	$usrname=$_POST['usrname'];
	$usrpwd=$_POST['usrpwd'];

	$sql="select * from registereduser where user_name='$usrname' and user_pwd='$usrpwd'";
	$res=mysqli_query($con,$sql);
	$count=mysqli_num_rows($res);

	while($row=mysqli_fetch_assoc($res)){
		$usertype=$row['user_type'];
	}

	if($count>0){
		if($usertype==='admin'){
			echo "Admin";
		}
		else{
			echo "Local";
		}
		$_SESSION['usrname']=$usrname;
	}
	else{
		echo "User doesn't exist";
	}
?>