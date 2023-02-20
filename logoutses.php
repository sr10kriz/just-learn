<?php
	session_start();
	unset($_SESSION['usrname']);
	session_destroy();
	echo "Logged Out";
?>