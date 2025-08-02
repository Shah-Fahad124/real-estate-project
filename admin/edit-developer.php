<?php include './auth/connection.php'; ?>
<?php include './components/head.php'; ?>
<?php include './components/header.php'; ?>
<?php include './components/sidebar.php'; ?>

<?php
$id = $_GET['id'];
$data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM developers WHERE id = $id"));
?>

<div class="app-content">
    <section class="section">
        <div class="page-header p-5" style="background: linear-gradient(to bottom right, #7673e6, #8483f5);">
            <h4 class="page-title font-weight-bold">Update Developer</h4>
        </div>

        <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h4 class="font-weight-bold">Edit Developer</h4>
                </div>
                <div class="card-body">
                    <form class="form-horizontal" action="./developer/update-developer-process.php" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?= $data['id'] ?>">
                        <div class="row align-items-end">
                             <div class="form-group col-lg-6">
                                <label class="form-label font-weight-bold">Upload Logo</label>
                                <img src="./assets/images/<?= $data['logo'] ?>" width="80"><br>
                                <input class="form-control form-control-lg" type="file" name="logo" accept="image/*">
                                <input type="hidden" name="existing_logo" value="<?= $data['logo'] ?>">
                            </div>
                            <div class="form-group col-lg-6">
                                <label class="form-label font-weight-bold">Developer Name</label>
                                <input class="form-control form-control-lg" type="text" name="name" value="<?= $data['name'] ?>" required>
                            </div>                           
                        </div>
                        <div class="form-group">
                            <label class="form-label font-weight-bold">Description</label>
                            <textarea class="form-control form-control-lg" name="description" rows="4" required><?= $data['description'] ?></textarea>
                        </div>
                        <div class="row">
                            <div class="col-lg-2 text-center">
                                <button type="submit" class="btn btn-primary btn-lg">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>

<?php include './components/footer.php'; ?>
