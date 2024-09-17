<!-- index.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SmartJobs - Encuentra el empleo ideal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .hero-section {
            background-size: cover;
            background-position: center;
            height: 60vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }
        .search-bar {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 8px;
        }
        .btn-usuarios {
            position: absolute;
            top: 15px;
            right: 15px;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="p-3 bg-dark text-white position-relative">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-between">
                <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                    <h1 class="h4">SmartJobs</h1>
                </a>
                <ul class="nav">
                    <li><a href="./job_search.php" class="nav-link px-2 text-white">Buscar ofertas</a></li>
                    <li><a href="./jobster.php" class="nav-link px-2 text-white">Evaluaciones de empresa</a></li>
                    <li><a href="./jobster2.php" class="nav-link px-2 text-white">Salarios</a></li>
                </ul>
                <div class="text-end">
                    <a href="../admin/dashboard.php" class="btn btn-outline-light me-2 btn-usuarios">Usuarios</a>
                    <a href="login.php" class="btn btn-warning">Login</a>
                    <button type="button" class="btn btn-primary">Crear CV</button>
                </div>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <div class="hero-section" style="position: relative; background-image: url('../images/mycover.gif'); background-size: cover; background-position: center; height: 70vh;">
        <div class="overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5);"></div>
        <div class="container text-center" style="position: relative; z-index: 2;">
            <h1 class="text-white">¡Ahora es el momento de cambiar!</h1>
            <p class="lead text-white">Encuentra el empleo que encaja contigo, más de 44.789 ofertas</p>
            <div class="search-bar mt-4">
                <form action="buscar.php" method="GET">
                    <div class="row g-2">
                        <div class="col-md">
                            <input list="categoria-ejemplos" class="form-control" name="categoria" placeholder="Cargo o categoría">
                            <datalist id="categoria-ejemplos">
                                <option value="Desarrollador Backend">
                                <option value="Ingeniero de Datos">
                                <option value="Especialista en IA">
                                <option value="Desarrollador Full Stack">
                                <option value="Científico de Datos">
                            </datalist>
                        </div>
                        <div class="col-md">
                            <input list="lugar-ejemplos" class="form-control" name="lugar" placeholder="Lugar">
                            <datalist id="lugar-ejemplos">
                                <option value="San Francisco, CA">
                                <option value="Ciudad de México">
                                <option value="Remoto">
                                <option value="Buenos Aires">
                                <option value="Barcelona">
                            </datalist>
                        </div>
                        <div class="col-md">
                            <button type="submit" class="btn btn-primary w-100">Buscar empleos</button>
                        </div>
                    </div>
                </form>
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
