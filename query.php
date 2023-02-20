<?php
	include_once('db.php');

	$queryname=$_POST['queryname'];
	$queryphone=$_POST['queryphone'];
	$querymail=$_POST['querymail'];
	$querysubject=$_POST['querysubject'];
	$querydesc=$_POST['querydesc'];

	$sql="insert into query(query_name,query_phone,query_mail,query_subject,query_desc,active)values('$queryname','$queryphone','$querymail','$querysubject','$querydesc',1)";

	if(mysqli_query($con,$sql)){
		echo "Your query saved with us,we will reach you soon.";
	}
	else{
		echo "Failed,Try again";
	}
?>