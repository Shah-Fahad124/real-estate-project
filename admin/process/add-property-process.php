<?php
include '../auth/connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $isPublish = ($_POST['action'] === 'publish');
    $status    = $isPublish ? 1 : 0;

    // Helper: Safe fetch with fallback
    function safePost($key, $default = null) {
        return isset($_POST[$key]) ? trim($_POST[$key]) : $default;
    }

    // Sanitize text values (allow empty if draft)
    $title       = mysqli_real_escape_string($conn, safePost('title', ''));
    $description = mysqli_real_escape_string($conn, safePost('description', ''));
    $purpose     = mysqli_real_escape_string($conn, safePost('purpose', ''));
    $type        = mysqli_real_escape_string($conn, safePost('type', ''));
    $location    = mysqli_real_escape_string($conn, safePost('location', ''));
    $listing_type    = mysqli_real_escape_string($conn, safePost('listing_type', ''));
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

    // VALIDATION
    if ($isPublish) {
        // Numeric validations only for publish
        if ($bedrooms < 1 || $bathrooms < 1 || $area_sqft < 100 || $price < 0) {
            header("Location: ../add-property.php?error=Invalid numeric values.");
            exit;
        }

        // Required field check for publish
        $requiredFields = [$title, $description, $purpose, $type, $location,$listing_type, $about_location, $masterPlan_desc, $meta_title, $meta_desc];
        foreach ($requiredFields as $field) {
            if (empty($field)) {
                header("Location: ../add-property.php?error=Please fill all required fields.");
                exit;
            }
        }
    }

    // File upload helper
    function uploadFile($file, $folder = '../assets/images/') {
        if (!empty($file['name']) && $file['error'] === 0) {
            $newName = time() . '_' . basename($file['name']);
            if (move_uploaded_file($file['tmp_name'], $folder . $newName)) {
                return $newName;
            }
        }
        return null;
    }

    // For publish, image is required; for draft, optional
    $imageNewName = uploadFile($_FILES['image']);
    if ($isPublish && !$imageNewName) {
        header("Location: ../add-property.php?error=Main image is required for publishing.");
        exit;
    }

    $locationImageName   = uploadFile($_FILES['location_image']);
    $masterPlanImageName = uploadFile($_FILES['masterPlan_image']);

    // Insert property
    $insertProperty = "INSERT INTO properties 
        (title, `desc`, location,listing_type, image, location_image, about_location, 
         masterPlan_image, masterPlan_desc, featured, purpose, type, bedrooms, bathrooms, 
         area_sqft, floors, price, area_id, meta_title, meta_desc, status, created_at) 
        VALUES (
            '$title', '$description', '$location','$listing_type', '$imageNewName', '$locationImageName', '$about_location',
            '$masterPlanImageName', '$masterPlan_desc', $featured, '$purpose', '$type', $bedrooms, $bathrooms, 
            $area_sqft, $floors, $price, $area_id, '$meta_title', '$meta_desc', $status, NOW()
        )";

    if (mysqli_query($conn, $insertProperty)) {
        $property_id = mysqli_insert_id($conn);

        // Developers
        foreach ($developer_ids as $dev_id) {
            $dev_id = (int)$dev_id;
            mysqli_query($conn, "INSERT INTO property_developers (property_id, developer_id) VALUES ($property_id, $dev_id)");
        }

        // Facilities
        foreach ($facility_ids as $fac_id) {
            $fac_id = (int)$fac_id;
            mysqli_query($conn, "INSERT INTO property_facilities (property_id, facility_id) VALUES ($property_id, $fac_id)");
        }

        // Multiple image uploads
        function uploadMultipleImages($files, $type, $property_id, $conn) {
            $uploadDir = '../assets/images/';
            foreach ($files['name'] as $key => $name) {
                if (!empty($name) && $files['error'][$key] === 0) {
                    $tmpName = $files['tmp_name'][$key];
                    $newName = time() . '_' . uniqid() . '_' . basename($name);
                    if (move_uploaded_file($tmpName, $uploadDir . $newName)) {
                        mysqli_query($conn, "INSERT INTO property_images (property_id, type, image) VALUES ($property_id, '$type', '$newName')");
                    }
                }
            }
        }

        if (!empty($_FILES['interior_images']['name'][0])) {
            uploadMultipleImages($_FILES['interior_images'], 'interior', $property_id, $conn);
        }
        if (!empty($_FILES['exterior_images']['name'][0])) {
            uploadMultipleImages($_FILES['exterior_images'], 'exterior', $property_id, $conn);
        }

        header("Location: ../add-property.php?success=" . ($isPublish ? "Property published successfully" : "Draft saved successfully"));
        exit;
    } else {
        header("Location: ../add-property.php?error=" . urlencode("Database Error: " . mysqli_error($conn)));
        exit;
    }
}

?>
