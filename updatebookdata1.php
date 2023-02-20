<?php
	include_once('db.php');

	$id=$_POST['id'];
	$booktype3=$_POST['booktype3'];
	$standardid3=$_POST['standardid3'];

	if($standardid3==''){
		$standardid3='0';
	}

	$subjectid6=$_POST['subjectid6'];

	if($subjectid6==''){
		$subjectid6='0';
	}

	$subjectid7=$_POST['subjectid7'];

	if($subjectid7==''){
		$subjectid7='0';
	}

	$boardid3=$_POST['boardid3'];

	if($boardid3==''){
		$boardid3='0';
	}

	$title3=$_POST['title3'];
	$author3=$_POST['author3'];
	$desc3=$_POST['desc3'];
	$nameusr3=$_POST['nameusr3'];
	$phone3=$_POST['phone3'];
	$email3=$_POST['email3'];
	$filename=$_FILES['files']['name'];
	$fileimg=$_FILES['files']['tmp_name'];
	$rupee3=$_POST['rupee3'];

	$sql="update uploadedbooks set booktype_id=$booktype3,standard_id=$standardid3,subject_id_ssc=$subjectid6,subject_id_hsc=$subjectid7,board_id=$boardid3,book_title='$title3',book_author='$author3',book_desc='$desc3',user_name='$nameusr3',user_phone='$phone3',user_mail='$email3',book_img='$filename',expec_price='$rupee3',active=1 where uploadedbooks_id=$id";
		
	/*die($sql);*/
	/*echo $sql;*/
	if(mysqli_query($con,$sql)){
		move_uploaded_file($fileimg,"upload/$filename");
		echo "Your changes updated successfully.";		
	}
	else{
		echo "Failed to update details.";
	}
?>