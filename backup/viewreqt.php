<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="viewreqt.css">
	<script type="text/javascript" src="../js/jquery.min.js"></script>
	<title>View requirements of customers here</title>
</head>
<body>
	<?php
		include_once('allheader.php');
	?>

	<div id="quotation">
		
	</div>
	
	<div class="verticalcont">
		<h1 id="h3">required book details by customer !</h1>
		<?php
			include_once('db.php');
			$sql="select * from requiredbooks";
			$res=mysqli_query($con,$sql);
			while($row=mysqli_fetch_assoc($res)){
				$booktitle=$row['book_title'];
				$bookauthor=$row['book_author'];
				$bookdesc=$row['book_desc'];
				$usrname=$row['user_name'];
				$usrphone=$row['user_phone'];
				$usrmail=$row['user_mail'];
				$expecprice=$row['expec_price'];
		?>

		<div class="border">
			<div class="leftcont">
				<h1 id="h1">book details</h1>
				<div class="innerleft">
					<label>title : </label>
				</div>	
				<div class="innerright">
					<label><?php echo $booktitle;?></label>
				</div>
				<div class="innerleft">
					<label>author : </label>
				</div>	
				<div class="innerright">
					<label><?php echo $bookauthor;?></label>
				</div>
				<div class="innerleft">
					<label>description : </label>
				</div>	
				<div class="innerright">
					<label><?php echo $bookdesc;?></label>
				</div>
				<div class="innerleft">
					<label>expected price(in rs.) : </label>
				</div>	
				<div class="innerright">
					<label><?php echo $expecprice;?></label>
				</div>
			</div>
			<div class="rightcont">
				<h1 id="h2">contact details</h1>
				<div class="innerleft">
					<label>person name : </label>
				</div>	
				<div class="innerright">
					<label><?php echo $usrname;?></label>
				</div>
				<div class="innerleft">
					<label>person mobile no : </label>
				</div>	
				<div class="innerright">
					<label><?php echo $usrphone;?></label>
				</div>	
				<div class="innerleft">
					<label>person email id : </label>
				</div>	
				<div class="innerright">
					<label id="smallmail"><?php echo $usrmail;?></label>
				</div>
			</div>
		</div>
		<?php
			}
		?>
	</div>

	<form class="requireform">
			<div id="close1">&#10006;</div>
			<h1 id="name2">register your required book details</h1>
			<div>
				<select id="booktype"></select>
			</div>
			<div>
				<input type="text" id="title" placeholder="title of the book">
			</div>
			<div>
				<input type="text" id="author" placeholder="author of the book">
			</div>
			<div>
				<input type="text" id="desc" placeholder="description">
			</div>
			<div>
				<input type="text" id="nameusr" placeholder="your name">
			</div>
			<div>
				<input type="text" id="phone" placeholder="your mobile number">
			</div>
			<div>
				<input type="text" id="email" placeholder="email id">
			</div>
			<div>
				<input type="text" id="rupee" placeholder="you looking at a price of (in Rs.)">
			</div>
			<div>
				<input type="submit" id="regbtn" value="register">
			</div>
	</form>

	<form class="uploadform">
			<div id="close2">&#10006;</div>
			<h1 id="name3">upload your books details</h1>
			<div>
				<select id="booktype1"></select>
			</div>
			<div>
				<input type="text" id="title1" placeholder="title of the book">
			</div>
			<div>
				<input type="text" id="author1" placeholder="author of the book">
			</div>
			<div>
				<input type="text" id="desc1" placeholder="description">
			</div>
			<div>
				<input type="text" id="nameusr1" placeholder="person name">
			</div>
			<div>
				<input type="text" id="phone1" placeholder="person mobile number">
			</div>
			<div>
				<input type="text" id="email1" placeholder="person email id">
			</div>
			<div>
				<!-- <h1 id="bookimage">book image</h1> -->
				<input type="file" id="file">
			</div>
			<div class="holder">
			    <img id="imgPreview" src="#" alt="Book Pic" />
			</div>
			<div>
				<input type="text" id="rupee1" placeholder="you looking at a price of">
			</div>
			<div>
				<input type="submit" id="uplbtn" value="upload books">
			</div>
	</form>


	<?php
		include_once('allfooter.php');
	?>

	<script type="text/javascript" src="viewreqt.js"></script>

</body>
</html>