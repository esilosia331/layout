<?php
session_start();
require 'dbConnect.php';

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $token = trim($_POST['token'] ?? '');

    // Make sure user_id is in session from previous login step
    if (!isset($_SESSION['user_id'])) {
        echo "Session expired. Please log in again.";
        exit;
    }

    $user_id = $_SESSION['user_id'];

    $stmt = $conn->prepare("SELECT token FROM user_table WHERE user_id = ?");
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $stmt->bind_result($db_token);
    $stmt->fetch();

    if ($token === $db_token) {
        // 2FA successful
        unset($_SESSION['2fa_pending']);
        // Optionally clear the token in DB
        $clearStmt = $conn->prepare("UPDATE user_table SET token = NULL WHERE user_id = ?");
        $clearStmt->bind_param("i", $user_id);
        $clearStmt->execute();
        $clearStmt->close();

        echo "2FA verification successful. You are logged in.";
        // Redirect or load the protected page
        // header('Location: ../dashboard.php');
        // exit;
    } else {
        echo "Invalid 2FA code.";
    }

    $stmt->close();
}

$conn->close();
?>
