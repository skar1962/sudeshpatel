<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Contact Sudesh</title>
		<meta charset="utf-8">

		<!-- meta tag required by Bootstrap fpr mobile first development-->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap stylesheet -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	
		<link rel="stylesheet" type="text/css" href="styles.css" > 
	
		<script type="text/javascript" src="script.js"></script>


	</head>
	<body>
		<?php require_once 'includes/header.php'; ?>
	
		<main role="main">

			<section class="jumbotron text-center">
                <div class="container">
                    <h1 class="jumbotron-heading">Contact Me</h1>
                    <p>Feel free to use the <a href="#contactform"> contact form</a> below or send an email directly to <strong>sudesh.patel@outlook.com</strong> if you are interested in more information about anything contained on my web sites.</p>

                </div>
            </section>

		
            <div class="container text-center">
                <!-- Google Map -->
					<br>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d4983.682234616426!2d0.7177009309104398!3d51.35083216327578!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2suk!4v1517768998351" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
                    <caption>Map of my location</caption>
                    <hr>
                <!-- End Google Map -->

                <form class="form-horizontal" id="contactform" method="POST" action="email.php" target="_blank">
                    <h1>Contact Form </h1>
                    <h2>
                        <div class="form-group">
                            <label for="customerNameLabel">Your name</label>										
                            <input class="form-control" type="text" id="customerName1" name="CustomerName" required maxlength="40" placeholder="Jane Doe">
                            <br>
                        </div>
                        <div class="form-group">
                            <label for="emailAddLabel">Your email address</label>								
                            <input class="form-control" type="email" id="emailAdd1" name="EmailAdd" required maxlength="40" placeholder="Jane.Doe@example.com">
                            <br>
                        </div>
                        <div class="form-group">
                            <label for="messageLabel">Your message</label>		
                            <textarea class="form-control" type="text" name="Message" id="message1" cols="40" rows="4" maxlength="500" placeholder="Message text"></textarea>
                        </div>
                    </h2>
                    <input class="btn btn-primary" type="submit" id="sendForm" value="Send message"></p>
                </form>
            </div> <!-- modal-body -->

		</main>


		<!-- Bootstrap core JavaScript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery.min.js"><\/script>')</script>
		
		
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
			

	</body>
	<?php require_once 'includes/footer.php'; ?>
</html>