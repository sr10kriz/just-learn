<?php
	$output="";
	$output.='<a href="#" class="quo" value="1">&laquo;</a>
	<a href="#" class="quo" value="2">&raquo;</a>';
	echo $output;
?>
<script type="text/javascript">
	$(".quo").on('click',function(){
		$(".delform").hide();
		$(".updatereqt").hide();
		$(".bdel").hide();
		let value=$(this).attr('value');
		/*alert(value);*/
		$.ajax({
			url : 'userreqt.php',
			method : 'post',
			data : {value:value},
			success : function(res){
				$(".verticalcont").html(res);
			}
		})
	})
</script>