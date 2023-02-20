<?php
	include_once('db.php');

	$edit=$_POST['edit'];
	$sql="select * from requiredbooks where requiredbooks_id='$edit'";
	$res=mysqli_query($con,$sql);
	$count=mysqli_num_rows($res);

	$output="";

	while($row=mysqli_fetch_assoc($res)){

	$id=$row['requiredbooks_id'];
	$booktitle=$row['book_title'];
	$bookauthor=$row['book_author'];
	$bookdesc=$row['book_desc'];
	$usrname=$row['user_name'];
	$usrphone=$row['user_phone'];
	$usrmail=$row['user_mail'];
	$expecprice=$row['expec_price'];

	$output.="<div class='close5'>&#10006;</div>
				<h1 id='name4'>update your required book details</h1>
			<div>
				<select id='booktype2' class='common'></select>
			</div>
			<div class='std'>
				<select id='standardid2' class='common'></select>
			</div>
			<div class='sub'>
				<select id='subjectid4' class='common'></select>
			</div>
			<div class='sub1'>
				<select id='subjectid5' class='common'></select>
			</div>
			<div class='boa'>
				<select id='boardid2' class='common'></select>
			</div>
			<div>
				<input type='text' id='title2' class='common' placeholder='title of the book' value='$booktitle'>
			</div>
			<div>
				<input type='text' id='author2' class='common' placeholder='author of the book' value='$bookauthor'>
			</div>
			<div>
				<input type='text' id='desc2' class='common' placeholder='description' value='$bookdesc'>
			</div>
			<div>
				<input type='text' id='nameusr2' class='common' placeholder='your name' value='$usrname'>
			</div>
			<div>
				<input type='text' id='phone2' class='common' placeholder='your mobile number' value='$usrphone'>
			</div>
			<div>
				<input type='text' id='email2' class='common' placeholder='email id' value='$usrmail'>
			</div>
			<div>
				<input type='text' id='rupee2' class='common' placeholder='you looking at a price of (in Rs.)' value='$expecprice'>
			</div>
			<div class='updatebutton'>
				<button id='updatebtn' value='$id'>update</button>
			</div>";
		}

	echo $output;
?>

<script type="text/javascript">

	$.ajax({
		url : 'getbooktype.php',
		success : function(res){
			$("#booktype2").html(res);
		}
	})

	$(".std").hide();
	$(".sub").hide();
	$(".sub1").hide();
	$(".boa").hide();

	$("#booktype2").change(function(){
		let booktypeid2=$(this).val();
		if(booktypeid2=="3"){
			$(".std").show();
			$(".boa").show();
		}
		else{
			$(".std").hide();
			$(".boa").hide();
			$(".sub").hide();
			$(".sub1").hide();
		}
	})

	$.ajax({
		url : 'getstandard.php',
		success : function(res){
			$("#standardid2").html(res);
		}
	})


	$("#standardid2").change(function(){
		let standard=$(this).val();
		if(standard=="1"){
			$(".sub").show();
			$(".sub1").hide();
		}
		else if(standard=="2"){
			$(".sub1").show();
			$(".sub").hide();	
		}
	})

	$.ajax({
		url : 'getsubject.php',
		success : function(res){
			$("#subjectid4").html(res);
		}
	})

	$.ajax({
		url : 'getsubject1.php',
		success : function(res){
			$("#subjectid5").html(res);
		}
	})

	$.ajax({
		url : 'getboard.php',
		success : function(res){
			$("#boardid2").html(res);
		}
	})

	$(".close5").on('click',function(){
		$(".updatereqt").fadeOut();
		$(".verticalcont").css('opacity',1);
		$(".searchresult1").css('opacity',1);
	})

	$("#updatebtn").on('click',function(e){
		
		e.preventDefault();
		
		var formdata=new FormData();

		var id=$(this).attr('value');
		var booktype2=$("#booktype2").val();
		var stdid=$("#standardid2").val();
		var subid=$("#subjectid4").val();
		var subid1=$("#subjectid5").val();
		var boaid=$("#boardid2").val();
		var title2=$("#title2").val();
		var author2=$("#author2").val();
		var desc2=$("#desc2").val();
		var nameusr2=$("#nameusr2").val();
		var phone2=$("#phone2").val();
		var email2=$("#email2").val();
		var rupee2=$("#rupee2").val();

		/*var common=$(".common").filter(function(){
			return $(this).val()=="";
		})
		if(common.length>0){
			common.css("border","1px solid red");
			return false;
		}*/

		formdata.append("id",id);
		formdata.append("booktype2",booktype2);
		formdata.append("stdid",stdid);
		formdata.append("subid",subid);
		formdata.append("subid1",subid1);
		formdata.append("boaid",boaid);
		formdata.append("title2",title2);
		formdata.append("author2",author2);
		formdata.append("desc2",desc2);
		formdata.append("nameusr2",nameusr2);
		formdata.append("phone2",phone2);
		formdata.append("email2",email2);
		formdata.append("rupee2",rupee2);

		$.ajax({
			url : 'updatebookdata.php',
			method : 'post',
			data : formdata,
			cache : false,
			processData : false,
			contentType : false,
			success : function(res){
				alert(res);
				$(".updatereqt").hide();
				window.location='home.php';
				$(".verticalcont").css('opacity',1);
			}
		})
	})
</script>