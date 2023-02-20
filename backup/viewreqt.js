$(document).ready(function(){
	$("#logout").on('click',function(){
		$.ajax({
			url : 'logoutses.php',
			cache : false,
			processData : false,
			contentType : false,
			success : function(res){
				alert(res);
				window.location.href='index.html';
			}
		})
	})
	$.ajax({
		url : 'getbooktype.php',
		success : function(res){
			$("#booktype").html(res);
			$("#booktype1").html(res);
		}
	})
	$("#require").on('click',function(){
		$(".requireform").css('display','block');
		$(".uploadform").css('display','none');
	})
	$("#close1").on('click',function(){
		$(".requireform").css('display','none');
	})
	$("#books").on('click',function(){
		$(".uploadform").css('display','block');
		$(".requireform").css('display','none');
	})
	$("#close2").on('click',function(){
		$(".uploadform").css('display','none');
	})
	$("#regbtn").on('click',function(e){
		/*alert("here");*/
		e.preventDefault();

		var formdata=new FormData();

		var booktype=$("#booktype").val();
		var title=$("#title").val();
		var author=$("#author").val();
		var desc=$("#desc").val();
		var nameusr=$("#nameusr").val();
		var phone=$("#phone").val();
		var email=$("#email").val();
		var rupee=$("#rupee").val();

		formdata.append("booktype",booktype);
		formdata.append("title",title);
		formdata.append("author",author);
		formdata.append("desc",desc);
		formdata.append("nameusr",nameusr);
		formdata.append("phone",phone);
		formdata.append("email",email);
		formdata.append("rupee",rupee);

		$.ajax({
			url : 'insertbookdata.php',
			method : 'post',
			data : formdata,
			cache : false,
			processData : false,
			contentType : false,
			success : function(res){
				alert(res);
			}
		})
	})

	$("#uplbtn").on('click',function(e){
		/*alert("here");*/
		e.preventDefault();

		var formdata=new FormData();

		var booktype1=$("#booktype1").val();
		var title1=$("#title1").val();
		var author1=$("#author1").val();
		var desc1=$("#desc1").val();
		var nameusr1=$("#nameusr1").val();
		var phone1=$("#phone1").val();
		var email1=$("#email1").val();
		var files=$("#file")[0].files;
		var files=files[0];
		/*alert(files);*/ //doubt
		/*var files=$("#files")[0].files;*/
		var rupee1=$("#rupee1").val();

		formdata.append("booktype1",booktype1);
		formdata.append("title1",title1);
		formdata.append("author1",author1);
		formdata.append("desc1",desc1);
		formdata.append("nameusr1",nameusr1);
		formdata.append("phone1",phone1);
		formdata.append("email1",email1);
		formdata.append("files",files);
		formdata.append("rupee1",rupee1);

		$.ajax({
 			url : 'uploadbookdata.php',
 			method : 'post',
			data : formdata,
			cache : false,
			processData : false,
			contentType : false, 			
 			success : function(res){
 				alert(res);
 			}
 		})
 	})

	$.ajax({
		url : 'getreqt.php',
		success : function(res){
			$("#quotation").html(res);
		}
	})

	$("#file").change(function(){
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
})