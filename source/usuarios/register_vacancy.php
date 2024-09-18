<?php
// Verificamos que los datos hayan sido enviados por POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Conexión a la base de datos
    include("../../config/config.php");
    $conexion = new mysqli(SERVIDOR, USUARIO, PASSWORD, BASE_DE_DATOS);

    // Verificamos la conexión
    if ($conexion->connect_error) {
        die("Conexión fallida: " . $conexion->connect_error);
    }

    // Recibimos y sanitizamos los datos enviados desde el formulario
    $titulo = $conexion->real_escape_string($_POST['titulo']);
    $descripcion = $conexion->real_escape_string($_POST['descripcion']);
    $categoria = $conexion->real_escape_string($_POST['categoria']);
    $lugar = $conexion->real_escape_string($_POST['lugar']);
    $horario = $conexion->real_escape_string($_POST['horario']);
    $remuneracion = $conexion->real_escape_string($_POST['remuneracion']);
    $id_empresa = $conexion->real_escape_string($_POST['id_empresa']); // Id de la empresa

    // Preparamos la consulta SQL
    $sql = "INSERT INTO oferta_laboral (titulo, descripcion, categoria, lugar, horario, remuneracion, id_empresa)
            VALUES ('$titulo', '$descripcion', '$categoria', '$lugar', '$horario', '$remuneracion', '$id_empresa')";

    // Ejecutamos la consulta
    if ($conexion->query($sql) === TRUE) {
        // Redirigimos al dashboard o mostramos un mensaje de éxito
        header('Location: job_search.php?success=vacancy_added');
    } else {
        echo "Error: " . $sql . "<br>" . $conexion->error;
    }

    // Cerramos la conexión
    $conexion->close();
}

