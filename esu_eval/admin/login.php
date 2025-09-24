<?php
session_start();
include("db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);

    // Prevent SQL Injection
    $stmt = $conn->prepare("SELECT id, password FROM admins WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $hashed_password);
        $stmt->fetch();

        // Correct password verification
        if (password_verify($password, $hashed_password)) {
            $_SESSION['admin'] = $username;
            header("Location: dashboard.php");
            exit();
        } else {
            echo "<p style='color:red; text-align:center;'>Invalid password</p>";
            echo "<p style='text-align:center;'><a href='index.html'>Try Again</a></p>";
        }
    } else {
        echo "<p style='color:red; text-align:center;'>Username not found</p>";
        echo "<p style='text-align:center;'><a href='index.html'>Try Again</a></p>";
    }

    $stmt->close();
}
$conn->close();
?>
