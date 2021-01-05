<!DOCTYPE html>
<html>
<head>
	<title>NewsBee | SignUp</title>
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
	    	<a type="button" class="btn btn-primary" href="login.php" aria-expanded="false">
			    LogIn
			</a>

	  	</div>
	  </div>

	</nav>

	<!-- navbar end -->

	<div class="container">

		<h3 style="text-align: center;"> Sign UP</h3>

		<form class="pt-3" onsubmit="return validateForm()" name="myForm">
			<div class="row mb-3">
			    <label for="name" class="col-sm-2 col-form-label">Name</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="name" name="name" required>
			    </div>
			</div>

			<div class="row mb-3">
				<label for="email" class="col-sm-2 col-form-label">Email</label>
				<div class="col-sm-10">
			  		<input type="email" class="form-control" id="email" name="email" required>
				</div>
			</div>

			<div class="row mb-3">
			    <label for="password" class="col-sm-2 col-form-label">Password</label>
			    <div class="col-sm-10">
			      <input type="password" class="form-control" id="password" name="password" required>
			    </div>
			</div>

			<div class="row mb-3">
			    <label for="username" class="col-sm-2 col-form-label">Username</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="username" name="username" required>
			    </div>
			</div>
			<div class="row mb-3">
			    <label for="Country" class="col-sm-2 col-form-label">Country</label>
			    <div class="col-sm-10">
			      <select class="form-select" aria-label=".form-select-sm example" id="Country">
					  <option selected disabled value="nok">Country</option>
					  <option value="au">Australia</option>
					  <option value="br">Brazil</option>
					  <option value="ca">Canada</option>
					  <option value="cn">China</option>
					  <option value="fr">France</option>
					  <option value="de">Germany</option>
					  <option value="in">India</option>
					  <option value="tr">Turkey</option>
					  <option value="jp">Japan</option>
					  <option value="sa">Saudi Arabia</option>
					  <option value="gb">United Kingdom</option>
					  <option value="us">United state</option>
					</select>
			    </div>
			</div>


			  <button type="submit" class="btn btn-primary">Sign in</button>
		</form>

		

	</div>



</body>
<script src="Js/signup.js"></script>
</html>