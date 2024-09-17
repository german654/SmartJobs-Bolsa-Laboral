<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Registro</title>
    <link rel="stylesheet" href="../styles/login.css">
</head>
<body>
<div class="form-container">
    <h1>Crear Cuenta</h1>
    <div class="role-toggle">
        <!-- Botones para elegir rol -->
        <button type="button" id="candidate-btn" class="active">Candidato</button>
        <button type="button" id="employer-btn">Empresa</button>
    </div>
    <form id="register-form" method="POST" enctype="multipart/form-data" action="register.php">
        <input type="hidden" id="role" name="role" value="Candidato"> <!-- Campo oculto para almacenar el rol seleccionado -->
        <input type="email" id="email" name="email" placeholder="Correo Electrónico" required>
        <input type="text" id="name" name="name" placeholder="Nombre" required>
        <input type="text" id="last-name" name="last_name" placeholder="Apellido" required>
        <input type="password" id="password" name="password" placeholder="Contraseña" required>
        <input type="password" id="repeat-password" name="repeat_password" placeholder="Repetir Contraseña" required>
        <div class="terms">
            <input type="checkbox" id="terms" name="terms" required>
            <label for="terms">Acepto los <a href="#">Términos y Condiciones</a>.</label>
        </div>
        <button type="submit" class="sign-up-btn">Registrarse</button>
    </form>
    <p class="alternative">o</p>
    <button class="google-btn">Registrarse con Google</button>
    <p>¿Ya tienes una cuenta? <a href="./sigIn.php">Iniciar Sesión</a></p>
</div>

<!-- Script para manejar el cambio de rol -->
<script>
    const candidateBtn = document.getElementById('candidate-btn');
    const employerBtn = document.getElementById('employer-btn');
    const roleInput = document.getElementById('role');

    // Evento para el botón de Candidato
    candidateBtn.addEventListener('click', function() {
        roleInput.value = 'Candidato'; // Cambiamos el valor oculto a Candidato
        candidateBtn.classList.add('active');
        employerBtn.classList.remove('active');
    });

    // Evento para el botón de Empresa
    employerBtn.addEventListener('click', function() {
        roleInput.value = 'Empresa'; // Cambiamos el valor oculto a Empresa
        employerBtn.classList.add('active');
        candidateBtn.classList.remove('active');
    });
</script>
</body>
</html>
