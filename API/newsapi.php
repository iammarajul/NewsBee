<?php

	include_once 'connection.php';

	session_start();
	$fingerprint = md5($_SERVER['REMOTE_ADDR']. $_SERVER['HTTP_USER_AGENT']);
	if(!isset($_SESSION['fingerprint'])){
		header('location : login.php');
		die();
	}else if($fingerprint!=$_SESSION['fingerprint']){
		header('location : login.php');
		die();
	}

	$url = "http://api.mediastack.com/v1/news?access_key=6b369dff1d8cf419cdd4633382831f90&countries=".$_SESSION['country']."&languages=en";
	
	$response = file_get_contents($url);
	$response = json_decode($response);

	echo json_encode($response);


?>