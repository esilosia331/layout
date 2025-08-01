<?php
// Start session
session_start();

// include 'dbConnect.php';
require 'dbConnect.php';

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';

    $stmt = $conn->prepare("SELECT user_id, email, password FROM user_table WHERE email = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();

    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $user, $hashed_password);
        $stmt->fetch();

        if (password_verify($password, $hashed_password)) {
            $_SESSION['user'] = $user;
            echo "Login successful. Welcome, " . htmlspecialchars($user) . "!";
            // header('Location: dashboard.php'); exit;

            // Redirect to the 2fa page
            header('Location: ../2fa.php');

            exit;
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "Username not found.";
    }

    $stmt->close();
}

$conn->close();


