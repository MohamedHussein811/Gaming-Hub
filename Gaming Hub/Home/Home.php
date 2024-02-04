<!DOCTYPE html>

<head>
	<?php
	session_start();
	?>
	<title>Gaming Hub</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="Gaming Hub Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<!--Icon-->
	<link rel="icon" type="image/x-icon" href="../Images/best-ps4-games.jpg">
	<!-- bootstrap-css -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<!--// bootstrap-css -->
	<!-- css -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!--// css -->
	<!-- font-awesome icons -->
	<link href="css/font-awesome.css" rel="stylesheet">
	<!-- //font-awesome icons -->
	<!-- portfolio -->
	<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="all">
	<!-- //portfolio -->
	<!-- font -->
	<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i"
		rel="stylesheet">
	<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300'
		rel='stylesheet' type='text/css'>
	<!-- //font -->
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({ scrollTop: $(this.hash).offset().top }, 1000);
			});
		});
	</script>
	<style>
		/*Pre Loader*/
		.absCenter {
			width: 100%;
			height: 100%;
			position: fixed;
			top: 50%;
			left: 50%;
			background-image: radial-gradient(circle farthest-corner at center, #3C4B57 0%, #1C262B 100%);
			transform: translate(-50%, -50%);
			z-index: 1;
		}

		.loader {
			position: absolute;
			top: calc(50% - 32px);
			left: calc(50% - 32px);
			width: 64px;
			height: 64px;
			border-radius: 50%;
			perspective: 800px;
			z-index: 2;
		}

		.inner {
			position: absolute;
			box-sizing: border-box;
			width: 100%;
			height: 100%;
			border-radius: 50%;
		}

		.inner.one {
			left: 0%;
			top: 0%;
			animation: rotate-one 1s linear infinite;
			border-bottom: 3px solid #EFEFFA;
		}

		.inner.two {
			right: 0%;
			top: 0%;
			animation: rotate-two 1s linear infinite;
			border-right: 3px solid #EFEFFA;
		}

		.inner.three {
			right: 0%;
			bottom: 0%;
			animation: rotate-three 1s linear infinite;
			border-top: 3px solid #EFEFFA;
		}

		@keyframes rotate-one {
			0% {
				transform: rotateX(35deg) rotateY(-45deg) rotateZ(0deg);
			}

			100% {
				transform: rotateX(35deg) rotateY(-45deg) rotateZ(360deg);
			}
		}

		@keyframes rotate-two {
			0% {
				transform: rotateX(50deg) rotateY(10deg) rotateZ(0deg);
			}

			100% {
				transform: rotateX(50deg) rotateY(10deg) rotateZ(360deg);
			}
		}

		@keyframes rotate-three {
			0% {
				transform: rotateX(35deg) rotateY(55deg) rotateZ(0deg);
			}

			100% {
				transform: rotateX(35deg) rotateY(55deg) rotateZ(360deg);
			}
		}
	</style>
	<script>
		//Reset the scroll after refreshing the page
		history.scrollRestoration = "manual";

		$(window).on('beforeunload', function () {
			$(window).scrollTop(0);
		});
		//Pre-loader
		$(window).on("load", function () {
			$(".absCenter").fadeOut("slow");
		});
	</script>
</head>

<body>
	<!--Pre-loader-->
	<div class="absCenter">
		<div class="loader">
			<div class="inner one"></div>
			<div class="inner two"></div>
			<div class="inner three"></div>
		</div>
	</div>
	<!-- banner -->
	<div class="banner">
		<div class="agileinfo-dot">
			<div class="agileits-logo">
				<h1><a href="Home.php">Gaming <span>Hub</span></a></h1>
			</div>
			<div class="header-top">
				<div class="container">
					<div class="header-top-info">
						<nav class="navbar navbar-default">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
									data-target="#bs-example-navbar-collapse-1">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>

							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
								<nav>
									<?php
									if (!isset($_SESSION["Email"])) {
										echo '						
									<ul class="nav navbar-nav">
										<li class="active"><a href="Home.php">Home</a></li>
										<li><a href="#about" class="scroll">About</a></li>
										<li><a href="../Shop/Shop.php">Store</a></li>
										<li><a href="#team" class="scroll">Founder</a></li>
										<li><a href="#mail" class="scroll">Mail Us</a></li>
										<li><a href="../Sign in/Sign in.php">Sign in</a></li>
										<li><a href="../Sign up/Sign up.php">Sign up</a></li>
									</ul>
									';
									} else {
										echo '
									<ul class="nav navbar-nav">
									<li class="active"><a href="Home.php">Home</a></li>
									<li><a href="#about" class="scroll">About</a></li>
									<li><a href="../Shop/Shop.php">Store</a></li>
									<li><a href="#team" class="scroll">Founder</a></li>
									<li><a href="#mail" class="scroll">Mail Us</a></li>
										<li><a href="../Sign in/Logout.php">Sign Out</a></li>
									</ul> ';
									}
									?>

								</nav>
							</div>
							<!-- /.navbar-collapse -->
						</nav>
					</div>
				</div>
			</div>
			<div class="w3layouts-banner-info">
				<div class="container">
					<div class="w3layouts-banner-slider">
						<div class="w3layouts-banner-top-slider">
							<div class="slider">
								<div class="callbacks_container">
									<ul class="rslides callbacks callbacks1" id="slider4">
										<li>
											<div class="banner_text">
												<h3>Selling</h3>
												<p>Sell your unused PS video games.</p>
												<div class="w3-button">
													<a href="#" data-toggle="modal" data-target="#myModal">Read More</a>
												</div>
											</div>
										</li>
										<li>
											<div class="banner_text">
												<h3>Purchasing</h3>
												<p>Purchase Video games in one click.</p>
												<div class="w3-button">
													<a href="#" data-toggle="modal" data-target="#myModal">Read More</a>
												</div>
											</div>
										</li>
									</ul>
								</div>
								<div class="clearfix"> </div>
								<script src="js/responsiveslides.min.js"></script>
								<script>
									// You can also use "$(window).load(function() {"
									$(function () {
										// Slideshow 4
										$("#slider4").responsiveSlides({
											auto: true,
											pager: true,
											nav: true,
											speed: 500,
											namespace: "callbacks",
											before: function () {
												$('.events').append("<li>before event fired.</li>");
											},
											after: function () {
												$('.events').append("<li>after event fired.</li>");
											}
										});

									});
								</script>
								<!--banner Slider starts Here-->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //banner -->
	<!-- about -->
	<div class="about" id="about">
		<div class="container">
			<div class="welcome">
				<div class="agileits-title">
					<h2>Welcome</h2>
				</div>
			</div>
			<div class="about-w3lsrow">
				<div class="col-md-7 col-sm-7 w3about-img">
					<div class="w3about-text">
						<h5 class="w3l-subtitle">- About Us</h5>
						<p>Our aim is to facilitate the buying and selling process for users in a safe way.</p>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //about -->
	<!-- markets -->
	<div class="markets" id="markets">
		<div class="container">
			<div class="agileits-title">
				<h3>Our Services</h3>
			</div>
			<div class="markets-grids">
				<div class="col-md-4 w3ls-markets-grid">
					<div class="agileits-icon-grid">
						<div class="icon-left">
							<i class="fa fa-gamepad" aria-hidden="true"></i>
						</div>
						<div class="icon-right">
							<h5>Buying/Selling</h5>
							<p>This Website offers you to buy/sell your old/unused games with your price and
								facilitating the payment process in a safe way.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-4 w3ls-markets-grid">
					<div class="agileits-icon-grid">
						<div class="icon-left">
							<i class="fa fa-trophy" aria-hidden="true"></i>
						</div>
						<div class="icon-right">
							<h5>Certificate</h5>
							<p>This website idea got a certificate of appreciation from MSA University Under the
								supervision of Dr. Nehal Mohamed and Prof. Ali Bastawesy .</p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-4 w3ls-markets-grid">
					<div class="agileits-icon-grid">
						<div class="icon-left">
							<i class="fa fa-user" aria-hidden="true"></i>
						</div>
						<div class="icon-right">
							<h5>Security</h5>
							<p>This site is completely secure and the payment processes are carried out very accurately
								to prevent any theft or technical errors.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-4 w3ls-markets-grid">
					<div class="agileits-icon-grid">
						<div class="icon-left">
							<i class="fa fa-thumbs-up" aria-hidden="true"></i>
						</div>
						<div class="icon-right">
							<h5>Feedback</h5>
							<p>We Care about your feedback, Please give us your feedback via this <a href="#"
									style="color:orange; text-decoration:none;">link.</a></p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-4 w3ls-markets-grid">
					<div class="agileits-icon-grid">
						<div class="icon-left">
							<i class="fa fa-comments" aria-hidden="true"></i>
						</div>
						<div class="icon-right">
							<h5>ChatBot</h5>
							<p>We offer a ChatBot to contact with our AI machine to ask for anything in this website.
							</p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-4 w3ls-markets-grid">
					<div class="agileits-icon-grid">
						<div class="icon-left">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</div>
						<div class="icon-right">
							<h5>Mail Us</h5>
							<p>Facing an issue while using Gaming Hub? Contact us at comingsoon@gmail.com</p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //markets -->
	<!-- portfolio -->
	<div class="portfolio" id="gallery">
		<div class="container">
			<div class="agileits-title">
				<h3>Our Games</h3>
				<p style="text-align:center;">Here is a quick sample of our games</p>
			</div>
			<ul class="simplefilter w3layouts agileits">
				<li class="active w3layouts agileits" data-filter="all">All</li>
				<li class="w3layouts agileits" data-filter="1">Play Station 5</li>
				<li class="w3layouts agileits" data-filter="2">Play Station 4</li>
				<li class="w3layouts agileits" data-filter="3">XBox</li>
				<li class="w3layouts agileits" data-filter="4">Nintendo</li>

			</ul>
			<div class="filtr-container w3layouts agileits">
				<div class="filtr-item w3layouts agileits portfolio-t" data-category="1"
					data-sort="SpiderManMilesMorales">
					<a href="../Images/Shop/SpiderManMilesMorales.jpg"
						class="b-link-stripe w3layouts agileits b-animate-go thickbox">
						<figure>
							<img src="../Images/Shop/SpiderManMilesMorales.jpg"
								class="img-responsive w3layouts agileits" alt="Gaming Hub">
							<figcaption>
								<h3>Gaming <span>Hub</span></h3>
							</figcaption>
						</figure>
					</a>
				</div>

				<div class="filtr-item w3layouts agileits portfolio-t" data-category="1" data-sort="TheLastOfUsPart1">
					<a href="../Images/Shop/TheLastOfUsPart1.jpg"
						class="b-link-stripe w3layouts agileits b-animate-go thickbox">
						<figure>
							<img src="../Images/Shop/TheLastOfUsPart1.jpg" class="img-responsive w3layouts agileits"
								alt="Gaming Hub">
							<figcaption>
								<h3>Gaming <span>Hub</span></h3>
							</figcaption>
						</figure>
					</a>
				</div>

				<div class="filtr-item w3layouts agileits portfolio-t" data-category="2" data-sort="BattleField2042">
					<a href="../Images/Shop/BattleField2042.jpg"
						class="b-link-stripe w3layouts agileits b-animate-go thickbox">
						<figure>
							<img src="../Images/Shop/BattleField2042.jpg" class="img-responsive w3layouts agileits"
								alt="Gaming Hub">
							<figcaption>
								<h3>Gaming <span>Hub</span></h3>
							</figcaption>
						</figure>
					</a>
				</div>

				<div class="filtr-item w3layouts agileits portfolio-t" data-category="2" data-sort="FIFA23">
					<a href="../Images/Shop/FIFA23.jpg" class="b-link-stripe w3layouts agileits b-animate-go thickbox">
						<figure>
							<img src="../Images/Shop/FIFA23.jpg" class="img-responsive w3layouts agileits"
								alt="Gaming Hub">
							<figcaption>
								<h3>Gaming <span>Hub</span></h3>
							</figcaption>
						</figure>
					</a>
				</div>

				<div class="filtr-item w3layouts agileits portfolio-t" data-category="2" data-sort="GodOfWarRagnarok">
					<a href="../Images/Shop/GodOfWarRagnarok.jpg"
						class="b-link-stripe w3layouts agileits b-animate-go thickbox">
						<figure>
							<img src="../Images/Shop/GodOfWarRagnarok.jpg" class="img-responsive w3layouts agileits"
								alt="Gaming Hub">
							<figcaption>
								<h3>Gaming <span>Hub</span></h3>
							</figcaption>
						</figure>
					</a>
				</div>

				<div class="filtr-item w3layouts agileits portfolio-t" data-category="2" data-sort="GTAV">
					<a href="../Images/Shop/GTAV.jpg" class="b-link-stripe w3layouts agileits b-animate-go thickbox">
						<figure>
							<img src="../Images/Shop/GTAV.jpg" class="img-responsive w3layouts agileits"
								alt="Gaming Hub">
							<figcaption>
								<h3>Gaming <span>Hub</span></h3>
							</figcaption>
						</figure>
					</a>
				</div>

				<div class="filtr-item w3layouts agileits portfolio-t" data-category="2" data-sort="HogwartsLegacy">
					<a href="../Images/Shop/HogwartsLegacy.jpg"
						class="b-link-stripe w3layouts agileits b-animate-go thickbox">
						<figure>
							<img src="../Images/Shop/HogwartsLegacy.jpg" class="img-responsive w3layouts agileits"
								alt="Gaming Hub">
							<figcaption>
								<h3>Gaming <span>Hub</span></h3>
							</figcaption>
						</figure>
					</a>
				</div>

				<div class="filtr-item w3layouts agileits portfolio-t" data-category="2" data-sort="RedDead2">
					<a href="../Images/Shop/RedDead2.jpg"
						class="b-link-stripe w3layouts agileits b-animate-go thickbox">
						<figure>
							<img src="../Images/Shop/RedDead2.jpg" class="img-responsive w3layouts agileits"
								alt="Gaming Hub">
							<figcaption>
								<h3>Gaming <span>Hub</span></h3>
							</figcaption>
						</figure>
					</a>
				</div>

				<div class="filtr-item w3layouts agileits portfolio-t" data-category="3" data-sort="HaloInfinite">
					<a href="../Images/Shop/HaloInfinite.jpg"
						class="b-link-stripe w3layouts agileits b-animate-go thickbox">
						<figure>
							<img src="../Images/Shop/HaloInfinite.jpg" class="img-responsive w3layouts agileits"
								alt="Gaming Hub">
							<figcaption>
								<h3>Gaming <span>Hub</span></h3>
							</figcaption>
						</figure>
					</a>
				</div>

				<div class="filtr-item w3layouts agileits portfolio-t" data-category="3" data-sort="XBoxCollection">
					<a href="../Images/Shop/XBoxCollection.jpg"
						class="b-link-stripe w3layouts agileits b-animate-go thickbox">
						<figure>
							<img src="../Images/Shop/XBoxCollection.jpg" class="img-responsive w3layouts agileits"
								alt="Gaming Hub">
							<figcaption>
								<h3>Gaming <span>Hub</span></h3>
							</figcaption>
						</figure>
					</a>
				</div>

				<div class="filtr-item w3layouts agileits portfolio-t" data-category="3" data-sort="FridayThe13Th">
					<a href="../Images/Shop/FridayThe13Th.jpeg"
						class="b-link-stripe w3layouts agileits b-animate-go thickbox">
						<figure>
							<img src="../Images/Shop/FridayThe13Th.jpeg" class="img-responsive w3layouts agileits"
								alt="Gaming Hub">
							<figcaption>
								<h3>Gaming <span>Hub</span></h3>
							</figcaption>
						</figure>
					</a>
				</div>

				<div class="filtr-item w3layouts agileits portfolio-t" data-category="4" data-sort="SuperMario">
					<a href="../Images/Shop/SuperMario.jpg"
						class="b-link-stripe w3layouts agileits b-animate-go thickbox">
						<figure>
							<img src="../Images/Shop/SuperMario.jpg" class="img-responsive w3layouts agileits"
								alt="Gaming Hub">
							<figcaption>
								<h3>Gaming <span>Hub</span></h3>
							</figcaption>
						</figure>
					</a>
				</div>

				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!-- //portfolio -->
	<!-- modal -->
	<div class="modal about-modal fade" id="myModal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
							aria-hidden="true">&times;</span></button>
					<h4 class="modal-title">Games <span>Hub</span></h4>
				</div>
				<div class="modal-body">
					<div class="agileits-w3layouts-info">
						<img src="../Images/Home/best-ps4-games.jpg" alt="" />
						<p>Our Website offers for you to Buy/Sell PS5, PS4, Used PS4, Xbox One and Nintendo Switch games
							in Egypt, With the best prices and free delivery.<br>What are you waiting for? <a
								href="../Shop/Shop.php" style="color:orange;">Shop Now</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //modal -->
	<!-- testimonial -->
	<div class="jarallax testimonial" id="testimonial">
		<div class="testimonial-dot">
			<div class="container">
				<div class="agileits-title testimonial-heading">
					<h3 style="color:orange;">Certificate</h3>
				</div>
				<div class="w3-agile-testimonial">
					<div class="slider">
						<div class="callbacks_container">
							<ul class="rslides callbacks callbacks1" id="slider3">
								<li>
									<div class="testimonial-img-grid">
										<div class="testimonial-img t-img1">
											<img src="../Images/Home/MSAUniversityOfficial.jpg" alt="" />
										</div>
										<div class="testimonial-img">
											<img src="../Images/Home/Founder.jpg" alt="" />
										</div>
										<div class="testimonial-img t-img2">
											<img src="../Images/Home/WebDev.jpg" alt="" />
										</div>
										<div class="clearfix"> </div>
									</div>
									<div class="testimonial-img-info">
										<p style="color:white;">Eng.Mohamed Hussein obtained a certificate of
											appreciation from MSA University in Web Development in 2023.</p>
										<h5 style="color:orange;">Mohamed Hussein</h5>
										<h6 style="color:white;">Web Developer</h6>
									</div>
								</li>
							</ul>
						</div>
						<div class="clearfix"> </div>
						<script>
							// You can also use "$(window).load(function() {"
							$(function () {
								// Slideshow 4
								$("#slider3").responsiveSlides({
									auto: true,
									pager: false,
									nav: false,
									speed: 500,
									namespace: "callbacks",
									before: function () {
										$('.events').append("<li>before event fired.</li>");
									},
									after: function () {
										$('.events').append("<li>after event fired.</li>");
									}
								});

							});
						</script>
						<!--banner Slider starts Here-->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //testimonial -->
	<!-- team -->
	<div class="team" id="team">
		<div class="container">
			<div class="agileits-title">
				<h3>Founder</h3>
			</div>

			<div class="col-md-3 agileits-team-grid">
				<div class="team-info">
					<img src="../Images/Home/Founder.jpg" alt="">
					<div class="team-caption">
						<h4>Mohamed Hussein</h4>
						<p>At MSA university, Faculty of Computer Science.</p>
						<ul>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-rss"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	</div>
	<!-- //team -->

	<!-- mail -->
	<div class="mail" id="mail">
		<div class="container">
			<div class="agileits-title">
				<h3>Mail Us</h3>
			</div>
			<div class="w3_mail_grids">
				<form action="Mailus.php" method="post">
					<span class="input input--jiro">
						<input class="input__field input__field--jiro" type="text" id="input-10" name="Name"
							maxlength="45" placeholder="Your Name" required="" />
						<label class="input__label input__label--jiro" for="input-10">
							<span class="input__label-content input__label-content--jiro">Your Name</span>
						</label>
					</span>
					<span class="input input--jiro">
						<input class="input__field input__field--jiro" type="email" id="input-11" name="Email"
							placeholder="Your Email Address" required="" />
						<label class="input__label input__label--jiro" for="input-11">
							<span class="input__label-content input__label-content--jiro">Your Email</span>
						</label>
					</span>
					<span class="input input--jiro">
						<input class="input__field input__field--jiro" type="text" id="input-12" name="Subject"
							maxlength="48" minlength="1" placeholder="Subject" required="" />
						<label class="input__label input__label--jiro" for="input-12">
							<span class="input__label-content input__label-content--jiro">Subject</span>
						</label>
					</span>
					<textarea name="Message" maxlength="900" placeholder="Message..." required=""></textarea>
					<input type="submit" value="Submit">
				</form>
			</div>
		</div>
	</div>
	<script src="js/classie.js"></script>
	<script>
		(function () {
			// trim polyfill : https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/Trim
			if (!String.prototype.trim) {
				(function () {
					// Make sure we trim BOM and NBSP
					var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
					String.prototype.trim = function () {
						return this.replace(rtrim, '');
					};
				})();
			}

			[].slice.call(document.querySelectorAll('input.input__field')).forEach(function (inputEl) {
				// in case the input is already filled..
				if (inputEl.value.trim() !== '') {
					classie.add(inputEl.parentNode, 'input--filled');
				}

				// events:
				inputEl.addEventListener('focus', onInputFocus);
				inputEl.addEventListener('blur', onInputBlur);
			});

			function onInputFocus(ev) {
				classie.add(ev.target.parentNode, 'input--filled');
			}

			function onInputBlur(ev) {
				if (ev.target.value.trim() === '') {
					classie.remove(ev.target.parentNode, 'input--filled');
				}
			}
		})();
	</script>
	<!-- //mail -->
	<!-- contact -->
	<div id="contact" class="contact">
		<div class="contact-row agileits-w3layouts">
			<div class="col-md-5 contact-w3lsleft map">
				<iframe
					src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3456.7906226700115!2d30.95575751518746!3d29.95670058191425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1458569393ca36ab%3A0xc1f1038e9a84b7a4!2sMSA!5e0!3m2!1sen!2seg!4v1669477559297!5m2!1sen!2seg"
					width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
					referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>
			<div class="col-md-7 contact-w3lsright">
				<h6>How to find us.</h6>
				<div class="col-xs-6 address-row">
					<div class="col-xs-2 address-left">
						<span class="glyphicon glyphicon-home" aria-hidden="true"></span>
					</div>
					<div class="col-xs-10 address-right">
						<h5>Visit Us</h5>
						<p>MSA University <br>Cairo, Egypt </p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-xs-6 address-row w3-agileits">
					<div class="col-xs-2 address-left">
						<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
					</div>
					<div class="col-xs-10 address-right">
						<h5>Mail Us</h5>
						<p><a href="mailto:info@gmail.com"> mail@gmail.com </a></p>
						<p><a href="mailto:info@gmail.com"> mail@gmail.com</a></p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-xs-6 address-row">
					<div class="col-xs-2 address-left">
						<span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
					</div>
					<div class="col-xs-10 address-right">
						<h5>Call Us</h5>
						<p>+01 222 333 4444<br></p>
						<p>+01 222 333 5555</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-xs-6 address-row">
					<div class="col-xs-2 address-left">
						<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
					</div>
					<div class="col-xs-10 address-right">
						<h5>Working Hours</h5>
						<p>Sat - Thu : 8:00 am to 4:00 pm</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //contact -->
	<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="footer-top">
				<div class="col-md-4 amet-sed">
					<div class="footer-title">
						<h3>About Us</h3>
					</div>
					<p>Our aim is to facilitate the buying and selling process for users in a safe way.</p>
				</div>
				<div class="col-md-4 amet-sed amet-medium">
					<div class="footer-title">
						<h3>Quick Links</h3>
					</div>
					<ul>
						<br>
						<li><a href="../Shop/Shop.php">Store</a></li><br>
						<li><a href="#about">About us</a></li><br>
						<li><a href="#mail">Mail us</a></li><br>
						<li><a href="#team">Founder</a></li><br>
						<li><a href="../Privacy Policy/Privacy Policy.php">Privacy Policy</a></li><br>
						<li><a href="../Terms and Service/Terms and Service.php"> Terms and Service</a></li>

					</ul>
				</div>
				<div class="col-md-4 amet-sed ">
					<div class="footer-title">
						<h3>Follow Us</h3>
					</div>
					<div class="agileinfo-social-grids">
						<ul>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-rss"></i></a></li>
							<li><a href="#"><i class="fa fa-vk"></i></a></li>
						</ul>
					</div>
					<?php if (!isset($_SESSION["Email"])) { ?>
						<div class="support">
							<form action="../Sign up/Sign up.php" method="post">
								<input type="email" name="subemail" placeholder="Enter email...." required="">
								<input type="submit" value="Subscribe" class="botton">
								<span style="color:red;">*
									<?php if (isset($_SESSION['subemailerr'])) {
										echo $_SESSION['subemailerr'];
									} else {
										$_SESSION['subemailerr'] = "";
									}
									?>
								</span>
							</form>
						</div>
					</div>
				<?php } else {
						echo '<style>.copyright {   position:absolute;
											right:0;
											left:0;
											align-self: flex-end;
											}</style>';
					} ?>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //footer -->
	<!-- copyright -->
	<div class="copyright">
		<div class="container">
			<p class="footer-class">© <span id="current-year"></span> Gaming Hub . All Rights Reserved | Design by <a
					href="http://facebook.com/" target="_blank">MH</a> </p>
		</div>
	</div>
	<script>
		const year = document.querySelector('#current-year');
		year.innerHTML = new Date().getFullYear();
	</script>
	<!-- //copyright -->
	<script src="js/jarallax.js"></script>
	<!-- <script src="js/SmoothScroll.min.js"></script> -->
	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>
	<script src="js/responsiveslides.min.js"></script>
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function () {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/

			$().UItoTop({ easingType: 'easeOutQuart' });

		});
	</script>
	<!-- //here ends scrolling icon -->
	<!-- Tabs-JavaScript -->
	<script src="js/jquery.filterizr.js"></script>
	<script src="js/controls.js"></script>
	<script type="text/javascript">
		$(function () {
			$('.filtr-container').filterizr();
		});
	</script>
	<!-- //Tabs-JavaScript -->
	<!-- PopUp-Box-JavaScript -->
	<script src="js/jquery.chocolat.js"></script>
	<script type="text/javascript">
		$(function () {
			$('.filtr-item a').Chocolat();
		});
	</script>
	<!-- //PopUp-Box-JavaScript -->
</body>

</html>