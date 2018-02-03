<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Recipes</title>
		<meta charset="utf-8">

		<!-- meta tag required by Bootstrap fpr mobile first development-->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap stylesheet -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
		
		<!-- Custom styles for this template -->
		<!--<link href="carousel.css" rel="stylesheet"> -->
		
		<link rel="stylesheet" type="text/css" href="styles.css" > 
	
		<script type="text/javascript" src="script.js"></script>

<!--
	To Do:
-->

	</head>
	<body>
		<?php require_once 'includes/header.php'; ?>
	
		<main role="main">

			<!-- Jumbotron -->
			<div class="jumbotron">
					<h1>Danger!</h1> 
					<h2>Amatuer cook in the house.</h2>
					<p>I have been a keen cook for many years.  I follow recipes from cookery books, T.V programs and from web sites.  You will find a selection of them below.</p>
					<h3>Try them, you wont be disappointed! </h3>
			</div>
			<!-- End Jumbotron -->


			<!-- Card Deck 1 -->
			<div class="card-deck">
				<!--
				<div class="card-deck">	
				<div class="card-group">
				<div class="card-columns">
				-->


				<!-- Moroccan Lamb Pie Card -->
				<div class="card" style="width: 18rem;">
					<div class="card-body">
						<h5 class="card-title">Moroccan Lamb Filo Pie</h5>
						<a href="#moroccanLamb" class="card-link" data-toggle="modal">
							<img class="card-img-top" src="./images/recipies/moroccanlambfilopie.png" alt="Moroccan Lamb Filo Pie">
							<!-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> -->
							<p class="card-text">A delicious filo pie with a spiced minced lamb filling</p>
							More..
						</a>
					</div>
				</div>

				<!-- Lamb Tagine Card -->
				<div class="card" style="width: 18rem;">
					<div class="card-body">
						<h5 class="card-title">Slow Cooker Lamb Tagine</h5>
						<a href="#lambTagine" class="card-link" data-toggle="modal">
							<img class="card-img-top" src="./images/recipies/slowcookerlambtagine.jpg" alt="Slow Cooker Lamb Tagine">
							<!-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> -->
							<p class="card-text">A slow cooker recipe with melt in your mouth lamb and chick peas</p>
							More..
						</a>
					</div>
				</div>

				<!-- Aloo Podimas -->
				<div class="card" style="width: 18rem;">
					<div class="card-body">
						<h5 class="card-title">Potato (Aloo) Podimas</h5>
						<a href="#alooPodimas" class="card-link" data-toggle="modal">
							<img class="card-img-top" src="./images/recipies/aloopodimas.jpg" alt="Aloo Podimas">
							<!-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> -->
							<p class="card-text">A simple potato dish that will blow you away with flavour</p>
							More..
						</a>
					</div>
				</div>

				<!-- Bhinda Bateta -->
				<div class="card" style="width: 18rem;">
					<div class="card-body">
						<h5 class="card-title">Bhinda Bateta (Okra and Potato)</h5>
						<a href="#bhindaBateta" class="card-link" data-toggle="modal">
							<img class="card-img-top" src="./images/recipies/bhindabateta.jpg" alt="Bhinda Bateta">
							<!-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> -->
							<p class="card-text">A healthy and spicy recipe with Okra and potatoes</p>
							More..
						</a>
					</div>
				</div>
			</div> <!-- Card Deck 1 -->

			<p></p>
			<!-- Card Deck 2-->
			<div class="card-deck">
				<!-- Japanse Curry -->
				<div class="card" style="width: 18rem;">
					<div class="card-body">
						<h5 class="card-title">Japanese Curry</h5>
						<a href="#japaneseCurry" class="card-link" data-toggle="modal">
							<img class="card-img-top" src="./images/recipies/japanesecurry.jpg" alt="Japanese Curry">
							<!-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> -->
							<p class="card-text">A delicious curry eaten all over Japan.  Very different to an Indian curry and very tasty.</p>
							More..
						</a>
					</div>
				</div>

				<!-- Bhinda Bateta -->
				<div class="card" style="width: 18rem;">
					<div class="card-body">
						<h5 class="card-title">Easy Cheese Sauce</h5>
						<a href="#cheeseSauce" class="card-link" data-toggle="modal">
							<img class="card-img-top" src="./images/recipies/cheesesauce.jpg" alt="Cheese Sauce">
							<!-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> -->
							<p class="card-text">A super easy to make cheese sauce with cornflour.</p>
							More..
						</a>
					</div>
				</div>
			</div>	<!-- Card Deck 2 -->



			<!-- Modals -->
			<div class="modal fade" id="moroccanLamb" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Moroccan Lamb Filo Pie</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<img class="card-img-top" src="./images/recipies/moroccanlambfilopie.png" alt="Moroccan Lamb Filo Pie">
							<p>This is from the Tesco web site but works very well</p>

							<h2>Ingredients</h2>
							<ul>
							<li>1tbsp olive oil</li> 
							<li>1 onion, chopped</li> 
							<li>500g minced lamb</li> 
							<li>1tsp cinnamon</li> 
							<li>1tsp mixed spice </li>
							<li>½tsp ground cumin </li>
							<li>100ml (3½fl oz) lamb or chicken stock</li> 
							<li>75g (3oz) dried apricots, chopped </li>
							<li>50g (2oz) pine nuts </li>
							<li>handful parsley, roughly chopped </li>
							<li>5-6 Jus-Rol Filo pastry sheets </li>
							<li>50g (2oz) butter, melted </li>
							</ul>
							<h2>Method</h2>
							Preheat the oven to gas 5, 190°C, fan 170°C. Heat the oil in a large pan and gently fry the onion until softened. Add the lamb 
							and cook until browned, breaking up any clumps with a wooden spoon. Stir in the spices, then add the stock. Continue cooking over 
							a medium heat for 15 minutes, or until all the liquid has been absorbed. Stir the apricots through the mince and season well. Set 
							aside to cool. Meanwhile, toast the pine nuts in a dry pan and leave to cool. Stir the cooled pine nuts through the mince with 
							the parsley. To assemble the pie, put one sheet of filo pastry in a 20cm (8in) ovenproof dish and lightly brush with some of 
							the melted butter. Repeat with two more sheets, layering the dish until the base and sides are completely covered, with the 
							excess pastry hanging over the edge. Spoon the filling into the dish and fold over the excess pastry to cover. Brush with melted butter.
							Brush another filo sheet with butter and tear it into strips. Drape the strips over the filling, allowing them to fall unevenly 
							in waves. Repeat with the remaining sheet of filo and brush again with melted butter. Bake for 15-20 minutes, or until crispy and golden.							
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>

			<div class="modal fade" id="lambTagine" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Slow cooker Lamb Tagine</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<img class="card-img-top" src="./images/recipies/slowcookerlambtagine.jpg" alt="Slow Cooker Lamb Tagine">
							<h2>Ingredients</h2>
							<ul>Olive oil</ul>
							<ul>500g lamb neck or similar, diced</ul>
							<ul>1 onion, roughly chopped</ul>
							<ul>2 carrots, roughly chopped</ul>
							<ul>2 garlic cloves, crushed/chopped</ul>
							<ul>400g can of chickpeas (optional)</ul>
							<ul>200g dried apricots</ul>
							<ul>2 tsp ground cumin</ul>
							<ul>1 tsp paprika</ul>
							<ul>1 tsp dried coriander</ul>
							<ul>1 cinnamon stick</ul>
							<ul>1 tbsp finely chopped fresh root ginger</ul>
							<ul>250g sweet potatoes</ul>
							<ul>1 can chopped tomatoes</ul>
							<ul>200ml chicken stock</ul>
							<ul>Fresh chopped coriander (optional)</ul>
							<h2>Method</h2>
							In a large pan, heat the oil over a medium heat and brown the lamb on all sides, then transfer onto a plate. Add the onions, ginger and carrots, then fry for a few minutes until the carrots are starting to brown. Add the garlic and cook for another minute. Tip the lamb back in, then stir in all the spices and cinnamon stick, and add the chopped tomatoes, apricots and chickpeas (if using). Season well.
							Bring the pan to the boil whilst stirring, then reduce to a simmer for 10 minutes or so to thicken the sauce. (You don't have to do this bit, but it will be better if you do). Transfer to the slow cooker, and cook for 6-8 hours on medium.
							Approximately two hours before you want to eat, chuck in the sweet potatoes. If you're like me and leave it on whilst at work you can leave this bit out, or you can cheat by boiling them up in a pan and throwing them in last minute. Don't be tempted to leave them in all day or you'll have orange slodge in place of your potatoes!
							Scatter with chopped coriander to serve, if you have it.
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>

			<div class="modal fade" id="alooPodimas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Aloo Podimas</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<img class="card-img-top" src="./images/recipies/aloopodimas.jpg" alt="Aloo Podimas">
							<span class="badge badge-primary">Prep: 5 min</span>
							<span class="badge badge-warning">Cook: 20 min</span>
							<span class="badge badge-success">Ready in: 30 min</span>
							<h2>Ingredients</h2>
							<h3>For Tempering</h3>
							<ul>1 tbsp vegetable oil</ul>
							<ul>10 curry leaves, preferably fresh</ul>
							<ul>1 dried red chilli</ul>
							<ul>2 tsp black mustard seeds</ul>

							<h3>For Cooking</h3>
							<ul>600g/1lb 5oz new potatoes, washed </ul>
							<ul>1 red onion, finely chopped</ul>
							<ul>pinch asafoetida</ul>
							<ul>2 green chillies, cut in half lengthways</ul>
							<ul>2.5cm/1in piece fresh ginger, peeled and finely chopped</ul>
							<ul>1 tsp ground turmeric</ul>
							<ul>1½ tsp salt</ul>
							<ul>2 tbsp finely chopped coriander</ul>
							<ul>1 lemon, juice only</ul>
							<h2>Method</h2>
							1. To make the aloo podimas, bring a pan of salted water to the boil. 
							Add the potatoes and simmer for 12–15 minutes or until tender. Drain well and set aside. 
							<br>
							2. When the potatoes are cool enough to handle, peel them and set aside. They need to be 
							marble sized so cut them into two if they are very large. 
							<br>
							3. For the tempering, heat the oil in a large, heavy-based frying pan to smoking point and 
							add all the tempering ingredients. When the seeds crackle and the curry leaves crisp up, 
							add the red onion and cook over a medium heat for 3–4 minutes stirring continuously. 
							Add the asafoetida, green chillies, ginger, turmeric and salt and stir over a high heat for 
							30 seconds. Add the potatoes and stir to mix the tempering evenly through the potatoes. Cook 
							for another 2–3 minutes, then sprinkle over the coriander and finish with lemon juice.
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>

			<div class="modal fade" id="bhindaBateta" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Bhinda Bateta</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<img class="card-img-top" src="./images/recipies/bhindabateta.jpg" alt="Bhinda Bateta">
							<h2>Ingredients</h2>
							<h3>For Fresh Masala</h3>
							<ul>Ginger –  2 tblspn</ul>
							<ul>Garlic – 2 tblspn</ul>
							<ul>Green Chilli – 1</ul>
							<ul>Lemon Juice – 2 tsp</ul>
							<ul>Turmeric Powder / Majal Podi – ½ tsp</ul>
							<ul>Oil- 1 tblspn</ul>
							
							<h3>For Cooking</h3>
							<ul>Ladysfinger / Okra / Vendaikai – ½ kg chopped</ul>
							<ul>Potato – 3 large chopped</ul>
							<ul>Cumin Powder / Jeera Powder -1 tsp</ul>
							<ul>Coriander Powder / Malli Podi -1 tblspn</ul>
							<ul>Chilli Powder -1 tsp</ul>
							<ul>Turmeric Powder / Manjal Podi – ½ tsp</ul>
							<ul>Mustard Seeds / Kaduku -1 tsp</ul>
							<ul>Fenugreek Seeds / Methi / Vendayam -1 tsp</ul>
							<ul>Salt to taste</ul>
							<ul>Oil-1 tblspn</ul>
							<h2>Method</h2>
							Start by making Fresh masala..Grind ginger, garlic, green chilli and turmeric together to a smooth paste. 
							Transfer to a bowl and add lemon juice and oil. Mix well..This is Fresh Masala.
							<br>
							Now make subzi. Heat oil and add mustard and fenugreek seeds. 
							Add potato and ladysfinger and mix well. Add salt and mix well.
							Now add in chilli, coriander, turmeric and cumin powder. Toss well..
							Add the fresh masala and mix well.. Cover and cook for 10-15 mins..Now open the lid and cook for 5 more minutes.
							<br>
							Serve hot with rice or roti.
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>

			<div class="modal fade" id="japaneseCurry" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Japanese Curry</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<img class="card-img-top" src="./images/recipies/japanesecurry.jpg" alt="Japanese Curry">
							<span class="badge badge-primary">Prep: 10 min</span>
							<span class="badge badge-warning">Cook: 50 min</span>
							<span class="badge badge-success">Ready in: 60 min</span>
							<p> Given to me by my best friend Masami - delicious!</p>

							<h2>Ingredients</h2>
							<ul>Half a packet of a good japanese curry <a href="./images/recipies/japanesecurrypaste.jpg"> paste</a> 
							</ul>
							<ul>chopped onions</ul>
							<ul>diced beef</ul>
							<ul>diced potatoes</ul>
							<ul>diced carrots</ul>
							<ul>(All fairly big chunks)</ul>
							<h2>Method</h2>
							<ul>High heat, fry beef.</ul>
							<ul>Add carrots, onions.</ul>
							<ul>When onions cooked add boiling water. Leave on high heat and do not close the lid.
							When you start seeing brown foamy stuff on top, scoop as much as you can out with a ladle (this should make 
							the meat more tender - if you close the lid the brown gunk dissolves into the liquid). Scooping gunk out only
							takes 3 minutes or so.</ul>
							<ul>Once no more brown gunk floats on top then put the lid on and let it cook for 20 mins or so on low heat.</ul>
							<ul>Add 1/3 of a cup of water (roughly) just to bring the temperature down a bit. Put one block of curry paste
							(i.e. half of the box) and keep mixing until it's all dissolved (make sure there are no lumps left).</ul>
							<ul>Put the lid on and let it cook for another 20 mins or so on low heat.</ul> 
							<ul>Add the potatoes and let it cook on slow heat for 30 mins or so or until the potatoes are done.</ul>
							<ul>Once the curry paste is in make sure you stir once in a while so it doesn't get stuck to the bottom. It can look a bit watery at times, if 
							you put too much water to start with, in that case just leave it cooking for a bit longer so it evaporates (but of course not too long 
							if spuds are already in).</ul>
							<ul>You can vary the cooking times a bit really, they don't matter that much, but aim for a minimum of 45 mins.</ul>
							<br>
							Serve with some rice and pickles...Yum!
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>

			<div class="modal fade" id="cheeseSauce" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Cheese Sauce</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<img class="card-img-top" src="./images/recipies/cheesesauce.jpg" alt="Cheese Sauce">
							<span class="badge badge-primary">Prep: 10 min</span>
							<span class="badge badge-warning">Cook: 10 min</span>
							<span class="badge badge-success">Ready in: 20 min</span>
							<h2>Ingredients (makes 1 pint)</h2>
							<ul>1 pint milk </ul>
							<ul>4 to 5 tablespoons cornflour </ul>
							<ul>1 block cheese of choice, grated </ul>
							<h2>Method</h2>
							<ul>Pour your desired amount of milk (how much cheese sauce you wish to have) into a cup or jug.</ul>
							<ul>Add 4 to 5 tablespoons of cornflour to the milk and mix till dissolved.</ul>
							<ul>Pour your mixture into a pan and set your hob to medium heat. Keep on stirring! (If you stop it'll go lumpy.)</ul>
							<ul>Wait until your mixture has become more difficult to stir and thickened (should be white). Turn down the heat
							and start to sprinkle in your grated cheese (it will change colour). Wait till all your cheese has melted into the sauce and stop stirring.</ul>
							<br>Pour onto your choice of food and enjoy!!
							<div class="alert alert-danger" role="alert">
								Dont stop stirring!
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
			<!-- End of Modals -->
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
	<?php require_once 'includes/footer.php'; ?>
</html>