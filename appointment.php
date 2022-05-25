<!DOCTYPE html>
<html lang="en">

<head>
	<!-- META -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="Pseudo Program Nerds" />
	<meta name="robots" content="" />


	<!-- FAVICONS ICON -->
	<link rel="icon" href="images/favicon.png" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />

	<!-- PAGE TITLE HERE -->
	<title>AddedPower - Appointment</title>

	<!-- MOBILE SPECIFIC -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!--[if lt IE 9]>
		<script src="js/html5shiv.min.js"></script>
		<script src="js/respond.min.js"></script>
	<![endif]-->

	<!-- STYLESHEETS -->
	<link rel="stylesheet" type="text/css" href="css/style.min.css">
	<link rel="stylesheet" type="text/css" href="css/templete.min.css">
	<link class="skin" rel="stylesheet" type="text/css" href="css/skin/skin-1.css">

</head>

<body id="bg">
	<div id="loading-area"></div>
	<div class="page-wraper">
		<!-- header -->


		<?php include('header-style-4.php'); ?>

		<!-- header END -->

		<!-- Content -->
		<div class="page-content">

			<div class="dlab-bnr-inr overlay-black-middle"
				style="background-image:url(images/background/Appointments-bg.jpg);">
				<div class="container">
					<div class="dlab-bnr-inr-entry">
						<h1 class="text-white">Appointments</h1>
					</div>
				</div>
			</div>

			<!-- Breadcrumb  row -->
			<div class="breadcrumb-row">
				<div class="container">
					<ul class="list-inline">
						<li><a href="index.php">Home</a></li>
						<li>Make An Appoinment</li>
					</ul>
				</div>
			</div>
			<!-- Breadcrumb  row END -->
			<!-- contact area -->


			<!-- Appointment -->

			<div class="container">
				<div class="row">
					<div class="col-lg-12 dlab-we-best ">
						<div
							class="p-lr20 p-tb40 m-t30 dlab-appoinment-now-form tp-light  clearfix bg-dark border-1 text-black">
							<form method="post" class="dzForm" action="script/contact.php">
								<input value="Appoinment" name="dzToDo" type="hidden">
								<div class="row">
									<div class="col-lg-12 text-center text-white m-b10">
										<h2 class=" m-t0 m-b10 ">Make An Appoinment</h2>
										<div class="dlab-separator-outer">
											<div class="dlab-separator bg-primary"></div>
										</div>
									</div>
									<div class="col-lg-12">
										<div class="form-group">
											<input name="dzName" class="form-control" placeholder="Name" type="text">
										</div>
									</div>
									<div class="col-lg-12">
										<div class="form-group">
											<input name="dzEmail" class="form-control" placeholder="Email" type="text">
										</div>
									</div>
									<div class="col-lg-12">
										<div class="form-group">
											<input name="dzOther[date]" class="form-control" placeholder="Select Date"
												type="date">
										</div>
									</div>
									<div class="col-lg-12">
										<div class="form-group">
											<select class="bs-select-hidden" name="dzOther[service]">
												<option value="">Engine Diagnostics</option>
												<option value="">Lube Oil and Filters</option>
												<option value="">Belts and Hoses</option>
												<option value="">Air Conditioning</option>
												<option value="">Brake Repair</option>
												<option value="">Tire and Wheel Services</option>
											</select>
										</div>
									</div>
									<div class="col-lg-12">
										<div class="form-group">
											<div class="input-group">
												<textarea name="dzMessage" rows="4" class="form-control" required=""
													placeholder="Text messege..."></textarea>
											</div>
										</div>
									</div>
									<div class="col-lg-12">
										<div class="form-group">
											<div class="input-group">
												<div class="g-recaptcha" data-theme="dark"
													data-sitekey="!-- Put reCaptcha Site Key -->"
													data-callback="verifyRecaptchaCallback"
													data-expired-callback="expiredRecaptchaCallback">
												</div>
												<input class="form-control d-none" style="display:none;"
													data-recaptcha="true" required
													data-error="Please complete the Captcha">
											</div>
										</div>
									</div>
									<div class="col-lg-12 text-center">
										<div class="dzFormMsg "></div>
										<button name="Reset" value="Reset" type="reset"
											class="site-button skew-secondry m-r10">
											<span>Reset</span>
										</button>
										<button name="submit" type="submit" value="Submit"
											class="site-button skew-secondry">
											<span>Submit</span>
										</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
				<!-- Appointment END -->
			</div>
			<!-- contact area  END -->
		</div>
		<!-- Content END-->


		<!-- Footer -->

        <?php include('footer-fixed.html'); ?>


		<!-- Footer END-->


		<!-- scroll top button -->
		<button class="scroltop fas fa-arrow-up"></button>
	</div>
	<!-- JavaScript  files ========================================= -->
	<script src="js/jquery.min.js"></script><!-- JQUERY.MIN JS -->
	<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script><!-- BOOTSTRAP.MIN JS -->
	<script src="plugins/bootstrap-select/bootstrap-select.min.js"></script><!-- FORM JS -->
	<script src="plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script><!-- FORM JS -->
	<script src="plugins/magnific-popup/magnific-popup.js"></script><!-- MAGNIFIC POPUP JS -->
	<script src="plugins/counter/waypoints-min.js"></script><!-- WAYPOINTS JS -->
	<script src="plugins/counter/counterup.min.js"></script><!-- COUNTERUP JS -->
	<script src="plugins/imagesloaded/imagesloaded.js"></script><!-- IMAGESLOADED -->
	<script src="plugins/masonry/masonry-3.1.4.js"></script><!-- MASONRY -->
	<script src="plugins/masonry/masonry.filter.js"></script><!-- MASONRY -->
	<script src="plugins/owl-carousel/owl.carousel.js"></script><!-- OWL SLIDER -->
	<script src="js/custom.min.js"></script><!-- CUSTOM FUCTIONS  -->
	<script src="js/dz.carousel.min.js"></script><!-- SORTCODE FUCTIONS  -->

	<script src="js/dz.ajax.js"></script><!-- CONTACT JS -->

</body>

</html>