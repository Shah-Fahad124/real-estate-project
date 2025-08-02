<?php
include '../auth/connection.php';

$id = $_POST['id'];
$name = $_POST['name'];
$description = $_POST['description'];
$old_image = $_POST['old_image'];

if ($_FILES['image']['name'] != "") {
    $image = time() . '_' . $_FILES['image']['name'];
    move_uploaded_file($_FILES['image']['tmp_name'], "../assets/images/" . $image);
} else {
    $image = $old_image;
}

$updateQuery = "UPDATE areas SET name='$name', description='$description', image='$image' WHERE id=$id";
mysqli_query($conn, $updateQuery);

header("Location: " . $_SERVER['HTTP_REFERER']);
exit;
