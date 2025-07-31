<?php
$hostserver = "127.0.0.1"; //ip address:127.0.0.1 or domain:localhost
$username = "jb";
$password = "password";
$dbname = "test_db";

// Create connection
$conn = new mysqli($hostserver, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully to the database {$dbname}.";
