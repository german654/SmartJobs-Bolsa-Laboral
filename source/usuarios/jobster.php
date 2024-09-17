<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Jobly</title>
  <link rel="stylesheet" href="../styles/jobster.css">
</head>
<body>

  <!-- Barra de navegación -->
  <header>
    <nav class="navbar">
      <div class="logo">Jobly</div>
      <ul class="nav-links">
        <li><a href="#">Inicio</a></li>
        <li><a href="./dashboard.php">Empleos</a></li>
        <li><a href="#">Categorías</a></li>
        <li><a href="#">Ubicación</a></li>
        <li><a href="#">Páginas</a></li>
      </ul>
      <div class="auth">
        <a href="#" class="login-btn">Iniciar Sesión / Registrarse</a>
      </div>
    </nav>
  </header>

  <!-- Sección Principal -->
  <section class="main-section">
    <div class="main-content">
      <!-- Contenido de texto en el lado izquierdo -->
      <div class="text-content">
        <h1>Consigue el trabajo de tus sueños con Jobly.</h1>
        <p>Encuentra empleos, crea currículums rastreables y mejora tus solicitudes.</p>
        <div class="search-bar">
          <input type="text" placeholder="Título del trabajo, palabras clave...">
          <button>Buscar Empleos</button>
        </div>
        <div class="categories">
          <p>Categorías Populares:</p>
          <ul>
            <li>Atención al Cliente</li>
            <li>Gestión de Proyectos</li>
            <li>Desarrollo</li>
          </ul>
        </div>
      </div>

      <!-- Imágenes Circulares y Círculo de Fondo en el lado derecho -->
      <div class="circle-container" id="circleContainer">
        <div class="circle-background"></div> <!-- Círculo punteado de fondo -->
        <div class="circle-center">
          <p>Jobly</p>
        </div>
        <div class="circle-item">
            <img src="../images/user1.jpg" alt="Usuario 1" style="width: 100px; height: 100px;">
        </div>
        <div class="circle-item">
            <img src="../images/user2.jpg" alt="Usuario 2" style="width: 100px; height: 100px;">
        </div>
        <div class="circle-item">
            <img src="../images/user3.jpg" alt="Usuario 3" style="width: 100px; height: 100px;">
        </div>
        <div class="circle-item">
            <img src="../images/user4.jpg" alt="Usuario 4" style="width: 100px; height: 100px;">
        </div>
        <div class="circle-item">
            <img src="../images/user5.jpg" alt="Usuario 5" style="width: 100px; height: 100px;">
        </div>
        <div class="circle-item">
            <img src="../images/user6.jpg" alt="Usuario 6" style="width: 100px; height: 100px;">
        </div>
      </div>
    </div>
  </section>

  <script src="../scripts/jobster.js"></script>
</body>
</html>
