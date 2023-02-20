<?php
	include_once('db.php');

	$edit1=$_POST['edit1'];
	$sql="select * from uploadedbooks where uploadedbooks_id='$edit1'";
	$res=mysqli_query($con,$sql);
	$count=mysqli_num_rows($res);

	$output="";

	while($row=mysqli_fetch_assoc($res)){
		$id=$row['uploadedbooks_id'];
		$booktitle=$row['book_title'];
		$bookauthor=$row['book_author'];
		$bookdesc=$row['book_desc'];
		$usrname=$row['user_name'];
		$usrphone=$row['user_phone'];
		$usrmail=$row['user_mail'];
		$bookimg=$row['book_img'];
		$expecprice=$row['expec_price'];

		$output.="<div id='close6'>&#10006;</div>
			<h1 id='name5'>upload your books details</h1>
			<div>
				<select id='booktype3' class='common1'></select>
			</div>
			<div class='std1'>
				<select id='standardid3' class='common1'></select>
			</div>
			<div class='sub2'>
				<select id='subjectid6' class='common1'></select>
			</div>
			<div class='sub3'>
				<select id='subjectid7' class='common1'></select>
			</div>
			<div class='boa1'> 
				<select id='boardid3' class='common1'></select>
			</div>
			<div>
				<input type='text' id='title3' class='common1' value='$booktitle' placeholder='title of the book'>
			</div>
			<div>
				<input type='text' id='author3' class='common1' value='$bookauthor' placeholder='author of the book'>
			</div>
			<div>
				<input type='text' id='desc3' class='common1' value='$bookdesc' placeholder='description'>
			</div>
			<div>
				<input type='text' id='nameusr3' class='common1' value='$usrname' placeholder='person name'>
			</div>
			<div>
				<input type='text' id='phone3' class='common1' value='$usrphone
				' placeholder='person mobile number'>
			</div>
			<div>
				<input type='text' id='email3' class='common1' value='$usrmail' placeholder='person email id'>
			</div>
			<div>
				<input type='file' id='file3' class='common1'>
			</div>
			<div class='holder'>
			    <img id='imgPreview' src='upload/$bookimg' alt='Book Pic' />
			</div>
			<div>
				<input type='text' id='rupee3' class='common1' value='$expecprice' placeholder='you looking at a price of'>
			</div>
			<div class='updatebutton1'>
				<button id='updatebtn1' value='$id'>update</button>
			</div>";
	}

	echo $output;

?>

<script type="text/javascript">

	$("#file3").change(function(){
	    const file = this.files[0];
	    if(file){
	        let reader = new FileReader();
	        reader.onload = function (event) {
	            $("#imgPreview")
	              .attr("src", event.target.result);
	        };
	        reader.readAsDataURL(file);
	    }
	});

	$.ajax({
		url : 'getbooktype.php',
		success : function(res){
			$("#booktype3").html(res);
		}
	})

	$(".std1").hide();
	$(".sub2").hide();
	$(".sub3").hide();
	$(".boa1").hide();

	$("#booktype3").change(function(){
		let booktypeid3=$(this).val();
		if(booktypeid3=="3"){
			$(".std1").show();
			$(".boa1").show();
		}
		else{
			$(".std1").hide();
			$(".boa1").hide();
			$(".sub2").hide();
			$(".sub3").hide();
		}
	})

	$.ajax({
		url : 'getstandard.php',
		success : function(res){
			$("#standardid3").html(res);
		}
	})


	$("#standardid3").change(function(){
		let standard3=$(this).val();
		if(standard3=="1"){
			$(".sub2").show();
			$(".sub3").hide();
		}
		else if(standard3=="2"){
			$(".sub3").show();
			$(".sub2").hide();	
		}
	})

	$.ajax({
		url : 'getsubject.php',
		success : function(res){
			$("#subjectid6").html(res);
		}
	})

	$.ajax({
		url : 'getsubject1.php',
		success : function(res){
			$("#subjectid7").html(res);
		}
	})

	$.ajax({
		url : 'getboard.php',
		success : function(res){
			$("#boardid3").html(res);
		}
	})

	$("#close6").on('click',function(){
		$(".updateupload").fadeOut();
		$(".verticalcont1").css('opacity',1);
		$(".searchresult").css('opacity',1);
	})

	$("#updatebtn1").on('click',function(e){
		
		e.preventDefault();
		
		var formdata=new FormData();

		var id=$(this).attr('value');
		var booktype3=$("#booktype3").val();
		var standardid3=$("#standardid3").val();
		var subjectid6=$("#subjectid6").val();
		var subjectid7=$("#subjectid7").val();
		var boardid3=$("#boardid3").val();
		var title3=$("#title3").val();
		var author3=$("#author3").val();
		var desc3=$("#desc3").val();
		var nameusr3=$("#nameusr3").val();
		var phone3=$("#phone3").val();
		var email3=$("#email3").val();
		var files=$("#file3")[0].files;
		var files=files[0];
		var rupee3=$("#rupee3").val();

		/*var common=$(".common").filter(function(){
			return $(this).val()=="";
		})
		if(common.length>0){
			common.css("border","1px solid red");
			return false;
		}*/

		formdata.append("id",id);
		formdata.append("booktype3",booktype3);
		formdata.append("standardid3",standardid3);
		formdata.append("subjectid6",subjectid6);
		formdata.append("subjectid7",subjectid7);
		formdata.append("boardid3",boardid3);
		formdata.append("title3",title3);
		formdata.append("author3",author3);
		formdata.append("desc3",desc3);
		formdata.append("nameusr3",nameusr3);
		formdata.append("phone3",phone3);
		formdata.append("email3",email3);
		formdata.append("files",files);
		formdata.append("rupee3",rupee3);

		$.ajax({
			url : 'updatebookdata1.php',
			method : 'post',
			data : formdata,
			cache : false,
			processData : false,
			contentType : false,
			success : function(res){
				alert(res);
				$(".updateupload").hide();
				window.location='home.php';
			}
		})
	})
</script>