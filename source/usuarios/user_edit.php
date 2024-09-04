<?php
    include("../../config/config.php");
    $conexion = new mysqli(SERVIDOR, USUARIO, PASSWORD, BASE_DE_DATOS);

    // Recibimos el ID del usuario a modificar
    $var_id = $_REQUEST['id_usuario'];

    // Verificamos que se haya recibido un ID válido
    if (!$var_id) {
        echo "ID de usuario no especificado.";
        exit;
    }

    // Sacamos de la tabla usuario los datos del ID recibido
    $sql = "SELECT * FROM usuarios WHERE id='$var_id'";
    $resultado = mysqli_query($conexion, $sql);

    // Verificamos si se obtuvo algún resultado
    if (mysqli_num_rows($resultado) > 0) {
        // Transformamos a un arreglo los datos del usuario
        $datos_usuario = mysqli_fetch_array($resultado, MYSQLI_ASSOC);
    } else {
        echo "No se encontró un usuario con el ID especificado.";
        exit;
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f7f7f7;
        }
        .form-container {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        .form-title {
            font-size: 24px;
            margin-bottom: 20px;
            font-weight: bold;
        }
        .btn-submit {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }
        .btn-submit:hover {
            background-color: #0056b3;
        }
        .form-label {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="form-container mt-5">
                    <h2 class="form-title text-center">Actualizar Usuario</h2>
                    <form method="post" action="update_user.php" enctype="multipart/form-data" class="row g-3">
                        
                        <div class="form-group col-md-6">
                            <label class="form-label">RUC/DNI</label>
                            <input class="form-control" type="text" name="txt_dni" value="<?php echo htmlspecialchars($datos_usuario['dni'] ? $datos_usuario['dni'] : $datos_usuario['ruc']); ?>" required>
                        </div>
                        
                        <div class="form-group col-md-6">
                            <label class="form-label">Nombre/Razón Social</label>
                            <input class="form-control" type="text" name="txt_nombre_rs" value="<?php echo htmlspecialchars($datos_usuario['nombre_rs']); ?>" required>
                        </div>
                        
                        <div class="form-group col-md-6">
                            <label class="form-label">Correo</label>
                            <input class="form-control" type="email" name="txt_correo" value="<?php echo htmlspecialchars($datos_usuario['correo']); ?>" required>
                        </div>
                        
                        <div class="form-group col-md-6">
                            <label class="form-label">Celular</label>
                            <input class="form-control" type="text" name="txt_celular" value="<?php echo htmlspecialchars($datos_usuario['celular']); ?>" required>
                        </div>
                        
                        <div class="form-group col-md-6">
                            <label class="form-label">Rol</label>
                            <select name="select_rol" class="form-control" required>
                                <option value="2" <?php if($datos_usuario['rol'] == '2') echo "selected"; ?>>Egresado</option>
                                <option value="3" <?php if($datos_usuario['rol'] == '3') echo "selected"; ?>>Empresa</option>
                                <option value="4" <?php if($datos_usuario['rol'] == '4') echo "selected"; ?>>Docente</option>
                                <option value="1" <?php if($datos_usuario['rol'] == '1') echo "selected"; ?>>Administrador</option>
                            </select>
                        </div>
                        
                        <div class="form-group col-12 text-center">
                            <button type="submit" class="btn-submit">Actualizar Usuario</button>
                        </div>
                        <input type="hidden" name="id" value="<?php echo htmlspecialchars($datos_usuario['id']); ?>">
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
