<?php
session_start();
include 'db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>User Manual | Crashlytics</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">

  <style>
    .manual-header {
      margin-top: 140px;
      text-align: center;
      color: var(--accent-color, #f9d342);
      text-shadow: 2px 2px 5px black;
    }

    .carousel {
      max-width: 900px;
      margin: 30px auto 80px;
      border-radius: 15px;
      overflow: hidden;
      box-shadow: 0 8px 25px rgba(0,0,0,0.5);
    }

    .carousel img {
      max-height: 500px;
      object-fit: contain;
    }
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
        <nav>
            <ul class="nav-links">
                <li><a href="index.php">Home</a></li>
                <li><a href="index.php#dashboard">Dashboard</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="usermanual.php">User Manual</a></li>
                <li><a href="login.php">Admin Login</a></li>
            </ul>
        </nav>
    </div>
</header>

  <h1 class="manual-header">Dashboard User Manual</h1>

  <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="overview.png" class="d-block w-100" alt="User Manual Step 1">
      </div>
      <div class="carousel-item">
        <img src="location.png" class="d-block w-100" alt="User Manual Step 2">
      </div>
      <div class="carousel-item">
        <img src="time.png" class="d-block w-100" alt="User Manual Step 3">
      </div>
      <div class="carousel-item">
        <img src="enforcement.png" class="d-block w-100" alt="User Manual Step 3">
      </div>
      <div class="carousel-item">
        <img src="vehicle.png" class="d-block w-100" alt="User Manual Step 3">
      </div>
      <div class="carousel-item">
        <img src="demo.png" class="d-block w-100" alt="User Manual Step 3">
      </div>
      <!-- Add more images as needed -->
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <!-- Combined Footer: Stakeholders + Contact -->
<section id="footer" style="display: flex; padding: 40px 0; color: #333; text-align: center; border-top: 1px solid #ddd; background-color: rgba(0, 0, 0, 0.6);">
    <div class="footer-container">

        <!-- Stakeholders Logos -->
        <div style="margin-bottom: 20px;">
            <h2>Our Stakeholders</h2>
            <div style="display: flex; justify-content: center; flex-wrap: wrap; gap: 20px; margin-top: 20px;">
                <img src="jpj.png" alt="JPJ Logo" style="height: 50px;">
                <img src="pdrm.png" alt="Police Logo" style="height: 50px;">
                <img src="mot.png" alt="MOT Logo" style="height: 50px;">
                <img src="miros.png" alt="MIROS Logo" style="height: 50px;">
                <img src="apad.png" alt="APAD Logo" style="height: 50px;">
                <!-- Add more logos if needed -->
            </div>
        </div>


        <!-- Copyright -->
        <div style="border-top: 1px solid #ccc; padding-top: 20px; font-size: 14px; color: #666;">
            <p style="margin-bottom: 10px;">&copy; 2025 Crashlytics. All Rights Reserved.</p>

            <!-- Social Icons -->
            <div style="display: flex; justify-content: center; gap: 15px;">
                <a href="nuraqilahhumaira28@gmail.com" target="_blank" style="color: inherit;">
                    <img src="gmail.png" alt="Gmail" style="height: 24px;">
                </a>
                <a href="https://instagram.com/aqilahhmaira" target="_blank" style="color: inherit;">
                    <img src="ig.png" alt="Instagram" style="height: 24px;">
                </a>
                <a href="https://linkedin.com/aqilahhumaira28" target="_blank" style="color: inherit;">
                    <img src="linked.png" alt="LinkedIn" style="height: 24px;">
                </a>
            </div>
        </div>
    </div>
</section>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
