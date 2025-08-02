<?php
include '../auth/connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $referer = $_SERVER['HTTP_REFERER']; // Get previous page URL
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);

    // Handle logo upload
    $logoName = $_FILES['logo']['name'];
    $logoTmp = $_FILES['logo']['tmp_name'];
    $logoPath = "../assets/images/" . basename($logoName);

    if (move_uploaded_file($logoTmp, $logoPath)) {
        $insertQuery = "INSERT INTO developers (logo, name, description) 
                        VALUES ('$logoName', '$name', '$description')";

        if (mysqli_query($conn, $insertQuery)) {
            header("Location: $referer?success=Developer added successfully");
            exit();
        } else {
            header("Location: $referer?error=Database error: " . urlencode(mysqli_error($conn)));
            exit();
        }
    } else {
        header("Location: $referer?error=Logo upload failed");
        exit();
    }
}
?>
