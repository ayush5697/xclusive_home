<?php
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sedona | Contact</title>

	
</head>

<body>

	
	</body>
	<?php 
include 'initload/header.php';
	?>

		<div class="content-wrapper content-wrapper--boxed oh">

			<!-- Page Title -->
			<section class="page-title bg-dark-overlay text-center" style="background-image: url(img/page-title/contact.jpg);">
				<div class="container">
					<div class="page-title__holder">
						<h1 class="page-title__title">Contact</h1>
					</div>
				</div>
			</section> <!-- end page title -->

			<!-- Contact -->
      <section class="section-wrap">
        <div class="container">
          <div class="row">
            <div class="col-lg-4">
              <div class="contact">
								<h5 class="contact__title">Melbourne Office</h5>
                <ul class="contact__items">
                  <li class="contact__item">
										<span class="contact__item-label">Address:</span>
                    <address>Suite 2 / 405 29-31 Solent Circuit,<br>Baulkham Hills, NSW 2153</address>
                  </li>
                  <li class="contact__item">
                    <span class="contact__item-label">Phone: </span>
                    <a href="tel:+1-800-1554-456-123">0433 000 005 <a>
                  </li>
                  <li class="contact__item">
                    <span class="contact__item-label">Email: </span>
                    <a href="mailto:themesupport@gmail.com">themesupport@gmail.com</a>
                  </li>
								</ul>
								
								<h5 class="contact__title mt-40">Follow Us</h5>
								<div class="socials">
									<a href="#" class="social social-twitter" aria-label="twitter" title="twitter" target="_blank"><i class="ui-twitter"></i></a>
									<a href="#" class="social social-facebook" aria-label="facebook" title="facebook" target="_blank"><i class="ui-facebook"></i></a>
									<a href="#" class="social social-youtube" aria-label="youtube" title="google plus" target="_blank"><i class="ui-youtube"></i></a>
									<a href="#" class="social social-instagram" aria-label="instagram" title="instagram" target="_blank"><i class="ui-instagram"></i></a>
								</div>

              </div>
						</div>
						<div class="col-lg-7 offset-lg-1">
							<h2 class="section-title">Get a Free Quote</h2>
							<p class="mb-40">If you have any question about project cost, get in touch.</p>
							<!-- Contact Form -->
							<form id="contact-form" class="contact-form material" method="post" action="#">

								<div class="row">
									<div class="col-lg-6">
										<!-- Name -->
										<div class="material__form-group form-group">
											<input type="text" name="name" id="name" class="form-input material__input" required="">
											<label for="name" class="material__label">Name
												<abbr title="required" class="required">*</abbr>
											</label>
											<span class="material__underline"></span>
										</div>
									</div>
									<div class="col-lg-6">
										<!-- Email -->
										<div class="material__form-group form-group">
											<input type="email" name="email" id="email" class="form-input material__input" required="">
											<label for="email" class="material__label">Email
												<abbr title="required" class="required">*</abbr>
											</label>
											<span class="material__underline"></span>
										</div>
									</div>
								</div>

								<!-- Subject -->
								<div class="material__form-group form-group">
									<input type="text" name="subject" id="subject" class="form-input material__input">
									<label for="subject" class="material__label">Subject
									</label>
									<span class="material__underline"></span>
								</div>							

								<div class="material__form-group form-group">
									<textarea id="message" name="message" rows="7" class="form-input material__input" required=""></textarea>
									<label for="message" class="material__label">Message
										<abbr title="required" class="required">*</abbr>
									</label>
									<span class="material__underline"></span>
								</div>								

								<input type="submit" class="btn btn--lg btn--color btn--button" value="Send Message" id="submit-message">
								<div id="msg" class="message"></div>
							</form>
						</div>
          </div>
        </div>
      </section> <!-- end contact -->


      <!-- Google Map -->
      <div id="google-map" class="gmap" data-address="V Tytana St, Manila, Philippines"></div>


			<!-- Footer -->
			
			<?php 
include 'initLoad/Footer.php';
			?>