<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
    <link rel="stylesheet" href="../styles/login.css">
</head>
<body>
<div class="form-container">
    <h1>Iniciar Sesión</h1>

    <!-- Formulario de inicio de sesión -->
    <form id="login-form" method="POST" action="loginValidation.php">
        <!-- Campo de correo electrónico -->
        <input type="email" id="email" name="email" placeholder="Correo Electrónico" required>

        <!-- Campo de contraseña -->
        <input type="password" id="password" name="password" placeholder="Contraseña" required>

        <!-- Selección de rol (Candidato o Empresa) -->
        <div class="role-toggle">
            <input type="radio" id="candidate" name="role" value="candidate" checked>
            <label for="candidate">Candidato</label>

            <input type="radio" id="employer" name="role" value="employer">
            <label for="employer">Empresa</label>
        </div>

        <!-- Botón de enviar -->
        <button type="submit" class="sign-in-btn">Iniciar Sesión</button>
    </form>

    <!-- Alternativa de inicio de sesión con Google -->
    <p class="alternative">o</p>
    <button class="google-btn">Iniciar Sesión con Google</button>

    <!-- Enlace para crear una cuenta si no está registrado -->
    <p>¿No tienes una cuenta? <a href="login.php">Crear una Cuenta</a></p>
</div>

<!-- Scripts -->
<script src="../scripts/login.js"></script>
</body>
</html>
