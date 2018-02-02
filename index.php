<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Sudesh Patel v0.1</title>
		<meta charset="utf-8">

		<!-- meta tag required by Bootstrap fpr mobile first development-->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap stylesheet -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
		
		<!-- Custom styles for this template -->
		<link href="carousel.css" rel="stylesheet">
		
		<link rel="stylesheet" type="text/css" href="styles.css" > 
	
		<script type="text/javascript" src="script.js"></script>

<!--
	To Do:
-->

	</head>
		<body>
			<header>
				<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
					<a class="navbar-brand" href="index.php">Sudesh Patel</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarCollapse">
						<ul class="navbar-nav mr-auto">
							<li class="nav-item active">
								<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="whoami1.php">About Me</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="travel.php">Travelogue</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="recipes.php">My Recipes</a>
							</li>
							<li class="nav-item">
								<a class="nav-link disabled" href="#">Contact Me</a>
							</li>
						</ul>
						<!--
						<form class="form-inline mt-2 mt-md-0">
							<input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
							<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
						</form>
						-->
					</div>
				</nav>
			</header>


			<main role="main">

<!-- Start of carousel -->
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
					<li data-target="#myCarousel" data-slide-to="3"></li>
				
					</ol>
					<div class="carousel-inner">

						<div class="carousel-item active">
							<img class="first-slide" src="./images/thisisme.jpg" alt="Who Am I">
	
							<div class="container">
								<div class="carousel-caption text-left">
									<h1>This is me</h1>
									<p>Experienced IT professional.</p>
<!--								
									<p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
-->
								</div>
							</div>
	
						</div>

						<div class="carousel-item">
							<img class="second-slide" src="./images/webdevelopment2.jpg" alt="Web Development">
							<div class="container">
								<div class="carousel-caption">
									<h1 class="bg-light">I am a Web developer.</h1>
<!--
									<p>I take your ideas and turn them into slick professional web sites.</p>
									<p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
-->

								</div>
							</div>
						</div>

						<div class="carousel-item">
							<img class="third-slide" src="./images/travel.jpg" alt="Travel">
							<div class="container">
								<div class="carousel-caption">
									<h1 class="bg-light">I like to travel.</h1>
<!--

									<p>Walking, Cycling, Cooking, Food, Running, Web development.</p>
									<p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
-->

								</div>
							</div>
						</div>


						<div class="carousel-item">
							<img class="fourth-slide" src="./images/foodandwine.jpg" alt="Amateur Cook">
							<div class="container">
								<div class="carousel-caption">
									<h1 class="bg-light">and I love food.</h1>
<!--
									<p>who doesn't.</p>
									<p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
-->

								</div>
							</div>
						</div>


					</div>
					<a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
					</a>
				</div>
<!-- End of carousel -->

<!-- Using Cards -->
				<div class="container-fluid">
					<div class="row">
						
						<div class="col-sm">
							<div class="card" style="width: 18rem;">
								<img class="card-img-top" src="./images/whoami.jpg" alt="Card image cap">
								<div class="card-body">
									<h5 class="card-title">Who am I?</h5>
									<p class="card-text">
										I am an IT professional with extensive experience within software engineering at all levels.
										I no longer work for a large corporate as I wish to persue my own interests in life.  
									</p>
									<a href="whoami1.php" class="btn btn-primary">More</a>
								</div>
							</div>
						</div>
						
						<div class="col-sm">
							<div class="card" style="width: 18rem;">
								<img class="card-img-top" src="./images/webdevelopment.jpg" alt="Card image cap">
								<div class="card-body">
									<h5 class="card-title">What I do</h5>
									<p class="card-text">
										I code web sites from scratch without the added overhead of web site builders such as Wordpress or Drupal.  
										This gives me total control on the look and feel of my web sites. 
										<br>
										The links below will take you to my web sites.
										<br>
										<a target="_blank" href="http://kent-tutor.com/" class="card-link">Kent-Tutor.com (Live)</a>
										<br>
										<a target="_blank" href="http://zoom-away.com/" class="card-link">Zoom-Away.com (Play)</a>
										<br>
										Like what you see?  Then click on the button below and ask me to build your web site.
									</p>
									<a href="#" class="btn btn-primary">Contact me</a>
								</div>
							</div>
						</div>
						
						<div class="col-sm">
							<div class="card" style="width: 18rem;">
								<img class="card-img-top" src="./images/travel2.jpg" alt="Card image cap">
								<div class="card-body">
									<h5 class="card-title">Travel Interests</h5>
									<p class="card-text">
										We all enjoy travelling.  I love going to new places and have travelled extensively 
										in the UK and also in Europe.  See some places I have visited by clicking on the 
										button below.
									</p>
									<a href="travel.php" class="btn btn-primary">Travelogue</a>
								</div>
							</div>
						</div>

						<div class="col-sm">
							<div class="card" style="width: 18rem;">
								<img class="card-img-top" src="./images/cooking.jpg" alt="Card image cap">
								<div class="card-body">
									<h5 class="card-title">Amateur Cook</h5>
									<p class="card-text">
										I have been a keen cook for several years, however in the last year I have found some 
										time on my hands to try out some excellent recipes.  Whilst I enjoy eating out, I feel
										I can do better than some restaurants and prefer to cook and eat in now. Here you will find 
										some Recipes I have had success with.
									</p>
									<a href="recipes.php" class="btn btn-primary">My Recipes</a>
								</div>
							</div>
						</div>
						
					</div>
				</div>
<!-- End of Cards -->

	
			</main>


			<!-- Bootstrap core JavaScript
			================================================== -->
			<!-- Placed at the end of the document so the pages load faster -->
			<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
			<script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery.min.js"><\/script>')</script>
			
			
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
			
			<!--
			<script src="../../../../assets/js/vendor/popper.min.js"></script>
			<script src="../../../../dist/js/bootstrap.min.js"></script>
			-->

			<!-- Just to make our placeholder images work. Don't actually copy the next line! -->
			<!--
			<script src="../../../../assets/js/vendor/holder.min.js"></script>
			-->

		</body>
	</head>
	<footer class="container">
		<small>Copyright © 2017 Sudesh Patel</small>
		<a href="https://smallseotools.com/google-pagerank-checker/" title="PR checker by smallseotools"><img src="https://smallseotools.com/pr?style=2" align="absmiddle" alt="PR checker by smallseotools" border="0" /></a>
		<p class="float-right"><a href="#">Back to top</a></p>
	</footer>
</html>