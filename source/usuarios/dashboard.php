<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jobly Dashboard</title>
    <link rel="stylesheet" href="../styles/dashboard.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> <!-- Chart.js para los gráficos -->
</head>
<body>
    <div class="container">
        <aside class="sidebar">
            <div class="logo">Jobly</div>
            <nav class="menu">
                <a href="#" class="menu-item active">
                    <i class="fas fa-home"></i> Dashboard
                </a>
                <a href="#" class="menu-item">
                    <i class="fas fa-user-edit"></i> Edit Profile
                </a>
                <a href="#" class="menu-item">
                    <i class="fas fa-briefcase"></i> Applications
                </a>
                <a href="#" class="menu-item">
                    <i class="fas fa-heart"></i> Favourite Jobs
                </a>
                <a href="#" class="menu-item">
                    <i class="fas fa-lock"></i> Change Password
                </a>
            </nav>
            <div class="insights">
                <a href="#" class="menu-item">
                    <i class="fas fa-envelope"></i> Inbox <span class="badge">14</span>
                </a>
                <a href="#" class="menu-item">
                    <i class="fas fa-bell"></i> Notifications <span class="badge">5</span>
                </a>
            </div>
        </aside>

        <main class="dashboard">
            <header class="header">
                <h1>Dashboard</h1>
                <p>Welcome to Jobster!</p>
            </header>

            <section class="stats">
                <div class="stat-item">
                    <h2>13</h2>
                    <p>Job applications</p>
                </div>
                <div class="stat-item">
                    <h2>312</h2>
                    <p>Profile visits</p>
                </div>
                <div class="stat-item">
                    <h2>14</h2>
                    <p>Unread messages</p>
                </div>
                <div class="stat-item">
                    <h2>5</h2>
                    <p>Notifications</p>
                </div>
            </section>

            <section class="charts">
                <div class="chart">
                    <h3>Profile Visits</h3>
                    <canvas id="profileVisitsChart"></canvas>
                </div>
                <div class="chart">
                    <h3>Applications</h3>
                    <canvas id="applicationsChart"></canvas>
                </div>
            </section>
        </main>
    </div>

    <script src="../scripts/dashboard.js"></script> <!-- Archivo de JavaScript -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>
</html>
