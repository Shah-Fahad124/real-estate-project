<?php
include '../auth/connection.php';

$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT image FROM areas WHERE id=$id");
$row = mysqli_fetch_assoc($query);

$image = $row['image'];
if (file_exists("../assets/images/" . $image)) {
    unlink("../assets/images/" . $image);
}

mysqli_query($conn, "DELETE FROM area WHERE id=$id");
header("Location: " . $_SERVER['HTTP_REFERER']);
exit;
