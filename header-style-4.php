<?php

// Include the session on the header as its included in every page

session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="Bahaa" />
    <meta name="robots" content="" />

    <!-- FAVICONS ICON -->
    <link rel="icon" href="images/favicon.png" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />

    <!-- PAGE TITLE HERE -->
    <title>AddedPower-Header</title>

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
        <header class="site-header header header-style-5 mo-left">
            <!-- top bar -->
            <div class="top-bar">
                <div class="container">
                    <div class="row d-flex justify-content-between">
                        <div class="dlab-topbar-left"> </div>
                        <div class="dlab-topbar-right">
                            <ul class="social-bx list-inline float-end">
                                <li><a class="fab fa-instagram" href="https://www.instagram.com/addedpower_ksa/?hl=en"
                                        target="blank"></a>
                                </li>
                                <li><a class="fab fa-google" href="mailto:cars.addedpower@gmail.com" target="blank"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- top bar END-->
            <!-- main header -->
            <div class="sticky-header header-curve main-bar-wraper navbar-expand-lg">
                <div class="main-bar clearfix ">
                    <div class="container clearfix">
                        <!-- website logo -->
                        <div class="logo-header logo-white mostion"><a href="index.php"><img src="images/logo.png"
                                    width="193" height="89" alt="AddedPowerLogo"></a>
                        </div>
                        <!-- nav toggle button -->
                        <button class="navbar-toggler collapsed navicon justify-content-end" type="button"
                            data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                        <!-- extra nav -->
                        <div class="extra-nav">
                            <!--User Logedin-->

                            <?php

                            if(isset($_SESSION['useruid'])){

                                 echo ' <div class="extra-cell">
                                <a href="profilePage.php"><button class="site-button m-r15"
                                        type="button">Profile</button></a>
                            </div>';
                                echo ' <div class="extra-cell">
                                <a href="logout.php"><button class="site-button m-r15"
                                        type="button">Logout</button></a>
                            </div>';
                            }else{
                                echo '<div class="extra-cell">
                                <a href="sign-up.php"><button class="site-button m-r15"
                                        type="button">Signup</button></a>
                                <a href="login-1.html"><button class="site-button m-r15"
                                        type="button">Login</button></a>
                            </div>';
                            }

                            ?>
                           
                        </div>
                        <!-- main nav -->
                        <div class="header-nav navbar-collapse collapse justify-content-end" id="navbarNavDropdown">
                            <ul class="nav navbar-nav">
                                <li class="active"> <a href="index.php">Home</a> </li>

                                <li> <a href="about-2.php">About</a> </li>

                                <li> <a href="all-service.php">Services</a></li>

                                <li> <a href="shop-product-2.php">Shop</a></li>

                                <li> <a href="faq-1.php">FAQs</a> </li>

                                <li> <a href="contact.php">Contact us</a> </li>


                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- main header END -->
            <br>
        </header>
        <!-- header END -->

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