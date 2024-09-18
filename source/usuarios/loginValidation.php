<?php
// Recibir los datos enviados desde el formulario de inicio de sesión
$var_correo = $_POST["email"];
$var_password = $_POST["password"];
$var_rol = isset($_POST["role"]) && $_POST["role"] === 'employer' ? 'Empresa' : 'Candidato';

// Conectar a la base de datos
include("../../config/config.php");
include("../../config/config.php");
$conexion = new mysqli(SERVIDOR, USUARIO, PASSWORD, BASE_DE_DATOS);

// Verificamos si la conexión es exitosa
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

// Consulta SQL para obtener los datos del usuario con el correo proporcionado
$sql = "SELECT * FROM usuarios WHERE correo = '$var_correo' AND rol = '$var_rol'";
$result = $conexion->query($sql);

// Verificar si el correo existe en la base de datos
if ($result->num_rows > 0) {
    // El correo existe, ahora verificamos la contraseña
    $row = $result->fetch_assoc();  // Obtenemos la fila de resultados
    $hashed_password = $row["pasword"];  // Contraseña almacenada (encriptada)

    // Verificamos la contraseña ingresada contra la almacenada (hash)
    if (password_verify($var_password, $hashed_password)) {
        // Contraseña correcta, redirigir según el rol
        if ($var_rol === 'Candidato') {
            header('Location: job_search.php');  // Redirigir al dashboard de Candidato
        } else {
            header('Location: empresa.php');  // Redirigir al dashboard de Empresa
        }
    } else {
        // Contraseña incorrecta
        echo "Contraseña incorrecta.";
    }
} else {
    // El correo no existe o el rol no coincide
    echo "Correo o rol incorrecto.";
}

// Cerrar la conexión
$conexion->close();

