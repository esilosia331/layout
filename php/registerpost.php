<?php

// include 'dbConnect.php';
require 'dbConnect.php';

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Create a new user

// $username = "admin";
// $password = password_hash("password123", PASSWORD_DEFAULT);
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = password_hash($_POST['password'] ?? '', PASSWORD_DEFAULT);

    if (empty($username) || empty($password)) {
        echo "Username and password are required.";
        exit;
    }
} else {
    echo "Invalid request method.";
    exit;
}

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO user_table (email,username, password) VALUES (?,?, ?)");
$stmt->bind_param("ss", $username, $username, $password);
$stmt->execute();

echo "User created!";
$stmt->close();
$conn->close();
