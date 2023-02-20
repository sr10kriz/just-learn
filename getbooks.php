<?php
	$output="";
	$output.='<a href="#" class="quo1" value="1">&laquo;</a>
	<a href="#" class="quo1" value="2">&raquo;</a>';
	echo $output;
?>
<script type="text/javascript">
	$(".quo1").on('click',function(){
		let values=$(this).attr('value');
		/*alert(value);*/
		$.ajax({
			url : 'userbooks.php',
			method : 'post',
			data : {values:values},
			success : function(res){
				$(".verticalcont1").html(res);
			}
		})
	})
</script>