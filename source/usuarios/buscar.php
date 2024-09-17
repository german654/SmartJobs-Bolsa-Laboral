<?php
// Incluimos el archivo de configuración
include("../../config/config.php");

// Creación de la conexión con MySQLi
$conexion = new mysqli(SERVIDOR, USUARIO, PASSWORD, BASE_DE_DATOS);

// Verificamos si la conexión ha fallado
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Obtener los parámetros de búsqueda
$categoria = isset($_GET['categoria']) ? $_GET['categoria'] : '';
$lugar = isset($_GET['lugar']) ? $_GET['lugar'] : '';

// Preparar la consulta SQL utilizando parámetros
$sql = "SELECT * FROM oferta_laboral WHERE titulo LIKE ? AND lugar LIKE ?";
$stmt = $conexion->prepare($sql);

// Verificar si la preparación de la consulta fue exitosa
if ($stmt === false) {
    die("Error en la preparación de la consulta: " . $conexion->error);
}

// Agregar los valores a los parámetros con bind_param
$likeCategoria = "%$categoria%";
$likeLugar = "%$lugar%";
$stmt->bind_param('ss', $likeCategoria, $likeLugar);  // 'ss' indica que ambos parámetros son de tipo string

// Ejecutar la consulta
$stmt->execute();

// Obtener los resultados
$resultado = $stmt->get_result();
$ofertas = $resultado->fetch_all(MYSQLI_ASSOC);

// Cerrar la conexión
$stmt->close();
$conexion->close();

// Incluir la vista para mostrar los resultados
include 'resultados.php';
?>
