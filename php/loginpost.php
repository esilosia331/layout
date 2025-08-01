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

            // generate 2fa code
            $twofa_code = rand(100000, 999999);

            // Send email with the 2FA code
            $to = $user;
            $subject = "Your 2FA Verification Code";
            $message = "Your verification code is: " . $twofa_code;
            $headers = "From: no-reply@example.com\r\n";
            mail($to, $subject, $message, $headers);

            // Store the 2fa code in database
            $updateStmt = $conn->prepare("UPDATE user_table SET token = ? WHERE user_id = ?");
            $updateStmt->bind_param("si", $twofa_code, $id);
            $updateStmt->execute();

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
