<?php
session_start();
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $phoneNo = $_POST['phoneNo'];
    $password = $_POST['password'];

    // Check if email already exists
    $stmt = $conn->prepare("SELECT id FROM admin WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        echo "<script>alert('Email already registered!');</script>";
    } else {
        // Insert new admin
        $stmt = $conn->prepare("INSERT INTO admin (full_name, email, password, phoneNo) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $full_name, $email, $password, $phoneNo);

        if ($stmt->execute()) {
            echo "<script>alert('Admin registered successfully! Please login.'); window.location.href='login.php';</script>";
            exit;
        } else {
            echo "<script>alert('Error: Registration failed!');</script>";
        }
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
    <title>Register Admin | Traffic Violation Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="overlay"></div>
<div class="login-wrapper">
    <div class="login-box">
        <h2>Register Admin</h2>
        <form action="register.php" method="POST">
            <input type="text" name="full_name" placeholder="Full Name" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="text" name="phoneNo" placeholder="Phone Number" required>
            <button type="submit">Register</button>
        </form>

        <div class="register-section">
            <p>Already have an account?</p>
            <a href="login.php" class="register-btn">Back to Login</a>
        </div>

        <p class="back-home">Back to <a href="index.php">Home</a></p>
    </div>
</div>
</body>
</html>
