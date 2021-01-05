<?php 
	session_start();

	unset($_SESSION['username']);
	unset($_SESSION['id']);
	unset($_SESSION['fingerprint']);
	unset($_SESSION['country']);
	session_destroy();
	header("Location: login.php");

?>