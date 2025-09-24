<?php
include '../sidebar.php';

// detect current file
$request_uri = $_SERVER['REQUEST_URI'];
$current_page = basename($_SERVER['PHP_SELF'], ".php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subjects - Admin Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="../../css/dashboard.css">
    
</head>
<body>
    <!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <div class="sidebar-header">
        <i class="bi bi-list hamburger-sidebar"></i>
    </div>
    
    <nav class="nav-menu">
        <div class="nav-item">
            <a href="../dashboard.php" class="nav-link <?php echo isActive('dashboard', $current_page, $request_uri); ?>">
                <i class="bi bi-grid-1x2"></i>
                <span>Dashboard</span>
            </a>
        </div>
        <div class="nav-item">
        <a href="subject.php" class="nav-link <?php echo isActive('subjects', $current_page, $request_uri); ?>">
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
        <a href="../logout.php" class="nav-link">
            <i class="bi bi-box-arrow-right"></i>
            <span>Logout</span>
        </a>
    </div>
</div>






    <!-- Main Content -->
    <div class="main-content" id="mainContent">
        <!-- Top Header -->
<div class="top-header">
    <div class="header-content">
        <div class="user-info">
            <div class="user-avatar">
                <img src="../../img/pp.jpg" alt="User Avatar">
            </div>
            <span>Emily Cruz</span>
        </div>
    </div>
</div>
        <!-- Subjects Content -->
        <div class="dashboard-content">
            <div class="subjects-header">
                <div class='page-name'>
                    <h1 class="subjects-title">SUBJECTS</h1>
                    <p class="page-subtitle">Manage academic subjects, courses, and curriculum</p>
                </div>
            <div class= 'buttons'>
            <div class="action-buttons-header">
                    <button class="btn-export">
                        <i class="bi bi-download"></i>
                        Export Data
                    </button>
                    <button class="btn-add">
                        <i class="bi bi-plus-circle"></i>
                        Add Subject
                    </button>
                </div>
            </div>
            </div>

            <!-- Filters Section -->
            <div class="filters-section">

                <div class="filters-row">
                    <div class="filter-group">
                        <i class="bi bi-search"></i>
                        <input type="text" class="search-input" placeholder="Search Subjects, code, or faculty...">
                    </div>
                    <div class="filter-group">
                        <i class="bi bi-funnel"></i>
                        <select class="filter-dropdown">
                            <option>All Departments</option>
                            <option>Computer Science</option>
                            <option>Mathematics</option>
                            <option>Physics</option>
                            <option>Biology</option>
                        </select>
                    </div>
                    <div class="filter-group">
                        <select class="filter-dropdown">
                            <option>All Year Levels</option>
                            <option>1st Year</option>
                            <option>2nd Year</option>
                            <option>3rd Year</option>
                            <option>4th Year</option>
                        </select>
                    </div>
                    <div class="filter-group">
                        <select class="filter-dropdown">
                            <option>All Semesters</option>
                            <option>1st Semester</option>
                            <option>2nd Semester</option>
                            <option>Summer</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Subjects Table -->
            <div class="subjects-table-section">
                <div class="table-responsive">
                    <table class="table subjects-table">
                        <thead>
                            <tr>
                                <th><input type="checkbox" class="form-check-input"></th>
                                <th>Subject ID</th>
                                <th>Subject Code</th>
                                <th>Subject Description</th>
                                <th>Units</th>
                                <th>Subject Type</th>
                                <th>Campus</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><input type="checkbox" class="form-check-input"></td>
                                <td class="subject-code">ACT-125735TW</td>
                                <td><strong>CC101</strong></td>
                                <td class="subject-description">Cell Biology</td>
                                <td><span class="units-badge">3 units</span></td>
                                <td><span class="type-badge type-lecture">Lecture</span></td>
                                <td><span class="campus-badge">ESU - Curuan</span></td>
                                <td>
                                    <div class="action-buttons">
                                        <button class="btn-action btn-view" title="View">
                                            <i class="bi bi-eye"></i>
                                        </button>
                                        <button class="btn-action btn-edit" title="Edit">
                                            <i class="bi bi-pencil"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" class="form-check-input"></td>
                                <td class="subject-code">BEED-125736TW</td>
                                <td><strong>CC102</strong></td>
                                <td class="subject-description">Calculus II</td>
                                <td><span class="units-badge">4 units</span></td>
                                <td><span class="type-badge type-lecture">Lecture</span></td>
                                <td><span class="campus-badge">ESU - Tungkawan</span></td>
                                <td>
                                    <div class="action-buttons">
                                        <button class="btn-action btn-view" title="View">
                                            <i class="bi bi-eye"></i>
                                        </button>
                                        <button class="btn-action btn-edit" title="Edit">
                                            <i class="bi bi-pencil"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" class="form-check-input"></td>
                                <td class="subject-code">BEED-125737TW</td>
                                <td><strong>CC103</strong></td>
                                <td class="subject-description">World History</td>
                                <td><span class="units-badge">3 units</span></td>
                                <td><span class="type-badge type-lecture">Lecture</span></td>
                                <td><span class="campus-badge">ESU - Ipil</span></td>
                                <td>
                                    <div class="action-buttons">
                                        <button class="btn-action btn-view" title="View">
                                            <i class="bi bi-eye"></i>
                                        </button>
                                        <button class="btn-action btn-edit" title="Edit">
                                            <i class="bi bi-pencil"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" class="form-check-input"></td>
                                <td class="subject-code">BEED-125738TW</td>
                                <td><strong>CC104</strong></td>
                                <td class="subject-description">Intro to Computing</td>
                                <td><span class="units-badge">3 units</span></td>
                                <td><span class="type-badge type-laboratory">Laboratory</span></td>
                                <td><span class="campus-badge">ESU - Siay</span></td>
                                <td>
                                    <div class="action-buttons">
                                        <button class="btn-action btn-view" title="View">
                                            <i class="bi bi-eye"></i>
                                        </button>
                                        <button class="btn-action btn-edit" title="Edit">
                                            <i class="bi bi-pencil"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" class="form-check-input"></td>
                                <td class="subject-code">BEED-125739TW</td>
                                <td><strong>CC105</strong></td>
                                <td class="subject-description">Life & Works of Rizal</td>
                                <td><span class="units-badge">3 units</span></td>
                                <td><span class="type-badge type-lecture">Lecture</span></td>
                                <td><span class="campus-badge">ESU - Naga</span></td>
                                <td>
                                    <div class="action-buttons">
                                        <button class="btn-action btn-view" title="View">
                                            <i class="bi bi-eye"></i>
                                        </button>
                                        <button class="btn-action btn-edit" title="Edit">
                                            <i class="bi bi-pencil"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" class="form-check-input"></td>
                                <td class="subject-code">BEED-125740TW</td>
                                <td><strong>CC106</strong></td>
                                <td class="subject-description">Web Development</td>
                                <td><span class="units-badge">3 units</span></td>
                                <td><span class="type-badge type-laboratory">Laboratory</span></td>
                                <td><span class="campus-badge">ESU - Curuan</span></td>
                                <td>
                                    <div class="action-buttons">
                                        <button class="btn-action btn-view" title="View">
                                            <i class="bi bi-eye"></i>
                                        </button>
                                        <button class="btn-action btn-edit" title="Edit">
                                            <i class="bi bi-pencil"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" class="form-check-input"></td>
                                <td class="subject-code">BEED-125741TW</td>
                                <td><strong>CC106</strong></td>
                                <td class="subject-description">Technical Writing</td>
                                <td><span class="units-badge">3 units</span></td>
                                <td><span class="type-badge type-lecture">Lecture</span></td>
                                <td><span class="campus-badge">ESU - Siay</span></td>
                                <td>
                                    <div class="action-buttons">
                                        <button class="btn-action btn-view" title="View">
                                            <i class="bi bi-eye"></i>
                                        </button>
                                        <button class="btn-action btn-edit" title="Edit">
                                            <i class="bi bi-pencil"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
                <!-- Pagination -->
                <div class="pagination-section">
                    <div class="pagination-info">
                        Showing 1 to 7 of 8 entries
                    </div>
                    <div class="pagination-controls">
                        <button class="pagination-btn">Prev</button>
                        <button class="pagination-btn active">1</button>
                        <button class="pagination-btn">Next</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Sidebar toggle functionality
        document.getElementById('sidebarToggle').addEventListener('click', function() {
            const sidebar = document.getElementById('sidebar');
            sidebar.classList.toggle('show');
        });

        // Close sidebar when clicking outside on mobile
        document.addEventListener('click', function(e) {
            const sidebar = document.getElementById('sidebar');
            const toggle = document.getElementById('sidebarToggle');
            
            if (window.innerWidth <= 768) {
                if (!sidebar.contains(e.target) && !toggle.contains(e.target)) {
                    sidebar.classList.remove('show');
                }
            }
        });

        // Search functionality
        document.querySelector('.search-input').addEventListener('input', function(e) {
            const searchTerm = e.target.value.toLowerCase();
            const tableRows = document.querySelectorAll('.subjects-table tbody tr');
            
            tableRows.forEach(row => {
                const text = row.textContent.toLowerCase();
                row.style.display = text.includes(searchTerm) ? '' : 'none';
            });
        });

        // Select all checkbox functionality
        document.querySelector('thead input[type="checkbox"]').addEventListener('change', function() {
            const checkboxes = document.querySelectorAll('tbody input[type="checkbox"]');
            checkboxes.forEach(checkbox => {
                checkbox.checked = this.checked;
            });
        });

        // Filter dropdowns functionality
        document.querySelectorAll('.filter-dropdown').forEach(dropdown => {
            dropdown.addEventListener('change', function() {
                // Add your filtering logic here
                console.log('Filter changed:', this.value);
            });
        });
    </script>
</body>
</html>