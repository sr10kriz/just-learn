<?php
	include_once('db.php');
	
	$sql="select * from subject where standard_id=1";
	$res=mysqli_query($con,$sql);
	$output="<select id='subjectid'><option value=''>select subject</option>";
	while($row=mysqli_fetch_assoc($res)){
		$subjectid=$row['subject_id'];
		$subjectname=$row['subject_name'];
		$output.="<option value='$subjectid'>$subjectname</option>";
	}
	$output.="</select>";
	echo $output;
?>
