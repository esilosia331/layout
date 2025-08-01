<?php
$conn = new mysqli("localhost", "your_user", "your_pass", "your_db");

$username = "admin";
$password = password_hash("password123", PASSWORD_DEFAULT);

$stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
$stmt->bind_param("ss", $username, $password);
$stmt->execute();

echo "User created!";
$stmt->close();
$conn->close();
