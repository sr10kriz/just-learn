<header>
		<nav class="nav1">
			<span id="hidden">seconhanbooks.in</span>
		</nav> 
		<div id="top">
			<nav class="nav2">
				<div class="ham">
					<div class="burger"></div>
					<div class="burger"></div>
					<div class="burger"></div>
				</div>
				<div>
					<a href="" id="name1">seconhanbooks<i class="fa-brands fa-leanpub"></i></a>
				</div>
				<div>
					<?php
						session_start();
						if(!isset($_SESSION['usrname'])){
							header("Location:index.php");
						}
						else{
							$usrname=$_SESSION['usrname'];
						}
					?>
					<a href="#" id="sesname">welcome <?php echo $usrname;?></a>
					<a href="#" id="logout">logout</a>
					<a href="#" class="help">contact us</a>
				</div>	
			</nav>
			<nav class="nav3">
				<div id="mqclose">&#10006;</div>
				<div>
					<a href="#" id="require">register reqt. <i class="fa-solid fa-caret-right"></i></a>
				</div>
				<div>
					<a href="#" id="viewrequire">view reqt. <i class="fa-solid fa-caret-right"></i></a>
				</div>
				<!-- <div>
					<a href="#" id="filter">filter books</a>
				</div> -->
				<div>
					<a href="#" id="books">upload books <i class="fa-solid fa-caret-right"></i></a>
				</div>
				<div>
					<a href="#" id="viewbooks">available books <i class="fa-solid fa-caret-right"></i></a>
				</div>
			</nav>
		</div>
		<!-- <hr> -->
</header>