<?php include './auth/connection.php'; ?>
<?php include './components/head.php' ?>
<?php include './components/header.php' ?>
<?php include './components/sidebar.php' ?>
<?php include './components/sweet-alert.php' ?>
<style>
    .image-container {
        position: relative;
        display: inline-block;
    }
    .delete-image-btn {
        position: absolute;
        top: -10px;
        right: -10px;
        cursor: pointer;
        background: white;
        border-radius: 50%;
        width: 20px;
        height: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 14px;
    }
    .delete-image-btn:hover {
        transform: scale(1.1);
    }
</style>
<?php
// Initialize property data
$property = [];
$developers = [];
$facilities = [];
$interior_images = [];
$exterior_images = [];

// Fetch property data if ID is provided
if (isset($_GET['id'])) {
    $property_id = (int)$_GET['id'];

    // Fetch main property data
    $property_query = mysqli_query($conn, "SELECT * FROM properties WHERE id = $property_id");
    $property = mysqli_fetch_assoc($property_query);

    if ($property) {
        // Fetch associated developers
        $dev_query = mysqli_query($conn, "SELECT developer_id FROM property_developers WHERE property_id = $property_id");
        while ($row = mysqli_fetch_assoc($dev_query)) {
            $developers[] = $row['developer_id'];
        }

        // Fetch associated facilities
        $fac_query = mysqli_query($conn, "SELECT facility_id FROM property_facilities WHERE property_id = $property_id");
        while ($row = mysqli_fetch_assoc($fac_query)) {
            $facilities[] = $row['facility_id'];
        }

        // Fetch images
        $images_query = mysqli_query($conn, "SELECT * FROM property_images WHERE property_id = $property_id");
        while ($row = mysqli_fetch_assoc($images_query)) {
            if ($row['type'] == 'interior') {
                $interior_images[] = $row;
            } else {
                $exterior_images[] = $row;
            }
        }
    }
}
?>

<div class="app-content">
    <section class="section">
        <!-- Page Header -->
        <div class="page-header p-5" style="background: linear-gradient(to bottom right, #7673e6, #8483f5);">
            <h4 class="page-title font-weight-bold"><?php echo isset($property['id']) ? 'Update Property' : 'Add Property'; ?></h4>
        </div>
        <!-- Form Section -->
        <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h4 class="font-weight-bold"><?php echo isset($property['id']) ? 'Update Property' : 'Add Property'; ?></h4>
                </div>
                <div class="card-body">
                    <form class="form-horizontal" action="./process/<?php echo isset($property['id']) ? 'update-property-process.php' : 'add-property-process.php'; ?>" method="POST" enctype="multipart/form-data">
                        <?php if (isset($property['id'])): ?>
                            <input type="hidden" name="id" value="<?php echo $property['id']; ?>">
                        <?php endif; ?>

                        <div class="row">
                            <!-- Title -->
                            <div class="form-group col-lg-6">
                                <label class="form-label font-weight-bold">Property Title</label>
                                <input class="form-control form-control-lg" type="text" name="title" value="<?php echo isset($property['title']) ? htmlspecialchars($property['title']) : ''; ?>" required>
                            </div>

                            <!-- Purpose -->
                            <div class="form-group col-lg-6">
                                <label class="form-label font-weight-bold">Purpose</label>
                                <select class="form-control form-control-lg" name="purpose" required>
                                    <option value="" disabled>Select Purpose</option>
                                    <option value="For Sale" <?php echo (isset($property['purpose']) && $property['purpose'] == 'For Sale') ? 'selected' : ''; ?>>For Sale</option>
                                    <option value="For Rent" <?php echo (isset($property['purpose']) && $property['purpose'] == 'For Rent') ? 'selected' : ''; ?>>For Rent</option>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <!-- Type -->
                            <div class="form-group col-lg-6">
                                <label class="form-label font-weight-bold">Property Type</label>
                                <select class="form-control form-control-lg" name="type" required>
                                    <option value="Apartment" <?php echo (isset($property['type']) && $property['type'] == 'Apartment' ? 'selected' : ''); ?>>Apartment</option>
                                    <option value="Villa" <?php echo (isset($property['type']) && $property['type'] == 'Villa' ? 'selected' : ''); ?>>Villa</option>
                                    <option value="Townhouse" <?php echo (isset($property['type']) && $property['type'] == 'Townhouse' ? 'selected' : ''); ?>>Townhouse</option>
                                    <option value="Penthouse" <?php echo (isset($property['type']) && $property['type'] == 'Penthouse' ? 'selected' : ''); ?>>Penthouse</option>
                                    <option value="Studio" <?php echo (isset($property['type']) && $property['type'] == 'Studio' ? 'selected' : ''); ?>>Studio</option>
                                    <option value="Office" <?php echo (isset($property['type']) && $property['type'] == 'Office' ? 'selected' : ''); ?>>Office</option>
                                    <option value="Retail" <?php echo (isset($property['type']) && $property['type'] == 'Retail' ? 'selected' : ''); ?>>Retail</option>
                                    <option value="Warehouse" <?php echo (isset($property['type']) && $property['type'] == 'Warehouse' ? 'selected' : ''); ?>>Warehouse</option>
                                </select>
                            </div>

                            <!-- Location -->
                            <div class="form-group col-lg-6">
                                <label class="form-label font-weight-bold">Location</label>
                                <input class="form-control form-control-lg" type="text" name="location" value="<?php echo isset($property['location']) ? htmlspecialchars($property['location']) : ''; ?>" required>
                            </div>
                        </div>

                        <div class="row">
                            <!-- Price -->
                            <div class="form-group col-lg-6">
                                <label class="form-label font-weight-bold">Price</label>
                                <input class="form-control form-control-lg" type="number" name="price" min="0" value="<?php echo isset($property['price']) ? $property['price'] : ''; ?>" required>
                            </div>

                            <!-- Image -->
                            <div class="form-group col-lg-6">
                                <label class="form-label font-weight-bold">Upload Main Image</label>
                                <input class="form-control form-control-lg" type="file" name="image" accept="image/*" <?php echo !isset($property['id']) ? 'required' : ''; ?>>
                                <?php if (isset($property['image']) && !empty($property['image'])): ?>
                                    <div class="mt-2">
                                        <img src="./assets/images/<?php echo $property['image']; ?>" style="max-width: 150px; max-height: 100px;">
                                        <input type="hidden" name="existing_image" value="<?php echo $property['image']; ?>">
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="row">
                            <!-- Bedrooms -->
                            <div class="form-group col-lg-3">
                                <label class="form-label font-weight-bold">Bedrooms</label>
                                <input class="form-control form-control-lg" type="number" name="bedrooms" min="1" value="<?php echo isset($property['bedrooms']) ? $property['bedrooms'] : ''; ?>" required>
                            </div>

                            <!-- Bathrooms -->
                            <div class="form-group col-lg-3">
                                <label class="form-label font-weight-bold">Bathrooms</label>
                                <input class="form-control form-control-lg" type="number" name="bathrooms" min="1" value="<?php echo isset($property['bathrooms']) ? $property['bathrooms'] : ''; ?>" required>
                            </div>

                            <!-- Area (sqft) -->
                            <div class="form-group col-lg-3">
                                <label class="form-label font-weight-bold">Area (sqft)</label>
                                <input class="form-control form-control-lg" type="number" name="area_sqft" min="100" value="<?php echo isset($property['area_sqft']) ? $property['area_sqft'] : ''; ?>" required>
                            </div>

                            <!-- Floors -->
                            <div class="form-group col-lg-3">
                                <label class="form-label font-weight-bold">Floors</label>
                                <input class="form-control form-control-lg" type="number" name="floors" value="<?php echo isset($property['floors']) ? $property['floors'] : ''; ?>" required>
                            </div>
                        </div>

                        <div class="row">
                            <!-- Area Select -->
                            <div class="form-group col-lg-4">
                                <label class="form-label font-weight-bold">Select Area</label>
                                <select class="form-control form-control-lg" name="area_id" required>
                                    <option value="" disabled>Select Area</option>
                                    <?php
                                    $areas = mysqli_query($conn, "SELECT id, name FROM areas");
                                    while ($area = mysqli_fetch_assoc($areas)) {
                                        $selected = (isset($property['area_id']) && $property['area_id'] == $area['id']) ? 'selected' : '';
                                        echo "<option value='{$area['id']}' $selected>{$area['name']}</option>";
                                    }
                                    ?>
                                </select>
                            </div>

                            <!-- Listing Type (Sale/Offplan) -->
                            <div class="form-group col-lg-4">
                                <label class="form-label font-weight-bold">Listing Type</label>
                                <select class="form-control form-control-lg" name="listing_type" required>
                                    <option value="" disabled>Select Type</option>
                                    <option value="sale" <?php echo (isset($property['listing_type']) && $property['listing_type'] == 'sale') ? 'selected' : ''; ?>>Sale</option>
                                    <option value="offplan" <?php echo (isset($property['listing_type']) && $property['listing_type'] == 'offplan') ? 'selected' : ''; ?>>Offplan</option>
                                </select>
                            </div>

                            <!-- Featured -->
                            <div class="form-group col-lg-4">
                                <label class="form-label font-weight-bold">Featured</label>
                                <select class="form-control form-control-lg" name="featured" required>
                                    <option value="1" <?php echo (isset($property['featured']) && $property['featured'] == 1 ? 'selected' : ''); ?>>Yes</option>
                                    <option value="0" <?php echo (isset($property['featured']) && $property['featured'] == 0 ? 'selected' : ''); ?>>No</option>
                                </select>
                            </div>
                        </div>

                        <!-- description -->
                        <div class="form-group">
                            <label class="form-label font-weight-bold">Main Description</label>
                            <textarea name="description" class="form-control form-control-lg" rows="4" required><?php echo isset($property['desc']) ? htmlspecialchars($property['desc']) : ''; ?></textarea>
                        </div>

                        <!-- Location Image and about the location -->
                        <div class="row">
                            <!-- Image -->
                            <div class="form-group col-lg-6">
                                <label class="form-label font-weight-bold">Upload Location Image</label>
                                <input class="form-control form-control-lg" type="file" name="location_image" <?php echo !isset($property['id']) ? 'required' : ''; ?>>
                                <?php if (isset($property['location_image']) && !empty($property['location_image'])): ?>
                                    <div class="mt-2">
                                        <img src="./assets/images/<?php echo $property['location_image']; ?>" style="max-width: 150px; max-height: 100px;">
                                        <input type="hidden" name="existing_location_image" value="<?php echo $property['location_image']; ?>">
                                    </div>
                                <?php endif; ?>
                            </div>

                            <!-- About the location -->
                            <div class="form-group col-lg-6">
                                <label class="form-label font-weight-bold">About the Location</label>
                                <textarea class="form-control form-control-lg" type="text" name="about_location" required><?php echo isset($property['about_location']) ? htmlspecialchars($property['about_location']) : ''; ?></textarea>
                                <small class="text-muted">Provide a brief description of the location</small>
                            </div>
                        </div>

                        <!-- Master plan and desc -->
                        <div class="row">
                            <!-- Image -->
                            <div class="form-group col-lg-6">
                                <label class="form-label font-weight-bold">Master Plan Image</label>
                                <input class="form-control form-control-lg" type="file" name="masterPlan_image" <?php echo !isset($property['id']) ? 'required' : ''; ?>>
                                <?php if (isset($property['masterPlan_image']) && !empty($property['masterPlan_image'])): ?>
                                    <div class="mt-2">
                                        <img src="./assets/images/<?php echo $property['masterPlan_image']; ?>" style="max-width: 150px; max-height: 100px;">
                                        <input type="hidden" name="existing_masterPlan_image" value="<?php echo $property['masterPlan_image']; ?>">
                                    </div>
                                <?php endif; ?>
                            </div>

                            <!-- Master plan desc -->
                            <div class="form-group col-lg-6">
                                <label class="form-label font-weight-bold">Master Plan Description</label>
                                <textarea class="form-control form-control-lg" type="text" name="masterPlan_desc" required><?php echo isset($property['masterPlan_desc']) ? htmlspecialchars($property['masterPlan_desc']) : ''; ?></textarea>
                                <small class="text-muted">Provide a brief description of the master plan</small>
                            </div>
                        </div>

                        <div class="row">
                            <!-- Developer Multi-Select with Select2 -->
                            <div class="form-group col-lg-6">
                                <label class="form-label font-weight-bold">Select Developers</label>
                                <select class="form-control select2" name="developer_ids[]" multiple="multiple" data-placeholder="Choose Developers" required>
                                    <?php
                                    $all_developers = mysqli_query($conn, "SELECT id, name FROM developers");
                                    while ($dev = mysqli_fetch_assoc($all_developers)) {
                                        $selected = in_array($dev['id'], $developers) ? 'selected' : '';
                                        echo "<option value='{$dev['id']}' $selected>{$dev['name']}</option>";
                                    }
                                    ?>
                                </select>
                                <small class="text-muted">Hold Ctrl (Cmd on Mac) to select multiple facilities</small>
                            </div>

                            <!-- Facilities Multi-Select -->
                            <div class="form-group col-lg-6">
                                <label class="form-label font-weight-bold">Select Facilities</label>
                                <select class="form-control select2" name="facility_ids[]" multiple="multiple" data-placeholder="Choose Facilities" required>
                                    <?php
                                    $all_facilities = mysqli_query($conn, "SELECT id, facility FROM facilities");
                                    while ($facility = mysqli_fetch_assoc($all_facilities)) {
                                        $selected = in_array($facility['id'], $facilities) ? 'selected' : '';
                                        echo "<option value='{$facility['id']}' $selected>{$facility['facility']}</option>";
                                    }
                                    ?>
                                </select>
                                <small class="text-muted">Hold Ctrl (Cmd on Mac) to select multiple facilities</small>
                            </div>
                        </div>

                        <div class="row">
                            <!-- Interior Images -->
                            <div class="form-group col-lg-6">
                                <label class="form-label font-weight-bold">Upload Interior Images</label>
                                <input class="form-control form-control-lg" type="file" name="interior_images[]" accept="image/*" multiple <?php echo !isset($property['id']) ? 'required' : ''; ?>>
                                <?php if (!empty($interior_images)): ?>
                                    <div class="mt-2">
                                        <p class="mb-1">Existing Interior Images:</p>
                                        <div class="d-flex flex-wrap">
                                            <?php foreach ($interior_images as $img): ?>
                                                <div class="position-relative m-1 image-container">
                                                    <img src="./assets/images/<?php echo $img['image']; ?>" style="width: 80px; height: 60px; object-fit: cover;">
                                                    <input type="hidden" name="existing_interior_images[]" value="<?php echo $img['image']; ?>">
                                                    <span class="delete-image-btn" data-image-id="<?php echo $img['id']; ?>" data-image-type="interior">
                                                        <i class="fas fa-times-circle text-danger"></i>
                                                    </span>
                                                </div>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <small class="text-muted">You can select multiple interior images</small>
                            </div>

                            <!-- Exterior Images -->
                            <div class="form-group col-lg-6">
                                <label class="form-label font-weight-bold">Upload Exterior Images</label>
                                <input class="form-control form-control-lg" type="file" name="exterior_images[]" accept="image/*" multiple <?php echo !isset($property['id']) ? 'required' : ''; ?>>
                                <?php if (!empty($exterior_images)): ?>
                                    <div class="mt-2">
                                        <p class="mb-1">Existing Exterior Images:</p>
                                        <div class="d-flex flex-wrap">
                                            <?php foreach ($exterior_images as $img): ?>
                                                <div class="position-relative m-1 image-container">
                                                    <img src="./assets/images/<?php echo $img['image']; ?>" style="width: 80px; height: 60px; object-fit: cover;">
                                                    <input type="hidden" name="existing_exterior_images[]" value="<?php echo $img['image']; ?>">
                                                    <span class="delete-image-btn" data-image-id="<?php echo $img['id']; ?>" data-image-type="exterior">
                                                        <i class="fas fa-times-circle text-danger"></i>
                                                    </span>
                                                </div>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <small class="text-muted">You can select multiple exterior images</small>
                            </div>
                        </div>

                        <!-- meta info -->
                        <div class="row">
                            <!-- Title -->
                            <div class="form-group col-lg-6">
                                <label class="form-label font-weight-bold">Meta Title</label>
                                <input class="form-control form-control-lg" type="text" name="meta_title" value="<?php echo isset($property['meta_title']) ? htmlspecialchars($property['meta_title']) : ''; ?>" required>
                            </div>

                            <!-- desc -->
                            <div class="form-group col-lg-6">
                                <label class="form-label font-weight-bold">Meta Description</label>
                                <textarea class="form-control form-control-lg" type="text" name="meta_desc" required><?php echo isset($property['meta_desc']) ? htmlspecialchars($property['meta_desc']) : ''; ?></textarea>
                                <small class="text-muted">Provide a brief meta description for SEO</small>
                            </div>
                        </div>

                        <!-- Action Buttons -->
                        <div class="row mt-4 items-center">
                            <?php if (!isset($property['id']) || (isset($property['status']) && $property['status'] == 0)): ?>
                                <div class="mr-4">
                                    <button type="submit" name="action" value="draft" class="btn btn-secondary btn-lg">
                                        <?php echo isset($property['id']) ? 'Update Draft' : 'Save Draft'; ?>
                                    </button>
                                </div>
                            <?php endif; ?>
                            <div class="">
                                <button type="submit" name="action" value="<?php echo isset($property['id']) ? 'update' : 'publish'; ?>" class="btn btn-primary btn-lg">
                                    <?php echo isset($property['id']) ? ($property['status'] == 1 ? 'Update Property' : 'Publish Now') : 'Publish'; ?>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const draftBtn = document.querySelector('button[name="action"][value="draft"]');

        if (draftBtn) {
            draftBtn.addEventListener('click', function(e) {
                // Remove required from all form elements before submission
                document.querySelectorAll('[required]').forEach(el => {
                    el.removeAttribute('required');
                });
            });
        }

        // Initialize Select2
        $('.select2').select2({
            theme: 'bootstrap4',
            width: '100%'
        });
    });
</script>
<!-- detele code  -->
 <script>
document.addEventListener('DOMContentLoaded', function() {
    // Handle image deletion
    document.querySelectorAll('.delete-image-btn').forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            const imageId = this.getAttribute('data-image-id');
            const imageType = this.getAttribute('data-image-type');
            
            if (confirm('Are you sure you want to delete this image?')) {
                // Send AJAX request to delete the image
                fetch('./property/delete-image.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded',
                    },
                    body: `image_id=${imageId}&image_type=${imageType}&property_id=<?php echo $property_id; ?>`
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        // Remove the image container from the DOM
                        this.closest('.image-container').remove();
                        // Show success message
                        alert('Image deleted successfully');
                    } else {
                        alert('Error deleting image: ' + data.message);
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('An error occurred while deleting the image');
                });
            }
        });
    });
});
</script>

<?php include './components/footer.php' ?>