<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
include 'db.php';
?>

<?php
session_start();
include 'db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crashlytics - More Than Just Numbers</title>
    <link rel="stylesheet" href="style.css">
    <!-- AOS Library JS -->
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init({
    once: true   // optional: only animate once
  });
</script>

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
                <li><a href="#home">Home</a></li>
                <li><a href="#dashboard">Dashboard</a></li>
                <li><a href="usermanual.php">User Manual</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="login.php">Admin Login</a></li>
            </ul>
        </nav>
    </div>
</header>

<section id="home" class="fullwidth-section">
    <h1>Welcome to Crashlytics!</h1>
    <p class="tagline">Analyzing Trends • Enhancing Safety • Empowering Insights</p>

    <!-- Custom Summary Section &navContentPaneEnabled=false&filterPaneEnabled=false (JANGAN LUPA TAMBAH NI)-->
    <section class="summary-section">
        <div class="summary-cards">
                <div class="card">
                    <iframe width="100%" height="150" src="https://app.powerbi.com/view?r=eyJrIjoiYjBiNzdiMWUtYWY2Mi00ZTg4LWI1NDQtYzI0MzU0Y2FhMjJlIiwidCI6ImNkY2JiMGUyLTlmZWEtNGY1NC04NjcwLTY3MjcwNzc5N2FkYSIsImMiOjEwfQ%3D%3D&navContentPaneEnabled=false&filterPaneEnabled=false" frameborder="0" allowFullScreen="true"></iframe>
                    
                </div>
                <div class="card">
                    <iframe width="100%" height="150" src="https://app.powerbi.com/view?r=eyJrIjoiMDg2MTBiZjktZTg4ZS00OGZhLWE4NjctNTQ5MjIxYWQ0MTViIiwidCI6ImNkY2JiMGUyLTlmZWEtNGY1NC04NjcwLTY3MjcwNzc5N2FkYSIsImMiOjEwfQ%3D%3D&navContentPaneEnabled=false&filterPaneEnabled=false" frameborder="0" allowFullScreen="true"></iframe>
                    
                </div>
                <div class="card">
                    <iframe width="100%" height="150" src="https://app.powerbi.com/view?r=eyJrIjoiYWIwMTkzNmQtN2ZhYi00NTJlLWJiZTItODhmZmMyNWUxMTFjIiwidCI6ImNkY2JiMGUyLTlmZWEtNGY1NC04NjcwLTY3MjcwNzc5N2FkYSIsImMiOjEwfQ%3D%3D&navContentPaneEnabled=false&filterPaneEnabled=false" frameborder="0" allowFullScreen="true"></iframe>
                    
                </div>
                <div class="card">
                    <iframe width="100%" height="150" src="https://app.powerbi.com/view?r=eyJrIjoiZjdiMDY2NGYtNDE4MC00MGM4LTkzNjktYmFmMzU3ZGQ1ZmEzIiwidCI6ImNkY2JiMGUyLTlmZWEtNGY1NC04NjcwLTY3MjcwNzc5N2FkYSIsImMiOjEwfQ%3D%3D&navContentPaneEnabled=false&filterPaneEnabled=false" frameborder="0" allowFullScreen="true"></iframe>
                    
                </div>
            </div>
    </section>
</section>




<!-- Dashboard Section -->
<section id="dashboard">
    <h2>Dashboard</h2>
    <iframe title="visualization" width="1140" height="541.25" src="https://app.powerbi.com/view?r=eyJrIjoiNGNjZGI2MjMtOWI4NS00OGMzLWExNDgtMzY1MDQ1MTc4OGVjIiwidCI6ImNkY2JiMGUyLTlmZWEtNGY1NC04NjcwLTY3MjcwNzc5N2FkYSIsImMiOjEwfQ%3D%3D&pageName=144c0995d610085974f7&navContentPaneEnabled=false&filterPaneEnabled=false" frameborder="0" allowFullScreen="true"></iframe>
</section>

<!-- About Section -->
<section id="about" data-aos="fade-up">
    <h2>About Crashlytics</h2>
    <div class="plan-container">
        <div class="plan-card">
            <h3><strong>Our Mission</strong></h3>
            <p>“At Crashlytics, we transform raw traffic violation data into clear, actionable insights. Our goal? Safer roads, smarter enforcement, and data-driven awareness for all road users.”</p>
        </div>
        <div class="plan-card">
            <h3><strong>Why Crashlytics Exists</strong></h3>
            <p>“Every violation is more than a number — it’s a potential accident, a missed chance to prevent harm. Crashlytics helps policy makers, researchers, and citizens understand traffic patterns and make smarter, safer decisions.”</p>
        </div>
        <div class="plan-card">
            <h3><strong>Did You Know?</strong></h3>
            <p>“While this interactive visualization dashboard uses a dataset from the United States, all insights, design elements, and features have been thoughtfully tailored to reflect traffic enforcement challenges and awareness efforts relevant to Malaysia.”</p>
        </div>
    </div>
</section>

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

<script src="script.js"></script>
</body>
</html>
