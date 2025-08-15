<?php
include '../auth/connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $property_id = (int)$_POST['id'];

    // Determine if we're saving as draft or publishing/updating
    $isDraft = ($_POST['action'] === 'draft');
    $isPublish = ($_POST['action'] === 'update');

    // For draft, status remains 0. For publish/update, check if we're changing status
    $current_status_result = mysqli_query($conn, "SELECT status FROM properties WHERE id = $property_id");
    $current_status = mysqli_fetch_assoc($current_status_result)['status'];

    $status = $isDraft ? 0 : ($isPublish ? 1 : $current_status);

    // Helper: Safe fetch with fallback
    function safePost($key, $default = null)
    {
        return isset($_POST[$key]) ? trim($_POST[$key]) : $default;
    }

    // Sanitize text values
    $title       = mysqli_real_escape_string($conn, safePost('title', ''));
    $description = mysqli_real_escape_string($conn, safePost('description', ''));
    $purpose     = mysqli_real_escape_string($conn, safePost('purpose', ''));
    $type        = mysqli_real_escape_string($conn, safePost('type', ''));
    $location    = mysqli_real_escape_string($conn, safePost('location', ''));
    $listing_type = mysqli_real_escape_string($conn, safePost('listing_type', ''));
    $featured    = (int) safePost('featured', 0);
    $bedrooms    = (int) safePost('bedrooms', 0);
    $bathrooms   = (int) safePost('bathrooms', 0);
    $area_sqft   = (int) safePost('area_sqft', 0);
    $floors      = (int) safePost('floors', 0);
    $price       = (float) safePost('price', 0);
    $area_id     = (int) safePost('area_id', 0);
    $about_location   = mysqli_real_escape_string($conn, safePost('about_location', ''));
    $masterPlan_desc  = mysqli_real_escape_string($conn, safePost('masterPlan_desc', ''));
    $meta_title       = mysqli_real_escape_string($conn, safePost('meta_title', ''));
    $meta_desc        = mysqli_real_escape_string($conn, safePost('meta_desc', ''));

    $developer_ids = $_POST['developer_ids'] ?? [];
    $facility_ids  = $_POST['facility_ids'] ?? [];

    // VALIDATION (same as add)
    if ($isPublish) {
        if ($bedrooms < 1 || $bathrooms < 1 || $area_sqft < 100 || $price < 0) {
            header("Location: ../add-property.php?id=$property_id&error=Invalid numeric values.");
            exit;
        }

        $requiredFields = [$title, $description, $purpose, $type, $location, $listing_type, $about_location, $masterPlan_desc, $meta_title, $meta_desc];
        foreach ($requiredFields as $field) {
            if (empty($field)) {
                header("Location: ../add-property.php?id=$property_id&error=Please fill all required fields.");
                exit;
            }
        }
    }

    // File upload helper
    function uploadFile($file, $folder = '../assets/images/')
    {
        if (!empty($file['name']) && $file['error'] === 0) {
            $newName = time() . '_' . basename($file['name']);
            if (move_uploaded_file($file['tmp_name'], $folder . $newName)) {
                return $newName;
            }
        }
        return null;
    }

    // Handle file uploads - use existing if not uploaded new
    $imageNewName = !empty($_FILES['image']['name']) ? uploadFile($_FILES['image']) : safePost('existing_image');
    $locationImageName = !empty($_FILES['location_image']['name']) ? uploadFile($_FILES['location_image']) : safePost('existing_location_image');
    $masterPlanImageName = !empty($_FILES['masterPlan_image']['name']) ? uploadFile($_FILES['masterPlan_image']) : safePost('existing_masterPlan_image');

    if ($isPublish && !$imageNewName) {
        header("Location: ../add-property.php?id=$property_id&error=Main image is required for publishing.");
        exit;
    }

    // Update property
    $updateProperty = "UPDATE properties SET
        title = '$title',
        `desc` = '$description',
        location = '$location',
        listing_type = '$listing_type',
        image = '$imageNewName',
        location_image = '$locationImageName',
        about_location = '$about_location',
        masterPlan_image = '$masterPlanImageName',
        masterPlan_desc = '$masterPlan_desc',
        featured = $featured,
        purpose = '$purpose',
        type = '$type',
        bedrooms = $bedrooms,
        bathrooms = $bathrooms,
        area_sqft = $area_sqft,
        floors = $floors,
        price = $price,
        area_id = $area_id,
        meta_title = '$meta_title',
        meta_desc = '$meta_desc',
        status = $status,
        updated_at = NOW()
        WHERE id = $property_id";

    if (mysqli_query($conn, $updateProperty)) {
        // Update developers (delete old and insert new)
        mysqli_query($conn, "DELETE FROM property_developers WHERE property_id = $property_id");
        foreach ($developer_ids as $dev_id) {
            $dev_id = (int)$dev_id;
            mysqli_query($conn, "INSERT INTO property_developers (property_id, developer_id) VALUES ($property_id, $dev_id)");
        }

        // Update facilities (delete old and insert new)
        mysqli_query($conn, "DELETE FROM property_facilities WHERE property_id = $property_id");
        foreach ($facility_ids as $fac_id) {
            $fac_id = (int)$fac_id;
            mysqli_query($conn, "INSERT INTO property_facilities (property_id, facility_id) VALUES ($property_id, $fac_id)");
        }

        // Handle multiple image uploads
        function handleImageUpdates($conn, $property_id, $newImages, $existingImages, $type)
        {
            // Delete images that were removed (not in existing_images array)
            $currentImages = [];
            if (!empty($_POST["existing_{$type}_images"])) {
                $currentImages = is_array($_POST["existing_{$type}_images"]) ? $_POST["existing_{$type}_images"] : [$_POST["existing_{$type}_images"]];
            }

            // Get all current images of this type from DB
            $dbImages = [];
            $result = mysqli_query($conn, "SELECT image FROM property_images WHERE property_id = $property_id AND type = '$type'");
            while ($row = mysqli_fetch_assoc($result)) {
                $dbImages[] = $row['image'];
            }

            // Find images to delete (in DB but not in current images)
            $toDelete = array_diff($dbImages, $currentImages);
            foreach ($toDelete as $image) {
                mysqli_query($conn, "DELETE FROM property_images WHERE property_id = $property_id AND type = '$type' AND image = '$image'");
                @unlink("../assets/images/$image"); // Delete the file
            }

            // Add new images
            if (!empty($newImages['name'][0])) {
                foreach ($newImages['name'] as $key => $name) {
                    if (!empty($name) && $newImages['error'][$key] === 0) {
                        $tmpName = $newImages['tmp_name'][$key];
                        $newName = time() . '_' . uniqid() . '_' . basename($name);
                        if (move_uploaded_file($tmpName, "../assets/images/" . $newName)) {
                            mysqli_query($conn, "INSERT INTO property_images (property_id, type, image) VALUES ($property_id, '$type', '$newName')");
                        }
                    }
                }
            }
        }

        // Process interior and exterior images
        $existingInterior = $_POST['existing_interior_images'] ?? [];
        $existingExterior = $_POST['existing_exterior_images'] ?? [];

        handleImageUpdates($conn, $property_id, $_FILES['interior_images'], $existingInterior, 'interior');
        handleImageUpdates($conn, $property_id, $_FILES['exterior_images'], $existingExterior, 'exterior');

        if ($isDraft) {
            header("Location: ../drafted-properties.php?success=Draft updated successfully");
        } elseif ($isPublish) {
            header("Location: ../publish-properties.php?success=Property published successfully");
        } else {
            header("Location: ../publish-properties.php?success=Property updated successfully");
        }
        exit;
    }
}
