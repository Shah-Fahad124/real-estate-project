<?php // properties-list.php
include './auth/connection.php';
include './components/head.php';
include './components/header.php';
include './components/sidebar.php';
include './components/sweet-alert.php';
?>

<div class="app-content">
    <section class="section">
        <div class="page-header p-5" style="background: linear-gradient(to bottom right, #7673e6, #8483f5);">
            <h4 class="page-title font-weight-bold">Properties List</h4>
        </div>

        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-body">
                    <table class="table table-bordered table-striped" id="developer-table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Type</th>
                                <th>Purpose</th>
                                <th>Area</th>
                                <th>Developers</th>
                                <th>Featured</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            $query = "SELECT p.*, a.name AS area_name FROM properties p 
                                      LEFT JOIN areas a ON p.area_id = a.id where p.status=0 ORDER BY p.created_at DESC";
                            $result = mysqli_query($conn, $query);
                            while ($row = mysqli_fetch_assoc($result)) {
                                $property_id = $row['id'];

                                // Fetch developers
                                $devQuery = "SELECT d.name FROM property_developers pd 
                                             JOIN developers d ON pd.developer_id = d.id
                                             WHERE pd.property_id = $property_id";
                                $devResult = mysqli_query($conn, $devQuery);
                                $developer_names = [];
                                while ($dev = mysqli_fetch_assoc($devResult)) {
                                    $developer_names[] = $dev['name'];
                                }
                                $developers_list = implode(" - ", $developer_names);

                                $imagePath = $row['image'] ? './assets/images/' . $row['image'] : './assets/images/no-image.jpg';
                                $featured = $row['featured'] ? 'Yes' : 'No';

                                echo "<tr>
                                    <td>{$i}</td>
                                    <td><img src='{$imagePath}' width='70' width='60'></td>
                                    <td>{$row['title']}</td>
                                    <td>{$row['type']}</td>
                                    <td>{$row['purpose']}</td>
                                    <td>{$row['area_name']}</td>
                                    <td>{$developers_list}</td>
                                    <td>{$featured}</td>
                                    <td class='d-flex'>
                                        <a href='add-property.php?id={$property_id}' class='btn btn-warning btn-sm mr-2'>Update</a>
                                        <a href='property/delete-property.php?id={$property_id}' class='btn btn-danger btn-sm' onclick=\"return confirm('Are you sure you want to delete this property?');\">Delete</a>
                                    </td>
                                </tr>";
                                $i++;
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>

<?php include './components/footer.php'; ?>
