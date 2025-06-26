<?php
session_start();
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT id, full_name, password, phoneNo FROM admin WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($id, $fullname, $db_password, $phoneNo);

    if ($stmt->num_rows > 0) {
        $stmt->fetch();
        if ($password === $db_password) { // Compare password directly (later boleh buat password_hash)
            $_SESSION['admin_id'] = $id;
            $_SESSION['admin_fullname'] = $fullname;
            $_SESSION['admin_email'] = $email;
            $_SESSION['admin_phoneNo'] = $phoneNo;
            header("Location: admin.php");
            exit;
        } else {
            echo "<script>alert('Invalid password!');</script>";
        }
    } else {
        echo "<script>alert('No account found!');</script>";
    }

    $stmt->close();
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login | Traffic Violation Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="overlay"></div>
<div class="login-wrapper">
    <div class="login-box">
        <h3><p> This Page is Only For Website Admin </p></h3>
        <h2>Admin Login</h2>
        <form action="login.php" method="POST">
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>


        <p class="back-home">Back to <a href="index.php">Home</a></p>
    </div>
</div>
</body>
</html>
