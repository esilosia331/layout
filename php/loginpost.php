<?php
// Start session
session_start();

// Dummy credentials
$valid_username = 'admin';
$valid_password = 'password123';

// Check if form was submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    // Check credentials
    if ($username === $valid_username && $password === $valid_password) {
        $_SESSION['user'] = $username;
        echo "Login successful. Welcome, $username!";
        // redirect or load dashboard here
        // header('Location: dashboard.php'); exit;
    } else {
        echo "Invalid username or password.";
    }
} else {
    echo "Invalid request method.";
}
