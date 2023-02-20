<?php
	include_once('db.php');

	$trash1=$_POST['trash1'];
	$sql="delete from uploadedbooks where uploadedbooks_id='$trash1'";
	if(mysqli_query($con,$sql)){
		echo "Your uploadedbooks deleted successfully";
	}
	else{
		echo "Problem";
	}
?>