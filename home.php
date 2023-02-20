<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="home.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script type="text/javascript" src="../js/jquery.min.js"></script>
	<script src="https://kit.fontawesome.com/73fe2abf4c.js" crossorigin="anonymous"></script>
	<title>Learn to the Core--by your wish</title>
</head>
<body>
	<!-- <header>
		<nav class="nav1">
			<span id="hidden">hidden</span>
		</nav>
		<nav class="nav2">
			<div>
				<a href="" id="name1">bookscollab</a>
			</div>
			<div>
				<a href="#" id="sesname">welcome buddy</a>
				<a href="#" id="logout">logout</a>
				<a href="#" id="help">contact us</a>
			</div>	
		</nav>
		<nav class="nav3">
			<a href="#">register reqt.</a>
			<a href="#">view reqt.</a>
			<div>
				<input type="search" id="find" placeholder="search by your wish"><input type="submit" id="search" value="search">
			</div>
			<a href="#">upload books</a>
			<a href="#">view books</a>
		</nav>
		<hr>
	</header> -->

	

	<?php
		include_once('header.php');
	?>

	<div class="opacity">

		<div class="imgcont">
			 <div class="img">
			 	<img src="img/b1.jpg">
			 </div>
			 <div class="img">
			 	<img src="img/b2.png">
			 </div>
			 <div class="img">
			 	<img src="img/b3.png">
			 </div>
			 <div class="dotcont">
			 	<span class="dot"></span>
			 	<span class="dot"></span>
			 	<span class="dot"></span>
			 </div>
		</div>

		<div class="gridcont">
			<div class="griditems">
				<img src="img/i1.jpg">
				<h1 id="head1">our ideas</h1>
				<p class="textwrap">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi facilis autem assumenda expedita esse quod obcaecati itaque, ullam, dolore minus dignissimos</p>
			</div>
			<div class="griditems">
				<img src="img/i3.jpg">
				<h1 id="head3">our path</h1>
				<p class="textwrap">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi facilis autem assumenda expedita esse quod obcaecati itaque, ullam, dolore minus dignissimos</p>
			</div>
			<div class="griditems">
				<img src="img/i2.jpg">
				<h1 id="head2">our goal</h1>
				<p class="textwrap">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi facilis autem assumenda expedita esse quod obcaecati itaque, ullam, dolore minus dignissimos</p>
			</div>
		</div>

	</div>

	<div class="searchcont1">
		<input type="search" id="find1" placeholder="title / author / description"><i class="fa-solid fa-magnifying-glass" id="search1"></i>
	</div>

	<div class="searchcont">
		<input type="search" id="find" placeholder="title / author / description"><i class="fa-solid fa-magnifying-glass" id="search"></i>
	</div>
	<!-- <div>
		<input type="search" id="find1" placeholder="title/author/description">
		<i class="fa-solid fa-magnifying-glass" id="search1"></i>
	</div> -->


	<div id="quotation">
		
	</div>

	<div id="quotation1">
		
	</div>

	<div class="verticalcont">

	</div>

	<div class="verticalcont1">

	</div>

	<div class="searchresult">
		
	</div>

	<div class="searchresult1">
		
	</div>
	
	<div class="contactbox">
		
	</div>

	<form class="updatereqt">
		
	</form>

	<form class="updateupload">
		
	</form>

	<form class="requireform">
			<div id="close1">&#10006;</div>
			<h1 id="name2">register your required book details</h1>
			<div>
				<select id="booktype" class="common"></select>
			</div>
			<div class="standard">
				<select id="standardid"></select>
			</div>
			<div class="subject">
				<select id="subjectid"></select>
			</div>
			<div class="subject1">
				<select id="subjectid1"></select>
			</div>
			<div class="board">
				<select id="boardid"></select>
			</div>
			<div>
				<input type="text" id="title" class="common" placeholder="Title of the book">
			</div>
			<div>
				<input type="text" id="author" class="common" placeholder="Author of the book">
			</div>
			<div>
				<input type="text" id="desc" class="common" placeholder="Description">
			</div>
			<div>
				<input type="text" id="nameusr" class="common" placeholder="Your name">
			</div>
			<div>
				<input type="text" id="phone" class="common" placeholder="Your mobile number">
			</div>
			<div>
				<input type="text" id="email" class="common" placeholder="Email id">
			</div>
			<div>
				<input type="text" id="rupee" class="common" placeholder="You looking at a price of (in Rs.)">
			</div>
			<div>
				<input type="submit" id="regbtn" value="Register">
			</div>
	</form>

	<form class="uploadform">
			<div id="close2">&#10006;</div>
			<h1 id="name3">upload your books details</h1>
			<div>
				<select id="booktype1" class="common1"></select>
			</div>
			<div class="standard1">
				<select id="standardid1"></select>
			</div>
			<div class="subject2">
				<select id="subjectid2"></select>
			</div>
			<div class="subject3">
				<select id="subjectid3"></select>
			</div>
			<div class="board1">
				<select id="boardid1"></select>
			</div>
			<div>
				<input type="text" id="title1" class="common1" placeholder="Title of the book">
			</div>
			<div>
				<input type="text" id="author1" class="common1" placeholder="Author of the book">
			</div>
			<div>
				<input type="text" id="desc1" class="common1" placeholder="Description">
			</div>
			<div>
				<input type="text" id="nameusr1" class="common1" placeholder="Person name">
			</div>
			<div>
				<input type="text" id="phone1" class="common1" placeholder="Person mobile number">
			</div>
			<div>
				<input type="text" id="email1" class="common1" placeholder="Person email id">
			</div>
			<div>
				<!-- <h1 id="bookimage">book image</h1> -->
				<input type="file" id="file" class="common1">
			</div>
			<div class="holder">
			    <img id="imgPreview" src="#" alt="Book Pic" />
			</div>
			<div>
				<input type="text" id="rupee1" class="common1" placeholder="You looking at a price of">
			</div>
			<div>
				<input type="submit" id="uplbtn" value="Upload">
			</div>
	</form>


	<div class="bdel">
		<div class="exit">&#10006;</div>
		<h1 class="sure">are you sure you want to delete your requirements!</h1>
		<div class="yesno">
			<button class="yes" value="1">yes</button>
			<button class="no" value="0">no</button>
		</div>
	</div>

	<div class="bdel1">
		<div class="exit1">&#10006;</div>
		<h1 class="sure1">are you sure you want to delete your uploaded books!</h1>
		<div class="yesno1">
			<button class="yes1" value="1">yes</button>
			<button class="no1" value="0">no</button>
		</div>
	</div>

	<form class="checkform">
		<div id="close8">&#10006;</div>
		<h1 id="checkhead">fill form for authorization</h1>
		<div>
			<input type="text" id="checkname" placeholder="Your registered name">
		</div>
		<div>
			<input type="text" id="checkmail" placeholder="Your registered mail">
		</div>
		<div class="checkbtn">
			<button id="btncheck">check authorization</button>
		</div>
	</form>

	<form class="checkform1">
		<div id="close9">&#10006;</div>
		<h1 id="checkhead1">fill form for authorization</h1>
		<div>
			<input type="text" id="checkname1" placeholder="Your registered name">
		</div>
		<div>
			<input type="text" id="checkmail1" placeholder="Your registered mail">
		</div>
		<div class="checkbtn1">
			<button id="btncheck1">check authorization</button>
		</div>
	</form>

	<form class="delform">
		<div id="close3">&#10006;</div>
		<h1 id="delhead">fill form for authorization</h1>
		<div>
			<input type="text" id="delname" placeholder="Your registered name">
		</div>
		<div>
			<input type="text" id="delmail" placeholder="Your registered mail">
		</div>
		<div class="btndelete">
			<button id="btndel">check authorization</button>
		</div>
	</form>

	<form class="delform1">
		<div id="close4">&#10006;</div>
		<h1 id="delhead1">fill form for authorization</h1>
		<div>
			<input type="text" id="delname1" placeholder="Your registered name">
		</div>
		<div>
			<input type="text" id="delmail1" placeholder="Your registered mail">
		</div>
		<div class="btndelete1">
			<button id="btndel1">check authorization</button>
		</div>
	</form>

	<div class="chevup">
		<i class="fa fa-chevron-up" style="font-size: 40px;color: black;padding: 5px;"></i>
	</div>

	<form class="contactform">
			<div id="close5">&#10006;</div>
			<h1 id="name4">Please fill up the form, We will contact you very soon.</h1>
			<div>
				<input type="text" id="conname" class="none" placeholder="Your name">
			</div>
			<div>
				<input type="text" id="conphone" class="none" placeholder="Your mobile number">
			</div>
			<div>
				<input type="text" id="conmail" class="none" placeholder="Email id">
			</div>
			<div>
				<input type="text" id="consubject" class="none" placeholder="Subject">
			</div>
			<div>
				<textarea id="condesc" class="none" placeholder="Description"></textarea>
			</div>
			<div>
				<input type="submit" id="conbtn" value="Submit">
			</div>
	</form>

	<form class="feedbackform">
			<div id="close6">&#10006;</div>
			<h1 id="name5">feedback form</h1>
			<div>
				<input type="text" id="feedname" class="none1" placeholder="Your name">
			</div>
			<div>
				<input type="text" id="feedphone" class="none1" placeholder="Your mobile number">
			</div>
			<div>
				<input type="text" id="feedmail" class="none1" placeholder="Email id">
			</div>
			<div>
				<input type="text" id="feedsubject" class="none1" placeholder="Subject">
			</div>
			<div>
				<textarea id="feeddesc" class="none1" placeholder="Your valuable Feedback"></textarea>
			</div>
			<div>
				<input type="submit" id="feedbtn" value="Feedback us">
			</div>
	</form>

	<form class="queryform">
			<div id="close7">&#10006;</div>
			<h1 id="name6">We want to know your queries</h1>
			<div>
				<input type="text" id="queryname" class="none2" placeholder="Your name">
			</div>
			<div>
				<input type="text" id="queryphone" class="none2" placeholder="Your mobile number">
			</div>
			<div>
				<input type="text" id="querymail" class="none2" placeholder="Email id">
			</div>
			<div>
				<input type="text" id="querysubject" class="none2" placeholder="Subject">
			</div>
			<div>
				<textarea id="querydesc" class="none2" placeholder="Provide your query"></textarea>
			</div>
			<div>
				<input type="submit" id="querybtn" value="Submit">
			</div>
	</form>

	<!-- <footer>
		<div class="footer">
			
		</div>
	</footer> -->
	<?php
		include_once('footer.php');
	?>

	<script type="text/javascript" src="home.js"></script>

</body>
</html>