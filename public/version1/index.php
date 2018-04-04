<!DOCTYPE html>
<html lang="en">

	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Leigh-Anne Power - Interior Design & Styling</title>
		<meta name="description" content="Leigh-Anne Power is an interior designer and stylist based in Dublin, Ireland. Leigh-Anne Power can help you redesign your existing home, dress a house for sale or help you design your home from the ground up">
		<meta name="author" content="lupodesign">
		<link rel="icon" type="image/png" href="img/leighanne-favicon.png">

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" type="text/css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" type="text/css">
		<link rel="stylesheet" href="css/creative.css" type="text/css">

		<link href='https://fonts.googleapis.com/css?family=Work+Sans:100' rel='stylesheet' type='text/css'>
		<script src="https://use.fontawesome.com/27df2756ed.js"></script>

	</head>

	<body id="page-top">
		<nav>
			<!--
			<div id="nav-left">
			<ul>
			<li>
			<a class="page-scroll" href="#about">About</a>
			</li>
			<li>
			<a class="page-scroll" href="#target-market">Services</a>
			</li>
			<li>
			<a class="page-scroll" href="#portfolio">Portfolio</a>
			</li>
			<li>
			<a class="page-scroll" href="#testimonials">Testimonials</a>
			</li>
			</ul>
			</div>-->

			<div id="nav-logo">
				<div id="nav-logo-wrapper">
					<img src="img/header/logo-no-top.jpg" id="logo" />
				</div>
			</div>

			<div id="nav-right">
				<ul>
					<li>
						<a href="https://twitter.com/leighannepower1" target="_blank"><i class="fa fa-fw fa-twitter"></i></a>
					</li>
					<li>
						<a href="https://www.facebook.com/LeighAnnePowerDesign/" target="_blank"><i class="fa fa-fw fa-facebook"></i></a>
					</li>
					<li>
						<a href="https://www.instagram.com/leighannepower/" target="_blank"><i class="fa fa-fw fa-instagram"></i></a>
					</li>

					<li>
						<a class="page-scroll" href="#contact">Contact</a>
					</li>
				</ul>
			</div>
		</nav>
		<div id="menu">
			<div id="menu-button-wrapper">
				<div id="menu-button-wrapper-2">
					<button id="menu-button">
						<i class="fa fa-bars" aria-hidden="true"></i>
					</button>
					<p id="menu-text">
						Menu
					</p>
				</div>
			</div>

			<div id="menu-items">
				<ul>
					<li>
						<a class="page-scroll" href="#about">About Me</a>
					</li>
					<li>
						<a class="page-scroll" href="#target-market">What I Do</a>
					</li>
					<li>
						<a class="page-scroll" href="#portfolio">Portfolio</a>
					</li>
					<li>
						<a class="page-scroll" href="#process">Design Process</a>
					</li>
					<li>
						<a class="page-scroll" href="#testimonials">Testimonials</a>
					</li>
					<li>
						<a href="https://twitter.com/leighannepower1" target="_blank"><i class="fa fa-fw fa-twitter"></i></a>
					</li>
					<li>
						<a href="https://www.facebook.com/LeighAnnePowerDesign/" target="_blank"><i class="fa fa-fw fa-facebook"></i></a>
					</li>
					<li>
						<a href="https://www.instagram.com/leighannepower/" target="_blank"><i class="fa fa-fw fa-instagram"></i></a>
					</li>

					<li>
						<a class="page-scroll" href="#contact">Contact</a>
					</li>
				</ul>
			</div>
		</div>

		<?php
		function getMatrix($query) {
			$servername = "localhost";
			$username = "leighann_site";
			$password = "Insomnia16";
			$dbname = "leighann_site";

			// Create connection
			$conn = mysqli_connect($servername, $username, $password, $dbname);

			// Check connection
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}

			// $query = "SELECT * FROM `header-pics`";

			if ($result = mysqli_query($conn, $query)) {
				$matrix = array();
				while ($row = mysqli_fetch_assoc($result)) {
					array_push($matrix, $row);
				}
				mysqli_free_result($result);
				return $matrix;
			} else {
				echo "<br>Query returned no results <br>";
				return false;
			}
		}

		$query = "SELECT * FROM `header-pics` WHERE active = 1 AND orientation=\"landscape\"";
		$landscapeMatrix = getMatrix($query);
		$query = "SELECT * FROM `header-pics` WHERE active = 1 AND orientation=\"portrait\"";
		$portraitMatrix = getMatrix($query);
		$first = true;
		?>
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner" role="listbox">
				<?
				for ($i = 0; $i < count($landscapeMatrix); $i++) {
					if ($i == 0) {
						echo '<div class="item active">';

					} else {
						echo '<div class="item">';
					}
					echo '<img data-portrait="' . $portraitMatrix[$i]['path'] . '" data-landscape="' . $landscapeMatrix[$i]['path'] . '"></div>';
				}
				?>
				<!--
				<div class="item active">
				<img data-portrait="img/header/chair9x11.jpg" data-landscape="img/header/bedroom22x9.jpg">
				</div>

				<div class="item">
				<img data-portrait="img/header/clinic9x11.jpg" data-landscape="img/header/study-22x9.jpg">
				</div>

				<div class="item">
				<img data-portrait="img/header/bedroom9x11.jpg" data-landscape="img/header/chairs-22x9.jpg">
				</div>-->

				</div>

				<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> <!--<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>--> <span class="sr-only">Previous</span> </a>
				<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> <!--<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>--> <span class="sr-only">Next</span> </a>
			</div>

			<section class="container-fluid larger-container" id="about">
				<h1 class="text-center">Leigh-Anne Power<br><span class="sub-title">Interior Design & Styling</span></h1>
				<div class="row">
					<div class="col-sm-6 equal-height">
						<h2>About Leigh-Anne </h2>
						<p>
							I am from Dublin, Ireland and I started my company Leigh-Anne Power Design in 2014. I am an interior designer and stylist, and I also dress properties for sale or rent. I am extremely lucky to do what I love. I believe in adding soul to a room with unusual pieces that form interest for the eye.
						</p>
					</div>

					<div class="col-sm-6 equal-height">
						<h2>My Design Ethos </h2>
						<p>
							As you can see from my portfolio I do not use just one design aesthetic. I instead work completely differently with each individual client to create a design exclusive to them as a person. Working in tandem with my clients delivers a distinct style for each property.
						</p>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6 col-sm-offset-3 center-flex">
						<img class="center-block" src="img/kiri-headshot.jpg" id="headshot" />

					</div>
					<div class="col-sm-6 equal-height">
						<h2>Comfort and Beauty </h2>
						<p>
							I do not wish to produce a design that resembles an unlivable magazine, I want to create a space that you love and is comfortable, reflecting your personality. I want your space to feel like it flows from you. Let's be original!.
						</p>
					</div>
					<div class="col-sm-6 equal-height">
						<h2>Hassle Free</h2>
						<p>
							I project manage every aspect of the renovation, so my clients need not worry about the process. I orchestrate material procurement and delivery, to ensure everything moves efficiently.
						</p>
					</div>
				</div>

			</section>

			<!-- Target Market -->
			<section id="target-market" class="container-fluid larger-container">
				<h1 class="text-left-lg">How I Can Help</h1>

				<!-- Business -->
				<div class="row wow fadeIn" data-wow-delay=".3s">
					<h2 class="decorated"><span>Business</span></h2>
					<div class="col-lg-6">
						<img class="img-responsive" src="img/filler_section/saloon.jpg" />
					</div>
					<div class="col-lg-6 wow fadeIn" data-wow-delay="0.6s">
						<p class="lg-no-margin-top">
							<strong>Your place of business is a statement of the quality of the service that your customers can expect. Ensure this statement reflects the high standards of your business and customers will love coming back.</strong>
						</p>

						<p class="muted">
							'Creating the right look for your place of business is no easy task. The balance between creating a formal and professional environment, which gives your customers confidence in the service you provide, and a relaxing atmosphere in which your staff can excel is of utmost importance. I have experience in working with business-owners from a variety of fields, and am always excited to give your business a brand new look.'
						</p>

					</div>
				</div>

				<!-- Home -->
				<div class="row wow fadeIn" data-wow-delay=".3s">
					<h2 class="decorated"><span>Home</span></h2>
					<div class="col-lg-6 col-lg-push-6">
						<img class="img-responsive" src="img/filler_section/kids.jpg" />
					</div>
					<div class="col-lg-6 col-lg-pull-6 wow fadeIn" data-wow-delay=".6s">
						<p class="lg-no-margin-top">
							<strong>Your home is the most important place in the world, but over time we all grow tired and need an update. Create the beautiful home you have always wanted with the help of Leigh-Anne's expertise.</strong>
						</p>

						<p class="muted">
							more info regarding house jobsHouse content..House content..House content..House content..House content..House content..House content..House content..
						</p>
					</div>
				</div>

				<!-- House Dressing -->
				<div class="row wow fadeIn" data-wow-delay=".3s">
					<h2 class="decorated"><span>Dress for Sale</span></h2>
					<div class="col-lg-6">
						<img class="img-responsive" src="img/filler_section/couch.jpg" />
					</div>
					<div class="col-lg-6 wow fadeIn" data-wow-delay=".6s">
						<p class="lg-no-margin-top">
							<strong>I dont really know what this is but you mentioned it is what you wanted to focus on! So we need some good content here!</strong>
						</p>

						<p class="muted">
							more info regarding house jobsHouse content..House content..House content..House content..House content..House content..House content..House content..
						</p>
					</div>
				</div>

			</section>

			<!-- Portfolio Grid Section -->

			<div id="portfolio">
				<div class="container">
					<div class="row">
						<div class="col-lg-10 col-lg-offset-1 text-center">
							<h1 class="text-center">Portfolio</h1>
							<p>
								Everyone's taste is different, so diversity is a key aspect of the modern interior designer.
								<br>
								Please click into any of the images to see more photos of the project.
							</p>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-4 portfolio-item">
							<a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
							<div class="caption">
								<div class="caption-content">
									<i class="fa fa-search-plus fa-3x"></i>
								</div>
							</div> <img src="img/portfolio/circus.png" class="img-responsive" alt=""> </a>
							<p class="description">
								<em>'Home Renovation'</em>
							</p>
						</div>
						<div class="col-sm-4 portfolio-item">
							<a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
							<div class="caption">
								<div class="caption-content">
									<i class="fa fa-search-plus fa-3x"></i>
								</div>
							</div> <img src="img/portfolio/circus.png" class="img-responsive" alt=""> </a>
							<p class="description">
								<em>'Home Renovation'</em>
							</p>
						</div>
						<div class="col-sm-4 portfolio-item">
							<a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
							<div class="caption">
								<div class="caption-content">
									<i class="fa fa-search-plus fa-3x"></i>
								</div>
							</div> <img src="img/portfolio/circus.png" class="img-responsive" alt=""> </a>
							<p class="description">
								<em>'Home Renovation'</em>
							</p>
						</div>
						<div class="col-sm-4 portfolio-item">
							<a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
							<div class="caption">
								<div class="caption-content">
									<i class="fa fa-search-plus fa-3x"></i>
								</div>
							</div> <img src="img/portfolio/circus.png" class="img-responsive" alt=""> </a>
							<p class="description">
								<em>'Home Renovation'</em>
							</p>
						</div>
						<div class="col-sm-4 portfolio-item">
							<a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
							<div class="caption">
								<div class="caption-content">
									<i class="fa fa-search-plus fa-3x"></i>
								</div>
							</div> <img src="img/portfolio/circus.png" class="img-responsive" alt=""> </a>
							<p class="description">
								<em>'Home Renovation'</em>
							</p>
						</div>
						<div class="col-sm-4 portfolio-item">
							<a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
							<div class="caption">
								<div class="caption-content">
									<i class="fa fa-search-plus fa-3x"></i>
								</div>
							</div> <img src="img/portfolio/circus.png" class="img-responsive" alt=""> </a>
							<p class="description">
								<em>'Home Renovation'</em>
							</p>
						</div>
					</div>
				</div>
			</div>

			<!-- Process -->
			<div class="container-fluid larger-container" id="process">
				<h1 class="text-center">Interior Design Process</h1>
				<p class="text-center">
					Three simple steps to creating the beautiful interior you have always wanted.
				</p>
				<div class="row">
					<div class="col-md-4">
						<h2>Find a Design you will Love </h2>
						<img class="img-responsive" src="img/process/purple-couch.jpg">
						<p>
							<strong>** Need Content ** </strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc egestas arcu ac odio mattis, eu fringilla felis cursus. Phasellus eu fringilla lacus. Proin vel consectetur leo, nec vehicula erat. Mauris nec imperdiet purus, eu laoreet dolor. Ut accumsan eu risus ac auctor. Sed id dapibus justo, vel consectetur enim. Nam faucibus justo risus, ut laoreet odio euismod non.
						</p>
					</div>
					<div class="col-md-4">
						<h2>Build</h2>
						<img class="img-responsive" src="img/process/navy-chairs.jpg">
						<p>
							<strong>** Need Content ** </strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc egestas arcu ac odio mattis, eu fringilla felis cursus. Phasellus eu fringilla lacus. Proin vel consectetur leo, nec vehicula erat. Mauris nec imperdiet purus, eu laoreet dolor. Ut accumsan eu risus ac auctor. Sed id dapibus justo, vel consectetur enim. Nam faucibus justo risus, ut laoreet odio euismod non.
						</p>
					</div>
					<div class="col-md-4">
						<h2>Soemthing Else?</h2>
						<img class="img-responsive" src="img/process/grey-living.jpg">
						<p>
							<strong>** Need Content ** </strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc egestas arcu ac odio mattis, eu fringilla felis cursus. Phasellus eu fringilla lacus. Proin vel consectetur leo, nec vehicula erat. Mauris nec imperdiet purus, eu laoreet dolor. Ut accumsan eu risus ac auctor. Sed id dapibus justo, vel consectetur enim. Nam faucibus justo risus, ut laoreet odio euismod non.
						</p>
					</div>
				</div>
			</div>

			<!-- Testimonials -->
			<section id="testimonials" class="container">
				<h1>Testimonials</h1>
				<div class="testimonial">
					<div class="row">
						<div class="col-md-4">
							<img src="img/testimonial/salon.jpg" class="img-responsive customers-pic">
						</div>
						<div class="col-md-8">
							<h2 class="decorated"><span>Beauty Clinic Renovation</span></h2>
							<p>
								<strong>"Everyone of my clients has been wowed by the transformation!"</strong>
							</p>
							<p>
								"Leigh-Anne was recommended to me as I was looking to give my clinic a new face lift. Since the very first day Leigh-Anne made me feel at ease, listened to all my suggestions and gave me that extra inspiration just when I needed it.
							</p>
							<p>
								In one day my clinic was transformed. Leigh-Anne was on hand to put everything in place when it arrived, and together with her team, she had me back at work within no time. She has amazing contacts and ideas, and I would highly recommend her services."
							</p>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6">
							<p>
								<strong>Sharon - Alethea </strong>
							</p>
						</div>
						<div class="col-sm-6 text-right">
							<p>
								<button type="button" data-toggle="modal" data-target="#portfolioModal1" class="testimonial-to-portfolio">
									View Project
								</button>
							</p>
						</div>
					</div>
				</div>

				<div class="testimonial">
					<div class="row">
						<div class="col-md-4">
							<img src="img/testimonial/sinead.jpg" class="img-responsive customers-pic" >
						</div>
						<div class="col-md-8">
							<h2 class="decorated"><span>Living Room Redesign</span></h2>
							<p>
								<strong>"Highly recommended, 10/10!"</strong>
							</p>
							<p>
								"Thanks to my Leigh-Anne, she has transformed my living room into somewhere I absolutely love spending time!
								She is very interactive and keeps you as involved as you want to and provides great guidance on the design and implementation process.
							</p>
							<p>
								She has great vision and will make your room come to life, no matter what your budget is. Without her my room would never have transformed into what it is today!"
							</p>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6">
							<p>
								<strong>Sinead - Clonsilla </strong>
							</p>
						</div>
						<div class="col-sm-6 text-right">
							<p>
								<button type="button" data-toggle="modal" data-target="#portfolioModal2" class="testimonial-to-portfolio">
									View Project
								</button>
							</p>
						</div>
					</div>
				</div>

				<div class="testimonial">
					<div class="row">
						<div class="col-md-4">
							<img src="img/testimonial/maeve.jpg" class="img-responsive customers-pic">
						</div>
						<div class="col-md-8">
							<h2 class="decorated"><span>Kitchen Redesign</span></h2>
							<p>
								<strong>"A highly professional interior designer!"</strong>
							</p>
							<p>
								She has a gift for form and shape. She can visualise what's possible and communicate that dream to you. Her passion for what's possible in a space is infectious and I enjoyed the excitement of designing our kitchen along side her.
								Our kitchen is bright, warm inviting and everything we asked for!
								We would of never got the beautiful unique, and fun kitchen if we designed it ourselves - we would of played it safe and got the same old plain kitchen!
							</p>
							<p>
								Anyone thinking of hiring a interior designer I can honestly say you can't get more insightful and talented than Leigh-Anne.
								You get the "ah can't believe this is my house " excited feeling every morning you walk into the space.
							</p>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6">
							<p>
								<strong>Maeve - Blanchardstown </strong>
							</p>
						</div>
						<div class="col-sm-6 text-right">
							<p>
								<button type="button" data-toggle="modal" data-target="#portfolioModal3" class="testimonial-to-portfolio">
									View Project
								</button>
							</p>
						</div>
					</div>
				</div>

				<div class="testimonial">
					<div class="row">
						<div class="col-md-4">
							<img src="img/testimonial/agnes.jpg" class="img-responsive customers-pic">
						</div>
						<div class="col-md-8">
							<h2 class="decorated"><span>Hair Salon</span></h2>
							<p>
								<strong>"Exactly what I was looking for!"</strong>
							</p>
							<p>
								Leighanne is a fantastic interior designer. She understood exactly what I was looking for. She took the hassle out of everything. She sourced everything and just made life so easy.
							</p>
							<p>
								I would highly recommend Leigh-Anne to anyone looking for an interior designer
							</p>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6">
							<p>
								<strong>Agnes Burke - Salon Owner </strong>
							</p>
						</div>

						<div class="col-sm-6 text-right">
							<p>
								<button type="button" data-toggle="modal" data-target="#portfolioModal4" class="testimonial-to-portfolio">
									View Project
								</button>
							</p>
						</div>

					</div>
				</div>
			</section>

			<!-- Contact Section -->
			<section id="contact" class="container-fluid">
				<h1>Contact Me</h1>
				<div class="row">
					<div class="col-lg-6 col-lg-offset-3">
						<p>
							Please don't hesitate in contacting me with any questions or comments you may have.
							<br>
							You can get in touch using the email form below, or by phone using the number at the end of the site
						</p>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-10 col-lg-offset-1">
						<form>
							<div class="row">
								<div class="col-md-6">
									<p class="field-title-text">
										First Name
									</p>
									<p>
										<input type="text" name="firstName" id="firstName" placeholder="First Name">
									</p>
								</div>
								<div class="col-md-6">

									<p class="field-title-text">
										Last Name
									</p>
									<p>
										<input type="text" name="lastName" id="lastName" placeholder="Last Name">
									</p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<p class="field-title-text">
										Phone Number
									</p>
									<p>
										<input type="number" name="phoneNumer" id="phoneNumber" placeholder="0862554849">
									</p>
								</div>
								<div class="col-md-6">
									<p class="field-title-text">
										Email Address
									</p>
									<p>
										<input type="email" name="email" id="email" placeholder="you@hotmail.com">
									</p>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-12">
									<p class="field-title-text">
										Enter Your Message:
									</p>
									<p>
										<textarea name="message" id="message" placeholder="Your Message to Leigh-Anne"></textarea>
									</p>

									<p>
										<button type="submit">
											Submit
										</button>
									</p>
								</div>
							</div>
						</form>
					</div>
				</div>
			</section>

			<!-- Footer -->
			<footer>
				<div class="footer-above">
					<div class="container">
						<div class="row">
							<div class="footer-col col-md-4">
								<h2>Location</h2>
								<p>
									Your Address
									<br>
									Adress Line 2
									<br>
									Dublin
									<br>
									Ireland
								</p>
							</div>
							<div class="footer-col col-md-4">
								<h2>Connect</h2>
								<ul class="list-inline">
									<li>
										<a href="https://www.facebook.com/LeighAnnePowerDesign/" class="btn-social btn-outline" target="_blank"><i class="fa fa-fw fa-facebook"></i></a>
									</li>
									<li>
										<a href="https://twitter.com/leighannepower1" class="btn-social btn-outline" target="_blank"><i class="fa fa-fw fa-twitter"></i></a>
									</li>
									<li>
										<a href="https://www.instagram.com/leighannepower/" class="btn-social btn-outline" target="_blank"><i class="fa fa-fw fa-instagram"></i></a>
									</li>
								</ul>
								<ul class="list-inline">
									<li>
										<a href="https://www.linkedin.com/in/leigh-anne-power-551857105" class="btn-social btn-outline" target="_blank"><i class="fa fa-fw fa-linkedin"></i></a>
									</li>
									<li>
										<a href="https://www.pinterest.com/leighannepower/" class="btn-social btn-outline" target="_blank"><i class="fa fa-fw fa-pinterest"></i></a>
									</li>
									<li>
										<a href="mailto:leighanne@leighannepower.com" target="_top" class="btn-social btn-outline" target="_blank"><i class="fa fa-fw fa-envelope-o"></i></a>
									</li>

								</ul>
							</div>
							<div class="footer-col col-md-4">
								<h2>Get In Touch</h2>
								<p>
									086 230 33 11
								</p>
								<p>
									<a href="mailto:leighanne@leighannepower.com">leighanne@leighannepower.com</a>
								</p>
							</div>
						</div>
					</div>
				</div>

				<div class="footer-below">
					<div class="container">
						<div class="row">
							<div class="col-md-6">
								<p>
									Copyright &copy; Leigh-Anne Power 2016
								</p>
							</div>
							<div class="col-md-6">
								<p>
									Designed by <a href="http://www.lupowebdesign.ie" target="_blank">Lupo Web Design</a>
								</p>
							</div>
						</div>
					</div>
				</div>
			</footer>

			<!-- Portfolio Modals -->
			<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
				<div class="modal-content">
					<div class="close-modal" data-dismiss="modal">
						<div class="lr">
							<div class="rl"></div>
						</div>
					</div>
					<div class="modal-body">
						<div class="container">
							<div class="row">
								<div class="col-lg-10 col-lg-offset-1">
									<h3>Portfolio 1</h3>
									<div class="portfolio-carousel"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
				<div class="modal-content">
					<div class="close-modal" data-dismiss="modal">
						<div class="lr">
							<div class="rl"></div>
						</div>
					</div>
					<div class="modal-body">
						<div class="container">
							<div class="row">
								<div class="col-lg-10 col-lg-offset-1">
									<h3>Portfolio 2</h3>
									<div class="portfolio-carousel"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
				<div class="modal-content">
					<div class="close-modal" data-dismiss="modal">
						<div class="lr">
							<div class="rl"></div>
						</div>
					</div>
					<div class="modal-body">
						<div class="container">
							<div class="row">
								<div class="col-lg-10 col-lg-offset-1">
									<h3>Portfolio 3</h3>
									<div class="portfolio-carousel"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
				<div class="modal-content">
					<div class="close-modal" data-dismiss="modal">
						<div class="lr">
							<div class="rl"></div>
						</div>
					</div>
					<div class="container">
						<div class="row">
							<div class="col-lg-10 col-lg-offset-1">
								<div class="modal-body">
									<h3>Portfolio 4</h3>
									<div class="portfolio-carousel"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
				<div class="modal-content">
					<div class="close-modal" data-dismiss="modal">
						<div class="lr">
							<div class="rl"></div>
						</div>
					</div>
					<div class="modal-body">
						<div class="container">
							<div class="row">
								<div class="col-lg-10 col-lg-offset-1">
									<h3>Portfolio 5</h3>
									<div class="portfolio-carousel"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
				<div class="modal-content">
					<div class="close-modal" data-dismiss="modal">
						<div class="lr">
							<div class="rl"></div>
						</div>
					</div>
					<div class="modal-body">
						<div class="container">
							<div class="row">
								<div class="col-lg-10 col-lg-offset-1">
									<h3>Portfolio 6</h3>
									<div class="portfolio-carousel"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Success Modal -->
			<div id="success" class="modal fade" role="dialog">
				<div class="modal-dialog modal-lg">
					<!-- Modal content-->
					<div class="modal-content">
						<div class="modal-header" id="success-head">
							<button type="button" class="close" data-dismiss="modal">
								&times;
							</button>
							<h3 class="modal-title text-center">Success</h3>
						</div>
						<div class="modal-body">
							<p>
								Your Email has been sent.
							</p>
							<p>
								<strong>A confirmation email has been sent to your address.
							</p>
							<p>
								Please check your trash folder and add the sender to your address book so Leigh-Anne's response won't end up in your trash.
							</p>
							</strong>
							<p>
								Thank You!
							</p>
						</div>
					</div>
				</div>
			</div>

			<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

			<!-- Bootstrap Core JavaScript -->
			<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js"></script>

			<!-- Plugin JavaScript -->
			<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
			<script src="http://maps.googleapis.com/maps/api/js"></script>

			<!-- Custom Theme JavaScript -->
			<script src="js/creative.js"></script>
			<script src="js/custom.js "></script>
			<script src="js/email-validation.js"></script>

	</body>

</html>
