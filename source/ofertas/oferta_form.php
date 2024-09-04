    <?php
    include("../../config/config.php");
    $conexion=new mysqli(SERVIDOR,USUARIO,PASSWORD,BASE_DE_DATOS);
    //sql para filtrar solo las empresas
    $sql="SELECT * FROM usuarios WHERE rol='3'";
    //ejecutamos la sentencia sql
    $resultado = mysqli_query($conexion,$sql);
   
                    
    ?>

<link rel="stylesheet"  type="text/css"   href="../../css/bootstrap/css/bootstrap2.css" />

<!--creeamos nuestro formulario -->
<div class="container-fluid">
    <div class="row d-flex d-wrap justify-content-center">
        <div class="col-5">
            <h2 class="bg-warning p-3">Crear NUEVA OFERTA LABORAL</h2>
           
            <form method="post" action="save_oferta.php"  class="row g-3">

                    

                     <div class="col-md-6">
                        <label class="form-label"> titulo </label>
                        <input class="form-control" type="text" name="txt_titulo">
                     </div>
            
                    <div class="col-md-6">
                        <label class="form-label"> descripcion </label>
                        <input class="form-control" type="text" name="txt_descripcion">
                    </div>

                     <div class="col-md-6">
                        <label class="form-label"> horario </label>
                        <input class="form-control" type="text" name="txt_horario">
                     </div>

                     <div class="col-md-6">
                        <label class="form-label"> Empresa </label>
                        <select class="form-select" name="select_empresa">
                           <?php
                            //bucle para recorrer a las empresas      
                           while($row=mysqli_fetch_array($resultado, MYSQLI_ASSOC)){
                            echo "<option value='".$row['id']."'>".$row ['nombre_razon_social']."</option>";
                                }
                           ?>
                        </select>               
                     </div>
                     

                     <div class="col-md-6">
                        <label class="form-label"> remuneracion </label>
                        <input class="form-control" type="text" name="txt_remuneracion">
                     </div>

                    

                    <button type="submit" class="btn btn-danger">Crear NUEVA OFERTA LABORAL</button>

              </form>
        </div>
        </div>
    </div>
</div>