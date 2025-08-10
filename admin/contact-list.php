<?php include './auth/connection.php'; ?>
<?php include './components/head.php'; ?>
<?php include './components/header.php'; ?>
<?php include './components/sidebar.php'; ?>
<?php include './components/sweet-alert.php' ?>

<div class="app-content">
    <section class="section">
        <div class="page-header p-5" style="background: linear-gradient(to bottom right, #7673e6, #8483f5);">
            <h4 class="page-title font-weight-bold">Contact Us List</h4>
        </div>

        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-body">
                    <table class="table table-bordered table-striped" id="contact-table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone No</th>
                                <th>Message</th>
                                <th>Interested Property</th>
                                <th>Language</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            $query = mysqli_query($conn, "SELECT * FROM contact_us");
                            while ($row = mysqli_fetch_assoc($query)) {
                                echo "<tr>
                                    <td>{$i}</td>
                                    <td>{$row['name']}</td>
                                    <td>{$row['email']}</td>
                                    <td>{$row['phone_no']}</td>
                                    <td>{$row['message']}</td>
                                    <td>{$row['interested_property']}</td>
                                    <td>{$row['lang']}</td>
                                    <td class='d-flex'>
                                        <a href='contact/delete-contact.php?id={$row['id']}' class='btn btn-danger btn-sm' onclick=\"return confirm('Are you sure you want to delete this message?');\">Delete</a>
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
