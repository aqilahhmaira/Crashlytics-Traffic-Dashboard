<?php
include 'db.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $message = $conn->real_escape_string($_POST['message']);

    $conn->query("INSERT INTO contact (name, email, phone, message) 
                  VALUES ('$name', '$email', '$phone', '$message')");
    
    echo "<script>alert('Your message has been submitted successfully!'); window.location.href='contact.php';</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Contact Us - Crashlytics</title>
  <link rel="stylesheet" href="style.css" />
  <style>
  </style>
</head>
<body>

<!-- Navigation Header -->
<header class="header">
    <div class="nav-container">
        <div class="logo"> 
        <img src="crashlytics.png" alt="Crashlytics Logo">
        <span class="logo-text">Traffic Dashboard</span>
    </div>
        <!-- Fix anchor links -->
        <nav>
            <ul class="nav-links">
                <li><a href="index.php#home">Home</a></li>
                <li><a href="index.php#dashboard">Dashboard</a></li>
                <li><a href="usermanual.php">User Manual</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="login.php">Admin Login</a></li>
            </ul>
        </nav>
    </div>
</header>

<div class="page-container">
  <main class="content-wrap">

    <section class="contact-container">
      <div class="contact-info">
        <h2>Contact Us</h2>
        <p>Feel free to reach out to us for any questions, suggestions, or issues!</p>
        <ul>
          <li>👤 Nur Aqilah Humaira Binti Ahmad</li>
          <li>🏫 Universiti Technologi MARA (UiTM)</li>
          <li>📞 011-59234295</li>
          <li>✉ nuraqilahhumaira28@gmail.com</li>
        </ul>
      </div>

      <div class="contact-form">
        <h2>Send Us a Message</h2>
        <form method="POST" action="contact.php">
          <input type="text" name="name" placeholder="Your Name" required />
          <input type="email" name="email" placeholder="Your Email" required />
          <input type="text" name="phone" placeholder="Phone Number (optional)" />
          <textarea name="message" rows="5" placeholder="Type your message here..." required></textarea>
          <button type="submit">Submit</button>
        </form>
      </div>
    </section>

  </main>


</div>
</body>
</html>