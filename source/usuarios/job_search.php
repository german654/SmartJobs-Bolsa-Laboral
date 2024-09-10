<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SmartJobs - Ofertas de Empleo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .job-card {
            border: 1px solid #e1e1e1;
            border-radius: 8px;
            background-color: #ffffff;
            padding: 15px;
            margin-bottom: 10px;
            transition: box-shadow 0.3s ease;
        }
        .job-card:hover {
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>

    <!-- Header -->
    <header class="p-3 bg-dark text-white">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-between">
                <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                    <h1 class="h4">SmartJobs</h1>
                </a>

                <ul class="nav">
                    <li><a href="#" class="nav-link px-2 text-white">Buscar ofertas</a></li>
                    <li><a href="#" class="nav-link px-2 text-white">Evaluaciones de empresa</a></li>
                    <li><a href="#" class="nav-link px-2 text-white">Salarios</a></li>
                </ul>

                <div class="text-end">
                    <a href="usuarios.php" class="btn btn-outline-light me-2">Usuarios</a>
                    <button type="button" class="btn btn-warning">Login</button>
                    <button type="button" class="btn btn-primary">Crear CV</button>
                </div>
            </div>
        </div>
    </header>

    <!-- Job Search Section -->
    <div class="container my-5">
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Filtros</h5>
                    </div>
                    <div class="card-body">
                        <!-- Add your filter options here -->
                        <form action="buscar.php" method="GET">
                            <div class="mb-3">
                                <label for="categoria" class="form-label">Cargo o categoría</label>
                                <input type="text" class="form-control" id="categoria" name="categoria" placeholder="Ej. Ingeniero de sistemas">
                            </div>
                            <div class="mb-3">
                                <label for="lugar" class="form-label">Lugar</label>
                                <input type="text" class="form-control" id="lugar" name="lugar" placeholder="Ej. Moquegua">
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Buscar ofertas</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <h2>Ofertas de trabajo</h2>
                <!-- Job Listing -->
                <div class="job-card">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5>Ingeniero Supervisor de Proyectos</h5>
                        <span class="badge bg-secondary">Más de 30 días</span>
                    </div>
                    <p>TRIZCON-SICOIN - Moquegua, Moquegua</p>
                    <a href="#" class="btn btn-primary">Postularme</a>
                </div>
                <div class="job-card">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5>Trabajo Desde Casa Ingeniero .NET + Angular</h5>
                        <span class="badge bg-success">Hace 6 días</span>
                    </div>
                    <p>BairesDev LLC - Moquegua, Moquegua</p>
                    <a href="#" class="btn btn-primary">Postularme</a>
                </div>
                <!-- Add more job cards here -->
            </div>
        </div>
    </div>

    <footer class="mt-5 p-3 bg-dark text-white text-center">
        <p>Hoy hay 8.845 empresas contratando con las mejores vacantes para ti</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
