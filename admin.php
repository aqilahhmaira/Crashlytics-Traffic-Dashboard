<?php
session_start();
require 'db.php';

// Check if admin is logged in
if (!isset($_SESSION['admin_id'])) {
    header("Location: login.php");
    exit;
}

// Get current admin details
$admin_id = $_SESSION['admin_id'];
$admin_fullname = $_SESSION['admin_fullname'];
$admin_email = $_SESSION['admin_email'];
$admin_phoneNo = $_SESSION['admin_phoneNo'];

// Handle update admin profile
if (isset($_POST['update_profile'])) {
    $new_fullname = $_POST['full_name'];
    $new_phoneNo = $_POST['phoneNo'];

    $stmt = $conn->prepare("UPDATE admin SET full_name = ?, phoneNo = ? WHERE id = ?");
    $stmt->bind_param("ssi", $new_fullname, $new_phoneNo, $admin_id);
    $stmt->execute();
    $stmt->close();

    $_SESSION['admin_fullname'] = $new_fullname;
    $_SESSION['admin_phoneNo'] = $new_phoneNo;

    echo "<script>alert('Profile updated successfully!'); window.location.href='admin.php';</script>";
}

// Fetch contact messages
$messages = [];
$result = $conn->query("SELECT * FROM contact ORDER BY submitted_at DESC");

if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $messages[] = $row;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard | Traffic Violation Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="login-wrapper1">
    <div class="login-box1">
        <h2>Welcome, <?php echo htmlspecialchars($admin_fullname); ?></h2>

        <h3 style="color: var(--accent-color); margin-bottom: 10px;">Manage Your Profile</h3>
        <form method="POST" action="admin.php">
            <input type="text" name="full_name" value="<?php echo htmlspecialchars($admin_fullname); ?>" required>
            <input type="text" name="phoneNo" value="<?php echo htmlspecialchars($admin_phoneNo); ?>" required>
            <button type="submit" name="update_profile">Update Profile</button>
        </form>

        <div class="register-section">
            <h2> <p>Register New Admin </p> </h2>
            <a href="register.php" class="register-btn">Register Admin</a>
        </div>

        <hr style="margin: 20px 0;">


        <h3>Edit Your Dashboard</h3>
        <p>Click below to open your Power BI dashboard editor.</p>
        <a href="https://app.powerbi.com/groups/me/reports/41bf5e7f-c66d-4689-ba2f-1a818873164f/144c0995d610085974f7?experience=power-bi" 
           target="_blank" 
           class="button-link-1">
            Edit Power BI Dashboard
        </a>
        
        <?php if (!empty($messages)): ?>
    <h3>📩 Contact Form Submissions</h3>
    <table border="1" cellpadding="8" cellspacing="0" style="width: 100%; margin-top: 15px; color: black;">
        <tr style="background-color: #f0f0f0;">
            <th>#</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Message</th>
            <th>Submitted At</th>
        </tr>
        <?php foreach ($messages as $index => $msg): ?>
            <tr>
                <td><?= $index + 1 ?></td>
                <td><?= htmlspecialchars($msg['name']) ?></td>
                <td><?= htmlspecialchars($msg['email']) ?></td>
                <td><?= htmlspecialchars($msg['phone']) ?></td>
                <td><?= nl2br(htmlspecialchars($msg['message'])) ?></td>
                <td><?= $msg['submitted_at'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php else: ?>
    <p>No contact messages found.</p>
<?php endif; ?>

        <hr style="margin: 20px 0;">

        <br>
        <a href="logout.php" class="register-btn" onclick="return confirm('Are you sure you want to logout?')">Logout</a>
        <br>
    </div>
</div>
</body>
</html>
