<?php
	include_once('db.php');

	$feedname=$_POST['feedname'];
	$feedphone=$_POST['feedphone'];
	$feedmail=$_POST['feedmail'];
	$feedsubject=$_POST['feedsubject'];
	$feeddesc=$_POST['feeddesc'];

	$sql="insert into feedback(feed_name,feed_phone,feed_mail,feed_subject,feed_desc,active)values('$feedname','$feedphone','$feedmail','$feedsubject','$feeddesc',1)";

	if(mysqli_query($con,$sql)){
		echo "Thank you for your valuable feedback!..";
	}
	else{
		echo "Failed,Try again";
	}
?>