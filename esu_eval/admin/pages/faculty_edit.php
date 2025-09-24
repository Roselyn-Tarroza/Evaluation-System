<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: ../index.html");
    exit();
}
include __DIR__ . "/../db.php";

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM faculty WHERE id = $id");
$data = $result->fetch_assoc();
?>

<h2>Edit Faculty</h2>

<form method="POST" action="faculty_save.php" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $data['id']; ?>">

    <label>First Name</label>
    <input type="text" name="first_name" value="<?= $data['first_name']; ?>" required>

    <label>Middle Name</label>
    <input type="text" name="middle_name" value="<?= $data['middle_name']; ?>">

    <label>Last Name</label>
    <input type="text" name="last_name" value="<?= $data['last_name']; ?>" required>

    <label>Email</label>
    <input type="email" name="email" value="<?= $data['email']; ?>">

    <label>Contact Number</label>
    <input type="text" name="contact_number" value="<?= $data['contact_number']; ?>">

    <label>Employee ID</label>
    <input type="text" name="employee_id" value="<?= $data['employee_id']; ?>">

    <label>Rank/Title</label>
    <select name="rank_title">
        <option value="Professor" <?= $data['rank_title']=='Professor'?'selected':'' ?>>Professor</option>
        <option value="Assistant Professor" <?= $data['rank_title']=='Assistant Professor'?'selected':'' ?>>Assistant Professor</option>
        <option value="Instructor" <?= $data['rank_title']=='Instructor'?'selected':'' ?>>Instructor</option>
    </select>

    <label>Program/Department</label>
    <select name="program_department">
        <option value="Computer Science" <?= $data['program_department']=='Computer Science'?'selected':'' ?>>Computer Science</option>
        <option value="Engineering" <?= $data['program_department']=='Engineering'?'selected':'' ?>>Engineering</option>
    </select>

    <label>Campus</label>
    <select name="campus">
        <option value="Main Campus" <?= $data['campus']=='Main Campus'?'selected':'' ?>>Main Campus</option>
        <option value="Satellite Campus" <?= $data['campus']=='Satellite Campus'?'selected':'' ?>>Satellite Campus</option>
    </select>

    <label>Status</label>
    <input type="radio" name="status" value="Active" <?= $data['status']=='Active'?'checked':'' ?>> Active
    <input type="radio" name="status" value="Inactive" <?= $data['status']=='Inactive'?'checked':'' ?>> Inactive

    <button type="submit">Update</button>
    <a href="faculty.php" class="btn">Cancel</a>
</form>
