<!DOCTYPE html>
<html>
<head>
	<title>NewsBee | Login</title>
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
	    <a class="navbar-brand" href="#"><bold>NewsBee</bold></a>
	    <div class="d-flex">
	    	<a type="button" class="btn btn-primary" aria-expanded="false" href="signup.php">
			    Signup
			</a>

	  	</div>
	  </div>

	</nav>

	<!-- navbar end -->

	<div class="container">

		<h3 style="text-align: center;"> Log In</h3>

		<form class="pt-3" onsubmit="return validateForm()" name="myForm" id="loginform" >
			<div class="row mb-3">
			    <label for="username" class="col-sm-2 col-form-label">Username</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="username" name="username" required>
			    </div>
			</div>


			<div class="row mb-3">
			    <label for="password" class="col-sm-2 col-form-label">Password</label>
			    <div class="col-sm-10">
			      <input type="password" class="form-control" id="password" name="password" required>
			    </div>
			</div>

			


			  <button type="submit" class="btn btn-primary">Log In</button>
		</form>

		

	</div>



</body>
<script src="Js/login.js"></script>

</html>