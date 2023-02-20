<?php
	include_once('db.php');

	$up=$_POST['up'];
	$sql="select * from uploadedbooks where uploadedbooks_id='$up'";
	$res=mysqli_query($con,$sql);
	$output="";
	while($row=mysqli_fetch_assoc($res)){
		$name=$row['user_name'];
		$number=$row['user_phone'];
		$mail=$row['user_mail'];

		$output.="<div id='drop'>&#10006;</div>
		<h1 id='contact'>seller details</h1>
		<div class='contactboxleft'>
			<h4>seller name : </h4>
			<h4>seller mobile : </h4>
		</div>
		<div class='contactboxright'>
			<h4>$name</h4>
			<h4>$number</h4>
		</div>";
	}
	echo $output;
?>
<script type="text/javascript">
	$("#drop").on('click',function(){
		$(".contactbox").hide();
		$(".verticalcont1").css('opacity',1);
	})
</script>