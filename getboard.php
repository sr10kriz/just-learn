<?php
	include_once('db.php');
	
	$sql="select * from board";
	$res=mysqli_query($con,$sql);
	$output="<select id='boardid'><option value=''>select board</option>";
	while($row=mysqli_fetch_assoc($res)){
		$boardid=$row['board_id'];
		$boardname=$row['board_name'];
		$output.="<option value='$boardid'>$boardname</option>";
	}
	$output.="</select>";
	echo $output;
?>
