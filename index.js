$(document).ready(function(){
	/*alert('hii');*/
	$(".chevup").on('click',function(){
		/*alert("top");*/
		$('html,body').animate({scrollTop:0},'slow');
		/*$("html, body").animate({ scrollTop: 0 }, "slow");*/
	})
	$(".log").on('click',function(){
		/*$(".logform").css('display','block');*/
		$(".logform").fadeIn();
		$(".opacity").css('opacity',0.1);
		$(".regform").css('display','none');
	})
	$(".reg").on('click',function(){
		/*$(".regform").css('display','block');*/
		$(".regform").fadeIn();
		$(".opacity").css('opacity',0.1);
		$(".logform").css('display','none');
	})
	$("#close1").on('click',function(){
		/*$(".logform").css('display','none');*/
		$(".logform").fadeOut();
		$(".opacity").css('opacity',1);
	})
	$("#close2").click(function(){
		/*$(".regform").css('display','none');*/
		$(".regform").fadeOut();
		$(".opacity").css('opacity',1);
	})
	$("#name4").click(function(){
		/*$(".regform").css('display','block');*/
		$(".regform").fadeIn();
		/*$(".logform").css('display','none');*/
		$(".logform").fadeOut();
	})
	$("#name6").click(function(){
		/*$(".logform").css('display','block');*/
		$(".logform").fadeIn();
		/*$(".regform").css('display','none');*/
		$(".regform").fadeOut();
	})
	$(".burger").on('click',function(){
		/*$(".nav2").toggle();*/
		/*$(".nav2").fadeIn();*/
		$(".nav2").animate({left:0},'slow');
		$(".opacity").css('opacity',0.1);

	})
	$("#close3").on("click",function(){
		/*$(".nav2").fadeOut();*/
		$(".nav2").animate({'left':-600},'slow');
		$(".opacity").css('opacity',1);
	})

	$("#username").blur(function(){
		var name=$("#username").val();
		$.ajax({
			url : 'checkusr.php',
			method : 'post',
			data  : {name:name},
			success : function(res){
				if(res=="1"){
					alert("User id already exist");
					$("#username").val("");
					$("#username").focus();
				}
			}
		})
	})

	$("#userpwd").blur(function(){
		var userpwd=$("#userpwd").val();
	})

	$("#confirmpwd").blur(function(){
		var userpwd=$("#userpwd").val();
		var confirmpwd=$("#confirmpwd").val();
		if(userpwd!="" && confirmpwd!=""){
		if(userpwd!=confirmpwd){
			$("#cpwd").show();
			$("#cpwd1").hide();
			$("#confirmpwd").val("");
			$("#confirmpwd").focus();
		}
		else{
			$("#cpwd").hide();
			$("#cpwd1").show();
		}
	}
	})

	$("#btnreg").on('click',function(e){

		//for mapping
		/*var empty =$(".q").map(function() {
		  if($(this).val()==''){
		      return false;
		   }
		}).get();
		
		if(jQuery.isEmptyObject(empty)){
		} else {
		    alert("You can not make field as Blank"); 
		    $(".q").css({"border-style": "solid", "border-color": "red"});
		    $(".q").focus();
		    return false;
		}*/

		//find empty cells .
		/*var empty = $('.q').filter(function() {
		    return $(this).val() == "";
		  });
		  if (empty.length > 0) {
		    empty.css("border", "1px solid red");
		    return false;
		  }*/

		e.preventDefault();

		var username=$("#username").val();
		var userpwd=$("#userpwd").val();
		var usernum=$("#usernum").val();
		var usermail=$("#usermail").val();
		if(username=="" || userpwd=="" || usernum=="" || usermail==""){
			alert("Please fill out the fields");
			/*$("#username").focus();*/
			var empty = $('.q').filter(function() {
			    return $(this).val() == "";
			  });
			  if (empty.length > 0) {
			    empty.css("border", "1px solid red");
			    return false;
			  }

			return false; //stop scripting if condition false...
		}

		$.ajax({
			url : 'checkreg.php',
			method : 'post',
			data : {username:username,userpwd:userpwd,usernum:usernum,usermail:usermail},
			success : function(res){
				alert(res);
				$(".regform")[0].reset();
				/*$("#username").focus();*/
				$(".regform").hide();
				$(".opacity").css('opacity',0.1);
				$(".logform").show();
				$("#usrname").focus();
			}
		})
	})

	/*$("#btnreg").on('click',function(e){
		
		e.preventDefault();

		var username=$("#username").val();
		var userpwd=$("#userpwd").val();
		var usernum=$("#usernum").val();
		var usermail=$("#usermail").val();
		if(username!="" && userpwd!="" && usernum!="" && usermail!=""){
		$.ajax({
			url : 'checkreg.php',
			method : 'post',
			data : {username:username,userpwd:userpwd,usernum:usernum,usermail:usermail},
			success : function(res){
				alert(res);
			}
		})
	}
	else{
		alert("please fill out the fields")
		$("#username").focus();
	}
	})*/

	$("#btnlog").on('click',function(e){

		e.preventDefault();

		var usrname=$("#usrname").val();
		var usrpwd=$("#usrpwd").val();

		$.ajax({
			url : 'checklog.php',
			method : 'post',
			data :{usrname:usrname,usrpwd:usrpwd},
			success : function(res){
				/*alert(res);*/
				$(".logform")[0].reset();
				$("#usrname").focus();
				window.location.href='home.php';
			}
		})
	})
})