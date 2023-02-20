<?php
	include_once('db.php');

	$booktype1=$_POST['booktype1'];

	$standardid1=$_POST['standardid1'];

	if($standardid1 == ''){
		$standardid1 = '0';
	}

	$subjectid2 = $_POST['subjectid2'];
	$subjectid3 = $_POST['subjectid3'];

	if ($subjectid2 ==  ''){
		$subjectid2 = '0';
	}
	if ($subjectid3 == ''){
		$subjectid3 = '0';
	}

	$boardid1=$_POST['boardid1'];

	if($boardid1 == ''){
		$boardid1 = '0';
	}

	$title1=$_POST['title1'];
	$author1=$_POST['author1'];
	$desc1=$_POST['desc1'];
	$nameusr1=$_POST['nameusr1'];
	$phone1=$_POST['phone1'];
	$email1=$_POST['email1'];
	$filename=$_FILES['files']['name'];
	$fileimg=$_FILES['files']['tmp_name'];
	$rupee1=$_POST['rupee1'];

	$sql="insert into uploadedbooks(booktype_id,standard_id,subject_id_ssc,subject_id_hsc,board_id,book_title,book_author,book_desc,user_name,user_phone,user_mail,book_img,expec_price,active)values($booktype1,$standardid1,$subjectid2,$subjectid3,$boardid1,'$title1','$author1','$desc1','$nameusr1','$phone1','$email1','$filename','$rupee1',1)";
	
	if(mysqli_query($con,$sql)){
		move_uploaded_file($fileimg,"upload/$filename");
		echo "Your books saved with us.";
	}
	else{
		echo "Failed to upload details.";
	}
?>