<?php
include '../auth/connection.php';

$id = $_GET['id'];

// Delete from property_developer table first
mysqli_query($conn, "DELETE FROM property_developers WHERE property_id = $id");

// Delete from properties table
mysqli_query($conn, "DELETE FROM properties WHERE id = $id");

    header("Location: " . $_SERVER['HTTP_REFERER']);
exit;
?>