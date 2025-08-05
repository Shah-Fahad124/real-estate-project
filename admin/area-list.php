<?php include './auth/connection.php'; ?>
<?php include './components/head.php'; ?>
<?php include './components/header.php'; ?>
<?php include './components/sidebar.php'; ?>
<?php include './components/sweet-alert.php' ?>


<div class="app-content">
    <section class="section">
        <div class="page-header p-5" style="background: linear-gradient(to bottom right, #7673e6, #8483f5);">
            <h4 class="page-title font-weight-bold">Areas List</h4>
        </div>

        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-body">
                    <table class="table table-bordered table-striped" id="developer-table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            $query = mysqli_query($conn, "SELECT * FROM areas");
                            while ($row = mysqli_fetch_assoc($query)) {
                                echo "<tr>
                                    <td>{$i}</td>
                                    <td><img src='./assets/images/{$row['image']}' width='60'></td>
                                    <td>{$row['name']}</td>
                                    <td>{$row['description']}</td>
                                    <td class='d-flex'>
                                        <a href='edit-area.php?id={$row['id']}' class='btn btn-warning btn-sm mr-2'>Update</a>
                                        <a href='area/delete-area.php?id={$row['id']}' class='btn btn-danger btn-sm' onclick=\"return confirm('Are you sure you want to delete this area?');\">Delete</a>
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
