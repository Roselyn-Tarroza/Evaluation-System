<?php

if (!isset($_SESSION['admin'])) {
    header("Location: index.html"); 
    exit();
}
include("db.php");

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);

    if ($username != "" && $password != "") {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $stmt = $conn->prepare("INSERT INTO admins (username, password) VALUES (?, ?)");
        $stmt->bind_param("ss", $username, $hashedPassword);

        if ($stmt->execute()) {
            $message = "New admin added successfully!";
        } else {
            $message = "Error: " . $conn->error;
        }

        $stmt->close();
    } else {
        $message = "Both fields are required!";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Add Admin</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <h2>Add New Admin</h2>
  <?php if ($message != "") echo "<p style='color:green;'>$message</p>"; ?>
  <form action="" method="POST">
    <label>Username:</label>
    <input type="text" name="username" placeholder="Enter username" required>
    <br><br>
    <label>Password:</label>
    <input type="password" name="password" placeholder="Enter password" required>
    <br><br>
    <button type="submit">Add Admin</button>
  </form>
  <br>
  <a href="dashboard.php"><button>Back to Dashboard</button></a>
</body>
</html>
