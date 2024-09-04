<?php
// Incluimos el archivo de configuración
include("../../config/config.php");

// Creamos la conexión
$conexion = new mysqli(SERVIDOR, USUARIO, PASSWORD, BASE_DE_DATOS);

// Verificamos si hay errores de conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Sentencia SQL para seleccionar los registros de la tabla 'usuarios'
$sentencia_sql = "SELECT * FROM usuarios";
$resultado = $conexion->query($sentencia_sql);

// Verificamos si la consulta fue exitosa
if (!$resultado) {
    die("Error en la consulta: " . $conexion->error);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo TITULO_GENERAL; ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script>
        function f_agregar() {
            location.href = "user_form.php";
        }

        function f_editar(param_id) {
            location.href = "user_edit.php?id_usuario=" + param_id;
        }

        function f_eliminar(param_id) {
            if (confirm("¿Estás seguro de eliminar este registro?")) {
                location.href = "user_delete.php?id_usuario=" + param_id;
            } else {
                alert("Operación cancelada.");
            }
        }

        function f_volver() {
            location.href = "index.php";
        }
    </script>
</head>
<body>
    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 class="mb-0"><?php echo TITULO_GENERAL; ?></h3>
            <div>
                <button onClick="f_agregar()" type="button" class="btn btn-success mr-2">Agregar usuario</button>
                <button onClick="f_volver()" type="button" class="btn btn-secondary">Volver al inicio</button>
            </div>
        </div>
        <table class="table table-bordered table-striped table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>Nombre/Razón Social</th>
                    <th>DNI</th>
                    <th>Correo</th>
                    <th>Celular</th>
                    <th>Rol</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $resultado->fetch_assoc()): ?>
                <tr>
                    <td><?php echo htmlspecialchars($row['nombre_rs']); ?></td>
                    <td><?php echo htmlspecialchars($row['dni']); ?></td>
                    <td><?php echo htmlspecialchars($row['correo']); ?></td>
                    <td><?php echo htmlspecialchars($row['celular']); ?></td>
                    <td>
                        <?php
                        switch ($row['rol']) {
                            case '1':
                                echo 'Administrador';
                                break;
                            case '2':
                                echo 'Egresado';
                                break;
                            case '3':
                                echo 'Empresa';
                                break;
                            case '4':
                                echo 'Docente';
                                break;
                        }
                        ?>
                    </td>
                    <td>
                        <button onClick="f_editar('<?php echo $row['id']; ?>')" class="btn btn-warning btn-sm">Editar</button>
                        <button onClick="f_eliminar('<?php echo $row['id']; ?>')" class="btn btn-danger btn-sm">Eliminar</button>
                    </td>
                </tr>   
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>
</html>

<?php
// Cerramos la conexión
$conexion->close();
?>
