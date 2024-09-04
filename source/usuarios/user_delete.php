<?php
// Verificamos si el ID de usuario ha sido proporcionado
if (isset($_GET['id_usuario'])) {
    // Recibimos el ID del usuario a eliminar
    $id = $_GET['id_usuario'];

    // Nos conectamos a la base de datos 
    include("../../config/config.php");
    $conexion = new mysqli(SERVIDOR, USUARIO, PASSWORD, BASE_DE_DATOS);

    // Verificamos si hay errores de conexión
    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }

    // Asegurarse de escapar el valor recibido para evitar inyecciones SQL
    $id = $conexion->real_escape_string($id);

    // Comprobamos si el usuario existe antes de eliminarlo
    $check_sql = "SELECT id FROM usuarios WHERE id = '$id'";
    $check_result = $conexion->query($check_sql);

    if ($check_result->num_rows > 0) {
        // Si el usuario existe, procedemos a eliminarlo
        $sql = "DELETE FROM usuarios WHERE id = '$id'";

        // Ejecutamos la consulta
        if ($conexion->query($sql) === TRUE) {
            // Redireccionamos automáticamente después de la eliminación
            header("Location: usuarios.php");
            exit();
        } else {
            // En caso de error, mostramos un mensaje
            echo "Error al eliminar el usuario: " . $conexion->error;
        }
    } else {
        echo "El usuario no existe.";
    }

    // Cerramos la conexión
    $conexion->close();
} else {
    echo "ID de usuario no proporcionado.";
}
?>
