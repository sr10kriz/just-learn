<?php
	include_once('db.php');

	$booktype=$_POST['booktype'];
	$standardid=$_POST['standardid'];

	if($standardid == ''){
		$standardid = '0';
	}

	$subjectid = $_POST['subjectid'];
	$subjectid1 = $_POST['subjectid1'];

	if ($subjectid ==  ''){
		$subjectid = '0';
	}
	if ($subjectid1 == ''){
		$subjectid1 = '0';
	}

	$boardid=$_POST['boardid'];

	if($boardid == ''){
		$boardid = '0';
	}

	$title=$_POST['title'];
	$author=$_POST['author'];
	$desc=$_POST['desc'];
	$nameusr=$_POST['nameusr'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];
	$rupee=$_POST['rupee'];

	$sql="insert into requiredbooks(booktype_id,standard_id,subject_id_ssc,subject_id_hsc,board_id,book_title,book_author,book_desc,user_name,user_phone,user_mail,expec_price,active)values($booktype,$standardid,$subjectid,$subjectid1,$boardid,'$title','$author','$desc','$nameusr','$phone','$email','$rupee',1)";
	
	/*echo $sql;*/

	if(mysqli_query($con,$sql)){
		echo "Your requirements saved with us.";
	}
	else{
		echo "Failed to save details.";
	}
	/*echo mysqli_error($con);  to know specific error in php*/
?>

