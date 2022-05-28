<?php
	session_start();

	// IF THE USER HAS ALREADY LOGGED IN
	if(isset($_SESSION['empUsername']) && isset($_SESSION['empPwd']))
	{
		header('Location: empDash.php');
		exit();
	}
	// ELSE
	$pageTitle = 'AddedPower Employee Login';
	include 'connect.php';
	include 'Includes/functions/functions.php';


?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>AddedPower Employee Login</title>
		<!-- FONTS FILE -->
		<link href="Design/fonts/css/all.min.css" rel="stylesheet" type="text/css">

		<!-- Nunito FONT FAMILY FILE -->
		<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

		<!-- CSS FILES -->
		<link href="Design/css/sb-admin-2.min.css" rel="stylesheet">
		<link href="Design/css/main.css" rel="stylesheet">


	</head>
	<body>
		<div class="login">
			<form class="login-container validate-form" name="login-form" method="POST" action="loginEmp.php" onsubmit="return validateLogInForm()">
				<span class="login100-form-title p-b-32">
					AddedPower Employee Login
				</span>

				<!-- PHP SCRIPT WHEN SUBMIT -->

				<?php

					if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['signin-button']))
					{
						$empUsername = test_input($_POST['empUsername']);
						$password = test_input($_POST['password']);

						//Check if User Exist In database

						$stmt = $con->prepare("Select employee_id, phone_number,email,first_name from employees where email = ? and phone_number = ?");
						$stmt->execute(array($empUsername,$password));
						$row = $stmt->fetch();
						$count = $stmt->rowCount();

						// Check if count > 0 which mean that the database contain a record about this username

						if($count > 0)
						{

							$_SESSION['empUsername'] = $empUsername;
							$_SESSION['empPwd'] = $password;
							$_SESSION['empId'] = $row['employee_id'];
							$_SESSION['first_name'] = $row['first_name'];
							header('Location: empDash.php');
							die();
						}
						else
						{
							?>

							<div class="alert alert-danger">
								<button data-dismiss="alert" class="close close-sm" type="button">
									<span aria-hidden="true">×</span>
								</button>
								<div class="messages">
									<div>Employee Username and/or password are incorrect!</div>
								</div>
							</div>

							<?php
						}
					}

				?>

				<!-- USERNAME INPUT -->

				<div class="form-input">
					<span class="txt1">Username</span>
					<input type="text" name="empUsername" class = "form-control" oninput = "getElementById('required_username').style.display = 'none'" autocomplete="off">
					<span class="invalid-feedback" id="required_username">Username is required!</span>
				</div>
				
				<!-- PASSWORD INPUT -->

				<div class="form-input">
					<span class="txt1">Password</span>
					<input type="password" name="password" class="form-control" oninput = "getElementById('required_password').style.display = 'none'" autocomplete="new-password">
					<span class="invalid-feedback" id="required_password">Password is required!</span>
				</div>
				
				<!-- SIGN IN BUTTON -->

				<p>
					<button type="submit" name="signin-button" >Sign In</button>
				</p>
			</form>
		</div>
		
		<!-- Footer -->
		<footer class="sticky-footer bg-white">
			<div class="container my-auto">
		  		<div class="copyright text-center my-auto">
					<span>Copyright &copy; AddedPower Website by pusdo nerd programmers</span>
		  		</div>
			</div>
	  	</footer>
		<!-- End of Footer -->

		<!-- INCLUDE JS SCRIPTS -->
		<script src="Design/js/jquery.min.js"></script>
		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
		<script src="Design/js/bootstrap.bundle.min.js"></script>
		<script src="Design/js/sb-admin-2.min.js"></script>
		<script src="Design/js/main.js"></script>
	</body>
</html>