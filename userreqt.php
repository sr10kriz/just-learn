<?php
	include_once('db.php');

	$output="";

	if(isset($_POST['two'])){
		$two=$_POST['two'];
		$start1=0;
		if($two==2){
			$start1+=1;
		}
		$perpage1=2;
		$start_from1=($start1-1)*$perpage1;
		$sql1 = "select * from requiredbooks limit $start_from1,$perpage1";
		$res1=mysqli_query($con,$sql1);
		$count1=mysqli_num_rows($res1);


				$output="";
				if($count1>0){
				$output.="<h1 id='need'>required books by customer!</h1>";
				while($row1=mysqli_fetch_assoc($res1)){
					$booktitle=$row1['book_title'];
					$bookauthor=$row1['book_author'];
					$bookdesc=$row1['book_desc'];
					$usrname=$row1['user_name'];
					$usrphone=$row1['user_phone'];
					$usrmail=$row1['user_mail'];
					$expecprice=$row1['expec_price'];
					$rbid=$row1['requiredbooks_id'];
					$stid=$row1['standard_id'];
					$boid=$row1['board_id'];

					if($stid!='0' || $boid!='0'){

						$sql2="select * from standard where standard_id='$stid'";
						$res2=mysqli_query($con,$sql2);
						while($row2=mysqli_fetch_assoc($res2)){
							$stname=$row2['standard_name'];


						$sql2="select * from board where board_id='$boid'";
						$res2=mysqli_query($con,$sql2);
						while($row2=mysqli_fetch_assoc($res2)){
							$boname=$row2['board_name'];

					$output.="<div class='border'>
										<div class='leftcont'>
											<h1 id='h1'>book details</h1>
											<div class='innerleft'>
												<label>title : </label>
											</div>	
											<div class='innerright'>
												<label>$booktitle</label>
											</div>
											<div class='innerleft'>
												<label>author : </label>
											</div>	
											<div class='innerright'>
												<label>$bookauthor</label>
											</div>
											<div class='innerleft'>
												<label>description : </label>
											</div>	
											<div class='innerright'>
												<label>$bookdesc</label>
											</div>
											<div class='innerleft'>
												<label>standard : </label>
											</div>	
											<div class='innerright'>
												<label>$stname</label>
											</div>
											<div class='innerleft'>
												<label>board : </label>
											</div>	
											<div class='innerright'>
												<label>$boname</label>
											</div>
										</div>
										<div class='rightcont'>
											<h1 id='h2'>contact detail</h1>
											<div class='innerleft'>
												<label>name : </label>
											</div>	
											<div class='innerright'>
												<label>$usrname</label>
											</div>
											<div class='innerleft'>
												<label>mobile : </label>
											</div>	
											<div class='innerright'>
												<label>$usrphone</label>
											</div>
											<div class='innerleft'>
												<label>actions : </label>
											</div>	
											<div class='innerright'>
												<label><i class='fa-solid fa-pen-to-square editicon' value='$rbid'></i><i class='fa-solid fa-trash-can trashicon' value='$rbid'></i></label>
											</div>
											<div id='price'>
												<button class='getrs1'>rs $expecprice /-</button>
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
					$output.="<div class='border'>
										<div class='leftcont'>
											<h1 id='h1'>book details</h1>
											<div class='innerleft'>
												<label>title : </label>
											</div>	
											<div class='innerright'>
												<label>$booktitle</label>
											</div>
											<div class='innerleft'>
												<label>author : </label>
											</div>	
											<div class='innerright'>
												<label>$bookauthor</label>
											</div>
											<div class='innerleft'>
												<label>description : </label>
											</div>	
											<div class='innerright'>
												<label>$bookdesc</label>
											</div>
											<div class='innerleft'>
												<label>standard : </label>
											</div>	
											<div class='innerright'>
												<label>$stid</label>
											</div>
											<div class='innerleft'>
												<label>board : </label>
											</div>	
											<div class='innerright'>
												<label>$boid</label>
											</div>
										</div>
										<div class='rightcont'>
											<h1 id='h2'>contact detail</h1>
											<div class='innerleft'>
												<label>name : </label>
											</div>	
											<div class='innerright'>
												<label>$usrname</label>
											</div>
											<div class='innerleft'>
												<label>mobile : </label>
											</div>	
											<div class='innerright'>
												<label>$usrphone</label>
											</div>
											<div class='innerleft'>
												<label>actions : </label>
											</div>	
											<div class='innerright'>
												<label><i class='fa-solid fa-pen-to-square editicon' value='$rbid'></i><i class='fa-solid fa-trash-can trashicon' value='$rbid'></i></label>
											</div>
											<div id='price'>
												<button class='getrs1'>rs $expecprice /-</button>
											</div>
										</div>
									</div>";
					}
				}
			}
		
		echo $output;
	}

	if(isset($_POST['value'])){
		$page=$_POST['value'];
		session_start();
		/*$end="";*/
		if(!isset($_SESSION['start'])){
			$_SESSION['start']=0;
			$start=1;
		}
		else{
			/*$_SESSION['start']=$start;*/
			$start = $_SESSION['start'];
			/*$end=0;*/
		}
		/*if($start==1){
			$start=0;
		}
		if($start==0 && $end==0){
			$start=1;
		}*/
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
			$sql = "select * from requiredbooks limit $start_from,$perpage";

			$res=mysqli_query($con,$sql);
			$count=mysqli_num_rows($res);


		$output="";
		if($count > 0){
		$output.="<h1 id='need'>required books by customer!</h1>";
		while($row=mysqli_fetch_assoc($res)){
			$booktitle=$row['book_title'];
			$bookauthor=$row['book_author'];
			$bookdesc=$row['book_desc'];
			$usrname=$row['user_name'];
			$usrphone=$row['user_phone'];
			$usrmail=$row['user_mail'];
			$expecprice=$row['expec_price'];
			$rbid=$row['requiredbooks_id'];
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

			$output.="<div class='border'>
								<div class='leftcont'>
									<h1 id='h1'>book details</h1>
									<div class='innerleft'>
										<label>title : </label>
									</div>	
									<div class='innerright'>
										<label>$booktitle</label>
									</div>
									<div class='innerleft'>
										<label>author : </label>
									</div>	
									<div class='innerright'>
										<label>$bookauthor</label>
									</div>
									<div class='innerleft'>
										<label>description : </label>
									</div>	
									<div class='innerright'>
										<label>$bookdesc</label>
									</div>
									<div class='innerleft'>
										<label>standard : </label>
									</div>	
									<div class='innerright'>
										<label>$stname</label>
									</div>
									<div class='innerleft'>
										<label>board : </label>
									</div>	
									<div class='innerright'>
										<label>$boname</label>
									</div>
								</div>
								<div class='rightcont'>
									<h1 id='h2'>contact detail</h1>
									<div class='innerleft'>
										<label>name : </label>
									</div>	
									<div class='innerright'>
										<label>$usrname</label>
									</div>
									<div class='innerleft'>
										<label>mobile : </label>
									</div>	
									<div class='innerright'>
										<label>$usrphone</label>
									</div>
									<div class='innerleft'>
										<label>actions : </label>
									</div>	
									<div class='innerright'>
										<label><i class='fa-solid fa-pen-to-square editicon' value='$rbid'></i><i class='fa-solid fa-trash-can trashicon' value='$rbid'></i></label>
									</div>
									<div id='price'>
										<button class='getrs1'>rs $expecprice /-</button>
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
			$output.="<div class='border'>
								<div class='leftcont'>
									<h1 id='h1'>book details</h1>
									<div class='innerleft'>
										<label>title : </label>
									</div>	
									<div class='innerright'>
										<label>$booktitle</label>
									</div>
									<div class='innerleft'>
										<label>author : </label>
									</div>	
									<div class='innerright'>
										<label>$bookauthor</label>
									</div>
									<div class='innerleft'>
										<label>description : </label>
									</div>	
									<div class='innerright'>
										<label>$bookdesc</label>
									</div>
									<div class='innerleft'>
										<label>standard : </label>
									</div>	
									<div class='innerright'>
										<label>$stid</label>
									</div>
									<div class='innerleft'>
										<label>board : </label>
									</div>	
									<div class='innerright'>
										<label>$boid</label>
									</div>
								</div>
								<div class='rightcont'>
									<h1 id='h2'>contact detail</h1>
									<div class='innerleft'>
										<label>name : </label>
									</div>	
									<div class='innerright'>
										<label>$usrname</label>
									</div>
									<div class='innerleft'>
										<label>mobile : </label>
									</div>	
									<div class='innerright'>
										<label>$usrphone</label>
									</div>
									<div class='innerleft'>
										<label>actions : </label>
									</div>	
									<div class='innerright'>
										<label><i class='fa-solid fa-pen-to-square editicon' value='$rbid'></i><i class='fa-solid fa-trash-can trashicon' value='$rbid'></i></label>
									</div>
									<div id='price'>
										<button class='getrs1'>rs $expecprice /-</button>
									</div>
								</div>
							</div>";
			}
		}
	}
}
		else{
			echo "<h1 id='nomore'>---no more records found---</h1>";
		}
	echo $output;
}

?>

<script type="text/javascript">
	$(".editicon").on('click',function(){
		$(".verticalcont").css('opacity',0.1);
		$(".delform").hide();
		$(".bdel").hide();
		var edit=$(this).attr('value');
		$(".checkform").fadeIn();
		$("#checkname").focus();
		$("#btncheck").on('click',function(e){
			e.preventDefault();

			var checkname=$("#checkname").val();
			var checkmail=$("#checkmail").val();

			if(checkname=="" && checkmail==""){
				alert("Fill fields for Authorization");
				$("#checkname").focus();
				return false;
			}
			else{
				$.ajax({
					url : 'checkeditusr.php',
					method : 'post',
					data : {edit:edit,checkname:checkname,checkmail:checkmail},
					success : function(res){
						if(res=="1"){
							alert("Authorization successfull--Access granted");
							$("#checkname").val("");
							$("#checkmail").val("");
							$(".checkform").hide();
							$(".updatereqt").fadeIn();
							$.ajax({
								url : 'usrupdatereqt.php',
								method : 'post',
								data : {edit:edit},
								success : function(res){
									$(".updatereqt").html(res);
									$("#booktype2").focus();
								}
							})
						}
						else{
							alert("Authorization failed--Access denied");
							$("#checkname").val("");
							$("#checkmail").val("");
							$("#checkname").focus();	
						}
					}
				})	
			}
		})
	})


	$('.trashicon').on('click',function(){
		$(".verticalcont").css('opacity',0.1);
		var trash=$(this).attr('value');
		$(".updatereqt").hide();
		$(".delform").fadeIn();
		$("#delname").focus();
		$("#btndel").on('click',function(e){
			e.preventDefault();

			var delname=$("#delname").val();
			var delmail=$("#delmail").val();

			if(delname=="" && delmail==""){
				alert("Fill fields for Authorization");
				$("#delname").focus();
				return false;
			}
			else{

			$.ajax({
				url : 'checkdeluser.php',
				method : 'post',
				data : {trash:trash,delname:delname,delmail:delmail},
				success : function(res){
					if(res=="1"){
						alert("Authorization successfull--Access granted");
						$("#delname").val("");
						$("#delmail").val("");
						$(".delform").hide();
						$(".bdel").fadeIn();
						$(".yes").click(function(){
							var yes=$(".yes").attr('value');

						$.ajax({
							url : 'delreqt.php',
							method : 'post',
							data : {trash:trash},
							success : function(res){
								alert(res);
								$(".bdel").hide();
								window.location='home.php';
								}
							})
						})
						$(".no").click(function(){
							var no=$(".no").attr('value');
							$(".bdel").fadeOut();
							$(".verticalcont").css('opacity',1);
						})
					}
					else{
						alert("Authorization failed--Access denied");
						$("#delname").val("");
						$("#delmail").val("");
						$("#delname").focus();
					}
				}
			})
		  }
		})

		//Authorization successfull--Access granted
		//Authorization failed--Access denied
		/*$(".bdel").show();
		$(".yes").click(function(){
			var yes=$(".yes").attr('value');

		$.ajax({
			url : 'delreqt.php',
			method : 'post',
			data : {trash:trash},
			success : function(res){
				alert(res);
				$(".bdel").hide();
				window.location='home.php';
				}
			})
		})

		$(".no").click(function(){
			var no=$(".no").attr('value')
			$(".bdel").hide();
		})*/
	})
</script>