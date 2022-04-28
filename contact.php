<!DOCTYPE html>
<html lang="en">

<head>
    <!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="Pseudo Program Nerds" />

    <!-- FAVICONS ICON -->
    <link rel="icon" href="images/favicon.png" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />

    <!-- PAGE TITLE HERE -->
    <title>AddedPower - Contact</title>

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

        <?php include('header-style-4.html'); ?>

        <!-- header END -->

        <!-- Content -->
        <div class="page-content">
            <!-- inner page banner -->
            <div class="dlab-bnr-inr overlay-black-middle" style="background-image:url(images/background/contact.jpg);">
                <div class="container">
                    <div class="dlab-bnr-inr-entry">
                        <h1 class="text-white">Contact Us</h1>
                    </div>
                </div>
            </div>
            <!-- inner page banner END -->
            <!-- Breadcrumb row -->
            <div class="breadcrumb-row">
                <div class="container">
                    <ul class="list-inline">
                        <li><a href="index.php">Home</a></li>
                        <li>Contact us</li>
                    </ul>
                </div>
            </div>
            <!-- Breadcrumb row END -->
            <div class="section-full content-inner bg-white contact-style-1">
                <div class="container">
                    <div class="row">
                        <!-- Left part start -->
                        <div class="col-lg-8">
                            <div class="p-a30 bg-gray clearfix m-b30 ">
                                <h2>Send Message Us</h2>
                                <div class="dzFormMsg"></div>
                                <form method="post" class="dzForm" action="script/contact.php">
                                    <input type="hidden" value="Contact" name="dzToDo">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <input name="dzName" type="text" required class="form-control"
                                                        placeholder="Your Name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <input name="dzEmail" type="email" class="form-control" required
                                                        placeholder="Your Email">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <input name="dzOther[Phone]" type="text" required
                                                        class="form-control" placeholder="Phone">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <input name="dzOther[Subject]" type="text" required
                                                        class="form-control" placeholder="Subject">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <textarea name="dzMessage" rows="4" class="form-control" required
                                                        placeholder="Your Message..."></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">

                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <button name="submit" type="submit" value="Submit" class="site-button ">
                                                <span>Submit</span> </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Left part END -->
                        <!-- right part start -->
                        <div class="col-lg-4 d-lg-flex">
                            <div class="p-a30 m-b30 border-1 contact-area align-self-stretch">
                                <h2 class="m-b10">Quick Contact</h2>
                                <p>If you have any questions simply use the following contact details.</p>
                                <ul class="no-margin">
                                    <li class="icon-bx-wraper left m-b30">
                                        <div class="icon-bx-xs bg-primary"> <a href="#" class="icon-cell"><i
                                                    class="ti-location-pin"></i></a> </div>
                                        <div class="icon-content">
                                            <h6 class="text-uppercase m-tb0 dlab-tilte">Address:</h6>
                                            <a
                                                href="https://www.google.com/maps/place/Added+Power/@24.64843,46.791261,15z/data=!4m2!3m1!1s0x0:0x350888526893a586?sa=X&ved=2ahUKEwi72p_RwZT3AhVVjtgFHZi-BmYQ_BJ6BAhOEAU">Amr
                                                Bin Ishaq, Al Faisaliyyah, Riyadh 12892</a>
                                        </div>
                                    </li>
                                    <li class="icon-bx-wraper left  m-b30">
                                        <div class="icon-bx-xs bg-primary"> <a href="#" class="icon-cell"><i
                                                    class="ti-email"></i></a> </div>
                                        <div class="icon-content">
                                            <h6 class="text-uppercase m-tb0 dlab-tilte">Email:</h6>
                                            <a href="mailto:cars.addedpower@gmail.com">cars.addedpower</a>
                                        </div>
                                    </li>
                                    <li class="icon-bx-wraper left">
                                        <div class="icon-bx-xs bg-primary"> <a href="#" class="icon-cell"><i
                                                    class="ti-mobile"></i></a> </div>
                                        <div class="icon-content">
                                            <h6 class="text-uppercase m-tb0 dlab-tilte">PHONE</h6>
                                            <a href="tel:059 029 6833">059 029 6833</a>
                                        </div>
                                    </li>
                                </ul>
                                <div class="m-t20">
                                    <ul class="dlab-social-icon dez-border dlab-social-icon-lg">
                                        <li><a href="https://www.facebook.com/" class="fab fa-facebook-f bg-primary"
                                                target="blank"></a></li>
                                        <li><a href="https://www.twitter.com/" class="fab fa-twitter bg-primary"
                                                target="blank"></a></li>
                                        <li><a href="https://www.instagram.com/addedpower_ksa/?hl=en"
                                                class="fab fa-instagram  bg-primary" target="blank"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- right part END -->
                    </div>
                    <div class="row m-b30">
                        <div class="col-lg-12">
                            <!-- Map part start -->
                            <h2>Our Location</h2>
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3626.281705746348!2d46.78907231480276!3d24.64842998415432!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2f0766cbee88ad%3A0x350888526893a586!2sAdded%20Power!5e0!3m2!1sen!2ssa!4v1649975865585!5m2!1sen!2ssa"
                                style="border:0; width:100%; height:400px;" allowfullscreen></iframe>




                            <!-- Map part END -->
                        </div>
                    </div>
                </div>
            </div>
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

    <script src='https://www.google.com/recaptcha/api.js'></script> <!-- Google API For Recaptcha  -->
    <script src="js/dz.ajax.js"></script><!-- CONTACT JS -->

</body>

</html>