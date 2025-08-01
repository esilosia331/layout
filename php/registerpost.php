<?php

// Include the database connection file
require 'dbConnect.php';

// Check if the database connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the request method is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get and sanitize the username from POST data
    $username = trim($_POST['username'] ?? '');
    $email = trim($_POST['email'] ?? '');
    // Hash the password from POST data
    $password = password_hash($_POST['password'] ?? '', PASSWORD_DEFAULT);

    // Validate that username and password are not empty
    if (empty($email) || empty($username) || empty($password)) {
        echo "Username and password are required.";
        exit;
    }

    // Check if the username already exists
    $checkStmt = $conn->prepare("SELECT user_id FROM user_table WHERE username = ?");
    if (!$checkStmt) {
        echo "Error preparing statement: " . $conn->error;
        exit;
    }
    $checkStmt->bind_param("s", $username);
    $checkStmt->execute();
    $checkStmt->store_result();

    if ($checkStmt->num_rows > 0) {
        echo "Username is already taken.";
        $checkStmt->close();
        exit;
    }
    $checkStmt->close();
} else {
    // If not a POST request, show error and exit
    echo "Invalid request method.";
    exit;
}

// Prepare the SQL statement to insert a new user
$stmt = $conn->prepare("INSERT INTO user_table (email,username, password) VALUES ( ?, ?, ?)");
if (!$stmt) {
    echo "Error preparing statement: " . $conn->error;
    exit;
}
// Bind parameters to the SQL statement (email, username, password)
$stmt->bind_param("sss", $email, $username, $password);
// Execute the SQL statement
$stmt->execute();

// Output success message
echo "User created!";
// Close the statement and database connection
$stmt->close();
$conn->close();

// Redirect to the login page
header('Location: ../login.php');
exit;
