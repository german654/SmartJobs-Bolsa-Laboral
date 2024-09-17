<?php
// Recibimos los datos enviados desde el formulario
$var_correo = $_POST["email"];
$var_nombre = $_POST["name"];
$var_apellido = $_POST["last_name"];
$var_password = password_hash($_POST["password"], PASSWORD_BCRYPT); // Encriptamos la contraseña
$var_rol = $_POST["role"]; // Obtenemos el rol seleccionado (Candidato o Empresa)

// Conectamos a la base de datos
include("../../config/config.php");
$conexion = new mysqli(SERVIDOR, USUARIO, PASSWORD, BASE_DE_DATOS);

// Verificamos si la conexión es exitosa
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

// Sentencia SQL para insertar los datos
$sql = "INSERT INTO usuarios (nombre_rs, apellido, correo, rol, pasword) 
        VALUES ('$var_nombre', '$var_apellido', '$var_correo', '$var_rol', '$var_password')";

// Ejecutamos la consulta
if (mysqli_query($conexion, $sql)) {
    // Redirigimos según el rol
    if ($var_rol === 'Empresa') {
        header('Location: empresa.php'); // Redirige al dashboard de empresa
    } else {
        header('Location: dashboard.php'); // Redirige al dashboard de candidato
    }
    exit(); // Asegúrate de detener el script después de la redirección
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
}

// Cerramos la conexión
$conexion->close();

