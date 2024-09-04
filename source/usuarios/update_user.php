<?php
// Recibimos los posibles nuevos datos
$var_dni         = $_POST["txt_dni"];
$var_nombres     = $_POST["txt_nombre_rs"];
$var_correo      = $_POST["txt_correo"];
$var_celular     = $_POST["txt_celular"];
$var_rol         = $_POST["select_rol"];

// Recibimos el ID del usuario
$var_id = $_POST["id"];

include("../../config/config.php");
$conexion = new mysqli(SERVIDOR, USUARIO, PASSWORD, BASE_DE_DATOS);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Actualizamos los datos en la tabla usuarios
$sql = "
    UPDATE usuarios SET
    nombre_rs = '$var_nombres',
    dni = '$var_dni',
    correo = '$var_correo',
    celular = '$var_celular',
    rol = '$var_rol'
    WHERE id = '$var_id'
";

if (mysqli_query($conexion, $sql)) {
    // Redirigir a usuarios.php después de actualizar
    header('Location: usuarios.php');
    exit();
} else {
    echo "Error al actualizar: " . mysqli_error($conexion);
}

$conexion->close();
?>
