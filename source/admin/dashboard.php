<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .card-header {
            font-size: 1.2rem;
            font-weight: bold;
        }
        .card {
            border-radius: 10px;
        }
        .sidebar {
            height: 100vh;
            background-color: #343a40;
        }
        .sidebar a {
            color: #fff;
            padding: 10px;
            display: block;
            text-decoration: none;
        }
        .sidebar a:hover {
            background-color: #495057;
        }
    </style>
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-md-2 sidebar">
            <h3 class="text-white p-3">ACE</h3>
            <a href="#">Dashboard</a>
            <a href="#">Department</a>
            <a href="#">Position</a>
            <a href="../usuarios/usuarios.php">User</a>
            <a href="#">Vacancy</a>
            <a href="./candidates.php">Candidate</a>
            <a href="#">Interview</a>
            <a href="#">Mail History</a>
        </div>

        <!-- Main Content -->
        <div class="col-md-10 p-4">
            <h2>Welcome!</h2>
            <div class="row mt-4">
                <!-- Total Vacancies -->
                <div class="col-md-3">
                    <div class="card text-white bg-primary mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Total Vacancies</h5>
                            <p class="card-text">6</p>
                        </div>
                    </div>
                </div>

                <!-- Active Vacancies -->
                <div class="col-md-3">
                    <div class="card text-white bg-dark mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Active Vacancies</h5>
                            <p class="card-text">5 (Urgent 1)</p>
                        </div>
                    </div>
                </div>

                <!-- Total Candidates -->
                <div class="col-md-3">
                    <div class="card text-white bg-info mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Total Candidates</h5>
                            <p class="card-text">17</p>
                        </div>
                    </div>
                </div>

                <!-- Employed Candidates -->
                <div class="col-md-3">
                    <div class="card text-white bg-danger mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Employed Candidates</h5>
                            <p class="card-text">0</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Vacancy Chart with Department -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">Vacancy Chart with Department</div>
                        <div class="card-body">
                            <form class="row">
                                <div class="col-md-4">
                                    <label for="department" class="form-label">Department</label>
                                    <select class="form-select" id="department">
                                        <option selected>All</option>
                                        <option value="1">HR</option>
                                        <option value="2">IT</option>
                                        <option value="3">Finance</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label for="year" class="form-label">Year</label>
                                    <select class="form-select" id="year">
                                        <option selected>All</option>
                                        <option value="2024">2024</option>
                                        <option value="2023">2023</option>
                                    </select>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
