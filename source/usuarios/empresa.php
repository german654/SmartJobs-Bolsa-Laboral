<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Gestión de Vacantes</title>
    <link rel="stylesheet" href="../styles/dashboard_empresa.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
<div class="container">
    <!-- Sidebar -->
    <aside class="sidebar">
        <div class="toggle-sidebar" id="toggle-sidebar">
            <i class="bx bx-menu"></i>
        </div>
        <div class="logo">
            <i class="bx bxl-codepen"></i>
            <span>CodeComerce</span>
        </div>
        <nav class="menu">
            <ul class="menu-list">
                <li>
                    <a href="#" class="menu-item">
                        <i class="bx bx-home"></i>
                        <span class="nav-item">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="menu-item">
                        <i class="bx bx-buildings"></i>
                        <span class="nav-item">Department</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="menu-item">
                        <i class="bx bx-list-ul"></i>
                        <span class="nav-item">Position</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="menu-item">
                        <i class="bx bx-user"></i>
                        <span class="nav-item">User</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="menu-item active">
                        <i class="bx bx-briefcase"></i>
                        <span class="nav-item">Vacancy</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="menu-item">
                        <span class="submenu-item">Add Vacancy</span>
                    </a></li>
                <li>
                    <a href="#" class="menu-item">
                        <span class="submenu-item">Add Vacancy</span>
                    </a></li>
                <li>
                    <a href="#" class="menu-item">
                        <i class="bx bx-group"></i>
                        <span class="nav-item">Candidate</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="menu-item">
                        <i class="bx bx-calendar-check"></i>
                        <span class="nav-item">Interview</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="menu-item">
                        <i class="bx bx-envelope"></i>
                        <span class="nav-item">Mail History</span>
                    </a>
                </li>
            </ul>
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

        <!-- Modificación del formulario HTML -->
        <section class="add-vacancy-form">
            <form id="vacancy-form" action="register_vacancy.php" method="POST">
                <div class="form-row">
                    <label for="position">Position</label>
                    <input type="text" id="position" name="titulo" placeholder="e.g., Java Developer" required>
                </div>

                <div class="form-row">
                    <label for="department">Department</label>
                    <input type="text" id="department" name="categoria" placeholder="e.g., Banking" required>
                </div>

                <div class="form-row">
                    <label for="location">Location</label>
                    <input type="text" id="location" name="lugar" placeholder="e.g., Remote" required>
                </div>

                <div class="form-row">
                    <label for="schedule">Schedule</label>
                    <input type="text" id="schedule" name="horario" placeholder="e.g., Full-time" required>
                </div>

                <div class="form-row">
                    <label for="salary">Salary</label>
                    <input type="number" id="salary" name="remuneracion" step="0.01" placeholder="e.g., 50000.00" required>
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
                    <textarea id="description" name="descripcion" rows="4" placeholder="Write the job description..."></textarea>
                </div>

                <div class="form-row">
                    <label for="responsibilities">Responsibilities</label>
                    <textarea id="responsibilities" rows="4" placeholder="List the responsibilities..."></textarea>
                </div>

                <input type="hidden" name="id_empresa" value="1"> <!-- ID de la empresa, puedes cambiarlo dinámicamente -->

                <button type="submit" class="btn-submit">Submit Vacancy</button>
            </form>
        </section>
    </main>
</div>

<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<script src="../scripts/dashboard.js"></script>
</body>
</html>
