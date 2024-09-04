<?php
    include("../../config/config.php");
    $conexion = new mysqli(SERVIDOR,USUARIO,PASSWORD,BASE_DE_DATOS);

    //recibimos el ID del usuario a modificar
    $var_id=$_REQUEST['id_oferta'];

    //sacamos de la tabla usuario los datos del id recibido
    $sql="SELECT * FROM oferta_laboral WHERE id='$var_id'";

    $resultado = mysqli_query($conexion,$sql); //ejecutamos la SQL

    //var_dump($resultado);...


    //transformamos a un arreglo los datos del usuario
    $datos_oferta=mysqli_fetch_array($resultado, MYSQLI_ASSOC);
    /*
    echo '<pre>';
    var_dump($datos_usuario);
    echo '</pre>';
    */
    ?>
    

    <link rel="stylesheet"  type="text/css"   href="../../css/bootstrap/css/bootstrap2.css" />

    <!--creeamos nuestro formulario -->
    <div class="container-fluid">
        <div class="row d-flex d-wrap justify-content-center">
            <div class="col-5">
             <h2 class="bg-info p-3">ACTUALIZAR OFERTA_LABORAL</h2>
           
                 <form method="post" action="update_oferta.php"  class="row g-3">

                    
                     <div class="col-md-6">
                        <label class="form-label"> titulo </label>
                        <input class="form-control" type="text" name="txt_titulo" value="<?php echo $datos_oferta['titulo']?>">
                     </div>
            
                    <div class="col-md-6">
                        <label class="form-label"> descripcion </label>
                        <input class="form-control" type="text" name="txt_descripcion" value="<?php echo $datos_oferta['descripcion']?>">
                    </div>

                     <div class="col-md-6">
                        <label class="form-label"> horario </label>
                        <input class="form-control" type="text" name="txt_horario" value="<?php echo $datos_oferta['horario']?>">
                     </div>

                    
                     

                     <div class="col-md-6">
                        <label class="form-label"> remuneracion </label>
                        <input class="form-control" type="text" name="txt_remuneracion" value="<?php echo $datos_oferta['remuneracion']?>">
                     </div>



                        

                         <button type="submit" class="btn btn-danger">ACTUALIZAR OFERTA_LABORAL</button>
                           <input type="text" name="id_oferta" value="<?php echo $datos_oferta['id'] ?>"> </input>
                    </form>
                </div>
            </div>
        </div>
    </div>

