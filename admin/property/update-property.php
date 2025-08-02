<?php
include '../auth/connection.php';

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $name = $_POST['title'];
    $desc = $_POST['description'];
    $type = $_POST['type'];
    $purpose = $_POST['purpose'];
    $area_id = $_POST['area_id'];
    $featured = $_POST['featured'];
    $dev_ids = $_POST['developer_ids'];

    // Handle image
    if ($_FILES['image']['name']) {
        $img_name = time() . '_' . $_FILES['image']['name'];
        move_uploaded_file($_FILES['image']['tmp_name'], "../assets/images/$img_name");
        $image_sql = ", image = '$img_name'";
    } else {
        $image_sql = "";
    }

    // Update property
    $update = "UPDATE properties SET title='$name', `desc`='$desc', type='$type', purpose='$purpose', area_id='$area_id', featured='$featured' $image_sql WHERE id=$id";
    mysqli_query($conn, $update);

    // Update developers
    mysqli_query($conn, "DELETE FROM property_developers WHERE property_id = $id");
    foreach ($dev_ids as $dev_id) {
        mysqli_query($conn, "INSERT INTO property_developers (property_id, developer_id) VALUES ($id, $dev_id)");
    }

    header("Location: ../properties-list.php");
    exit();
}
