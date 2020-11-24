<!DOCTYPE html>
<html lang="en">
<head>
	<title>XClusive | Projects</title>

	<meta charset="utf-8">
	<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="description" content="">

	<!-- Google Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Barlow:400,600%7COpen+Sans:400,400i,700' rel='stylesheet'>

	<!-- Css -->
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/font-icons.css" />
	<link rel="stylesheet" href="revolution/css/settings.css" />
	<link rel="stylesheet" href="css/style.css" />

	<!-- Favicons -->
	<link rel="shortcut icon" href="img/favicon.ico">
	<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

</head>

<body>

	<!-- Preloader -->
	<div class="loader-mask">
		<div class="loader">
			"Loading..."
		</div>
	</div>

	<main class="main-wrapper">

		<!-- Navigation -->
		<header class="nav">
			<div class="nav__holder nav--sticky">
				<div class="container-fluid nav__container nav__container--side-padding">
					<div class="flex-parent">

						<div class="nav__header">
							<!-- Logo -->
							<a href="index.php" class="logo-container flex-child">
								<img height="" class="logo" src="img/logo.png" srcset="img/logo.png 1x, img/logo@2x.png 2x" alt="logo">
							</a>

							<!-- Mobile toggle -->
							<button type="button" class="nav__icon-toggle" id="nav__icon-toggle" data-toggle="collapse" data-target="#navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="nav__icon-toggle-bar"></span>
								<span class="nav__icon-toggle-bar"></span>
								<span class="nav__icon-toggle-bar"></span>
							</button>
						</div>

						<!-- Navbar -->
					 <ul class="nav__menu">
									<li class="nav__dropdown active">
										<a href="index.php" aria-haspopup="true">Home</a>
										<i class="ui-arrow-down nav__dropdown-trigger" role="button" aria-haspopup="true" aria-expanded="false"></i>
										 
									</li>
									<li class="nav__dropdown">
										<a href="projects.php" aria-haspopup="true">Projects</a>
										<i class="ui-arrow-down nav__dropdown-trigger" role="button" aria-haspopup="true" aria-expanded="false"></i>
										 
									</li>
									<li  class="nav__dropdown">
										<a href="about.php" aria-haspopup="true">About Us</a>
										<i class="ui-arrow-down nav__dropdown-trigger" role="button" aria-haspopup="true" aria-expanded="false"></i>
										 
									</li>
									<li class="nav__dropdown">
										<a href="contactus.php" aria-haspopup="true">Contact Us</a>
										<i hidden class="ui-arrow-down nav__dropdown-trigger" role="button" aria-haspopup="true" aria-expanded="false"></i>
										 
									</li>
									 
								</ul> <!-- end menu -->

						<div class="nav__phone nav--align-right d-none d-lg-block">
							<span class="nav__phone-text">Call us:</span>
							<a href="tel:1-800-995-3959" class="nav__phone-number">+61 433 000 005</a>
						</div>

						<div  class="nav__socials d-none d-lg-block">
							<div hidden class="socials">
								<a href="#" class="social social-twitter" aria-label="twitter" title="twitter" target="_blank"><i class="ui-twitter"></i></a>
								<a href="#" class="social social-facebook" aria-label="facebook" title="facebook" target="_blank"><i class="ui-facebook"></i></a>
								<a href="#" class="social social-youtube" aria-label="youtube" title="google plus" target="_blank"><i class="ui-youtube"></i></a>
								<a href="#" class="social social-instagram" aria-label="instagram" title="instagram" target="_blank"><i class="ui-instagram"></i></a>
							</div>
						</div>

					</div> <!-- end flex-parent -->
				</div> <!-- end container -->

			</div>
		</header> <!-- end navigation -->


		<div class="content-wrapper content-wrapper--boxed oh">

			<!-- Page Title -->
			<section class="page-title bg-dark-overlay text-center" style="background-image: url(img/page-title/portfolio.jpg);">
				<div class="container">
					<div class="page-title__holder">
						<h1 class="page-title__title">Projects Gallery</h1>
						<p class="page-title__subtitle">For each project we establish relationships with partners</p>
					</div>
				</div>
			</section> <!-- end page title -->

			<!-- Portfolio -->
			<section class="section-wrap">
				<div class="container-fluid container-semi-fluid">			

					<!-- Filter -->
					<div hidden class="masonry-filter text-center">
						<a href="#" class="filter active" data-filter="*">All</a>
						<a href="#" class="filter" data-filter=".residential">Residential</a>
						<a href="#" class="filter" data-filter=".commercial">Commercial</a>
						<a href="#" class="filter" data-filter=".interior">Interior</a>
						<a href="#" class="filter" data-filter=".landscape">Landscape</a>
					</div> <!-- end filter -->

					<div class="row masonry-grid">

						<div class="masonry-item col-lg-3 project hover-trigger residential">
							<div class="project__container">
								<div class="project__img-holder">
									<a href="project-single.php">
										<img src="img/portfolio/1.jpg" alt="" class="project__img">
										<div class="hover-overlay">
											<div class="project__description">
												<h3 class="project__title">Keangnam Grand Hall</h3>
												<span class="project__date">2018</span>
											</div>
										</div>
									</a>              
								</div>                  
							</div> 
						</div> <!-- end project -->

						<div class="masonry-item col-lg-3 project hover-trigger commercial">
							<div class="project__container">
								<div class="project__img-holder">
									<a href="project-single.html">
										<img src="img/portfolio/2.jpg" alt="" class="project__img">
										<div class="hover-overlay">
											<div class="project__description">
												<h3 class="project__title">Green House</h3>
												<span class="project__date">2018</span>
											</div>
										</div>
									</a>              
								</div>                  
							</div> 
						</div> <!-- end project -->

						<div class="masonry-item col-lg-3 project hover-trigger interior">
							<div class="project__container">
								<div class="project__img-holder">
									<a href="project-single.html">
										<img src="img/portfolio/3.jpg" alt="" class="project__img">
										<div class="hover-overlay">
											<div class="project__description">
												<h3 class="project__title">Contemporary Villa</h3>
												<span class="project__date">2018</span>
											</div>
										</div>
									</a>              
								</div>                  
							</div> 
						</div> <!-- end project -->

						<div class="masonry-item col-lg-3 project hover-trigger landscape">
							<div class="project__container">
								<div class="project__img-holder">
									<a href="project-single.html">
										<img src="img/portfolio/4.jpg" alt="" class="project__img">
										<div class="hover-overlay">
											<div class="project__description">
												<h3 class="project__title">Keangnam Grand Hall</h3>
												<span class="project__date">2018</span>
											</div>
										</div>
									</a>              
								</div>                  
							</div> 
						</div> <!-- end project -->

						<div class="masonry-item col-lg-3 project hover-trigger residential">
							<div class="project__container">
								<div class="project__img-holder">
									<a href="project-single.html">
										<img src="img/portfolio/5.jpg" alt="" class="project__img">
										<div class="hover-overlay">
											<div class="project__description">
												<h3 class="project__title">Business Office</h3>
												<span class="project__date">2018</span>
											</div>
										</div>
									</a>              
								</div>                  
							</div> 
						</div> <!-- end project -->

						<div class="masonry-item col-lg-3 project hover-trigger commercial">
							<div class="project__container">
								<div class="project__img-holder">
									<a href="project-single.html">
										<img src="img/portfolio/6.jpg" alt="" class="project__img">
										<div class="hover-overlay">
											<div class="project__description">
												<h3 class="project__title">Horizon Urban</h3>
												<span class="project__date">2018</span>
											</div>
										</div>
									</a>              
								</div>                  
							</div> 
						</div> <!-- end project -->

						<div class="masonry-item col-lg-3 project hover-trigger interior">
							<div class="project__container">
								<div class="project__img-holder">
									<a href="project-single.html">
										<img src="img/portfolio/7.jpg" alt="" class="project__img">
										<div class="hover-overlay">
											<div class="project__description">
												<h3 class="project__title">Center for Climate Change</h3>
												<span class="project__date">2018</span>
											</div>
										</div>
									</a>              
								</div>                  
							</div> 
						</div> <!-- end project -->

						<div class="masonry-item col-lg-3 project hover-trigger landscape">
							<div class="project__container">
								<div class="project__img-holder">
									<a href="project-single.html">
										<img src="img/portfolio/8.jpg" alt="" class="project__img">
										<div class="hover-overlay">
											<div class="project__description">
												<h3 class="project__title">Northern Slope Sanctuary</h3>
												<span class="project__date">2018</span>
											</div>
										</div>
									</a>              
								</div>                  
							</div> 
						</div> <!-- end project -->

						<div class="masonry-item col-lg-3 project hover-trigger residential">
							<div class="project__container">
								<div class="project__img-holder">
									<a href="project-single.html">
										<img src="img/portfolio/9.jpg" alt="" class="project__img">
										<div class="hover-overlay">
											<div class="project__description">
												<h3 class="project__title">Australian Museum</h3>
												<span class="project__date">2018</span>
											</div>
										</div>
									</a>              
								</div>                  
							</div> 
						</div> <!-- end project -->

						<div class="masonry-item col-lg-3 project hover-trigger commercial">
							<div class="project__container">
								<div class="project__img-holder">
									<a href="project-single.html">
										<img src="img/portfolio/10.jpg" alt="" class="project__img">
										<div class="hover-overlay">
											<div class="project__description">
												<h3 class="project__title">Texas Children's Hospital</h3>
												<span class="project__date">2018</span>
											</div>
										</div>
									</a>              
								</div>                  
							</div> 
						</div> <!-- end project -->

						<div class="masonry-item col-lg-3 project hover-trigger interior">
							<div class="project__container">
								<div class="project__img-holder">
									<a href="project-single.html">
										<img src="img/portfolio/11.jpg" alt="" class="project__img">
										<div class="hover-overlay">
											<div class="project__description">
												<h3 class="project__title">Modern Living Room</h3>
												<span class="project__date">2018</span>
											</div>
										</div>
									</a>              
								</div>                  
							</div> 
						</div> <!-- end project -->

						<div class="masonry-item col-lg-3 project hover-trigger landscape">
							<div class="project__container">
								<div class="project__img-holder">
									<a href="project-single.html">
										<img src="img/portfolio/12.jpg" alt="" class="project__img">
										<div class="hover-overlay">
											<div class="project__description">
												<h3 class="project__title">Swift Style Flat</h3>
												<span class="project__date">2018</span>
											</div>
										</div>
									</a>              
								</div>                  
							</div> 
						</div> <!-- end project -->
 

					 

					 

						 

					</div>
				</div>
			</section> <!-- end portfolio -->
			

			<footer hidden class="footer bg-dark-overlay" style="background-image: url(img/footer/1.jpg);">
				<div class="container-fluid">
					<div class="footer__widgets">
						<div class="row">

							<div class="col-lg-3 col-md-3">
								<div class="widget widget-about-us">
									<!-- Logo -->
									<a href="index.php" class="logo-container flex-child">
										<img class="logo" src="img/logo_white.png" srcset="img/logo_white.png 1x, img/logo_white@2x.png 2x" alt="logo">
									</a>
								</div>
							</div> <!-- end logo -->

							<div class="col-lg-2 col-md-3">
								<div class="widget widget_nav_menu">
									<ul>
										<li><a href="about.php">About</a></li>
										<li><a href="#">Services</a></li>
										<li><a href="#">Blog</a></li>
										<li><a href="contactus.php">Contact</a></li>
									</ul>
								</div>
							</div>

							<div class="col-lg-2 col-md-3">
								<div class="widget widget_nav_menu">
									<ul>
										<li><a href="#">Privacy Policy</a></li>
										<li><a href="#">Terms &amp; Conditions</a></li>
										<li><a href="#">Career</a></li>
									</ul>
								</div>
							</div>

							<div class="col-lg-3 offset-lg-2 col-md-3">
								<div class="widget">
									<div class="socials">
										<a href="#" class="social social-twitter" aria-label="twitter" title="twitter" target="_blank"><i class="ui-twitter"></i></a>
										<a href="#" class="social social-facebook" aria-label="facebook" title="facebook" target="_blank"><i class="ui-facebook"></i></a>
										<a href="#" class="social social-youtube" aria-label="youtube" title="google plus" target="_blank"><i class="ui-youtube"></i></a>
										<a href="#" class="social social-instagram" aria-label="instagram" title="instagram" target="_blank"><i class="ui-instagram"></i></a>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div> <!-- end container -->

				<div class="footer__bottom">
					<div class="container-fluid text-right text-md-center">
						<span class="copyright">
							&copy; 2018 Sedona, Made by <a href="https://deothemes.com">DeoThemes</a>
						</span>
					</div>
				</div> <!-- end footer bottom -->
			</footer> <!-- end footer -->
			<!-- Footer -->

			<div id="back-to-top">
				<a href="#top"><i class="ui-arrow-up"></i></a>
			</div>

		</div> <!-- end content wrapper -->
	</main> <!-- end main wrapper -->


	<!-- jQuery Scripts -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/plugins.js"></script>
	<script src="js/scripts.js"></script>

</body>
</html>