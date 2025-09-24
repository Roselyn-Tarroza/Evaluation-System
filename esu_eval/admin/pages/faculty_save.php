<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: ../index.html");
    exit();
}

include __DIR__ . "/../db.php"; // Correct path

$id = $_POST['id'] ?? '';
$first_name = $_POST['first_name'];
$middle_name = $_POST['middle_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$contact_number = $_POST['contact_number'];
$employee_id = $_POST['employee_id'];
$rank_title = $_POST['rank_title'];
$program_department = $_POST['program_department'];
$campus = $_POST['campus'];
$status = $_POST['status'];

// Profile picture handling
$profile_pic = '';
if(isset($_FILES['profile_pic']) && $_FILES['profile_pic']['error'] == 0) {
    $filename = time() . '_' . $_FILES['profile_pic']['name'];
    move_uploaded_file($_FILES['profile_pic']['tmp_name'], __DIR__ . "/uploads/" . $filename);
    $profile_pic = $filename;
}

if($id) {
    // Update existing faculty
    $stmt = $conn->prepare("UPDATE faculty SET first_name=?, middle_name=?, last_name=?, email=?, contact_number=?, employee_id=?, rank_title=?, program_department=?, campus=?, status=?, profile_pic=? WHERE id=?");
    $stmt->bind_param("sssssssssssi", $first_name, $middle_name, $last_name, $email, $contact_number, $employee_id, $rank_title, $program_department, $campus, $status, $profile_pic, $id);
} else {
    // Insert new faculty
    $stmt = $conn->prepare("INSERT INTO faculty (first_name, middle_name, last_name, email, contact_number, employee_id, rank_title, program_department, campus, status, profile_pic) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssssssss", $first_name, $middle_name, $last_name, $email, $contact_number, $employee_id, $rank_title, $program_department, $campus, $status, $profile_pic);
}

$stmt->execute();
$stmt->close();
header("Location: ../dashboard.php?page=faculty"); // redirect back to faculty page
exit();
?>
