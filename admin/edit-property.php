<?php
include './auth/connection.php';
include './components/head.php';
include './components/header.php';
include './components/sidebar.php';
<?php include './components/sweet-alert.php' ?>


if (!isset($_GET['id'])) {
    die("No property selected for update.");
}

$id = $_GET['id'];
$property = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM properties WHERE id = $id"));
$developer_ids = [];
$devRes = mysqli_query($conn, "SELECT developer_id FROM property_developers WHERE property_id = $id");
while ($dev = mysqli_fetch_assoc($devRes)) {
    $developer_ids[] = $dev['developer_id'];
}
?>

<div class="app-content">
    <section class="section">
        <div class="page-header p-5" style="background: linear-gradient(to bottom right, #7673e6, #8483f5);">
            <h4 class="page-title font-weight-bold">Update Property</h4>
        </div>

        <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h4 class="font-weight-bold">Update Property</h4>
                </div>
                <div class="card-body">
                    <form action="./property/update-property.php" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?= $id ?>">

                        <div class="row">
                            <div class="form-group col-lg-6">
                                <label class="form-label font-weight-bold">Property Title</label>
                                <input class="form-control" type="text" name="title" value="<?= $property['title'] ?>" required>
                            </div>
                            <div class="form-group col-lg-6">
                                <label class="form-label font-weight-bold">Purpose</label>
                                <select class="form-control" name="purpose" required>
                                    <option value="For Sale" <?= $property['purpose'] == 'For Sale' ? 'selected' : '' ?>>For Sale</option>
                                    <option value="For Rent" <?= $property['purpose'] == 'For Rent' ? 'selected' : '' ?>>For Rent</option>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-lg-6">
                                <label class="form-label font-weight-bold">Property Type</label>
                                <select class="form-control" name="type" required>
                                    <?php
                                    $types = ["Apartment", "Vila", "House", "Commercial", "Plot"];
                                    foreach ($types as $type) {
                                        $selected = $property['type'] == $type ? 'selected' : '';
                                        echo "<option value='$type' $selected>$type</option>";
                                    }
                                    ?>
                                </select>
                            </div>

                            <div class="form-group col-lg-6">
                                <label class="form-label font-weight-bold">Location</label>
                                <input class="form-control" type="text" name="location" value="<?= $property['location'] ?>" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-lg-6">
                                <label class="form-label font-weight-bold">Price</label>
                                <input class="form-control" type="number" name="price" value="<?= $property['price'] ?>" min="0" required>
                            </div>

                            <div class="form-group col-lg-6">
                                <label class="form-label font-weight-bold">Upload Image</label>
                                <input class="form-control" type="file" name="image">
                                <small>Current: <?= $property['image'] ?></small>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-lg-4">
                                <label class="form-label font-weight-bold">Bedrooms</label>
                                <input class="form-control" type="number" name="bedrooms" value="<?= $property['bedrooms'] ?>" min="1" required>
                            </div>

                            <div class="form-group col-lg-4">
                                <label class="form-label font-weight-bold">Bathrooms</label>
                                <input class="form-control" type="number" name="bathrooms" value="<?= $property['bathrooms'] ?>" min="1" required>
                            </div>

                            <div class="form-group col-lg-4">
                                <label class="form-label font-weight-bold">Area (sqft)</label>
                                <input class="form-control" type="number" name="area_sqft" value="<?= $property['area_sqft'] ?>" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-lg-6">
                                <label class="form-label font-weight-bold">Select Area</label>
                                <select class="form-control" name="area_id" required>
                                    <?php
                                    $areas = mysqli_query($conn, "SELECT id, name FROM areas");
                                    while ($area = mysqli_fetch_assoc($areas)) {
                                        $selected = $property['area_id'] == $area['id'] ? 'selected' : '';
                                        echo "<option value='{$area['id']}' $selected>{$area['name']}</option>";
                                    }
                                    ?>
                                </select>
                            </div>

                            <div class="form-group col-lg-6">
                                <label class="form-label font-weight-bold">Featured</label>
                                <select class="form-control" name="featured" required>
                                    <option value="Yes" <?= $property['featured'] == 'Yes' ? 'selected' : '' ?>>Yes</option>
                                    <option value="No" <?= $property['featured'] == 'No' ? 'selected' : '' ?>>No</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group col-lg-6">
                            <label class="form-label font-weight-bold">Select Developers</label>
                            <select class="form-control select2" name="developer_ids[]" multiple="multiple" required>
                                <?php
                                $developers = mysqli_query($conn, "SELECT id, name FROM developers");
                                while ($dev = mysqli_fetch_assoc($developers)) {
                                    $selected = in_array($dev['id'], $developer_ids) ? 'selected' : '';
                                    echo "<option value='{$dev['id']}' $selected>{$dev['name']}</option>";
                                }
                                ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="form-label font-weight-bold">Description</label>
                            <textarea  name="description" class="form-control"><?= $property['desc'] ?></textarea>
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
