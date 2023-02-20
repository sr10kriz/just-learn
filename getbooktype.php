<?php
	include_once('db.php');
	
	$sql="select * from bookstype";
	$res=mysqli_query($con,$sql);
	$output="<select id='booktype'><option id='val' value=''>select type</option>";
	while($row=mysqli_fetch_assoc($res)){
		$booktypeid=$row['booktype_id'];
		$booktypename=$row['booktype_name'];
		$output.="<option id='val' value='$booktypeid'>$booktypename</option>";
	}
	$output.="</select>";
	echo $output;
?>
