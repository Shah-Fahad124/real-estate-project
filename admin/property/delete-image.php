<?php
include '../auth/connection.php';

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $image_id = (int)$_POST['image_id'];
    $property_id = (int)$_POST['property_id'];
    $image_type = $_POST['image_type'];

    // Get image filename before deleting
    $query = "SELECT image FROM property_images WHERE id = $image_id AND property_id = $property_id";
    $result = mysqli_query($conn, $query);
    
    if ($result && mysqli_num_rows($result) > 0) {
        $image = mysqli_fetch_assoc($result)['image'];
        $file_path = "../assets/images/$image";
        
        // Delete from database
        $delete_query = "DELETE FROM property_images WHERE id = $image_id AND property_id = $property_id";
        if (mysqli_query($conn, $delete_query)) {
            // Delete the physical file
            if (file_exists($file_path)) {
                unlink($file_path);
            }
            echo json_encode(['success' => true]);
        } else {
            echo json_encode(['success' => false, 'message' => 'Database error']);
        }
    } else {
        echo json_encode(['success' => false, 'message' => 'Image not found']);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid request']);
}
?>