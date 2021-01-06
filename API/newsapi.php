<?php

	include_once 'connection.php';

	session_start();

	if(!isset($_SESSION['username'])){
		header('location : login.php');
		die();
	}

	// $url = "http://api.mediastack.com/v1/news?access_key=f0f6da755628aa4cebab5f83412d7ce8&countries=".$_SESSION['country']."&languages=en";
	
	// $response = file_get_contents($url);
	// $response = json_decode($response);

	// echo json_encode($response);

	$queryString = http_build_query([
	  'access_key' => 'f0f6da755628aa4cebab5f83412d7ce8',
	  'countries' => $_SESSION['country'], // the word "wolf" will be
	  'languages' => 'en',
	  
	]);

	$ch = curl_init(sprintf('%s?%s', 'http://api.mediastack.com/v1/news', $queryString));
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

	$json = curl_exec($ch);

	curl_close($ch);

	$apiResult = json_decode($json, true);

	echo json_encode($apiResult);



?>