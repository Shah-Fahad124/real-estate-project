<?php 
include 'connection.php';
$email = trim($_POST['email']);
$password = $_POST['password'];

// 1. Check in Admins
$query1 = mysqli_query($conn, "SELECT * FROM admin WHERE email='$email'");
if ($result1 = mysqli_fetch_assoc($query1)) {
     if ($password=$result1['password']){ 
        $_SESSION['user_id'] = $result1['id'];
        header("Location: ../dashboard.php");
        exit;
    }
};
?>