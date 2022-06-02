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


        <!-- Font Awesome -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
    rel="stylesheet"
    />
    <!-- MDB -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.1.0/mdb.min.css"
    rel="stylesheet"
    />

</head>

<body id="bg" class="full-boxed">
    <div id="loading-area"></div>


<!-- Section: Design Block -->
<section class="">
  <!-- Jumbotron -->
  <div class="px-4 py-5 px-md-5 text-center text-lg-start" style="background-color: hsl(0, 0%, 96%)">
    <div class="container">
      <div class="row gx-lg-5 align-items-center">
        <div class="col-lg-6 mb-5 mb-lg-0">
          <h1 class="my-5 display-3 fw-bold ls-tight">
            The best offer <br />
            <span class="text-success">for your car</span>
          </h1>
        </div>

        <div class="col-lg-6 mb-5 mb-lg-0">
                 <?php

                    if(isset($_GET["error"])){
                        if($_GET["error"] == "takenID"){
                            echo '<div class="alert alert-danger alert-dismissible fade show">
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            <strong>This username is already used!</strong></div>';
                        }
                    }

                    ?>
          <div class="card">
            <div class="card-body py-5 px-md-5">
              <form action="signup.php" method="post">
                <!-- 2 column grid layout with text inputs for the first and last names -->
                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" id="form3Example1" name = "fname" class="form-control" />
                      <label class="form-label" for="form3Example1">First name</label>
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" id="form3Example2" class="form-control" name = "lname" />
                      <label class="form-label" for="form3Example2">Last name</label>
                    </div>
                  </div>
                </div>

                <div class="form-outline mb-4">
                  <input type="text" id="form3Example3" class="form-control" name="uId" />
                  <label class="form-label" for="form3Example3">Username</label>
                </div>

                 <!-- Email input -->
                <div class="form-outline mb-4">
                  <input type="text" id="form3Example3" class="form-control" name="email" />
                  <label class="form-label" for="form3Example3">Email address</label>
                </div>


                <div class="form-outline mb-4">
                  <input type="tel" id="form3Example4" class="form-control" name="tel" />
                  <label class="form-label" for="form3Example4">Phone Number</label>
                </div>

                
                <!-- Password input -->
                <div class="form-outline mb-4">
                  <input type="password" id="form3Example4" class="form-control" name = "pwd" />
                  <label class="form-label" for="form3Example4">Password</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="password" id="form3Example4" class="form-control" name="pwdRepeat" />
                  <label class="form-label" for="form3Example4">Re-enter Password</label>
                </div>


                <!-- Submit button -->
                <button type="submit" name="submit" value="submit" class="btn btn-success btn-block mb-4">
                  Sign up
                </button>
              </form>

                <a href="index.php">
                <button  class="btn btn-Light btn-block mb-4">
                  Back
                </button>
                </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Jumbotron -->
</section>
<!-- Section: Design Block -->

    <div class="bottom-footer text-center text-white">
        <p>2022 © Pseudo Program Nerds. </p>
    </div>
    
    <!-- Content END-->
    
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
        <!-- MDB -->
    <script
    type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.1.0/mdb.min.js"
    ></script>
</body>

</html>