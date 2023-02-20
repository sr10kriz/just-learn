<script type="text/javascript" src="../js/jquery.min.js"></script>

<style type="text/css">
	#quotation{
		text-align: center;
	}
	#quotation a{
		text-decoration: none;
		font-size: 40px;
		padding: 3px 20px;
		background-color: lightgrey;
		color: black;
		border-radius: 5px;
		margin-left: 20px;
	}
</style>	

<header>
		<nav class="nav1">
			<span id="hidden">hidden</span>
		</nav>
		<nav class="nav2">
			<div>
				<a href="" id="name1">usedbookscollab</a>
			</div>
			<div>
				<?php
					session_start();
					if(!isset($_SESSION['usrname'])){
						header("Location:index.html");
					}
					else{
						$usrname=$_SESSION['usrname'];
					}
				?>
				<a href="#" id="sesname">welcome <?php echo $usrname;?></a>
				<a href="home.php" id="home">home</a>
				<a href="#" id="logout">logout</a>
				<a href="#" id="help">contact us</a>
			</div>	
		</nav>
		<nav class="nav3">
			<a href="#" id="require">register reqt.</a>
			<a href="viewreqt.php" id="viewrequire">view reqt.</a>
			<div>
				<input type="search" id="find" placeholder="search by your wish"><input type="submit" id="search" value="search">
			</div>
			<a href="#" id="books">upload books</a>
			<a href="availbooks.php" id="viewbooks">available books</a>
		</nav>
		<div class="contimg">
			<div>
				<img src="img/b4.png">
			</div>
		</div>

</header>