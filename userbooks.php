<?php
	include_once('db.php');

	session_start();
	$page=$_POST['values'];
	if(!isset($_SESSION['start'])){
		$_SESSION['start']=0;
		$start=0;
	}
	else{
		/*$_SESSION['start']=$start;*/
		$start = $_SESSION['start'];
	}
	if($page==1){
		$start-=1;
	}
	else if($page==2){
		$start+=1;
	}
	$_SESSION['start']=$start;
	$perpage=2;

	if($start > 0){
		$start_from=($start-1)*$perpage;
		$sql = "select * from uploadedbooks limit $start_from,$perpage";

		$res=mysqli_query($con,$sql);
		$output="";
		$output="<h1 id='sale'>available books for sale!</h1>";
		while($row=mysqli_fetch_assoc($res)){
			$booktitle=$row['book_title'];
			$bookauthor=$row['book_author'];
			$bookdesc=$row['book_desc'];
			$usrname=$row['user_name'];
			$usrphone=$row['user_phone'];
			$usrmail=$row['user_mail'];
			$bookimg=$row['book_img'];
			$expecprice=$row['expec_price'];
			$up=$row['uploadedbooks_id'];
			$stid=$row['standard_id'];
			$boid=$row['board_id'];

			if($stid!='0' || $boid!='0'){

				$sql1="select * from standard where standard_id='$stid'";
				$res1=mysqli_query($con,$sql1);
				while($row1=mysqli_fetch_assoc($res1)){
					$stname=$row1['standard_name'];


				$sql1="select * from board where board_id='$boid'";
				$res1=mysqli_query($con,$sql1);
				while($row1=mysqli_fetch_assoc($res1)){
					$boname=$row1['board_name'];

			$output.="<div class='border1'>
								<div class='leftcont1'>
									<h1 id='h4'>book details</h1>
									<div class='innerleft1'>
										<label>title : </label>
									</div>	
									<div class='innerright1'>
										<label>$booktitle</label>
									</div>
									<div class='innerleft1'>
										<label>author : </label>
									</div>	
									<div class='innerright1'>
										<label>$bookauthor</label>
									</div>
									<div class='innerleft1'>
										<label>description : </label>
									</div>	
									<div class='innerright1'>
										<label>$bookdesc</label>
									</div>
									<div class='innerleft1'>
										<label>standard : </label>
									</div>	
									<div class='innerright1'>
										<label>$stname</label>
									</div>
									<div class='innerleft1'>
										<label>board : </label>
									</div>	
									<div class='innerright1'>
										<label>$boname</label>
									</div>
								</div>
								<div class='rightcont1'>
									<h1 id='h5'>book image</h1>
									<div class='innerleft1'>
										<div class='imgcenter1'>
											<img id='hoverimg1' src='upload/$bookimg'>
										</div>
									</div>
									<div class='innerright1'>
										<div id='contact'>
											<button value='$up' class='getcontact'>seller details</button>
											<button class='getrs'>rs $expecprice /-</button>
										</div>
											<label><i class='fa-solid fa-pen-to-square editicon1' value='$up'></i><i class='fa-solid fa-trash-can trashicon1' value='$up'></i></label>
									</div>	
								</div>
							</div>";
					/*</div>";*/
					}
				}
			}
			else{
				if($stid=='0'){
					$stid='-';
				}
				if($boid=='0'){
					$boid='-';
				}
				$output.="<div class='border1'>
									<div class='leftcont1'>
										<h1 id='h4'>book details</h1>
										<div class='innerleft1'>
											<label>title : </label>
										</div>	
										<div class='innerright1'>
											<label>$booktitle</label>
										</div>
										<div class='innerleft1'>
											<label>author : </label>
										</div>	
										<div class='innerright1'>
											<label>$bookauthor</label>
										</div>
										<div class='innerleft1'>
											<label>description : </label>
										</div>	
										<div class='innerright1'>
											<label>$bookdesc</label>
										</div>
										<div class='innerleft1'>
											<label>standard : </label>
										</div>	
										<div class='innerright1'>
											<label>$stid</label>
										</div>
										<div class='innerleft1'>
											<label>board : </label>
										</div>	
										<div class='innerright1'>
											<label>$boid</label>
										</div>
									</div>
									<div class='rightcont1'>
										<h1 id='h5'>book image</h1>
										<div class='innerleft1'>
											<div class='imgcenter1'>
												<img id='hoverimg1' src='upload/$bookimg'>
											</div>
										</div>
										<div class='innerright1'>
											<div id='contact'>
												<button value='$up' class='getcontact'>seller details</button>
												<button class='getrs'>rs $expecprice /-</button>
											</div>
												<label><i class='fa-solid fa-pen-to-square editicon1' value='$up'></i><i class='fa-solid fa-trash-can trashicon1' value='$up'></i></label>
										</div>	
									</div>
								</div>";
			}
		}	
				echo $output;
		}

?>

<script type="text/javascript">

	$(".editicon1").on('click',function(){
		$(".verticalcont1").css('opacity',0.1);
		$(".delform1").hide();
		$(".bdel").hide();
		var edit1=$(this).attr('value');
		$(".checkform1").fadeIn();
		$("#checkname1").focus();
		$("#btncheck1").on('click',function(e){

			e.preventDefault();

			var checkname1=$("#checkname1").val();
			var checkmail1=$("#checkmail1").val();

			if(checkname1=="" && checkmail1==""){
				alert("Fill fields for Authorization");
				$("#checkname1").focus();
				return false;
			}
			else{
				$.ajax({
					url : 'checkeditusr1.php',
					method : 'post',
					data : {edit1:edit1,checkname1:checkname1,checkmail1:checkmail1},
					success : function(res){
						if(res=="1"){
							alert("Authorization successfull--Access granted");
							$("#checkname1").val("");
							$("#checkmail1").val("");
							$(".checkform1").hide();
							$(".updateupload").fadeIn();
							$.ajax({
								url : 'usrupdateupload.php',
								method : 'post',
								data : {edit1:edit1},
								success : function(res){
									$(".updateupload").html(res);
									$("#booktype3").focus();
								}
							})
						}
						else{
							alert("Authorization failed--Access denied");
							$("#checkname1").val("");
							$("#checkmail1").val("");
							$("#checkname1").focus();	
						}
					}
				})
			}
		})
	})

	$(".getcontact").on('click',function(){
		/*alert("getcontact");*/
		$(".delform1").hide();
		let up=$(this).attr('value');
		/*alert(up);*/
		$.ajax({
			url : 'getcontact.php',
			method : 'post',
			data : {up:up},
			success : function(res){
				$(".contactbox").html(res);
			}
		})
	
		$(".getcontact").on('click',function(){
			$(".contactbox").fadeIn();
			$(".verticalcont1").css('opacity',0.1);
		})
	})

	$(".trashicon1").on('click',function(){
		$(".verticalcont1").css('opacity',0.1);
		$(".contactbox").hide();
		var trash1=$(this).attr('value');
		$(".delform1").fadeIn();
		$("#delname1").focus();
		$(".updateupload").hide();
		$("#btndel1").on('click',function(e){
			e.preventDefault();

			var delname1=$("#delname1").val();
			var delmail1=$("#delmail1").val();

			if(delname1=="" && delmail1==""){
				alert("Fill fields for Authorization");
				$("#delname1").focus();
				return false;
			}
			else{

			$.ajax({
				url : 'checkdeluser1.php',
				method : 'post',
				data : {trash1:trash1,delname1:delname1,delmail1:delmail1},
				success : function(res){
					if(res=="1"){
						alert("Authorization successfull--Access granted");
						$("#delname1").val("");
						$("#delmail1").val("");
						$(".delform1").hide();
						$(".bdel1").fadeIn();
						$(".yes1").click(function(){

							$.ajax({
								url : 'delupl.php',
								method : 'post',
								data : {trash1:trash1},
								success : function(res){
									alert(res);
									$(".btndel1").hide();
									window.location='home.php';
								}
							})
						})
						$(".no1").click(function(){
							$(".bdel1").fadeOut();
							$(".verticalcont1").css('opacity',1);
						})
					}
					else{
						alert("Authorization failed--Access denied");
						$("#delname1").val("");
						$("#delmail1").val("");
						$("#delname1").focus();
					}
				}
			})
		  }
		})
	})
</script>