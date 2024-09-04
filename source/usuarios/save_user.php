<?php
// Recibimos los datos enviados desde el formulario
$var_dni = $_POST["txt_dni"];
$var_nombres = $_POST["txt_nombre_rs"];
$var_correo = $_POST["txt_correo"];
$var_celular = $_POST["txt_celular"];
$var_rol = $_POST["select_rol"];
$var_password = password_hash($_POST["txt_password"], PASSWORD_BCRYPT); // Encriptamos la contraseña

// Manejo del archivo CV
$archivo_cv = $_FILES['file_cv']['name'];
$ruta_destino = "../../uploads/cv/";

// Verificamos si la carpeta no existe y la creamos
if (!is_dir($ruta_destino)) {
    mkdir($ruta_destino, 0777, true); // Creamos la carpeta con permisos completos
}

$ruta_completa = $ruta_destino . basename($archivo_cv);
$archivo_ok = true;

// Verificamos que el archivo sea de tipo permitido
$tipo_archivo = pathinfo($ruta_completa, PATHINFO_EXTENSION);
if ($tipo_archivo != "doc" && $tipo_archivo != "docx" && $tipo_archivo != "pdf") {
    $archivo_ok = false;
    echo "Formato de archivo no permitido. Solo se aceptan archivos Word o PDF.";
}

// Subimos el archivo al servidor
if ($archivo_ok && move_uploaded_file($_FILES['file_cv']['tmp_name'], $ruta_completa)) {
    // Nos conectamos a la base de datos
    include("../../config/config.php");
    $conexion = new mysqli(SERVIDOR, USUARIO, PASSWORD, BASE_DE_DATOS);

    // Sentencia SQL para insertar los datos recibidos en la tabla usuarios
    $sql = "INSERT INTO usuarios (dni, nombre_rs, correo, celular, rol, pasword, archivo_cv) 
            VALUES ('$var_dni', '$var_nombres', '$var_correo', '$var_celular', '$var_rol', '$var_password', '$archivo_cv')";

    // Ejecutamos la consulta y redirigimos al index
    if (mysqli_query($conexion, $sql)) {
        header('Location: usuarios.php');
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
    }

    // Cerramos la conexión
    $conexion->close();
} else {
    echo "Hubo un error al subir el archivo.";
}
?>
