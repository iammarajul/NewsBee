<?php
	include_once 'API/connection.php';

	session_start();
	$fingerprint = md5($_SERVER['REMOTE_ADDR']. $_SERVER['HTTP_USER_AGENT']);
	if(!isset($_SESSION['username'])){
		header('location: login.php');
		die();
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>NewsBee | Home</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	<!-- Navbar start -->
	<nav class="navbar navbar-light bg-light">
	  <div class="container-fluid">
	    <a class="navbar-brand" href="#"  onclick="home_post()"><bold>NewsBee</bold></a>

	    <button type="button" onclick="factch_own_post()" class="btn btn-primary btn-sm" aria-expanded="false">MyPost</button>
	    <button type="button" onclick="factch_others_post()" class="btn btn-primary btn-sm" aria-expanded="false">AllPost</button>
	    <div class="d-flex">

			<div class="btn-group">
			  <button type="button" class="btn btn-primary dropdown-toggle btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
			    <?php echo $_SESSION['username']; ?>
			  </button>
			  <ul class="dropdown-menu dropdown-menu-end">
			    <li><a class="dropdown-item" href="logout.php">Logout</a></li>
			  </ul>
			</div>


	  	</div>
	  </div>

	</nav>

	<!-- navbar end -->

	<div class="container">

		<div class="input-group mb-3 px-3 pt-2">
		  <input type="text" class="form-control" placeholder="Search News" aria-label="Recipient's username" aria-describedby="basic-addon2">
		  <div class="input-group-append">
		    <button class="btn btn-outline-secondary" type="button">Search</button>
		  </div>
		</div>
		<div id="loader" style="text-align: center;">
		<button class="btn btn-primary" type="button" disabled>
		  <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
		  Loading...
		</button>
	</div>
		<div class="col">

			<ul class="list-group list-group-flush" id ="news_api">
			 
			</ul>
		</div>


		<!-- Modal -->
		<?php include('ok.php');?>
	

	</div>



</body>

<script src="Js/main.js"></script>

</html>