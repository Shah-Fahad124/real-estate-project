<?php include './auth/connection.php'; ?>
<?php include './components/head.php' ?>
<?php include './components/header.php' ?>
<?php include './components/sidebar.php' ?>
<?php include './components/sweet-alert.php' ?>




<div class="app-content">
    <section class="section">
        <!-- Page Header -->
        <div class="page-header p-5" style="background: linear-gradient(to bottom right, #7673e6, #8483f5);">
            <h4 class="page-title font-weight-bold">Add Property</h4>
        </div>

        <!-- Form Section -->
        <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h4 class="font-weight-bold">Add Property</h4>
                </div>
                <div class="card-body">
                    <form class="form-horizontal" action="./process/add-property-process.php" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <!-- Title -->
                            <div class="form-group col-lg-6">
                                <label class="form-label font-weight-bold">Property Title</label>
                                <input class="form-control form-control-lg" type="text" name="title" required>
                            </div>

                            <!-- Purpose -->
                            <div class="form-group col-lg-6">
                                <label class="form-label font-weight-bold">Purpose</label>
                                <select class="form-control form-control-lg" name="purpose" required>
                                    <option value="" disabled selected>Select Purpose</option>
                                    <option value="For Sale">For Sale</option>
                                    <option value="For Rent">For Rent</option>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <!-- Type -->
                            <div class="form-group col-lg-6">
                                <label class="form-label font-weight-bold">Property Type</label>
                                <select class="form-control form-control-lg" name="type" required>
                                    <option value="Apartment">Apartment</option>
                                    <option value="Villa">Villa</option>
                                    <option value="Townhouse">Townhouse</option>
                                    <option value="Penthouse">Penthouse</option>
                                    <option value="Studio">Studio</option>
                                    <option value="Office">Office</option>
                                    <option value="Retail">Retail</option>
                                    <option value="Warehouse">Warehouse</option>
                                </select>
                            </div>

                            <!-- Location -->
                            <div class="form-group col-lg-6">
                                <label class="form-label font-weight-bold">Location</label>
                                <input class="form-control form-control-lg" type="text" name="location" required>
                            </div>
                        </div>
                        <div class="row">
                            <!-- Price -->
                            <div class="form-group col-lg-6">
                                <label class="form-label font-weight-bold">Price</label>
                                <input class="form-control form-control-lg" type="number" name="price" min="0" required>
                            </div>

                            <!-- Image -->
                            <div class="form-group col-lg-6">
                                <label class="form-label font-weight-bold">Upload Image</label>
                                <input class="form-control form-control-lg" type="file" name="image" accept="image/*" required>
                            </div>
                        </div>


                        <div class="row">
                            <!-- Bedrooms -->
                            <div class="form-group col-lg-4">
                                <label class="form-label font-weight-bold">Bedrooms</label>
                                <input class="form-control form-control-lg" type="number" name="bedrooms" min="1" required>
                            </div>

                            <!-- Bathrooms -->
                            <div class="form-group col-lg-4">
                                <label class="form-label font-weight-bold">Bathrooms</label>
                                <input class="form-control form-control-lg" type="number" name="bathrooms" min="1" required>
                            </div>

                            <!-- Area (sqft) -->
                            <div class="form-group col-lg-4">
                                <label class="form-label font-weight-bold">Area (sqft)</label>
                                <input class="form-control form-control-lg" type="number" name="area_sqft" min="100" required>
                            </div>
                        </div>


                        <div class="row">
                            <!-- Area Select -->
                            <div class="form-group col-lg-6">
                                <label class="form-label font-weight-bold">Select Area</label>
                                <select class="form-control form-control-lg" name="area_id" required>
                                    <option value="" disabled selected>Select Area</option>
                                    <?php
                                    $areas = mysqli_query($conn, "SELECT id, name FROM areas");
                                    while ($area = mysqli_fetch_assoc($areas)) {
                                        echo "<option value='{$area['id']}'>{$area['name']}</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <!-- Featured -->
                            <div class="form-group col-lg-6">
                                <label class="form-label font-weight-bold">Featured</label>
                                <select class="form-control form-control-lg" name="featured" required>
                                    <option value="" disabled selected>Select</option>
                                    <option value="1">Yes</option>
                                    <option value="0">No</option>
                                </select>
                            </div>

                        </div>


                        <!-- Developer Multi-Select with Select2 -->
                        <div class="form-group col-lg-6">
                            <label class="form-label font-weight-bold">Select Developers</label>
                            <select class="form-control select2" name="developer_ids[]" multiple="multiple" data-placeholder="Choose Developers" required>
                                <?php
                                $developers = mysqli_query($conn, "SELECT id, name FROM developers");
                                while ($dev = mysqli_fetch_assoc($developers)) {
                                    echo "<option value='{$dev['id']}'>{$dev['name']}</option>";
                                }
                                ?>
                            </select>
                        </div>
                           <div class="row">
                            <!-- Interior Images -->
                            <div class="form-group col-lg-6">
                                <label class="form-label font-weight-bold">Upload Interior Images</label>
                                <input class="form-control form-control-lg" type="file" name="interior_images[]" accept="image/*" multiple required>
                                <small class="text-muted">You can select multiple interior images</small>
                            </div>

                            <!-- Exterior Images -->
                            <div class="form-group col-lg-6">
                                <label class="form-label font-weight-bold">Upload Exterior Images</label>
                                <input class="form-control form-control-lg" type="file" name="exterior_images[]" accept="image/*" multiple required>
                                <small class="text-muted">You can select multiple exterior images</small>
                            </div>
                        </div>
                        <!-- description -->
                        <div class="form-group">
                            <label class="form-label font-weight-bold">Description</label>
                            <textarea name="description" id="" class="form-control form-control-lg" rows="4" required></textarea>
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