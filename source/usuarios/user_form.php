<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear nuevo Usuario</title>
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
            background-color: #28a745;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }
        .btn-submit:hover {
            background-color: #218838;
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
                    <h2 class="form-title text-center">Datos Personales</h2>
                    <form method="post" action="save_user.php" enctype="multipart/form-data" class="row g-3">
                        
                        <div class="form-group col-md-6">
                            <label class="form-label">DNI</label>
                            <input class="form-control" type="text" name="txt_dni" required>
                        </div>
                        
                        <div class="form-group col-md-6">
                            <label class="form-label">Nombre/Razón Social</label>
                            <input class="form-control" type="text" name="txt_nombre_rs" required>
                        </div>
                        
                        <div class="form-group col-md-6">
                            <label class="form-label">Correo</label>
                            <input class="form-control" type="email" name="txt_correo" required>
                        </div>
                        
                        <div class="form-group col-md-6">
                            <label class="form-label">Celular</label>
                            <input class="form-control" type="text" name="txt_celular" required>
                        </div>
                        
                        <div class="form-group col-md-6">
                            <label class="form-label">Rol</label>
                            <select name="select_rol" class="form-control" required>
                                <option value="2">Egresado</option>
                                <option value="3">Empresa</option>
                                <option value="4">Docente</option>
                                <option value="1">Administrador</option>
                            </select>
                        </div>
                        
                        <div class="form-group col-md-6">
                            <label class="form-label">Contraseña</label>
                            <input class="form-control" type="password" name="txt_password" required>
                        </div>
                        
                        <div class="form-group col-md-12">
                            <label class="form-label">Subir CV (Word o PDF)</label>
                            <input class="form-control-file" type="file" name="file_cv" accept=".doc,.docx,.pdf" required>
                        </div>
                        
                        <div class="form-group col-12 text-center">
                            <button type="submit" class="btn-submit">Crear Usuario</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
