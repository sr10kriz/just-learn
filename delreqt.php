<?php
	include_once('db.php');

	$trash=$_POST['trash'];
	$sql="delete from requiredbooks where requiredbooks_id='$trash'";
	if(mysqli_query($con,$sql)){
		echo "Your requirements deleted successfully";
	}
	else{
		echo "Problem";
	}

?>