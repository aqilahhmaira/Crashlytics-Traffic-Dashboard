<?php
session_start();

// Unset semua session variable
$_SESSION = [];

// Destroy session
session_destroy();

// Optional: Delete session cookie supaya 100% clear
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Redirect ke login page
header("Location: login.php");
exit;
?>
