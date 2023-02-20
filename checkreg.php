<?php
	include_once('db.php');

	$username=$_POST['username'];
	$userpwd=$_POST['userpwd'];
	$usernum=$_POST['usernum'];
	$usermail=$_POST['usermail'];

/*	$sql="select * from registereduser where user_name='$username' and user_pwd='$userpwd' and user_mob='$usernum' and user_mail='$usermail'";
	$res=mysqli_query($con,$sql);
	$count=mysqli_num_rows($res);
	if($count>0){
		echo "User id already exist";
	}
	else{
		$sql="insert into registereduser(user_name,user_pwd,user_mob,user_mail,active)values('$username','$userpwd',$usernum,'$usermail',1)";
		if(mysqli_query($con,$sql)){
			echo "User registered successfully";
		}
	}*/

	$sql="insert into registereduser(user_name,user_pwd,user_mob,user_mail,active)values('$username','$userpwd','$usernum','$usermail',1)";
	if(mysqli_query($con,$sql)){
		echo "User registered successfully";
	}
	else{
		echo "Failed to register your details";
	}

?>