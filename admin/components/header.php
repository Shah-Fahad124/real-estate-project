<?php include './auth/security.php'; ?>
	<body class="app ">
	
		<!--app open-->
		<div id="app" class="page">
			<div class="main-wrapper">

				<!--nav open-->
				<nav class="navbar navbar-expand-lg main-navbar">
					<a class="header-brand">
						<img src="./assets/images/NIP BLACK LOGO JPG.jpg" class="header-brand-img rounded-circle" alt="logo">
					</a>
					<form class="form-inline mr-auto">
						<ul class="navbar-nav mr-2">
							<li><a href="#" data-toggle="sidebar" class="nav-link nav-link toggle app-sidebar__toggle"></a></li>
							<li><a href="#" data-toggle="search" class="nav-link nav-link d-md-none navsearch"><i class="fa fa-search"></i></a></li>
						</ul>
						<div class="search-element mr-3">
							<input class="form-control" type="search" placeholder="Search" aria-label="Search">
							<span class="Search-icon"><i class="fa fa-search"></i></span>
						</div>
					</form>
					<ul class="navbar-nav navbar-right">
						<li class="dropdown dropdown-list-toggle d-none d-lg-block">
							<a href="#" class="nav-link nav-link-lg full-screen-link">
								<i class="fa fa-expand " id="fullscreen-button"></i>
							</a>
						</li>
								<li class="nav-item dropdown">
								<a href="#" class="nav-link dropdown-toggle nav-link-lg d-flex align-items-center" data-toggle="dropdown">
									<span class="mr-3 mt-2 d-none d-lg-block">
										<span class="text-white text-capitalize">Hello,<span class="ml-1"></span></span>
									</span>
									<span><img src="./assets/img/avatar/avatar-3.jpeg" alt="profile-user" class="rounded-circle w-32 mr-2"></span>
								</a>
								<div class="dropdown-menu dropdown-menu-right">
									<a class="dropdown-item" href="./auth/logout.php"><i class="mdi  mdi-logout-variant mr-2"></i> <span>Logout</span></a>
								</div>
							</li>						
					</ul>
				</nav>
				<!--nav closed-->