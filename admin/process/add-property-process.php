<?php
include '../auth/connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize and collect inputs
    $title= mysqli_real_escape_string($conn, $_POST['title']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $purpose     = mysqli_real_escape_string($conn, $_POST['purpose']);
    $type        = mysqli_real_escape_string($conn, $_POST['type']);
    $location    = mysqli_real_escape_string($conn, $_POST['location']);
    $featured    = mysqli_real_escape_string($conn, $_POST['featured']);
    $bedrooms    = (int)$_POST['bedrooms'];
    $bathrooms   = (int)$_POST['bathrooms'];
    $area_sqft   = (int)$_POST['area_sqft'];
    $price       = (float)$_POST['price'];
    $area_id     = (int)$_POST['area_id'];
    $developer_ids = $_POST['developer_ids'] ?? [];

    // Validate numeric inputs
    if ($bedrooms < 1 || $bathrooms < 1 || $area_sqft < 100 || $price < 0) {
        header("Location: " . $_SERVER['HTTP_REFERER'] . "?error=Invalid numeric values.");
        exit;
    }

    // Handle image upload
    $imageName = $_FILES['image']['name'];
    $imageTmp  = $_FILES['image']['tmp_name'];
    $imageNewName = time() . '_' . basename($imageName);
    $uploadPath = '../assets/images/' . $imageNewName;

    if (!move_uploaded_file($imageTmp, $uploadPath)) {
        header("Location: " . $_SERVER['HTTP_REFERER'] . "?error=Image upload failed");
        exit;
    }

    // Insert into properties table
  $insertProperty = "INSERT INTO properties 
    (title, `desc`, location, image, featured, purpose, type, bedrooms, bathrooms, area_sqft, price, area_id, created_at) 
    VALUES (
        '$title', '$description', '$location', '$imageNewName', '$featured', '$purpose', '$type', 
        $bedrooms, $bathrooms, $area_sqft, $price, $area_id, NOW()
    )";

    if (mysqli_query($conn, $insertProperty)) {
        $property_id = mysqli_insert_id($conn);

        // Insert multiple developers into property_developers
        foreach ($developer_ids as $dev_id) {
            $dev_id = (int)$dev_id;
            mysqli_query($conn, "INSERT INTO property_developers (property_id, developer_id) VALUES ($property_id, $dev_id)");
        }

        // Redirect with success
        header("Location: " . $_SERVER['HTTP_REFERER'] . "?success=Property added successfully");
        exit;
    } else {
        header("Location: " . $_SERVER['HTTP_REFERER'] . "?error=" . urlencode("Database Error: " . mysqli_error($conn)));
        exit;
    }
} else {
    echo "Invalid request method.";
}
?>
