<?php
include("db.php"); // database connection

// Define first admin credentials
$username = "admin123";
$password = "admin1";

// Hash the password securely
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

// Insert into the database
$stmt = $conn->prepare("INSERT INTO admins (username, password) VALUES (?, ?)");
$stmt->bind_param("ss", $username, $hashedPassword);

$stmt->execute(); // run the insert

$stmt->close();
$conn->close();
?>
