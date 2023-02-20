<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="availbooks.css">
	<script type="text/javascript" src="../js/jquery.min.js"></script>
	<title>View available books here</title>
</head>
<body>
	<?php
		include_once('allheader.php');
	?>

	<div id="quotation">
		
	</div>

	<div class="verticalcont">
		<h1 id="h3">renewed books available for sale !</h1>
		<?php
			include_once('db.php');

			$page = $_POST['value'];  // 1 or 2
			session_start();
			if (!isset($_SESSION['start'])){
			$_SESSION['start'] = 0;
			$start = 0;
			}
			else{
			$start = $_SESSION['start'];
			}
			if ($page == 1){
			$start -= 1;
			}
			else if ($page == 2){
			$start += 1;
			}
			$_SESSION['start'] = $start;  // 1
			$perpage = 2;

			if ($start>0)
			{
			$start_from = ($start-1)*$perpage;

			$sql = "select * from uploadedbooks limit $start_from,$perpage";

			/*$sql="select * from uploadedbooks";*/
			$res=mysqli_query($con,$sql);
			while($row=mysqli_fetch_assoc($res)){
				$booktitle=$row['book_title'];
				$bookauthor=$row['book_author'];
				$bookdesc=$row['book_desc'];
				$usrname=$row['user_name'];
				$usrphone=$row['user_phone'];
				$usrmail=$row['user_mail'];
				$bookimg=$row['book_img'];
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
				<h1 id="h2">book image</h1>
				<div class="imgcenter">
					<img id="hoverimg" src="upload/<?php echo $bookimg;?>">
				</div>
			</div>
		</div>
		<?php
			}
		?>
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

	<script type="text/javascript" src="availbooks.js"></script>

</body>
</html>