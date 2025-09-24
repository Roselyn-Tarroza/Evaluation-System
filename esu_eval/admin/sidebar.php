<?php
// sidebar.php
// Get current page to highlight active nav item
$current_page = isset($_GET['page']) ? $_GET['page'] : 'dashboard';
$request_uri = $_SERVER['REQUEST_URI'];

// Function to check if nav item is active
function isActive($page_name, $current_page, $request_uri) {
    // Dashboard special
    if ($page_name === 'dashboard') {
        return (strpos($request_uri, 'dashboard.php') !== false && !isset($_GET['page'])) ? 'active' : '';
    }

    // Subjects special (accept both subject and subjects)
    if ($page_name === 'subjects' && ($current_page === 'subject' || $current_page === 'subjects')) {
        return 'active';
    }

    // Default
    return ($current_page === $page_name) ? 'active' : '';
}

?>

<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <div class="sidebar-header">
        <i class="bi bi-list hamburger-sidebar"></i>
    </div>
    
    <nav class="nav-menu">
        <div class="nav-item">
            <a href="dashboard.php" class="nav-link <?php echo isActive('dashboard', $current_page, $request_uri); ?>">
                <i class="bi bi-grid-1x2"></i>
                <span>Dashboard</span>
            </a>
        </div>
        <div class="nav-item">
        <a href="../admin/pages/subject.php" class="nav-link <?php echo isActive('subjects', $current_page, $request_uri); ?>">
            <i class="bi bi-book"></i>
            <span>Subjects</span>
           </a>
        </div>
        <div class="nav-item">
            <a href="dashboard.php?page=classes" class="nav-link <?php echo isActive('classes', $current_page, $request_uri); ?>">
                <i class="bi bi-collection"></i>
                <span>Classes</span>
            </a>
        </div>
        <div class="nav-item">
            <a href="dashboard.php?page=academic-year" class="nav-link <?php echo isActive('academic-year', $current_page, $request_uri); ?>">
                <i class="bi bi-calendar-event"></i>
                <span>Academic Year</span>
            </a>
        </div>
        <div class="nav-item">
            <a href="dashboard.php?page=campus" class="nav-link <?php echo isActive('campus', $current_page, $request_uri); ?>">
                <i class="bi bi-diagram-3"></i>
                <span>Campus</span>
            </a>
        </div>
        <div class="nav-item">
            <a href="dashboard.php?page=evaluation-criteria" class="nav-link <?php echo isActive('evaluation-criteria', $current_page, $request_uri); ?>">
                <i class="bi bi-list-check"></i>
                <span>Evaluation Criteria</span>
            </a>
        </div>
        <div class="nav-item">
            <a href="dashboard.php?page=evaluation-list" class="nav-link <?php echo isActive('evaluation-list', $current_page, $request_uri); ?>">
                <i class="bi bi-clipboard-data"></i>
                <span>Evaluation List</span>
            </a>
        </div>
        <div class="nav-item">
            <a href="dashboard.php?page=evaluation-results" class="nav-link <?php echo isActive('evaluation-results', $current_page, $request_uri); ?>">
                <i class="bi bi-graph-up"></i>
                <span>Evaluation Results</span>
            </a>
        </div>
        <div class="nav-item">
            <a href="dashboard.php?page=reports" class="nav-link <?php echo isActive('reports', $current_page, $request_uri); ?>">
                <i class="bi bi-file-earmark-text"></i>
                <span>Reports & Analysis</span>
            </a>
        </div>
        <div class="nav-item">
            <a href="dashboard.php?page=faculty" class="nav-link <?php echo isActive('faculty', $current_page, $request_uri); ?>">
                <i class="bi bi-person-workspace"></i>
                <span>Faculty</span>
            </a>
        </div>
        <div class="nav-item">
            <a href="dashboard.php?page=student" class="nav-link <?php echo isActive('student', $current_page, $request_uri); ?>">
                <i class="bi bi-person-lines-fill"></i>
                <span>Student</span>
            </a>
        </div>
        <div class="nav-item">
            <a href="dashboard.php?page=dean" class="nav-link <?php echo isActive('dean', $current_page, $request_uri); ?>">
                <i class="bi bi-person-gear"></i>
                <span>Dean</span>
            </a>
        </div>
        <div class="nav-item">
            <a href="dashboard.php?page=settings" class="nav-link <?php echo isActive('settings', $current_page, $request_uri); ?>">
                <i class="bi bi-gear"></i>
                <span>Settings</span>
            </a>
        </div>
    </nav>
    
    <div class="logout-link">
        <a href="logout.php" class="nav-link">
            <i class="bi bi-box-arrow-right"></i>
            <span>Logout</span>
        </a>
    </div>
</div>