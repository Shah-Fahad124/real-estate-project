<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
	<meta content="" name="description">
	<meta content="" name="author">
	<meta name="keywords" content="">
	<link rel="icon" href="asset('assets/img/brand/favicon.icon')" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="./assets/img/brand/favicon.icon" />
	<title>Login</title>
	<!--Bootstrap.min css-->
	<link rel="stylesheet" href="./assets/plugins/bootstrap/css/bootstrap.min.css">
	<!--Style css-->
	<link rel="stylesheet" href="./assets/css/style.css">	
    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<?php 
        // SweetAlert for messages
$alertTypes = ['success', 'error', 'delete', 'update'];
foreach ($alertTypes as $type) {
    if (isset($_GET[$type])) {
        $icon = $type === 'error' ? 'error' : 'success';
        $title = ucfirst($type);
        echo "<script>
            Swal.fire({
                title: '$title',
                text: '" . htmlspecialchars($_GET[$type]) . "',
                icon: '$icon',
                confirmButtonText: 'OK'
            });
        </script>";
    }
}
?>

<body class="bg-primary">

	<!--app open-->
	<div id="app" class="page">
		<section class="section ">
			<div class="container">
				<div class="">

					<!--single-page open-->
					<div class="single-page">
						<div class="">
							<div class="wrapper wrapper2">
								<form id="login" action="./auth/loginProcess.php" method="POST" class="card-body" tabindex="500">
									<h3 class="text-dark">Login</h3>
									<div class="mail">
										<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="email">
									</div>
									<div class="passwd">
										<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
									</div>
									<!-- <p class="mb-3 text-right"><a href="forgot-password.php">Forgot Password</a></p> -->
									<div class="submit">
										<button type="submit" class="btn btn-primary btn-block">Login</button>
									</div>
								</form>
							</div>
						</div>
					</div>
					<!--single-page closed-->

				</div>
			</div>
		</section>
	</div>
	<!--app closed-->



</body>

</html>