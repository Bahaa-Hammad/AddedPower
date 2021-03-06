	<!-- FONTS FILE -->
  		<link href="Design/fonts/css/all.min.css" rel="stylesheet" type="text/css">

  		<!-- Nunito FONT FAMILY FILE -->
  		<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  		<!-- CSS FILES -->
  		<link href="Design/css/sb-admin-2.min.css" rel="stylesheet">
  		<link href="Design/css/main.css" rel="stylesheet">

  		<!-- Barber Icons -->
  		<link rel="stylesheet" type="text/css" href="Design/fonts/css/all.min.css">
  		<link rel="stylesheet" type="text/css" href="Design/css/barber-icons.css">

		  <!-- FAVICONS ICON -->
		<link rel="icon" href="../images/favicon.png" type="image/x-icon" />
		<link rel="shortcut icon" type="image/x-icon" href="../images/favicon.png" />

   

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.0/css/all.css">

<body id="page-top">

  		<!-- Page Wrapper -->
  		<div id="wrapper">
		
			<!-- Sidebar -->
			<ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

		  		<!-- Sidebar - Brand -->
		  		<a class="sidebar-brand d-flex align-items-center justify-content-center" href="../index.php">
					<div class="sidebar-brand-icon ">
			  			<i class="fa fa-tools"></i>
					</div>
					<div class="sidebar-brand-text mx-3">AddedPower</div>
		  		</a>

		  		<!-- Divider -->
		  		<hr class="sidebar-divider my-0">

			  	<!-- Nav Item - Dashboard -->
			  	<li class="nav-item active">
					<a class="nav-link" href="empDash.php">
				  		<i class="fas fa-fw fa-tachometer-alt"></i>
				  		<span>Empolyee Dashboard</span>
				  	</a>
			  	</li>

	  			<!-- Divider -->
	  			<hr class="sidebar-divider">


	  			<!-- Sidebar Toggler (Sidebar) -->
	  			<div class="text-center d-none d-md-inline">
					<button class="rounded-circle border-0" id="sidebarToggle"></button>
	  			</div>
			</ul>
			
			<!-- End of Sidebar -->

			<!-- Content Wrapper -->
			<div id="content-wrapper" class="d-flex flex-column">
			  
			  	<!-- Main Content -->
			  	<div id="content">
					
					<!-- Topbar -->
					<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
					  
					 	<!-- Sidebar Toggle (Topbar) -->
					  	<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
							<i class="fa fa-bars"></i>
					  	</button>

					  	<!-- Topbar Navbar -->
					  	<ul class="navbar-nav ml-auto">
							<li class="nav-item">
		              			<a class="nav-link" href="../" target="_blank">
		              				<i class="far fa-eye"></i>
		                			<span style="margin-left: 5px;">View website</span>
		              			</a>
		          			</li>
							<div class="topbar-divider d-none d-sm-block"></div>

							<!-- Nav Item - User Information -->
							<li class="nav-item dropdown no-arrow">
					  			<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<span class="mr-2 d-none d-lg-inline text-gray-600 small">
										<?php echo $_SESSION['first_name']; ?>
									</span>
									<i class="fas fa-caret-down"></i>
								</a>
							  	
							  	<!-- Dropdown - User Information -->
							  	<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
									<a class="dropdown-item" href="empProfile.php">
								  		<i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
								  		Profile
									</a>

									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
								  		<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
								  		Logout
									</a>
							  	</div>
							</li>
				  		</ul>
					</nav>
					<!-- End of Topbar -->

	