<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="zxx">

<head>
	<!-- Web-Fonts -->
	<meta name="viewport" content="width-device-width, initial-scale=1">
	<!-- dialogflow style bootsrap -->
	<script src="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1"></script>
	<!-- Jquery CDN -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		//To minimise the height of chatbox
		$(document).ready(function() {
			window.addEventListener('dfMessengerLoaded', function (event) {
			$r1 = document.querySelector("df-messenger");
			$r2 = $r1.shadowRoot.querySelector("df-messenger-chat");
			$r3 = $r2.shadowRoot.querySelector("df-messenger-user-input"); 
			var sheet = new CSSStyleSheet;
			// manage box height from here
			sheet.replaceSync( `div.chat-wrapper[opened="true"] { height: 450px }`);
			$r2.shadowRoot.adoptedStyleSheets = [ sheet ];
			});
		});
	</script>
	<style>
			/* custom css for chatbox */
			/* find it here : https://cloud.google.com/dialogflow/es/docs/integrations/dialogflow-messenger */
			df-messenger {
				--df-messenger-bot-message: #bdfcbf;
				--df-messenger-button-titlebar-color: #7ec472;
				--df-messenger-chat-background-color: #fafafa;
				--df-messenger-font-color: black;
				--df-messenger-send-icon: #7ec472;
				--df-messenger-user-message: #7ec472;
			}
  
	</style>
	<title>Villas Hotel Category Flat Bootstrap Responsive Website Template | Blog Details :: W3layouts</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Villas Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	
	
	<!-- //Meta tag Keywords -->

	<!-- Custom-Files -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Bootstrap-Core-CSS -->
	<link href="css/single.css" rel='stylesheet' type='text/css' />
	<!-- single page -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //Custom-Files -->

	<!-- Web-Fonts -->
	<link href="//fonts.googleapis.com/css?family=Crimson+Text:400,400i,600,600i,700,700i" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Oxygen:300,400,700&amp;subset=latin-ext" rel="stylesheet">
	<!-- //Web-Fonts -->
</head>

<body>
	<!-- main banner -->
	<div class="main-top" id="home">
		<!-- header -->
		<header>
			<div class="container-fluid">
				<div class="header d-md-flex justify-content-between align-items-center py-3 px-xl-5 px-lg-3 px-2">
					<!-- logo -->
					<div id="logo">
						<h1><a href="index.php">Villas</a></h1>
					</div>
					<!-- //logo -->
					<!-- nav -->
					<div class="nav_w3ls">
						<nav>
							<label for="drop" class="toggle">Menu</label>
							<input type="checkbox" id="drop" />
							<ul class="menu">
								<li><a href="index.php" class="active">Home</a></li>
								<li><a href="about.html">About Us</a></li>
								<li><a href="gallery.html">Gallery</a></li>
								<li>
									<!-- First Tier Drop Down -->
									<label for="drop-2" class="toggle toogle-2">Dropdown <span class="fa fa-angle-down" aria-hidden="true"></span>
									</label>
									<a href="#">Dropdown <span class="fa fa-angle-down" aria-hidden="true"></span></a>
									<input type="checkbox" id="drop-2" />
									<ul>
										<li><a href="index.php" class="drop-text">Services</a></li>
										<li><a href="index.php" class="drop-text">Blog</a></li>
										<li><a href="single.html" class="drop-text">Blog Details</a></li>
										<li><a href="index.php" class="drop-text">What We do</a></li>
										<li><a href="index.php" class="drop-text">Pricing</a></li>
										<li><a href="about.html" class="drop-text">Testimonials</a></li>
										<li><a href="book.php" class="drop-text">Booking Form</a></li>
									</ul>
								</li>
								<li><a href="contact.html">Contact Us</a></li>
							</ul>
						</nav>
					</div>
					<!-- //nav -->
				</div>
			</div>
		</header>
		<!-- //header -->

		<!-- banner -->
		<div class="banner_w3lspvt-2">

		</div>
		<!-- //banner -->
	</div>
	<!-- //main banner -->

	<!-- page details -->
	<div class="breadcrumb-mobamu">
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="index.php">Home</a>
			</li>
			<li class="breadcrumb-item active" aria-current="page">Suite Details</li>
		</ol>
	</div>
	<!-- //page details -->

	<!-- single -->
	<div class="blog-w3l py-5">
		<div class="container py-xl-5 py-lg-3">
			<h3 class="tittle text-center text-bl font-weight-bold">Suite Details</h3>
			<center><a href="http://127.0.0.1:5500/360/room1/index.html"><button>click here for 360 view</button></a></center>
			<p class="sub-tittle text-center mt-2 mb-sm-5 mb-4 pb-xl-3">The best suite rooms in city</p>
			<div class="blog_section px-lg-5">
				<div class="card border-0">
					<a href="single.html">
						<img src="images/pic.jpeg" alt="" class="img-fluid">
					</a>
					<div class="card-body p-0 py-4">
						<div class="row border-bottom pb-3">
							<div class="col-sm-6 col-4 perso-wthree">
								<h6 class="blog-first text-bl">
									<span class="fa fa-user mr-2"></span>
								</h6>
							</div>
							<div class="col-sm-6 col-8 info-commt text-right">
								<ul class="blog_list">
									<li>Jan 16, 2019</li>
									<li class="mx-3">
										<a href="#">
											<span class="fa fa-heart-o mr-1"></span>30
										</a>
									</li>
									<li>
										<a href="#">
											<span class="fa fa-comments-o mr-1"></span>18
										</a>
									</li>
								</ul>
							</div>
						</div>
						<a href="single.html" class="text-bl font-weight-bold blog-grid-title mt-4 mb-3">Are you searching for best suite rooms ?</a>
						<p class="card-text"> 
							Here are the best suite rooms. </p>
					</div>
				</div>
				<a href="single.html" class="single-text text-bl font-weight-light my-3">
					Features of this suite rooms
					</a>
				<p>
					We offer the multiple separated spaces in our suite rooms .So, you will feel relax and comfortable . Enjoying the each moment .
				</p>
				<p class="my-3">
					There are 2 Bathrooms , 1 Kitchen with full furnichure , bedroom with balcony ,living area, and many more available features .
				</p>
				<p>
				</p>
				<a href="single.html" class="text-bl font-weight-bold blog-grid-title mt-4 mb-3"></a>
				<div class="row">
					<div class="col-md-6">
						
					</div>
					<div class="col-md-6">
						<p></p>
					</div>
				</div>
				<a href="single.html" class="single-text text-bl font-weight-light mt-4"></a>
				<p class="my-3"></p>
				<div class="comment-top mt-5">
					<h4>Comments</h4>
					<div class="media">
						<img src="images/te1.jpg" alt="" class="img-fluid" />
						<div class="media-body pt-xl-2 pl-3">
							<h5 class="mb-2">Cardi Johnson</h5>
							<p> Amazing experience. </p>
						</div>
					</div>
					<div class="media mt-5">
						<img src="images/te2.jpg" alt="" class="img-fluid" />
						<div class="media-body  pt-xl-2 pl-3">
							<h5 class="mb-2">Goh James</h5>
							<p>Would Come Again!!</p>
						</div>
					</div>
				</div>
				<div class="comment-top mt-5">
					<h4>Leave a Comment</h4>
					<div class="comment-bottom mobamuinfo_mail_grid_right">
						<form action="#" method="post">
							<div class="form-group">
								<input class="form-control" type="text" name="Name" placeholder="Name" required="">
							</div>
							<div class="form-group">
								<input class="form-control" type="email" name="Email" placeholder="Email" required="">
							</div>
							<div class="form-group">
								<input class="form-control" type="text" name="Subject" placeholder="Subject" required="">
							</div>
							<div class="form-group">
								<textarea class="form-control" name="Message" placeholder="Message..." required=""></textarea>
							</div>
							<button type="submit" class="btn submit mt-4">Submit</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //single -->

	<!-- footer -->
	<footer class="py-5">
		<div class="container pt-xl-4">
			<div class="row footer-top">
				<div class="col-lg-4 col-md-6 footer-grid_section_1its">
					<h2 class="logo-2 mb-lg-4 mb-3">
						<a href="index.php" class="text-uppercase text-wh">Villas</a>
					</h2>
					<!-- Map -->
					<div class="map-fo">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3048.5130900428026!2d44.506621715459396!3d40.17539347939393!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x406abcf86e940951%3A0x87a1923d7df42367!2sBest+Western+Congress+Hotel!5e0!3m2!1sen!2sin!4v1509605601510"></iframe>
					</div>
					<!-- //Map -->
				</div>
				<div class="col-lg-2 col-md-6 footer-grid_section_1its mt-md-0 mt-4">
					<h3 class="footer-title text-uppercase text-wh mb-lg-4 mb-3">Links</h3>
					<ul class="list-unstyled">
						<li class="mb-3">
							<a href="index.php">Home</a>
						</li>
						<li class="mb-3">
							<a href="about.html">About Us</a>
						</li>
						<li class="mb-3">
							<a href="gallery.html">Gallery</a>
						</li>
						<li class="mb-3">
							<a href="index.php">Services</a>
						</li>
						<li class="mb-3">
							<a href="contact.html">Contact Us</a>
						</li>
					</ul>
				</div>
				<div class="col-lg-3 col-md-6 footer-grid_section_1its mt-lg-0 mt-4">
					<h3 class="footer-title text-uppercase text-wh mb-lg-4 mb-3">Contact Info</h3>
					<div class="contact-info">
						<div class="footer-style-w3ls mb-4">
							<h4 class="text-li mb-2">Phone</h4>
							<p>+121 098 8907 9987</p>
						</div>
						<div class="footer-style-w3ls mb-4">
							<h4 class="text-li mb-2">Email </h4>
							<p><a href="mailto:info@example.com">info@example.com</a></p>
						</div>
						<div class="footer-style-w3ls mb-4">
							<h4 class="text-li mb-2">Location</h4>
							<p>Honey Avenue, New York City</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 footer-grid_section_1its mt-lg-0 mt-4">
					<!-- social icons -->
					<div class="mobamuinfo_social_icons">
						<h3 class="footer-title text-uppercase text-wh mb-lg-4 mb-3">Social Info</h3>
						<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
						<h4 class="sub-con-fo text-li my-4">Catch on Social</h4>
						<ul class="mobamuits_social_list list-unstyled">
							<li class="w3_mobamu_facebook">
								<a href="#">
									<span class="fa fa-facebook-f"></span>
								</a>
							</li>
							<li class="w3_mobamu_twitter">
								<a href="#">
									<span class="fa fa-twitter"></span>
								</a>
							</li>
							<li class="w3_mobamu_dribble">
								<a href="#">
									<span class="fa fa-dribbble"></span>
								</a>
							</li>
							<li class="w3_mobamu_google">
								<a href="#">
									<span class="fa fa-google-plus"></span>
								</a>
							</li>
						</ul>
					</div>
					<!-- social icons -->
				</div>
			</div>
		</div>
	</footer>
	<!-- //footer -->
	<!-- copyright -->
	<div class="cpy-right text-center py-3">
		<p>© 2019 Villas. All rights reserved | Design by
			<a href="http://w3layouts.com"> W3layouts.</a>
		</p>
	</div>
	<!-- //copyright -->
<df-messenger
  intent="WELCOME"
  chat-title="NIVAS"
  chat-icon = "https://cdn.iconscout.com/icon/premium/png-512-thumb/chatbot-4-683088.png"
  agent-id="4325ff66-e416-4fe3-91c6-c0c8f900b37e"
  language-code="en"
></df-messenger>
	<!-- move top icon -->
	<a href="#home" class="move-top text-center"></a>
	<!-- //move top icon -->

</body>

</html>