
<?php

if (!isset($_SESSION['admin'])) {
    header("Location: ../index.html");
    exit();
}

// Include DB connection
include __DIR__ . "/../db.php";
?>

<h2>Faculty Users</h2>

<div class="faculty-actions">
    <button class="btn" onclick="showAddForm()">+ New Faculty</button>
    <button class="btn" onclick="exportData()">Export Data</button>
</div>

<table class="faculty-table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Rank/Title</th>
            <th>Program/Department</th>
            <th>Campus</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $result = $conn->query("SELECT * FROM faculty ORDER BY id DESC");
        while($row = $result->fetch_assoc()):
        ?>
            <tr>
                <td><?= $row['id']; ?></td>
                <td><?= $row['first_name'] . ' ' . $row['middle_name'] . ' ' . $row['last_name']; ?></td>
                <td><?= $row['rank_title']; ?></td>
                <td><?= $row['program_department']; ?></td>
                <td><?= $row['campus']; ?></td>
                <td><?= $row['status']; ?></td>
               <td>
                  <button class="btn" onclick="viewFaculty(<?= $row['id']; ?>)">View</button>
                  <button class="btn" onclick="editFaculty(<?= $row['id']; ?>)">Edit</button>
                  <button class="btn" onclick="deleteFaculty(<?= $row['id']; ?>)">Delete</button>
              </td>
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>

<!-- Add/Edit Form (Pop-up) -->
<div id="faculty-form" style="display:none;" class="form-card">
    <h3 id="form-title">Add Faculty</h3>
    <form id="facultyForm" method="POST" action="pages/faculty_save.php" enctype="multipart/form-data">
        <input type="hidden" name="id" id="faculty-id">

        <div class="form-row">
            <div class="form-group">
                <label>First Name</label>
                <input type="text" name="first_name" id="faculty-firstname" required>
            </div>
            <div class="form-group">
                <label>Middle Name</label>
                <input type="text" name="middle_name" id="faculty-middlename">
            </div>
            <div class="form-group">
                <label>Last Name</label>
                <input type="text" name="last_name" id="faculty-lastname" required>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" id="faculty-email">
            </div>
            <div class="form-group">
                <label>Contact Number</label>
                <input type="text" name="contact_number" id="faculty-contact">
            </div>
            <div class="form-group">
                <label>Employee ID</label>
                <input type="text" name="employee_id" id="faculty-employee">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label>Rank/Title</label>
                <select name="rank_title" id="faculty-rank">
                    <option value="Professor">Professor</option>
                    <option value="Assistant Professor">Assistant Professor</option>
                    <option value="Instructor">Instructor</option>
                </select>
            </div>
            <div class="form-group">
                <label>Program/Department</label>
                <select name="program_department" id="faculty-program">
                    <option value="Computer Science">Computer Science</option>
                    <option value="Engineering">Engineering</option>
                </select>
            </div>
            <div class="form-group">
                <label>Campus</label>
                <select name="campus" id="faculty-campus">
                    <option value="Main Campus">Main Campus</option>
                    <option value="Satellite Campus">Satellite Campus</option>
                </select>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label>Profile Picture</label>
                <input type="file" name="profile_pic" id="faculty-pic">
            </div>
            <div class="form-group">
                <label>Status</label><br>
                <input type="radio" name="status" value="Active" checked> Active
                <input type="radio" name="status" value="Inactive"> Inactive
            </div>
        </div>

        <div class="form-row">
            <button type="submit">Save</button>
            <button type="button" onclick="hideForm()">Cancel</button>
        </div>
    </form>
</div>

<script>
function showAddForm() {
    document.getElementById('faculty-form').style.display = 'block';
    document.getElementById('form-title').innerText = "Add Faculty";
    document.getElementById('facultyForm').reset();
    document.getElementById('faculty-id').value = "";
}

function hideForm() {
    document.getElementById('faculty-form').style.display = 'none';
}

function editFaculty(id) {
    fetch("pages/faculty_get.php?id=" + id)
    .then(response => response.json())
    .then(data => {
        document.getElementById('faculty-form').style.display = 'block';
        document.getElementById('form-title').innerText = "Edit Faculty";
        document.getElementById('faculty-id').value = data.id;
        document.getElementById('faculty-firstname').value = data.first_name;
        document.getElementById('faculty-middlename').value = data.middle_name;
        document.getElementById('faculty-lastname').value = data.last_name;
        document.getElementById('faculty-email').value = data.email;
        document.getElementById('faculty-contact').value = data.contact_number;
        document.getElementById('faculty-employee').value = data.employee_id;
        document.getElementById('faculty-rank').value = data.rank_title;
        document.getElementById('faculty-program').value = data.program_department;
        document.getElementById('faculty-campus').value = data.campus;
        document.querySelector(`input[name="status"][value="${data.status}"]`).checked = true;
    });
}

function deleteFaculty(id) {
    if(confirm("Are you sure you want to delete this faculty?")) {
        fetch("pages/faculty_delete.php?id=" + id).then(()=> location.reload());
    }
}

function exportData() {
    alert("Export functionality not implemented yet.");
}
function viewFaculty(id) {
    fetch("pages/faculty_get.php?id=" + id)
    .then(response => response.json())
    .then(data => {
        let content = `
            <p><strong>Name:</strong> ${data.first_name} ${data.middle_name} ${data.last_name}</p>
            <p><strong>Email:</strong> ${data.email}</p>
            <p><strong>Contact Number:</strong> ${data.contact_number}</p>
            <p><strong>Employee ID:</strong> ${data.employee_id}</p>
            <p><strong>Rank/Title:</strong> ${data.rank_title}</p>
            <p><strong>Program/Department:</strong> ${data.program_department}</p>
            <p><strong>Campus:</strong> ${data.campus}</p>
            <p><strong>Status:</strong> ${data.status}</p>
        `;
        document.getElementById('view-content').innerHTML = content;
        document.getElementById('faculty-view').style.display = 'block';
    });
}

function hideView() {
    document.getElementById('faculty-view').style.display = 'none';
}
</script>
