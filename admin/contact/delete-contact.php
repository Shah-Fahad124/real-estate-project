<?php
include '../auth/connection.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "DELETE FROM contact_us WHERE id = '$id'";
    if (mysqli_query($conn, $query)) {
        header("Location: ../contact-list.php?success=Message deleted successfully");
        exit();
    } else {
        header("Location: ../contact-list.php?error=Failed to delete message");
        exit();
    }
} else {
    header("Location: ../contact-list.php?error=Invalid request");
    exit();
}
?>
