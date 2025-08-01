<?php

// include 'dbConnect.php';
require 'dbConnect.php';

$username = "admin";
$password = password_hash("password123", PASSWORD_DEFAULT);

$stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
$stmt->bind_param("ss", $username, $password);
$stmt->execute();

echo "User created!";
$stmt->close();
$conn->close();
