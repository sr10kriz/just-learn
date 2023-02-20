<?php
	include_once('db.php');

	$id=$_POST['id'];
	$booktype2=$_POST['booktype2'];
	$stdid=$_POST['stdid'];

	if($stdid ==''){
		$stdid='0';
	}

	$subid=$_POST['subid'];

	if($subid==''){
		$subid='0';
	}

	$subid1=$_POST['subid1'];

	if($subid1==''){
		$subid1='0';
	}

	$boaid=$_POST['boaid'];

	if($boaid==''){
		$boaid='0';
	}

	$title2=$_POST['title2'];
	$author2=$_POST['author2'];
	$desc2=$_POST['desc2'];
	$nameusr2=$_POST['nameusr2'];
	$phone2=$_POST['phone2'];
	$email2=$_POST['email2'];
	$rupee2=$_POST['rupee2'];

	$sql="update requiredbooks set booktype_id=$booktype2,standard_id=$stdid,subject_id_ssc=$subid,subject_id_hsc=$subid1,board_id=$boaid,book_title='$title2',book_author='$author2',book_desc='$desc2',user_name='$nameusr2',user_phone='$phone2',user_mail='$email2',expec_price='$rupee2',active=1 where requiredbooks_id=$id";
		
	/*die($sql);*/
	/*echo $sql;*/
	if(mysqli_query($con,$sql)){
		echo "Your changes updated successfully.";		
	}
	else{
		echo "Failed to update details.";
	}
?>