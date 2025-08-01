<?php
session_start(); // Start the session to access session variables
require 'dbConnect.php'; // Include database connection

// Check if the database connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Only process if the request is a POST (form submission)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $token = trim($_POST['token'] ?? ''); // Get the submitted 2FA token

    // Ensure user_id is set in the session (from previous login step)
    if (!isset($_SESSION['user_id'])) {
        echo "Session expired. Please log in again.";
        exit;
    }

    $user_id = $_SESSION['user_id'];

    // Prepare SQL to fetch the stored token for this user
    $stmt = $conn->prepare("SELECT token FROM user_table WHERE user_id = ?");
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $stmt->bind_result($db_token);
    $stmt->fetch();

    // Compare submitted token with the one in the database
    if ($token === $db_token) {
        // 2FA successful
        unset($_SESSION['2fa_pending']); // Remove 2FA pending flag from session

        // Optionally clear the token in the database for security
        $clearStmt = $conn->prepare("UPDATE user_table SET token = NULL WHERE user_id = ?");
        $clearStmt->bind_param("i", $user_id);
        $clearStmt->execute();
        $clearStmt->close();

        echo "2FA verification successful. You are logged in.";
        // Redirect or load the protected page
        // header('Location: ../dashboard.php');
        // exit;
    } else {
        // Token did not match
        echo "Invalid 2FA code.";
    }

    $stmt->close(); // Close the statement
}

$conn->close(); // Close the database connection
?>
