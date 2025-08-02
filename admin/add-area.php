<?php include './auth/connection.php'; ?>
<?php include './components/head.php' ?>
<?php include './components/header.php' ?>
<?php include './components/sidebar.php' ?>

<div class="app-content">
    <section class="section">
        <!-- Page Header -->
        <div class="page-header p-5" style="background: linear-gradient(to bottom right, #7673e6, #8483f5);">
            <h4 class="page-title font-weight-bold">Area Form</h4>
        </div>

        <!-- Form Section -->
        <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h4 class="font-weight-bold">Add Area</h4>
                </div>
                <div class="card-body">
                                        
                    <form class="form-horizontal" action="./process/add-area-process.php" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <!-- Area Name -->
                            <div class="form-group col-lg-6">
                                <label class="form-label font-weight-bold">Area Name</label>
                                <input class="form-control form-control-lg" type="text" name="name" required>
                            </div>
                            <!-- Image Upload -->
                            <div class="form-group col-lg-6">
                                <label class="form-label font-weight-bold">Upload Image</label>
                                <input class="form-control form-control-lg" type="file" name="image" accept="image/*" required>
                            </div>
                        </div>
                        <!-- Description -->
                        <div class="form-group">
                            <label class="form-label font-weight-bold">Description</label>
                            <textarea class="form-control form-control-lg" name="description" rows="4" required></textarea>
                        </div>
                        <!-- Submit Button -->
                        <div class="row">
                            <div class="col-lg-2 text-center">
                                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>

<?php include './components/footer.php' ?>