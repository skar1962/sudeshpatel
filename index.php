<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Sudesh Patel</title>
		<meta charset="utf-8">

		<!-- meta tag required by Bootstrap fpr mobile first development-->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap stylesheet -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
		
		<!-- Custom styles for this template -->
		<link href="carousel.css" rel="stylesheet">
		
		<link rel="stylesheet" type="text/css" href="styles.css" > 


	<!--
		<script type="text/javascript" src="script.js"></script>
-->
<!--
	To Do:
-->

	</head>
	<body>
		<?php require_once 'includes/header.php'; ?>	

		<main role="main">
			<div class="container">
				<!-- Start of carousel -->
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
					<li data-target="#myCarousel" data-slide-to="3"></li>
					<li data-target="#myCarousel" data-slide-to="4"></li>
					<li data-target="#myCarousel" data-slide-to="5"></li>
				
					</ol>
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img class="first-slide" src="./images/worldonphone.png" alt="Digitise your ideas">
							<div class="carousel-caption">
								<h2>Digitise your ideas</h2>
							</div>
						</div>

						<div class="carousel-item">
							<img class="second-slide" src="./images/webdevelopment2.jpg" alt="Web Development">
							<div class="carousel-caption">
								<h2>Web design and development</h2>
							</div>
						</div> <!-- carousel-item -->

						<div class="carousel-item">
							<img class="third-slide" src="./images/quality.jpg" alt="High Quality">
							<div class="carousel-caption">
								<h2>High quality solutions</h2>
							</div>
						</div><!-- carousel-item -->

						<div class="carousel-item">
							<img class="fourth-slide" src="./images/personaltouch.jpg" alt="Personal Touch">
							<div class="carousel-caption">
								<h2>A personal touch</h2>
							</div>
						</div><!-- carousel-item -->

						<div class="carousel-item">
							<img class="fifth-slide" src="./images/costsqueeze.jpg" alt="Low Cost">
							<div class="carousel-caption">
								<h2>Surprisingly affordable</h2>
							</div>
						</div><!-- carousel-item -->
						<div class="carousel-item">
							<img class="sixth-slide" src="./images/endtoend.jpg" alt="End to End">
							<div class="carousel-caption">
								<h2>An end to end service</h2>
							</div>
						</div><!-- carousel-item -->
					</div> <!-- Carousel Inner -->

					<a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div> <!-- End of carousel -->

				<!-- Using Cards -->
				<div class="container">
					<div class="card-deck">
						<div class="card" style="width: 15rem;">
							<img class="card-img-top" src="./images/whoami.jpg" alt="Card image cap">
							<div class="card-body">
								<h5 class="card-title">Who am I?</h5>
								<p class="card-text">
									I am a freelance IT professional with extensive experience within software engineering at all levels.
								</p>
							</div>
							<div class="card-footer">
								<a href="whoami1.php" class="btn btn-primary">More</a>
							</div>	
						</div> <!-- card -->
						
						<div class="card" style="width: 15rem;">
							<img class="card-img-top" src="./images/webdevelopment.jpg" alt="Card image cap">
							<div class="card-body">
								<h5 class="card-title">What I do</h5>
								<p class="card-text">
									I create fast, flexible, responsive websites totally tailored for you. 
									<br>
									Click on the links menu above to look at my other web sites.
								</p>
							</div>
							<div class="card-footer">
								<a href="contact.php" class="btn btn-primary">Contact me</a>
							</div>	
						</div><!-- card -->

						<div class="card" style="width: 15rem;">
							<div class="card-body">
								<h5 class="card-title">Interests</h5>
								<p class="card-text">
									My interests include both travel and cooking. Click on the buttons below to find out more.
								</p>
							</div>
							<img class="card-img-top" src="./images/travel2.jpg" alt="Card image cap">
							<br>
							<img class="card-img-bottom" src="./images/cooking.jpg" alt="Card image cap">
							<div class="card-footer">
								<a href="travel.php" class="btn btn-primary">Travelogue</a>
								<a href="recipes.php" class="btn btn-primary">My Recipes</a>
							</div>	
						</div><!-- card -->
<!--						
						<div class="card" style="width: 18rem;">
							<img class="card-img-top" src="./images/cooking.jpg" alt="Card image cap">
							<div class="card-body">
								<h5 class="card-title">Amateur Cook</h5>
								<p class="card-text">
									As a keen cook, I have built up a selection of recipes that I enjoy cooking and eating.
									Here you will find a small selection of them. 
								</p>
							</div>
							<div class="card-footer">
								<a href="recipes.php" class="btn btn-primary">My Recipes</a>
							</div>								
						</div> card -->

					</div> 	<!-- Card Decks -->
				</div>
				<!-- End of Cards -->
			</div> <!-- Container -->

		</main>


		<!-- Bootstrap core JavaScript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery.min.js"><\/script>')</script>
		
		
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
		

		<?php require_once 'includes/footer.php'; ?>
	</body>

</html>