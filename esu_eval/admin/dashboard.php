
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="../css/dashboard.css">
    
</head>
<body>
  

    <!-- Main Content -->
    <div class="main-content" id="mainContent">
        <!-- Top Header -->
<div class="top-header">
    <div class="header-content">
        <div class="user-info">
            <div class="user-avatar">
                <img src="../img/pp.jpg" alt="User Avatar">
            </div>
            <span>Emily Cruz</span>
        </div>
    </div>
</div>

        <!-- Dashboard Content -->
        <div class="dashboard-content">
            <h1 class="page-title">DASHBOARD</h1>
            <p class="page-subtitle">Welcome Admin!</p>

            <!-- Stats Cards -->
            <div class="row stats-row">
             <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card stat-card">
                        <div class="stat-content">
                            <div class="stat-left">
                                <div class="stat-number">156</div>
                                <div class="stat-label">Total Faculty</div>
                            </div>
                            <div class="stat-right">
                                <i class="bi bi-person-workspace stat-icon faculty"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card stat-card">
                        <div class="stat-content">
                            <div class="stat-left">
                                <div class="stat-number">1,902</div>
                                <div class="stat-label">Total Students</div>
                            </div>
                            <div class="stat-right">
                                <i class="bi bi-mortarboard stat-icon students"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card stat-card">
                        <div class="stat-content">
                            <div class="stat-left">
                                <div class="stat-number">2,783</div>
                                <div class="stat-label">Completed Evaluations</div>
                            </div>
                            <div class="stat-right">
                                <i class="bi bi-clipboard-check stat-icon evaluations"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card stat-card">
                        <div class="stat-content">
                            <div class="stat-left">
                                <div class="stat-number">16</div>
                                <div class="stat-label">Campus</div>
                            </div>
                            <div class="stat-right">
                                <i class="bi bi-buildings stat-icon departments"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Charts Section -->
            <div class="row chart-row">
                <div class="col-lg-8 mb-4">
                    <div class="chart-section">
                        <h3 class="section-title">Faculty Performance Overview</h3>
                        <div class="chart-container">
                            <canvas id="performanceChart"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="chart-section">
                        <h3 class="section-title">Evaluation Status</h3>
                        <div class="chart-container">
                            <canvas id="statusChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row chart-row">
                <div class="col-lg-6 mb-4">
                    <div class="chart-section">
                        <h3 class="section-title">Department Performance</h3>
                        <div class="chart-container">
                            <canvas id="departmentChart"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="chart-section">
                        <h3 class="section-title">Monthly Evaluation Trends</h3>
                        <div class="chart-container">
                            <canvas id="trendsChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recent Evaluations -->
            <div class="recent-section">
                <h3 class="section-title">Recent Evaluations</h3>
                <div class="table-responsive">
                    <table class="table evaluation-table">
                        <thead>
                            <tr>
                                <th>FACULTY</th>
                                <th>DEPARTMENT</th>
                                <th>RATING</th>
                                <th>STATUS</th>
                                <th>DATE</th>
                                <th>ACTIONS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Dr. Sarah Diaz</strong></td>
                                <td>Mathematics</td>
                                <td><span class="rating-badge">4.3</span></td>
                                <td><span class="status-badge status-completed">Completed</span></td>
                                <td>2024-08-01</td>
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
                                <td><strong>Prof. Mike Sanchez</strong></td>
                                <td>Physics</td>
                                <td><span class="rating-badge">4.7</span></td>
                                <td><span class="status-badge status-completed">Completed</span></td>
                                <td>2024-07-28</td>
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
                                <td><strong>Jaydee Ballaho</strong></td>
                                <td>Computer Science</td>
                                <td><span class="rating-badge">4.5</span></td>
                                <td><span class="status-badge status-completed">Completed</span></td>
                                <td>2024-07-27</td>
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
                                <td><strong>Salimar Tahil</strong></td>
                                <td>Computer Science</td>
                                <td><span class="rating-badge">4.8</span></td>
                                <td><span class="status-badge status-completed">Completed</span></td>
                                <td>2024-07-26</td>
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

        // Initialize Charts
        document.addEventListener('DOMContentLoaded', function() {
            // Faculty Performance Overview Chart
            const performanceCtx = document.getElementById('performanceChart').getContext('2d');
            new Chart(performanceCtx, {
                type: 'bar',
                data: {
                    labels: ['Excellent (4.5-5.0)', 'Very Good (4.0-4.4)', 'Good (3.5-3.9)', 'Fair (3.0-3.4)', 'Poor (Below 3.0)'],
                    datasets: [{
                        label: 'Number of Faculty',
                        data: [45, 67, 32, 10, 2],
                        backgroundColor: [
                            'rgba(161, 15, 44, 0.8)',
                            'rgba(151, 14, 41, 0.8)',
                            'rgba(122, 11, 33, 0.8)',
                            'rgba(59, 5, 16, 0.8)',
                            'rgba(71, 6, 19, 0.8)'
                        ],
                        borderColor: [
                            'rgba(161, 15, 44, 1)',
                            'rgba(151, 14, 41, 1)',
                            'rgba(122, 11, 33, 1)',
                            'rgba(59, 5, 16, 1)',
                            'rgba(71, 6, 19, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            ticks: {
                                stepSize: 10
                            }
                        }
                    }
                }
            });

            // Evaluation Status Pie Chart
            const statusCtx = document.getElementById('statusChart').getContext('2d');
            new Chart(statusCtx, {
                type: 'doughnut',
                data: {
                    labels: ['Completed', 'Pending', 'In Progress'],
                    datasets: [{
                        data: [2783, 145, 67],
                        backgroundColor: [
                            'rgba(161, 15, 44, 0.8)',
                            'rgba(151, 14, 41, 0.8)',
                            'rgba(122, 11, 33, 0.8)'
                        ],
                        borderColor: [
                            'rgba(161, 15, 44, 1)',
                            'rgba(151, 14, 41, 1)',
                            'rgba(122, 11, 33, 1)'
                        ],
                        borderWidth: 2
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            position: 'bottom'
                        }
                    }
                }
            });

            // Department Performance Chart
            const departmentCtx = document.getElementById('departmentChart').getContext('2d');
            new Chart(departmentCtx, {
                type: 'radar',
                data: {
                    labels: ['Computer Science', 'Mathematics', 'Physics', 'Chemistry', 'Biology', 'Engineering'],
                    datasets: [{
                        label: 'Average Rating',
                        data: [4.5, 4.2, 4.7, 4.1, 4.3, 4.4],
                        backgroundColor: 'rgba(161, 15, 44, 0.2)',
                        borderColor: 'rgba(161, 15, 44, 1)',
                        pointBackgroundColor: 'rgba(161, 15, 44, 1)',
                        pointBorderColor: '#fff',
                        pointHoverBackgroundColor: '#fff',
                        pointHoverBorderColor: 'rgba(161, 15, 44, 1)'
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    elements: {
                        line: {
                            borderWidth: 3
                        }
                    },
                    scales: {
                        r: {
                            angleLines: {
                                display: false
                            },
                            suggestedMin: 0,
                            suggestedMax: 5
                        }
                    }
                }
            });

            // Monthly Trends Chart
            const trendsCtx = document.getElementById('trendsChart').getContext('2d');
            new Chart(trendsCtx, {
                type: 'line',
                data: {
                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug'],
                    datasets: [{
                        label: 'Evaluations Completed',
                        data: [320, 410, 380, 450, 520, 480, 650, 720],
                        backgroundColor: 'rgba(161, 15, 44, 0.1)',
                        borderColor: 'rgba(161, 15, 44, 1)',
                        borderWidth: 3,
                        fill: true,
                        tension: 0.4
                    }]
                },
                                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: true,
                            position: 'bottom'
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            ticks: {
                                stepSize: 100
                            }
                        },
                        x: {
                            grid: {
                                display: false
                            }
                        }
                    }
                }
            });
        });
    </script>
</body>
</html>
