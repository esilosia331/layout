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

$stmt = $conn->prepare("INSERT INTO user_table (email,username, password) VALUES (?,?, ?)");
$stmt->bind_param("ss", $username, $username, $password);
$stmt->execute();

echo "User created!";
$stmt->close();
$conn->close();
