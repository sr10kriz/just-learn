var n=0;
var m=0;
var images=document.getElementsByClassName('img');
var dots=document.getElementsByClassName('dot');

autoslide();
function autoslide(){
	if(n==0 && m==0){
		for(var i=0;i<images.length;i++){
			images[i].style.display='none';
		}
		/*alert("for");*/
	}
	else if(n==0){
		images[2-n].style.display='none';
	}
	else{
		images[n-1].style.display='none';
	}
	images[n].style.display='block';

	for(var i=0;i<dots.length;i++)
	{
		dots[i].className=dots[i].className.replace(" active",""); //0.num=0.num.replace("num active"," ") loop..
	}
	dots[n].className+=" active"; // 1[0].num=1[0].num="num active";

	n++;
	m=1;

	if(n>=images.length){
		n=0;
	}
	setTimeout(autoslide,3000);
}


$(document).ready(function(){
	$(".searchresult").hide();
	$(".searchresult1").hide();
	$(".verticalcont").css('display','none');
	$(".verticalcont1").css('display','none');
	$(".burger").on("click",function(){
		/*$(".nav3").css('left',0);*/
		$(".nav3").animate({left: '0'},'slow');
		/*$(".nav3").css('transform','translate(600px,0px) rotate(360deg)');*/
	})
	$("#mqclose").on("click",function(){
		$(".nav3").animate({'left':-600},'slow');
	})
	$("#logout").on('click',function(){
		$.ajax({
			url : 'logoutses.php',
			cache : false,
			processData : false,
			contentType : false,
			success : function(res){
				alert(res);
				window.location.href="index.php";
			}
		})
	})
	$.ajax({
		url : 'getbooktype.php',
		success : function(res){
			$("#booktype").html(res);
			$("#booktype1").html(res);
			$("#booktype2").html(res);
		}
	})

	$(".standard").hide();
	$(".subject").hide();
	$(".subject1").hide();
	$(".board").hide();

	$(".standard1").hide();
	$(".subject2").hide();
	$(".subject3").hide();
	$(".board1").hide();

	$("#booktype").change(function(){
		let booktypeid=$(this).val();
		if(booktypeid=="3"){
			$(".standard").show();
			$(".board").show();
		}
		else{
			$(".standard").hide();
			$(".board").hide();
			$(".subject").hide();
			$(".subject1").hide();
		}
	})

	$("#booktype1").change(function(){
		let booktypeid1=$(this).val();
		if(booktypeid1=="3"){
			$(".standard1").show();
			$(".board1").show();
		}
		else{
			$(".standard1").hide();
			$(".board1").hide();
			$(".subject2").hide();
			$(".subject3").hide();
		}
	})

	$.ajax({
		url : 'getstandard.php',
		success : function(res){
			$("#standardid").html(res);
			$("#standardid1").html(res);
		}
	})

	$("#standardid").change(function(){
		let std=$(this).val();
		if(std=="1"){
			$(".subject").show();
			$(".subject1").hide();
			/*$("#subjectid1").val('');*/
		}
		else if(std=="2"){
			$(".subject1").show();	
			$(".subject").hide();
			/*$("#subjectid").val('');*/
		}
	})

	$("#standardid1").change(function(){
		let std1=$(this).val();
		if(std1=="1"){
			$(".subject2").show();
			$(".subject3").hide();
		}
		else if(std1=="2"){
			$(".subject3").show();
			$(".subject2").hide();	
		}
	})

	$.ajax({
		url : 'getsubject.php',
		success : function(res){
			$("#subjectid").html(res);
			$("#subjectid2").html(res);
		}
	})

	$.ajax({
		url : 'getsubject1.php',
		success : function(res){
			$("#subjectid1").html(res);
			$("#subjectid3").html(res);
		}
	})

	$.ajax({
		url : 'getboard.php',
		success : function(res){
			$("#boardid").html(res);
			$("#boardid1").html(res);
		}
	})


	$("#require").on('click',function(){
		$(".opacity").css('opacity',0.1);
		/*$(".nav3").hide();*/
		$(".requireform").fadeIn();
		$(".gridcont").show();
		$("#booktype").focus();
		/*$(".requireform").css('opacity',1);*/
		/*$(".requireform").css('display','block');*/
		$(".uploadform").css('display','none');
		$(".imgcont").css('display','block');
		/*$(".searchcont").hide();*/
		/*$(".searchresult1").hide();*/
		$(".searchresult1").hide();
		$(".searchresult").hide();
		$("#mtyfields").hide();
		$("#mtyfields1").hide();
		$(".smty").hide();
		$(".contactbox").hide();
		$(".verticalcont").hide();
		$(".verticalcont1").hide();
		$(".searchcont1").hide();
		$(".searchcont").hide();
		$("#quotation").hide();
		$("#quotation1").hide();
		$(".delform").hide();
		$(".delform1").hide();
		$(".updatereqt").hide();
		$(".updateupload").hide();
		$(".bdel").hide();
		$(".bdel1").hide();
		$(".feedbackform").hide();
		$(".contactform").hide();
		$(".queryform").hide();
		/*$(".imgcont").show();*/
	})
	$("#close1").on('click',function(){
		/*$(".requireform").css('display','none');*/
		$(".requireform").fadeOut();
		$(".opacity").css('opacity',1);
	})
	$("#books").on('click',function(){
		$(".opacity").css('opacity',0.1);
		/*$(".uploadform").css('display','block');*/
		/*$(".nav3").hide();*/
		$(".uploadform").fadeIn();
		$(".gridcont").show();
		$("#booktype1").focus();
		$(".requireform").css('display','none');
		$(".imgcont").css('display','block');
		$(".contactbox").hide();
		$(".verticalcont").hide();
		$(".verticalcont1").hide();
		$(".searchcont1").hide();
		$(".searchcont").hide();
		$(".searchresult1").hide();
		$(".searchresult").hide();
		$("#mtyfields").hide();
		$("#mtyfields1").hide();
		$(".smty").hide();
		$("#quotation").hide();
		$("#quotation1").hide();
		$(".delform").hide();
		$(".delform1").hide();
		$(".updatereqt").hide();
		$(".updateupload").hide();
		$(".bdel").hide();
		$(".bdel1").hide();
		$(".feedbackform").hide();
		$(".contactform").hide();
		$(".queryform").hide();
		/*$(".imgcont").show();*/
	})
	$("#close2").on('click',function(){
		/*$(".uploadform").css('display','none');*/
		$(".uploadform").fadeOut();
		$(".opacity").css('opacity',1);
	})
	$("#regbtn").on('click',function(e){
		/*alert("here");*/
		e.preventDefault();

		var formdata=new FormData();

		var booktype=$("#booktype").val();
		var standardid=$("#standardid").val();
		var subjectid=$("#subjectid").val();
		var subjectid1=$("#subjectid1").val();
		var boardid=$("#boardid").val();
		var title=$("#title").val();
		var author=$("#author").val();
		var desc=$("#desc").val();
		var nameusr=$("#nameusr").val();
		var phone=$("#phone").val();
		var email=$("#email").val();
		var rupee=$("#rupee").val();

		formdata.append("booktype",booktype);
		formdata.append("standardid",standardid);
		formdata.append("subjectid",subjectid);
		formdata.append("subjectid1",subjectid1);
		formdata.append("boardid",boardid);
		formdata.append("title",title);
		formdata.append("author",author);
		formdata.append("desc",desc);
		formdata.append("nameusr",nameusr);
		formdata.append("phone",phone);
		formdata.append("email",email);
		formdata.append("rupee",rupee);

		var common=$(".common").filter(function(){
			return $(this).val()=="";
		})
		if(common.length>0){
			common.css("border","1px solid red");
			return false;
		}

		$.ajax({
			url : 'insertbookdata.php',
			method : 'post',
			data : formdata,
			cache : false,
			processData : false,
			contentType : false,
			success : function(res){
				alert(res);
				$(".requireform")[0].reset();
				$("#booktype").focus();
			}
		})
	})

	$("#uplbtn").on('click',function(e){
		/*alert("here");*/
		e.preventDefault();

		var formdata=new FormData();

		var booktype1=$("#booktype1").val();
		var standardid1=$("#standardid1").val();
		var subjectid2=$("#subjectid2").val();
		var subjectid3=$("#subjectid3").val();
		var boardid1=$("#boardid1").val();
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
		formdata.append("standardid1",standardid1);
		formdata.append("subjectid2",subjectid2);
		formdata.append("subjectid3",subjectid3);
		formdata.append("boardid1",boardid1);
		formdata.append("title1",title1);
		formdata.append("author1",author1);
		formdata.append("desc1",desc1);
		formdata.append("nameusr1",nameusr1);
		formdata.append("phone1",phone1);
		formdata.append("email1",email1);
		formdata.append("files",files);
		formdata.append("rupee1",rupee1);

		var common1=$(".common1").filter(function(){
			return $(this).val()=="";
		})
		if(common1.length>0){
			common1.css("border","1px solid red");
			return false;
		}

		$.ajax({
 			url : 'uploadbookdata.php',
 			method : 'post',
			data : formdata,
			cache : false,
			processData : false,
			contentType : false, 			
 			success : function(res){
 				alert(res);
 				$(".uploadform")[0].reset();
				$("#booktype1").focus();
 			}
 		})
 	})


	$("#viewrequire").on('click',function(){
		$(".searchresult").hide();
		// $(".nav3").hide();
		$(".uploadform").hide();
		$(".requireform").hide();
		$(".contactbox").hide();
		$(".delform").hide();
		$(".delform1").hide();
		/*$(".verticalcont").css('display','block');*/
		$(".verticalcont").fadeIn();
		$(".searchcont1").show();
		$(".searchcont").hide();
		$(".searchresult1").hide();
		$(".gridcont").hide();
		$("#find1").val('');
		$(".verticalcont1").css('display','none');
		$(".imgcont").css('display','none');
		$("#quotation1").css('display','none');
		/*$("#quotation").css('display','block');*/
		$("#quotation").fadeIn();
		$(".updatereqt").hide();
		$(".updateupload").hide();
		$(".bdel").hide();
		$(".bdel1").hide();
		$(".feedbackform").hide();
		$(".contactform").hide();
		$(".queryform").hide();
		$.ajax({
			url : 'getreqt.php',
			success : function(res){
				$("#quotation").html(res);
				let two=2;
				$.ajax({
					url : 'userreqt.php',
					method : 'post',
					data : {two:two},
					success : function(res){
						$(".verticalcont").html(res);
					}
				})
			}
		})
	})

	$("#viewbooks").on('click',function(){
		/*$(".nav3").hide();*/
		$(".searchresult").hide();
		$(".searchcont1").hide();
		$(".searchresult1").hide();
		$(".uploadform").hide();
		$(".requireform").hide();
		$(".delform").hide();
		$(".delform1").hide();
		$(".searchcont").show();
		$(".searchresult").hide();
		$(".gridcont").hide();
		$("#find").val('');
		$(".verticalcont").css('display','none');
		/*$(".verticalcont1").css('display','block');*/
		$(".verticalcont1").fadeIn();
		$(".imgcont").css('display','none');
		$("#quotation").css('display','none');
		/*$("#quotation1").css('display','block');*/
		$("#quotation1").fadeIn();
		$(".updatereqt").hide();
		$(".updateupload").hide();
		$(".bdel").hide();
		$(".bdel1").hide();
		$(".feedbackform").hide();
		$(".contactform").hide();
		$(".queryform").hide();
		$.ajax({
			url : 'getbooks.php',
			success : function(res){
				$("#quotation1").html(res);
				let values=2;
				$.ajax({
					url : 'userbooks.php',
					method : 'post',
					data : {values:values},
					success : function(res){
						$(".verticalcont1").html(res);
					}
				})
			}
		})
	})

	$("#filter").on('click',function(){
		alert("filter");
		$(".searchresult").hide();
		$(".searchcont1").hide();
		$(".searchresult1").hide();
		$(".uploadform").hide();
		$(".requireform").hide();
		$(".delform").hide();
		$(".delform1").hide();
		$(".searchcont").hide();
		$(".searchresult").hide();
		$(".verticalcont").css('display','none');
		/*$(".verticalcont1").css('display','block');*/
		$(".verticalcont1").hide();
		$(".imgcont").css('display','none');
		$("#quotation").css('display','none');
		/*$("#quotation1").css('display','block');*/
		$("#quotation1").hide();
		$(".updatereqt").hide();
		$(".updateupload").hide();
		$(".bdel").hide();
		$(".bdel1").hide();
		$(".feedbackform").hide();
		$(".contactform").hide();
		$(".queryform").hide();
	})

	$("#search").on('click',function(){
		/*$(".nav3").hide();*/
		$(".verticalcont").css('display','none');
		$(".verticalcont1").css('display','none');
		$("#quotation").css('display','none');
		$("#quotation1").css('display','none');
		$(".uploadform").hide();
		$(".requireform").hide();
		/*$(".searchresult").show();*/
		$(".searchresult").fadeIn();
		$(".searchresult1").hide();
		$(".searchcont1").hide();
		$(".updatereqt").hide();
		$(".updateupload").hide();
		$(".bdel").hide();
		$(".bdel1").hide();
		$(".feedbackform").hide();
		$(".contactform").hide();
		$(".queryform").hide();
		/*alert("heeeeeere");*/
		let find=$("#find").val();
		/*alert(find);*/
		$.ajax({
			url : 'searchbook.php',
			method : 'post',
			data : {find:find},
			success : function(res){
				$(".searchresult").html(res);
			}
		})
	})

	$("#search1").on('click',function(){
		/*$(".nav3").hide();*/
		$(".verticalcont").css('display','none');
		$(".verticalcont1").css('display','none');
		$("#quotation").css('display','none');
		$("#quotation1").css('display','none');
		$(".uploadform").hide();
		$(".requireform").hide();
		/*$(".searchresult").show();*/
		$(".searchresult1").fadeIn();
		$(".searchresult").hide();
		$(".searchcont").hide();
		$(".updatereqt").hide();
		$(".updateupload").hide();
		$(".bdel").hide();
		$(".bdel1").hide();
		$(".searchcont1").show();
		$(".feedbackform").hide();
		$(".contactform").hide();
		$(".queryform").hide();
		/*alert("heeeeeere");*/
		let find1=$("#find1").val();
		$.ajax({
			url : 'searchreqt.php',
			method : 'post',
			data : {find1:find1},
			success : function(res){
				$(".searchresult1").html(res);
			}
		})
	})

	$(".chevup").on('click',function(){
		/*alert("top");*/
		$('html,body').animate({scrollTop:0},'slow');
		/*$("html, body").animate({ scrollTop: 0 }, "slow");*/
	})

	$(".help").on('click',function(){
		$(".requireform").hide();
		$(".uploadform").hide();
		$(".feedbackform").hide();
		$(".queryform").hide();
		$(".opacity").css('opacity',0.1);
		$(".verticalcont").css('opacity',0.1);
		$(".verticalcont1").css('opacity',0.1);
		$("#quotation").css('opacity',0.1);
		$("#quotation1").css('opacity',0.1);
		$(".searchresult1").css('opacity',0.1);
		$(".searchresult").css('opacity',0.1);
		$(".searchcont").css('opacity',0.1);
		$(".searchcont1").css('opacity',0.1);
		$(".contactform").fadeIn();
		$("#conname").focus();
		/*$(".updatereqt").show();*/
	})

	$(".help1").on('click',function(){
		$(".requireform").hide();
		$(".uploadform").hide();
		$(".feedbackform").hide();
		$(".queryform").hide();
		$(".opacity").css('opacity',0.1);
		$(".verticalcont").css('opacity',0.1);
		$(".verticalcont1").css('opacity',0.1);
		$("#quotation").css('opacity',0.1);
		$("#quotation1").css('opacity',0.1);
		$(".searchresult1").css('opacity',0.1);
		$(".searchresult").css('opacity',0.1);
		$(".searchcont").css('opacity',0.1);
		$(".searchcont1").css('opacity',0.1);
		$(".contactform").fadeIn();
		$("#conname").focus();
		/*$(".updatereqt").show();*/
	})

	$("#conbtn").on('click',function(e){

		e.preventDefault();

		var conname=$("#conname").val();
		var conphone=$("#conphone").val();
		var conmail=$("#conmail").val();
		var consubject=$("#consubject").val();
		var condesc=$("#condesc").val();

		var none=$(".none").filter(function(){
			return $(this).val()=="";
		})
		if(none.length>0){
			none.css("border","1px solid red");
			return false;
		}

		$.ajax({
			url : 'contactus.php',
			method : 'post',
			data : {conname:conname,conphone:conphone,conmail:conmail,consubject:consubject,condesc:condesc},
			success : function(res){
				alert(res);
				$(".contactform")[0].reset();
				$(".contactform").fadeOut();
				$(".opacity").css('opacity',1);
				$(".verticalcont").css('opacity',1);
				$(".verticalcont1").css('opacity',1);
				$("#quotation").css('opacity',1);
				$("#quotation1").css('opacity',1);
				$(".searchresult1").css('opacity',1);
				$(".searchresult").css('opacity',1);
				$(".searchcont").css('opacity',1);
				$(".searchcont1").css('opacity',1);
			}
		})
	})

	$(".feed").on('click',function(){
		$(".requireform").hide();
		$(".uploadform").hide();
		$(".contactform").hide();
		$(".queryform").hide();
		$(".feedbackform").fadeIn();
		$(".opacity").css('opacity',0.1);
		$(".verticalcont").css('opacity',0.1);
		$(".verticalcont1").css('opacity',0.1);
		$("#quotation").css('opacity',0.1);
		$("#quotation1").css('opacity',0.1);
		$(".searchresult1").css('opacity',0.1);
		$(".searchresult").css('opacity',0.1);
		$(".searchcont").css('opacity',0.1);
		$(".searchcont1").css('opacity',0.1);
		$("#feedname").focus();
	})

	$("#feedbtn").on('click',function(e){

		e.preventDefault();

		var feedname=$("#feedname").val();
		var feedphone=$("#feedphone").val();
		var feedmail=$("#feedmail").val();
		var feedsubject=$("#feedsubject").val();
		var feeddesc=$("#feeddesc").val();

		var none1=$(".none1").filter(function(){
			return $(this).val()=="";
		})
		if(none1.length>0){
			none1.css("border","1px solid red");
			return false;
		}

		$.ajax({
			url : 'feedbackus.php',
			method : 'post',
			data : {feedname:feedname,feedphone:feedphone,feedmail:feedmail,feedsubject:feedsubject,feeddesc:feeddesc},
			success : function(res){
				alert(res);
				$(".feedbackform")[0].reset();
				$(".feedbackform").fadeOut();
				$(".opacity").css('opacity',1);
				$(".verticalcont").css('opacity',1);
				$(".verticalcont1").css('opacity',1);
				$("#quotation").css('opacity',1);
				$("#quotation1").css('opacity',1);
				$(".searchresult1").css('opacity',1);
				$(".searchresult").css('opacity',1);
				$(".searchcont").css('opacity',1);
				$(".searchcont1").css('opacity',1);
			}
		})
	})

	$(".query").on('click',function(){
		$(".requireform").hide();
		$(".uploadform").hide();
		$(".contactform").hide();
		$(".feedbackform").hide();
		$(".queryform").fadeIn();
		$(".opacity").css('opacity',0.1);
		$(".verticalcont").css('opacity',0.1);
		$(".verticalcont1").css('opacity',0.1);
		$("#quotation").css('opacity',0.1);
		$("#quotation1").css('opacity',0.1);
		$(".searchresult1").css('opacity',0.1);
		$(".searchresult").css('opacity',0.1);
		$(".searchcont").css('opacity',0.1);
		$(".searchcont1").css('opacity',0.1);
		$("#queryname").focus();
	})

	$("#querybtn").on('click',function(e){

		e.preventDefault();

		var queryname=$("#queryname").val();
		var queryphone=$("#queryphone").val();
		var querymail=$("#querymail").val();
		var querysubject=$("#querysubject").val();
		var querydesc=$("#querydesc").val();

		var none2=$(".none2").filter(function(){
			return $(this).val()=="";
		})
		if(none2.length>0){
			none2.css("border","1px solid red");
			return false;
		}

		$.ajax({
			url : 'query.php',
			method : 'post',
			data : {queryname:queryname,queryphone:queryphone,querymail:querymail,querysubject:querysubject,querydesc:querydesc},
			success : function(res){
				alert(res);
				$(".queryform")[0].reset();
				$(".queryform").fadeOut();
				$(".opacity").css('opacity',1);
				$(".verticalcont").css('opacity',1);
				$(".verticalcont1").css('opacity',1);
				$("#quotation").css('opacity',1);
				$("#quotation1").css('opacity',1);
				$(".searchresult1").css('opacity',1);
				$(".searchresult").css('opacity',1);
				$(".searchcont").css('opacity',1);
				$(".searchcont1").css('opacity',1);
			}
		})
	})

	$("#close5").on("click",function(){
		$(".opacity").css('opacity',1);
		$(".verticalcont").css('opacity',1);
		$(".verticalcont1").css('opacity',1);
		$("#quotation").css('opacity',1);
		$("#quotation1").css('opacity',1);
		$(".searchresult1").css('opacity',1);
		$(".searchresult").css('opacity',1);
		$(".searchcont").css('opacity',1);
		$(".searchcont1").css('opacity',1);
		$(".contactform").fadeOut();
	})

	$("#close6").on("click",function(){
		$(".opacity").css('opacity',1);
		$(".verticalcont").css('opacity',1);
		$(".verticalcont1").css('opacity',1);
		$("#quotation").css('opacity',1);
		$("#quotation1").css('opacity',1);
		$(".searchresult1").css('opacity',1);
		$(".searchresult").css('opacity',1);
		$(".searchcont").css('opacity',1);
		$(".searchcont1").css('opacity',1);
		$(".feedbackform").fadeOut();
	})

	$("#close7").on("click",function(){
		$(".opacity").css('opacity',1);
		$(".verticalcont").css('opacity',1);
		$(".verticalcont1").css('opacity',1);
		$("#quotation").css('opacity',1);
		$("#quotation1").css('opacity',1);
		$(".searchresult1").css('opacity',1);
		$(".searchresult").css('opacity',1);
		$(".searchcont").css('opacity',1);
		$(".searchcont1").css('opacity',1);
		$(".queryform").fadeOut();
	})

	$(".exit").on('click',function(){
		$(".bdel").fadeOut();
		$(".verticalcont").css('opacity',1);
		$(".searchresult1").css('opacity',1);
	})

	$(".exit1").on('click',function(){
		$(".bdel1").fadeOut();
		$(".verticalcont1").css('opacity',1);
		$(".searchresult").css('opacity',1);	
	})

	$("#close3").on('click',function(){
		$(".delform").fadeOut();
		$(".verticalcont").css('opacity',1);
		$(".searchresult1").css('opacity',1);
	})

	$("#close4").on('click',function(){
		$(".delform1").fadeOut();
		$(".verticalcont1").css('opacity',1);
		$(".searchresult").css('opacity',1);
	})

	$("#close8").on("click",function(){
		$(".checkform").fadeOut();
		$(".verticalcont").css('opacity',1);
		$(".searchresult1").css('opacity',1);
	})

	$("#close9").on("click",function(){
		$(".checkform1").fadeOut();
		$(".verticalcont1").css('opacity',1);
		$(".searchresult").css('opacity',1);
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
	/*var loadFile = function(event){
	var bookpreview = document.getElementById('bookpreview');
	bookname = event.target.files[0];
	bookpreview.src = URL.createObjectURL(bookname);
	};
	<input type="file" accept="image/*" onchange="loadFile(event)" name='image'>*/
})