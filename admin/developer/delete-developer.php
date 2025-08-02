<?php
include '../auth/connection.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = mysqli_query($conn, "DELETE FROM developers WHERE id = $id");

    header("Location: " . $_SERVER['HTTP_REFERER']);
    exit;
}
else {
    header("Location: ../developers-list.php");
    exit;
}