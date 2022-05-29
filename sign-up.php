<!DOCTYPE html>
<html lang="en">

<head>
    <!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="Pseudo Program Nerds" />
    <meta name="robots" content="" />
    <meta name="format-detection" content="telephone=no">

    <!-- FAVICONS ICON -->
    <link rel="icon" href="images/favicon.png" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />

    <!-- PAGE TITLE HERE -->
    <title>AddedPower - Sign Up</title>

    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--[if lt IE 9]>
		<script src="js/html5shiv.min.js"></script>
		<script src="js/respond.min.js"></script>
	<![endif]-->

    <!-- STYLESHEETS -->
    <link rel="stylesheet" type="text/css" href="css/style.min.css">
    <link class="skin" rel="stylesheet" type="text/css" href="css/skin/skin-1.css">
    <link rel="stylesheet" type="text/css" href="css/templete.min.css">

</head>

<body id="bg" class="full-boxed">
    <div id="loading-area"></div>
    <div class="page-wrapers">
        <!-- Content -->
        <div class="page-content dlab-login bg-secondry">
            <div class="top-head logo-white text-center logo-header">
                <a href="index.php">
                    <img src="images/logo.png" alt="AddedPowerLogo" />
                </a>
            </div>
            <div id="developement-1" class="tab-pane login-form">
                <form action="signup.php" method="post" class="p-a30 dlab-form text-center text-center"
                    autocomplete="on">
                    <h3 class="form-title m-t0">Sign Up</h3>
                    <div class="dlab-separator-outer m-b5">
                        <div class="dlab-separator bg-primary style-liner"></div>
                    </div>
                    <p>Enter your personal details below: </p>
                    <div class="form-group">
                        <input name="fname" required="" class="form-control" placeholder="First Name" type="text" />
                    </div>
                    <div class="form-group">
                        <input name="lname" required="" class="form-control" placeholder="Last Name" type="text" />
                    </div>
                    <div class="form-group">
                        <input name="uId" required="" class="form-control" placeholder="User Name" type="text" />
                    </div>

                    <?php

                    if(isset($_GET["error"])){
                        if($_GET["error"] == "takenID"){
                            echo '<div class="alert alert-danger alert-dismissible fade show">
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            <strong>This username is already used!</strong></div>';
                        }
                    }

                    ?>

                    <div class="form-group">
                        <input name="email" required="" class="form-control" placeholder="Email Id" type="text" />
                    </div>
                    <div class="form-group">
                        <input name="tel" required="" class="form-control" placeholder="Phone Number" type="text" />
                    </div>

                    <div class="form-group">
                        <input name="pwd" required="" class="form-control" placeholder="Password" type="password" />
                    </div>
                    <div class="">
                        <input name="pwdRepeat" required="" class="form-control" placeholder="Re-type Your Password"
                            type="password" />
                    </div>
                    <div class="m-b30">
                        <input id="check2" type="checkbox" />
                        <label for="check2">I agree to the <a href="#">Terms of Service </a>& <a href="#">Privacy
                                Policy</a> </label>
                    </div>
                    <div class="form-group text-left ">
                        <a class="site-button outline gray" data-bs-toggle="tab" href="#login">Back</a>
                        <input type="submit" name="submit" value="submit" class="site-button float-end"></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="bottom-footer text-center text-white">
        <p>2022 © Pseudo Program Nerds. </p>
    </div>
    </div>
    <!-- Content END-->
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