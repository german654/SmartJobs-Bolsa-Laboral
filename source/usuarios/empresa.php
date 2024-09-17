<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Gestión de Vacantes</title>
    <link rel="stylesheet" href="../styles/dashboard_empresa.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> <!-- Chart.js para los gráficos -->
</head>
<body>
<div class="container">
    <!-- Sidebar -->
    <aside class="sidebar">
        <div class="logo">ACE</div>
        <nav class="menu">
            <a href="#" class="menu-item">
                <i class="fas fa-th"></i> Dashboard
            </a>
            <a href="#" class="menu-item">
                <i class="fas fa-building"></i> Department
            </a>
            <a href="#" class="menu-item">
                <i class="fas fa-list"></i> Position
            </a>
            <a href="#" class="menu-item">
                <i class="fas fa-user"></i> User
            </a>
            <a href="#" class="menu-item active">
                <i class="fas fa-briefcase"></i> Vacancy
                <ul class="submenu">
                    <li><a href="#" class="menu-item">Add Vacancy</a></li>
                    <li><a href="#" class="menu-item">Vacancy List</a></li>
                </ul>
            </a>
            <a href="#" class="menu-item">
                <i class="fas fa-users"></i> Candidate
            </a>
            <a href="#" class="menu-item">
                <i class="fas fa-calendar-check"></i> Interview
            </a>
            <a href="#" class="menu-item">
                <i class="fas fa-envelope"></i> Mail History
            </a>
        </nav>
    </aside>

    <!-- Main Dashboard Content -->
    <main class="dashboard">
        <!-- Header -->
        <header class="header">
            <div>
                <h1>Add New Vacancy</h1>
                <p>Manage job offers effectively.</p>
            </div>
            <div class="notifications">
                    <span class="notification-bell">
                        <i class="fas fa-bell"></i> <span class="badge">1</span>
                    </span>
                <div class="notification-popup">
                    <p>Vacancy Created: Python Developer at 23:47 on 2023-12-14</p>
                    <button class="read-all">Read all</button>
                    <button class="see-all">See all</button>
                </div>
            </div>
        </header>

        <!-- Add Vacancy Form -->
        <section class="add-vacancy-form">
            <form id="vacancy-form">
                <div class="form-row">
                    <label for="position">Position</label>
                    <input type="text" id="position" placeholder="e.g., Java Developer" required>
                </div>

                <div class="form-row">
                    <label for="department">Department</label>
                    <input type="text" id="department" placeholder="e.g., Banking" required>
                </div>

                <div class="form-row">
                    <label for="vacancies">Required Vacancies</label>
                    <input type="number" id="vacancies" value="1" min="1" required>
                </div>

                <div class="form-row">
                    <label for="urgent">Status</label>
                    <div class="checkbox-row">
                        <input type="checkbox" id="urgent">
                        <label for="urgent">Urgent</label>
                    </div>
                </div>

                <div class="form-row">
                    <label for="description">Description</label>
                    <textarea id="description" rows="4" placeholder="Write the job description..."></textarea>
                </div>

                <div class="form-row">
                    <label for="responsibilities">Responsibilities</label>
                    <textarea id="responsibilities" rows="4" placeholder="List the responsibilities..."></textarea>
                </div>

                <button type="submit" class="btn-submit">Submit Vacancy</button>
            </form>
        </section>
    </main>
</div>

<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<script src="../scripts/dashboard.js"></script>
</body>
</html>
