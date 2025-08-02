<?php
include '../auth/connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $referer = $_SERVER['HTTP_REFERER'];
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);

    // Validate image upload
    if (isset($_FILES['image']) && $_FILES['image']['error'] === 0) {
        $imageName = basename($_FILES['image']['name']);
        $imageTmp = $_FILES['image']['tmp_name'];
        $imagePath = "../assets/images/" . $imageName;

        if (move_uploaded_file($imageTmp, $imagePath)) {
            $insertQuery = "INSERT INTO areas (image, name, description)
                            VALUES ('$imageName', '$name', '$description')";

            if (mysqli_query($conn, $insertQuery)) {
                header("Location: $referer?success=Area added successfully");
                exit();
            } else {
                header("Location: $referer?error=Database error: " . urlencode(mysqli_error($conn)));
                exit();
            }
        } else {
            header("Location: $referer?error=Image upload failed");
            exit();
        }
    } else {
        header("Location: $referer?error=No image uploaded or upload error");
        exit();
    }
}
?>
