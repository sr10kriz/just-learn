<?php
	include_once('db.php');
	
	$sql="select * from standard";
	$res=mysqli_query($con,$sql);
	$output="<select id='standardid'><option value=''>select standard</option>";
	while($row=mysqli_fetch_assoc($res)){
		$standardid=$row['standard_id'];
		$standardname=$row['standard_name'];
		$output.="<option value='$standardid'>$standardname</option>";
	}
	$output.="</select>";
	echo $output;
?>
