<?php
	include_once('db.php');

	$conname=$_POST['conname'];
	$conphone=$_POST['conphone'];
	$conmail=$_POST['conmail'];
	$consubject=$_POST['consubject'];
	$condesc=$_POST['condesc'];

	$sql="insert into contactus(con_name,con_phone,con_mail,con_subject,con_desc,active)values('$conname','$conphone','$conmail','$consubject','$condesc',1)";

	if(mysqli_query($con,$sql)){
		echo "Thank you for contactus,We will contact you soon.";
	}
	else{
		echo "Process failed,Try again";
	}
?>