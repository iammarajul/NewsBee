

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
	    <a class="navbar-brand" href="#"><bold>NewsBee</bold></a>
	    <div class="d-flex">

			<div class="btn-group">
			  <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
			    iammarajul
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
		<div class="col">
			<ul class="list-group list-group-flush" id ="news_api">
				<li class="list-group-item"> 
					<div >
						<p> <strong>iammarajul</strong> <br> jul 12,2020</p>
						
						<div class="row">
							<div class="col-3 m-auto">
								<div class="padding-auto">
									<img style="border-radius: 10px;" src="image/bann.png" height="100%" width="95%">
								</div>
							</div>
							<div class="col-9" style="background: #ede7d5;border-radius: 10px; padding-right:1px!important;">
								<div class="row1">
									<div class="row mt-3">
										<div class="col ">
											<div class="source">businesstoday</div>
										</div>
										<div class="col" style="text-align: right;">
											<div class="date" style="color:#d4633d;">
												<strong> Jan 4, 2021</strong>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<div class="title"> 
											<a style="text-decoration: none;" href="https://www.businesstoday.in/markets/company-stock/antony-waste-handling-cell-share-falls-strong-market-debut/story/426911.html">Antony Waste Handling Cell share falls 11% after strong market debut</a>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<p class="description">Antony Waste Handling Cell stock lost 10.98% to Rs 362.50 against previous close of Rs 407.25 on BSE</p>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<div class="date row3">
											<strong>Author: </strong>null
										</div>
									</div>
									<div class="col" style="text-align: center;">
										<div class="date row3">
											<strong>Category: </strong>general
										</div>
									</div>
									<div class="col" style="text-align: right;">
										<button class="btn btn-danger btn-sm btn-blc" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="setModal(0)">delete</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</li><li class="list-group-item"> 
					<div >
						<p> <strong>iammarajul</strong> <br> jul 12,2020</p>
						
						<div class="row">
							<div class="col-3 m-auto">
								<div class="padding-auto">
									<img style="border-radius: 10px;" src="image/bann.png" height="100%" width="95%">
								</div>
							</div>
							<div class="col-9" style="background: #ede7d5;border-radius: 10px; padding-right:1px!important;">
								<div class="row1">
									<div class="row mt-3">
										<div class="col ">
											<div class="source">businesstoday</div>
										</div>
										<div class="col" style="text-align: right;">
											<div class="date" style="color:#d4633d;">
												<strong> Jan 4, 2021</strong>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<div class="title"> 
											<a style="text-decoration: none;" href="https://www.businesstoday.in/markets/company-stock/antony-waste-handling-cell-share-falls-strong-market-debut/story/426911.html">Antony Waste Handling Cell share falls 11% after strong market debut</a>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<p class="description">Antony Waste Handling Cell stock lost 10.98% to Rs 362.50 against previous close of Rs 407.25 on BSE</p>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<div class="date row3">
											<strong>Author: </strong>null
										</div>
									</div>
									<div class="col" style="text-align: center;">
										<div class="date row3">
											<strong>Category: </strong>general
										</div>
									</div>
									<div class="col" style="text-align: right;">
										<button class="btn btn-danger btn-sm btn-blc" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="setModal(0)">delete</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</li><li class="list-group-item"> 
					<div >
						<p> <strong>iammarajul</strong> <br> jul 12,2020</p>
						
						<div class="row">
							<div class="col-3 m-auto">
								<div class="padding-auto">
									<img style="border-radius: 10px;" src="image/bann.png" height="100%" width="95%">
								</div>
							</div>
							<div class="col-9" style="background: #ede7d5;border-radius: 10px; padding-right:1px!important;">
								<div class="row1">
									<div class="row mt-3">
										<div class="col ">
											<div class="source">businesstoday</div>
										</div>
										<div class="col" style="text-align: right;">
											<div class="date" style="color:#d4633d;">
												<strong> Jan 4, 2021</strong>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<div class="title"> 
											<a style="text-decoration: none;" href="https://www.businesstoday.in/markets/company-stock/antony-waste-handling-cell-share-falls-strong-market-debut/story/426911.html">Antony Waste Handling Cell share falls 11% after strong market debut</a>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<p class="description">Antony Waste Handling Cell stock lost 10.98% to Rs 362.50 against previous close of Rs 407.25 on BSE</p>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<div class="date row3">
											<strong>Author: </strong>null
										</div>
									</div>
									<div class="col" style="text-align: center;">
										<div class="date row3">
											<strong>Category: </strong>general
										</div>
									</div>
									<div class="col" style="text-align: right;">
										<button class="btn btn-danger btn-sm btn-blc" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="setModal(0)">delete</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</li><li class="list-group-item"> 
					<div >
						<p> <strong>iammarajul</strong> <br> jul 12,2020</p>
						
						<div class="row">
							<div class="col-3 m-auto">
								<div class="padding-auto">
									<img style="border-radius: 10px;" src="image/bann.png" height="100%" width="95%">
								</div>
							</div>
							<div class="col-9" style="background: #ede7d5;border-radius: 10px; padding-right:1px!important;">
								<div class="row1">
									<div class="row mt-3">
										<div class="col ">
											<div class="source">businesstoday</div>
										</div>
										<div class="col" style="text-align: right;">
											<div class="date" style="color:#d4633d;">
												<strong> Jan 4, 2021</strong>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<div class="title"> 
											<a style="text-decoration: none;" href="https://www.businesstoday.in/markets/company-stock/antony-waste-handling-cell-share-falls-strong-market-debut/story/426911.html">Antony Waste Handling Cell share falls 11% after strong market debut</a>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<p class="description">Antony Waste Handling Cell stock lost 10.98% to Rs 362.50 against previous close of Rs 407.25 on BSE</p>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<div class="date row3">
											<strong>Author: </strong>null
										</div>
									</div>
									<div class="col" style="text-align: center;">
										<div class="date row3">
											<strong>Category: </strong>general
										</div>
									</div>
									<div class="col" style="text-align: right;">
										<button class="btn btn-danger btn-sm btn-blc" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="setModal(0)">delete</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</li><li class="list-group-item"> 
					<div >
						<p> <strong>iammarajul</strong> <br> jul 12,2020</p>
						
						<div class="row">
							<div class="col-3 m-auto">
								<div class="padding-auto">
									<img style="border-radius: 10px;" src="image/bann.png" height="100%" width="95%">
								</div>
							</div>
							<div class="col-9" style="background: #ede7d5;border-radius: 10px; padding-right:1px!important;">
								<div class="row1">
									<div class="row mt-3">
										<div class="col ">
											<div class="source">businesstoday</div>
										</div>
										<div class="col" style="text-align: right;">
											<div class="date" style="color:#d4633d;">
												<strong> Jan 4, 2021</strong>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<div class="title"> 
											<a style="text-decoration: none;" href="https://www.businesstoday.in/markets/company-stock/antony-waste-handling-cell-share-falls-strong-market-debut/story/426911.html">Antony Waste Handling Cell share falls 11% after strong market debut</a>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<p class="description">Antony Waste Handling Cell stock lost 10.98% to Rs 362.50 against previous close of Rs 407.25 on BSE</p>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<div class="date row3">
											<strong>Author: </strong>null
										</div>
									</div>
									<div class="col" style="text-align: center;">
										<div class="date row3">
											<strong>Category: </strong>general
										</div>
									</div>
									<div class="col" style="text-align: right;">
										<button class="btn btn-danger btn-sm btn-blc" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="setModal(0)">delete</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</li><li class="list-group-item"> 
					<div >
						<p> <strong>iammarajul</strong> <br> jul 12,2020</p>
						
						<div class="row">
							<div class="col-3 m-auto">
								<div class="padding-auto">
									<img style="border-radius: 10px;" src="image/bann.png" height="100%" width="95%">
								</div>
							</div>
							<div class="col-9" style="background: #ede7d5;border-radius: 10px; padding-right:1px!important;">
								<div class="row1">
									<div class="row mt-3">
										<div class="col ">
											<div class="source">businesstoday</div>
										</div>
										<div class="col" style="text-align: right;">
											<div class="date" style="color:#d4633d;">
												<strong> Jan 4, 2021</strong>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<div class="title"> 
											<a style="text-decoration: none;" href="https://www.businesstoday.in/markets/company-stock/antony-waste-handling-cell-share-falls-strong-market-debut/story/426911.html">Antony Waste Handling Cell share falls 11% after strong market debut</a>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<p class="description">Antony Waste Handling Cell stock lost 10.98% to Rs 362.50 against previous close of Rs 407.25 on BSE</p>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<div class="date row3">
											<strong>Author: </strong>null
										</div>
									</div>
									<div class="col" style="text-align: center;">
										<div class="date row3">
											<strong>Category: </strong>general
										</div>
									</div>
									<div class="col" style="text-align: right;">
										<button class="btn btn-danger btn-sm btn-blc" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="setModal(0)">delete</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</li><li class="list-group-item"> 
					<div >
						<p> <strong>iammarajul</strong> <br> jul 12,2020</p>
						
						<div class="row">
							<div class="col-3 m-auto">
								<div class="padding-auto">
									<img style="border-radius: 10px;" src="image/bann.png" height="100%" width="95%">
								</div>
							</div>
							<div class="col-9" style="background: #ede7d5;border-radius: 10px; padding-right:1px!important;">
								<div class="row1">
									<div class="row mt-3">
										<div class="col ">
											<div class="source">businesstoday</div>
										</div>
										<div class="col" style="text-align: right;">
											<div class="date" style="color:#d4633d;">
												<strong> Jan 4, 2021</strong>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<div class="title"> 
											<a style="text-decoration: none;" href="https://www.businesstoday.in/markets/company-stock/antony-waste-handling-cell-share-falls-strong-market-debut/story/426911.html">Antony Waste Handling Cell share falls 11% after strong market debut</a>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<p class="description">Antony Waste Handling Cell stock lost 10.98% to Rs 362.50 against previous close of Rs 407.25 on BSE</p>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<div class="date row3">
											<strong>Author: </strong>null
										</div>
									</div>
									<div class="col" style="text-align: center;">
										<div class="date row3">
											<strong>Category: </strong>general
										</div>
									</div>
									<div class="col" style="text-align: right;">
										<button class="btn btn-danger btn-sm btn-blc" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="setModal(0)">delete</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</li><li class="list-group-item"> 
					<div >
						<p> <strong>iammarajul</strong> <br> jul 12,2020</p>
						
						<div class="row">
							<div class="col-3 m-auto">
								<div class="padding-auto">
									<img style="border-radius: 10px;" src="image/bann.png" height="100%" width="95%">
								</div>
							</div>
							<div class="col-9" style="background: #ede7d5;border-radius: 10px; padding-right:1px!important;">
								<div class="row1">
									<div class="row mt-3">
										<div class="col ">
											<div class="source">businesstoday</div>
										</div>
										<div class="col" style="text-align: right;">
											<div class="date" style="color:#d4633d;">
												<strong> Jan 4, 2021</strong>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<div class="title"> 
											<a style="text-decoration: none;" href="https://www.businesstoday.in/markets/company-stock/antony-waste-handling-cell-share-falls-strong-market-debut/story/426911.html">Antony Waste Handling Cell share falls 11% after strong market debut</a>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<p class="description">Antony Waste Handling Cell stock lost 10.98% to Rs 362.50 against previous close of Rs 407.25 on BSE</p>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<div class="date row3">
											<strong>Author: </strong>null
										</div>
									</div>
									<div class="col" style="text-align: center;">
										<div class="date row3">
											<strong>Category: </strong>general
										</div>
									</div>
									<div class="col" style="text-align: right;">
										<button class="btn btn-danger btn-sm btn-blc" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="setModal(0)">delete</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</li><li class="list-group-item"> 
					<div >
						<p> <strong>iammarajul</strong> <br> jul 12,2020</p>
						
						<div class="row">
							<div class="col-3 m-auto">
								<div class="padding-auto">
									<img style="border-radius: 10px;" src="image/bann.png" height="100%" width="95%">
								</div>
							</div>
							<div class="col-9" style="background: #ede7d5;border-radius: 10px; padding-right:1px!important;">
								<div class="row1">
									<div class="row mt-3">
										<div class="col ">
											<div class="source">businesstoday</div>
										</div>
										<div class="col" style="text-align: right;">
											<div class="date" style="color:#d4633d;">
												<strong> Jan 4, 2021</strong>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<div class="title"> 
											<a style="text-decoration: none;" href="https://www.businesstoday.in/markets/company-stock/antony-waste-handling-cell-share-falls-strong-market-debut/story/426911.html">Antony Waste Handling Cell share falls 11% after strong market debut</a>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<p class="description">Antony Waste Handling Cell stock lost 10.98% to Rs 362.50 against previous close of Rs 407.25 on BSE</p>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<div class="date row3">
											<strong>Author: </strong>null
										</div>
									</div>
									<div class="col" style="text-align: center;">
										<div class="date row3">
											<strong>Category: </strong>general
										</div>
									</div>
									<div class="col" style="text-align: right;">
										<button class="btn btn-danger btn-sm btn-blc" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="setModal(0)">delete</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</li><li class="list-group-item"> 
					<div >
						<p> <strong>iammarajul</strong> <br> jul 12,2020</p>
						
						<div class="row">
							<div class="col-3 m-auto">
								<div class="padding-auto">
									<img style="border-radius: 10px;" src="image/bann.png" height="100%" width="95%">
								</div>
							</div>
							<div class="col-9" style="background: #ede7d5;border-radius: 10px; padding-right:1px!important;">
								<div class="row1">
									<div class="row mt-3">
										<div class="col ">
											<div class="source">businesstoday</div>
										</div>
										<div class="col" style="text-align: right;">
											<div class="date" style="color:#d4633d;">
												<strong> Jan 4, 2021</strong>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<div class="title"> 
											<a style="text-decoration: none;" href="https://www.businesstoday.in/markets/company-stock/antony-waste-handling-cell-share-falls-strong-market-debut/story/426911.html">Antony Waste Handling Cell share falls 11% after strong market debut</a>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<p class="description">Antony Waste Handling Cell stock lost 10.98% to Rs 362.50 against previous close of Rs 407.25 on BSE</p>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<div class="date row3">
											<strong>Author: </strong>null
										</div>
									</div>
									<div class="col" style="text-align: center;">
										<div class="date row3">
											<strong>Category: </strong>general
										</div>
									</div>
									<div class="col" style="text-align: right;">
										<button class="btn btn-danger btn-sm btn-blc" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="setModal(0)">delete</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</li><li class="list-group-item"> 
					<div >
						<p> <strong>iammarajul</strong> <br> jul 12,2020</p>
						
						<div class="row">
							<div class="col-3 m-auto">
								<div class="padding-auto">
									<img style="border-radius: 10px;" src="image/bann.png" height="100%" width="95%">
								</div>
							</div>
							<div class="col-9" style="background: #ede7d5;border-radius: 10px; padding-right:1px!important;">
								<div class="row1">
									<div class="row mt-3">
										<div class="col ">
											<div class="source">businesstoday</div>
										</div>
										<div class="col" style="text-align: right;">
											<div class="date" style="color:#d4633d;">
												<strong> Jan 4, 2021</strong>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<div class="title"> 
											<a style="text-decoration: none;" href="https://www.businesstoday.in/markets/company-stock/antony-waste-handling-cell-share-falls-strong-market-debut/story/426911.html">Antony Waste Handling Cell share falls 11% after strong market debut</a>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<p class="description">Antony Waste Handling Cell stock lost 10.98% to Rs 362.50 against previous close of Rs 407.25 on BSE</p>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<div class="date row3">
											<strong>Author: </strong>null
										</div>
									</div>
									<div class="col" style="text-align: center;">
										<div class="date row3">
											<strong>Category: </strong>general
										</div>
									</div>
									<div class="col" style="text-align: right;">
										<button class="btn btn-danger btn-sm btn-blc" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="setModal(0)">delete</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</li><li class="list-group-item"> 
					<div >
						<p> <strong>iammarajul</strong> <br> jul 12,2020</p>
						
						<div class="row">
							<div class="col-3 m-auto">
								<div class="padding-auto">
									<img style="border-radius: 10px;" src="image/bann.png" height="100%" width="95%">
								</div>
							</div>
							<div class="col-9" style="background: #ede7d5;border-radius: 10px; padding-right:1px!important;">
								<div class="row1">
									<div class="row mt-3">
										<div class="col ">
											<div class="source">businesstoday</div>
										</div>
										<div class="col" style="text-align: right;">
											<div class="date" style="color:#d4633d;">
												<strong> Jan 4, 2021</strong>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<div class="title"> 
											<a style="text-decoration: none;" href="https://www.businesstoday.in/markets/company-stock/antony-waste-handling-cell-share-falls-strong-market-debut/story/426911.html">Antony Waste Handling Cell share falls 11% after strong market debut</a>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<p class="description">Antony Waste Handling Cell stock lost 10.98% to Rs 362.50 against previous close of Rs 407.25 on BSE</p>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<div class="date row3">
											<strong>Author: </strong>null
										</div>
									</div>
									<div class="col" style="text-align: center;">
										<div class="date row3">
											<strong>Category: </strong>general
										</div>
									</div>
									<div class="col" style="text-align: right;">
										<button class="btn btn-danger btn-sm btn-blc" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="setModal(0)">delete</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</li><li class="list-group-item"> 
					<div >
						<p> <strong>iammarajul</strong> <br> jul 12,2020</p>
						
						<div class="row">
							<div class="col-3 m-auto">
								<div class="padding-auto">
									<img style="border-radius: 10px;" src="image/bann.png" height="100%" width="95%">
								</div>
							</div>
							<div class="col-9" style="background: #ede7d5;border-radius: 10px; padding-right:1px!important;">
								<div class="row1">
									<div class="row mt-3">
										<div class="col ">
											<div class="source">businesstoday</div>
										</div>
										<div class="col" style="text-align: right;">
											<div class="date" style="color:#d4633d;">
												<strong> Jan 4, 2021</strong>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<div class="title"> 
											<a style="text-decoration: none;" href="https://www.businesstoday.in/markets/company-stock/antony-waste-handling-cell-share-falls-strong-market-debut/story/426911.html">Antony Waste Handling Cell share falls 11% after strong market debut</a>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<p class="description">Antony Waste Handling Cell stock lost 10.98% to Rs 362.50 against previous close of Rs 407.25 on BSE</p>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<div class="date row3">
											<strong>Author: </strong>null
										</div>
									</div>
									<div class="col" style="text-align: center;">
										<div class="date row3">
											<strong>Category: </strong>general
										</div>
									</div>
									<div class="col" style="text-align: right;">
										<button class="btn btn-danger btn-sm btn-blc" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="setModal(0)">delete</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</li><li class="list-group-item"> 
					<div >
						<p> <strong>iammarajul</strong> <br> jul 12,2020</p>
						
						<div class="row">
							<div class="col-3 m-auto">
								<div class="padding-auto">
									<img style="border-radius: 10px;" src="image/bann.png" height="100%" width="95%">
								</div>
							</div>
							<div class="col-9" style="background: #ede7d5;border-radius: 10px; padding-right:1px!important;">
								<div class="row1">
									<div class="row mt-3">
										<div class="col ">
											<div class="source">businesstoday</div>
										</div>
										<div class="col" style="text-align: right;">
											<div class="date" style="color:#d4633d;">
												<strong> Jan 4, 2021</strong>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<div class="title"> 
											<a style="text-decoration: none;" href="https://www.businesstoday.in/markets/company-stock/antony-waste-handling-cell-share-falls-strong-market-debut/story/426911.html">Antony Waste Handling Cell share falls 11% after strong market debut</a>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<p class="description">Antony Waste Handling Cell stock lost 10.98% to Rs 362.50 against previous close of Rs 407.25 on BSE</p>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<div class="date row3">
											<strong>Author: </strong>null
										</div>
									</div>
									<div class="col" style="text-align: center;">
										<div class="date row3">
											<strong>Category: </strong>general
										</div>
									</div>
									<div class="col" style="text-align: right;">
										<button class="btn btn-danger btn-sm btn-blc" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="setModal(0)">delete</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</li><li class="list-group-item"> 
					<div >
						<p> <strong>iammarajul</strong> <br> jul 12,2020</p>
						
						<div class="row">
							<div class="col-3 m-auto">
								<div class="padding-auto">
									<img style="border-radius: 10px;" src="image/bann.png" height="100%" width="95%">
								</div>
							</div>
							<div class="col-9" style="background: #ede7d5;border-radius: 10px; padding-right:1px!important;">
								<div class="row1">
									<div class="row mt-3">
										<div class="col ">
											<div class="source">businesstoday</div>
										</div>
										<div class="col" style="text-align: right;">
											<div class="date" style="color:#d4633d;">
												<strong> Jan 4, 2021</strong>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<div class="title"> 
											<a style="text-decoration: none;" href="https://www.businesstoday.in/markets/company-stock/antony-waste-handling-cell-share-falls-strong-market-debut/story/426911.html">Antony Waste Handling Cell share falls 11% after strong market debut</a>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<p class="description">Antony Waste Handling Cell stock lost 10.98% to Rs 362.50 against previous close of Rs 407.25 on BSE</p>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<div class="date row3">
											<strong>Author: </strong>null
										</div>
									</div>
									<div class="col" style="text-align: center;">
										<div class="date row3">
											<strong>Category: </strong>general
										</div>
									</div>
									<div class="col" style="text-align: right;">
										<button class="btn btn-danger btn-sm btn-blc" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="setModal(0)">delete</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</li><li class="list-group-item"> 
					<div >
						<p> <strong>iammarajul</strong> <br> jul 12,2020</p>
						
						<div class="row">
							<div class="col-3 m-auto">
								<div class="padding-auto">
									<img style="border-radius: 10px;" src="image/bann.png" height="100%" width="95%">
								</div>
							</div>
							<div class="col-9" style="background: #ede7d5;border-radius: 10px; padding-right:1px!important;">
								<div class="row1">
									<div class="row mt-3">
										<div class="col ">
											<div class="source">businesstoday</div>
										</div>
										<div class="col" style="text-align: right;">
											<div class="date" style="color:#d4633d;">
												<strong> Jan 4, 2021</strong>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<div class="title"> 
											<a style="text-decoration: none;" href="https://www.businesstoday.in/markets/company-stock/antony-waste-handling-cell-share-falls-strong-market-debut/story/426911.html">Antony Waste Handling Cell share falls 11% after strong market debut</a>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<p class="description">Antony Waste Handling Cell stock lost 10.98% to Rs 362.50 against previous close of Rs 407.25 on BSE</p>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<div class="date row3">
											<strong>Author: </strong>null
										</div>
									</div>
									<div class="col" style="text-align: center;">
										<div class="date row3">
											<strong>Category: </strong>general
										</div>
									</div>
									<div class="col" style="text-align: right;">
										<button class="btn btn-danger btn-sm btn-blc" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="setModal(0)">delete</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</li><li class="list-group-item"> 
					<div >
						<p> <strong>iammarajul</strong> <br> jul 12,2020</p>
						
						<div class="row">
							<div class="col-3 m-auto">
								<div class="padding-auto">
									<img style="border-radius: 10px;" src="image/bann.png" height="100%" width="95%">
								</div>
							</div>
							<div class="col-9" style="background: #ede7d5;border-radius: 10px; padding-right:1px!important;">
								<div class="row1">
									<div class="row mt-3">
										<div class="col ">
											<div class="source">businesstoday</div>
										</div>
										<div class="col" style="text-align: right;">
											<div class="date" style="color:#d4633d;">
												<strong> Jan 4, 2021</strong>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<div class="title"> 
											<a style="text-decoration: none;" href="https://www.businesstoday.in/markets/company-stock/antony-waste-handling-cell-share-falls-strong-market-debut/story/426911.html">Antony Waste Handling Cell share falls 11% after strong market debut</a>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<p class="description">Antony Waste Handling Cell stock lost 10.98% to Rs 362.50 against previous close of Rs 407.25 on BSE</p>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<div class="date row3">
											<strong>Author: </strong>null
										</div>
									</div>
									<div class="col" style="text-align: center;">
										<div class="date row3">
											<strong>Category: </strong>general
										</div>
									</div>
									<div class="col" style="text-align: right;">
										<button class="btn btn-danger btn-sm btn-blc" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="setModal(0)">delete</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</li><li class="list-group-item"> 
					<div >
						<p> <strong>iammarajul</strong> <br> jul 12,2020</p>
						
						<div class="row">
							<div class="col-3 m-auto">
								<div class="padding-auto">
									<img style="border-radius: 10px;" src="image/bann.png" height="100%" width="95%">
								</div>
							</div>
							<div class="col-9" style="background: #ede7d5;border-radius: 10px; padding-right:1px!important;">
								<div class="row1">
									<div class="row mt-3">
										<div class="col ">
											<div class="source">businesstoday</div>
										</div>
										<div class="col" style="text-align: right;">
											<div class="date" style="color:#d4633d;">
												<strong> Jan 4, 2021</strong>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<div class="title"> 
											<a style="text-decoration: none;" href="https://www.businesstoday.in/markets/company-stock/antony-waste-handling-cell-share-falls-strong-market-debut/story/426911.html">Antony Waste Handling Cell share falls 11% after strong market debut</a>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<p class="description">Antony Waste Handling Cell stock lost 10.98% to Rs 362.50 against previous close of Rs 407.25 on BSE</p>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<div class="date row3">
											<strong>Author: </strong>null
										</div>
									</div>
									<div class="col" style="text-align: center;">
										<div class="date row3">
											<strong>Category: </strong>general
										</div>
									</div>
									<div class="col" style="text-align: right;">
										<button class="btn btn-danger btn-sm btn-blc" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="setModal(0)">delete</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</li><li class="list-group-item"> 
					<div >
						<p> <strong>iammarajul</strong> <br> jul 12,2020</p>
						
						<div class="row">
							<div class="col-3 m-auto">
								<div class="padding-auto">
									<img style="border-radius: 10px;" src="image/bann.png" height="100%" width="95%">
								</div>
							</div>
							<div class="col-9" style="background: #ede7d5;border-radius: 10px; padding-right:1px!important;">
								<div class="row1">
									<div class="row mt-3">
										<div class="col ">
											<div class="source">businesstoday</div>
										</div>
										<div class="col" style="text-align: right;">
											<div class="date" style="color:#d4633d;">
												<strong> Jan 4, 2021</strong>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<div class="title"> 
											<a style="text-decoration: none;" href="https://www.businesstoday.in/markets/company-stock/antony-waste-handling-cell-share-falls-strong-market-debut/story/426911.html">Antony Waste Handling Cell share falls 11% after strong market debut</a>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<p class="description">Antony Waste Handling Cell stock lost 10.98% to Rs 362.50 against previous close of Rs 407.25 on BSE</p>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<div class="date row3">
											<strong>Author: </strong>null
										</div>
									</div>
									<div class="col" style="text-align: center;">
										<div class="date row3">
											<strong>Category: </strong>general
										</div>
									</div>
									<div class="col" style="text-align: right;">
										<button class="btn btn-danger btn-sm btn-blc" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="setModal(0)">delete</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</li><li class="list-group-item"> 
					<div >
						<p> <strong>iammarajul</strong> <br> jul 12,2020</p>
						
						<div class="row">
							<div class="col-3 m-auto">
								<div class="padding-auto">
									<img style="border-radius: 10px;" src="image/bann.png" height="100%" width="95%">
								</div>
							</div>
							<div class="col-9" style="background: #ede7d5;border-radius: 10px; padding-right:1px!important;">
								<div class="row1">
									<div class="row mt-3">
										<div class="col ">
											<div class="source">businesstoday</div>
										</div>
										<div class="col" style="text-align: right;">
											<div class="date" style="color:#d4633d;">
												<strong> Jan 4, 2021</strong>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<div class="title"> 
											<a style="text-decoration: none;" href="https://www.businesstoday.in/markets/company-stock/antony-waste-handling-cell-share-falls-strong-market-debut/story/426911.html">Antony Waste Handling Cell share falls 11% after strong market debut</a>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<p class="description">Antony Waste Handling Cell stock lost 10.98% to Rs 362.50 against previous close of Rs 407.25 on BSE</p>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<div class="date row3">
											<strong>Author: </strong>null
										</div>
									</div>
									<div class="col" style="text-align: center;">
										<div class="date row3">
											<strong>Category: </strong>general
										</div>
									</div>
									<div class="col" style="text-align: right;">
										<button class="btn btn-danger btn-sm btn-blc" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="setModal(0)">delete</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</li><li class="list-group-item"> 
					<div >
						<p> <strong>iammarajul</strong> <br> jul 12,2020</p>
						
						<div class="row">
							<div class="col-3 m-auto">
								<div class="padding-auto">
									<img style="border-radius: 10px;" src="image/bann.png" height="100%" width="95%">
								</div>
							</div>
							<div class="col-9" style="background: #ede7d5;border-radius: 10px; padding-right:1px!important;">
								<div class="row1">
									<div class="row mt-3">
										<div class="col ">
											<div class="source">businesstoday</div>
										</div>
										<div class="col" style="text-align: right;">
											<div class="date" style="color:#d4633d;">
												<strong> Jan 4, 2021</strong>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<div class="title"> 
											<a style="text-decoration: none;" href="https://www.businesstoday.in/markets/company-stock/antony-waste-handling-cell-share-falls-strong-market-debut/story/426911.html">Antony Waste Handling Cell share falls 11% after strong market debut</a>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<p class="description">Antony Waste Handling Cell stock lost 10.98% to Rs 362.50 against previous close of Rs 407.25 on BSE</p>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<div class="date row3">
											<strong>Author: </strong>null
										</div>
									</div>
									<div class="col" style="text-align: center;">
										<div class="date row3">
											<strong>Category: </strong>general
										</div>
									</div>
									<div class="col" style="text-align: right;">
										<button class="btn btn-danger btn-sm btn-blc" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="setModal(0)">delete</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</li><li class="list-group-item"> 
					<div >
						<p> <strong>iammarajul</strong> <br> jul 12,2020</p>
						
						<div class="row">
							<div class="col-3 m-auto">
								<div class="padding-auto">
									<img style="border-radius: 10px;" src="image/bann.png" height="100%" width="95%">
								</div>
							</div>
							<div class="col-9" style="background: #ede7d5;border-radius: 10px; padding-right:1px!important;">
								<div class="row1">
									<div class="row mt-3">
										<div class="col ">
											<div class="source">businesstoday</div>
										</div>
										<div class="col" style="text-align: right;">
											<div class="date" style="color:#d4633d;">
												<strong> Jan 4, 2021</strong>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<div class="title"> 
											<a style="text-decoration: none;" href="https://www.businesstoday.in/markets/company-stock/antony-waste-handling-cell-share-falls-strong-market-debut/story/426911.html">Antony Waste Handling Cell share falls 11% after strong market debut</a>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<p class="description">Antony Waste Handling Cell stock lost 10.98% to Rs 362.50 against previous close of Rs 407.25 on BSE</p>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<div class="date row3">
											<strong>Author: </strong>null
										</div>
									</div>
									<div class="col" style="text-align: center;">
										<div class="date row3">
											<strong>Category: </strong>general
										</div>
									</div>
									<div class="col" style="text-align: right;">
										<button class="btn btn-danger btn-sm btn-blc" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="setModal(0)">delete</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</li><li class="list-group-item"> 
					<div >
						<p> <strong>iammarajul</strong> <br> jul 12,2020</p>
						
						<div class="row">
							<div class="col-3 m-auto">
								<div class="padding-auto">
									<img style="border-radius: 10px;" src="image/bann.png" height="100%" width="95%">
								</div>
							</div>
							<div class="col-9" style="background: #ede7d5;border-radius: 10px; padding-right:1px!important;">
								<div class="row1">
									<div class="row mt-3">
										<div class="col ">
											<div class="source">businesstoday</div>
										</div>
										<div class="col" style="text-align: right;">
											<div class="date" style="color:#d4633d;">
												<strong> Jan 4, 2021</strong>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<div class="title"> 
											<a style="text-decoration: none;" href="https://www.businesstoday.in/markets/company-stock/antony-waste-handling-cell-share-falls-strong-market-debut/story/426911.html">Antony Waste Handling Cell share falls 11% after strong market debut</a>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<p class="description">Antony Waste Handling Cell stock lost 10.98% to Rs 362.50 against previous close of Rs 407.25 on BSE</p>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<div class="date row3">
											<strong>Author: </strong>null
										</div>
									</div>
									<div class="col" style="text-align: center;">
										<div class="date row3">
											<strong>Category: </strong>general
										</div>
									</div>
									<div class="col" style="text-align: right;">
										<button class="btn btn-danger btn-sm btn-blc" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="setModal(0)">delete</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</li><li class="list-group-item"> 
					<div >
						<p> <strong>iammarajul</strong> <br> jul 12,2020</p>
						
						<div class="row">
							<div class="col-3 m-auto">
								<div class="padding-auto">
									<img style="border-radius: 10px;" src="image/bann.png" height="100%" width="95%">
								</div>
							</div>
							<div class="col-9" style="background: #ede7d5;border-radius: 10px; padding-right:1px!important;">
								<div class="row1">
									<div class="row mt-3">
										<div class="col ">
											<div class="source">businesstoday</div>
										</div>
										<div class="col" style="text-align: right;">
											<div class="date" style="color:#d4633d;">
												<strong> Jan 4, 2021</strong>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<div class="title"> 
											<a style="text-decoration: none;" href="https://www.businesstoday.in/markets/company-stock/antony-waste-handling-cell-share-falls-strong-market-debut/story/426911.html">Antony Waste Handling Cell share falls 11% after strong market debut</a>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<p class="description">Antony Waste Handling Cell stock lost 10.98% to Rs 362.50 against previous close of Rs 407.25 on BSE</p>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<div class="date row3">
											<strong>Author: </strong>null
										</div>
									</div>
									<div class="col" style="text-align: center;">
										<div class="date row3">
											<strong>Category: </strong>general
										</div>
									</div>
									<div class="col" style="text-align: right;">
										<button class="btn btn-danger btn-sm btn-blc" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="setModal(0)">delete</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</li><li class="list-group-item"> 
					<div >
						<p> <strong>iammarajul</strong> <br> jul 12,2020</p>
						
						<div class="row">
							<div class="col-3 m-auto">
								<div class="padding-auto">
									<img style="border-radius: 10px;" src="image/bann.png" height="100%" width="95%">
								</div>
							</div>
							<div class="col-9" style="background: #ede7d5;border-radius: 10px; padding-right:1px!important;">
								<div class="row1">
									<div class="row mt-3">
										<div class="col ">
											<div class="source">businesstoday</div>
										</div>
										<div class="col" style="text-align: right;">
											<div class="date" style="color:#d4633d;">
												<strong> Jan 4, 2021</strong>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<div class="title"> 
											<a style="text-decoration: none;" href="https://www.businesstoday.in/markets/company-stock/antony-waste-handling-cell-share-falls-strong-market-debut/story/426911.html">Antony Waste Handling Cell share falls 11% after strong market debut</a>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<p class="description">Antony Waste Handling Cell stock lost 10.98% to Rs 362.50 against previous close of Rs 407.25 on BSE</p>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<div class="date row3">
											<strong>Author: </strong>null
										</div>
									</div>
									<div class="col" style="text-align: center;">
										<div class="date row3">
											<strong>Category: </strong>general
										</div>
									</div>
									<div class="col" style="text-align: right;">
										<button class="btn btn-danger btn-sm btn-blc" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="setModal(0)">delete</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</li><li class="list-group-item"> 
					<div >
						<p> <strong>iammarajul</strong> <br> jul 12,2020</p>
						
						<div class="row">
							<div class="col-3 m-auto">
								<div class="padding-auto">
									<img style="border-radius: 10px;" src="image/bann.png" height="100%" width="95%">
								</div>
							</div>
							<div class="col-9" style="background: #ede7d5;border-radius: 10px; padding-right:1px!important;">
								<div class="row1">
									<div class="row mt-3">
										<div class="col ">
											<div class="source">businesstoday</div>
										</div>
										<div class="col" style="text-align: right;">
											<div class="date" style="color:#d4633d;">
												<strong> Jan 4, 2021</strong>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<div class="title"> 
											<a style="text-decoration: none;" href="https://www.businesstoday.in/markets/company-stock/antony-waste-handling-cell-share-falls-strong-market-debut/story/426911.html">Antony Waste Handling Cell share falls 11% after strong market debut</a>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<p class="description">Antony Waste Handling Cell stock lost 10.98% to Rs 362.50 against previous close of Rs 407.25 on BSE</p>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<div class="date row3">
											<strong>Author: </strong>null
										</div>
									</div>
									<div class="col" style="text-align: center;">
										<div class="date row3">
											<strong>Category: </strong>general
										</div>
									</div>
									<div class="col" style="text-align: right;">
										<button class="btn btn-danger btn-sm btn-blc" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="setModal(0)">delete</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</li>

			</ul>
		</div>


		
	

	</div>



</body>


</html>