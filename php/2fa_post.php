<?php
// Start session
session_start();

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
            $_SESSION['user_id'] = $id;

            // Generate 2FA code
            $twofa_code = rand(100000, 999999);

            // Store the 2FA code in database
            $updateStmt = $conn->prepare("UPDATE user_table SET token = ? WHERE user_id = ?");
            $updateStmt->bind_param("si", $twofa_code, $id);
            $updateStmt->execute();
            $updateStmt->close();

            // Optionally, send the 2FA code via email
            // mail($user, "Your 2FA Code", "Your code is: $twofa_code");

            // Store 2FA status in session
            $_SESSION['2fa_pending'] = true;

            // Redirect to the 2FA verification page
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
?>