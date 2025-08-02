<?php
include '../auth/connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $existing_logo = $_POST['existing_logo'];

    $logoName = $existing_logo;
    if (!empty($_FILES['logo']['name'])) {
        $logoName = $_FILES['logo']['name'];
        $logoTmp = $_FILES['logo']['tmp_name'];
        $logoPath = "../assets/images/" . basename($logoName);
        move_uploaded_file($logoTmp, $logoPath);
    }

    $updateQuery = "UPDATE developers SET name='$name', description='$description', logo='$logoName' WHERE id=$id";
    if (mysqli_query($conn, $updateQuery)) {
        header("Location: ../developers-list.php");
        exit;
    } else {
        echo "Database Error: " . mysqli_error($conn);
    }
}
