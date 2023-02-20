<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="index.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script type="text/javascript" src="../js/jquery.min.js"></script>
	<script src="https://kit.fontawesome.com/73fe2abf4c.js" crossorigin="anonymous"></script>
	<title>Best site to get cheaper books--lets get in to it</title>
</head>
<body>

	<div class="chevup">
		<i class="fa fa-chevron-up" style="font-size: 40px;color: black;padding: 5px;"></i>
	</div>

	<nav class="nav1">
		<div class="ham">
			<div class="burger"></div>
			<div class="burger"></div>
			<div class="burger"></div>
		</div>
		<div>
			<a href="index.php" class="headname">seconhanbooks<i class="fa-brands fa-leanpub"></i></a></a>
		</div>
		<div>
			<a href="#" class="log">login</a>
			<a href="#" class="reg">register</a>
		</div>
	</nav>

	<nav class="nav2">
		<div id="close3">&#10006;</div>
			<div>
				<h1 class="menu">who we are</h1>
				<!-- <a href="#">career</a> -->
				<a href="#">about us</a>
				<a href="#">contact us</a>
			</div>
			<div>
				<h1 class="menu">help</h1>
				<a href="#">your feedback</a>
				<a href="#">your queries</a>
				<a href="#">faq's</a>
			</div>
			<div>
				<h1 class="menu">social media</h1>
				<a href="#">instagram</a>
				<a href="#">facebook</a>
				<a href="#">whatsapp</a>
				<!-- <a href="#">linkedin</a> -->
			</div>
		</nav>



	<div class="opacity">
		<div class="quotecont">
			<p id="quote">Once you learn to read, you will be forever free.</p>
			<h1 id="author">Frederick Douglass</h1>
		</div>


		<div class="gridcont">
			<div class="griditems">
				<img src="img/image1.jpg">
				<h1 id="head1">our ideas</h1>
				<p id="para">Lorem ipsum, dolor sit amet, consectetur adipisicing elit. Maiores praesentium magni commodi distinctio nisi vel culpa aliquid, consequatur expedita laborum magnam necessitatibus,</p>
			</div>
			<div class="griditems">
				<img src="img/image2.jpg">
				<h1 id="head3">our path</h1>
				<p id="para">Lorem ipsum, dolor sit amet, consectetur adipisicing elit. Maiores praesentium magni commodi distinctio nisi vel culpa aliquid, consequatur expedita laborum magnam necessitatibus,</p>
			</div>
			<div class="griditems">
				<img src="img/image3.jpg">
				<h1 id="head2">our goal</h1>
				<p id="para">Lorem ipsum, dolor sit amet, consectetur adipisicing elit. Maiores praesentium magni commodi distinctio nisi vel culpa aliquid, consequatur expedita laborum magnam necessitatibus,</p>
			</div>
		</div>
	</div>



	<form class="logform">
		<div id="close1">&#10006;</div>
		<h1 id="name1">let's learn</h1>
		<div>
			<label>name</label>
			<input type="text" id="usrname">
		</div>
		<div>
			<label>password</label>
			<input type="password" id="usrpwd">
		</div>
		<div>
			<input type="submit" id="btnlog" value="login">
		</div>

		<h1 id="name3">new to bookcollab!</h1>
		<h1 id="name4">go to register</h1>
	</form>

	<form class="regform">
		<div id="close2">&#10006;</div>
		<h1 id="name2">let's sign up here</h1>
		<div>
			<label>name</label>
			<input type="text" id="username" class="q">
		</div>
		<div>
			<label>create your password</label>
			<input type="password" id="userpwd" class="q">
		</div>
		<div>
			<label>confirm your password</label>
			<span id="cpwd"> --password mismatch try again-- </span>
			<span id="cpwd1"> --password matches-- </span>
			<input type="password" id="confirmpwd" class="q">
		</div>
		<div>
			<label>mobile no</label>
			<input type="text" id="usernum" class="q">
		</div>
		<div>
			<label>gmail</label>
			<input type="text" id="usermail" class="q"> 
		</div>
		<div>
			<input type="submit" id="btnreg" value="register">
		</div>

		<h1 id="name5">already a member!</h1>
		<h1 id="name6">go to login</h1>
	</form>

	<?php
		include_once('indexfooter.php');
	?>

	<script type="text/javascript" src="index.js"></script>

</body>
</html>