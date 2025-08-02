<?php
include "./admin/auth/connection.php";

$offset = isset($_POST['offset']) ? intval($_POST['offset']) : 0;
$limit = 6;

$areas = [];
$query = "SELECT * FROM areas LIMIT $offset, $limit";
$result = mysqli_query($conn, $query);

while ($area = mysqli_fetch_assoc($result)) {
    // Count related projects (properties) via property_developers
    $area_id = $area['id'];
    $project_query = "SELECT COUNT(*) as total FROM properties WHERE area_id = $area_id";
    $project_result = mysqli_query($conn, $project_query);
    $project_count = mysqli_fetch_assoc($project_result)['total'] ?? 0;

    $area['project_count'] = $project_count;
    $areas[] = $area;
}

echo json_encode($areas);
