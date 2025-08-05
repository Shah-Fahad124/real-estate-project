<?php include './auth/connection.php'; ?>
<?php include './components/head.php' ?>
<?php include './components/header.php' ?>
<?php include './components/sidebar.php' ?>
<?php include './components/sweet-alert.php' ?>


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
<?php 
$query = mysqli_query($conn, "
  SELECT 
    (SELECT COUNT(*) FROM developers) AS total_developers,
    (SELECT COUNT(*) FROM areas) AS total_areas,
    (SELECT COUNT(*) FROM properties) AS total_properties
");

$data = mysqli_fetch_assoc($query);
?>

<div class="app-content">
	<section class="section">
		<!--page-header open-->
		<div class="page-header p-5" style="background: linear-gradient(to bottom right, #7673e6, #8483f5);">
			<h4 class="page-title">Dashboard</h4>
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="#" class="text-light-color">Home</a></li>
				<li class="breadcrumb-item active" aria-current="page">Dashboard</li>
			</ol>
		</div>
		<!--page-header closed-->

		<!--row open-->
		<div class="row row-deck">
			<div class="col-sm-12 col-lg-6 col-xl-3 col-md-6">
				<div class="card text-center">
					<div class="card-body  mb-0">
						<h5 class="mb-3">Total Developers</h5>
						 <h3><?php echo $data['total_developers'] ?></h3>

					</div>
				</div>
			</div>
			<div class="col-sm-12 col-lg-6 col-xl-3 col-md-6">
				<div class="card text-center">
					<div class="card-body  mb-0">
						<h5 class="mb-3">Total Areas</h5>
						 <h3><?php echo $data['total_areas'] ?></h3>

					</div>
				</div>
			</div>
			<div class="col-sm-12 col-lg-6 col-xl-3 col-md-6">
				<div class="card text-center">
					<div class="card-body  mb-0">
						<h5 class="mb-3">Total Properties</h5>
						 <h3><?php echo $data['total_properties'] ?></h3>

					</div>
				</div>
			</div>
		
		</div>
		<!--row closed-->

		<!--row open-->
		<!-- <div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-header ">
						<h4>Recent Companies</h4>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table id="exampl" class="table table-bordered border-t0 key-buttons text-nowrap w-100 table-responsive pb-2">
								<thead>
									<tr>
										<th>#</th>
										<th>Company Logo</th>
										<th>Company Name</th>
										<th>Established Date</th>
										<th>Company Type</th>
										<th>City</th>
										<th>User Name</th>
										<th>Phone</th>
										<th>Email</th>
										<th>Add Branch</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php
									 $index = 1;
									 foreach ($companies as $company) { ?>
										<tr>
											<td><?php echo $index; ?></td>
											<td><img width="40px" height="30px" src="./assets/img/company-logos/<?php echo $company['company_logo'] ?>" alt="logo"></td>
											<td><?php echo htmlspecialchars($company['company_name']); ?></td>
											<td><?php echo htmlspecialchars($company['established_date']); ?></td>
											<td><?php echo htmlspecialchars($company['company_type']); ?></td>
											<td><?php echo htmlspecialchars($company['company_city']); ?></td>
											<td><?php echo htmlspecialchars($company['user_name']); ?></td>
											<td><?php echo htmlspecialchars($company['contact_no']); ?></td>
											<td><?php echo htmlspecialchars($company['company_email']); ?></td>
											<td><button
													class="btn btn-sm btn-primary addBranchBtn"
													data-toggle="modal"
													data-target="#cityLocationModal"
													data-id="<?php echo $company['id']; ?>">
													Add Branch
												</button>
											</td>
											<td>
												<form action="./process/deleteCompany-process.php" method="POST" onsubmit="return confirm('Are you sure you want to delete this Company?');" style="display: inline;">
													<input type="hidden" name="id" value="<?php echo $company['id']; ?>">
													<button class="btn btn-sm btn-primary" type="submit"><i class="fa fa-trash"></i> Delete</button>
												</form>
												<a href="./update-company.php?id=<?php echo $company['id']; ?>" class="btn btn-sm btn-primary">
													<i class="fa fa-edit"></i> Edit</a>
											</td>
										</tr>
									<?php
									$index++; }; ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div> -->
		<!--row closed-->

	</section>
</div>

</div>




<?php include './components/footer.php' ?>

