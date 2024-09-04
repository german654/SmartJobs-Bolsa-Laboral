<?php
        // incluimos a nuestro archivo de configuracion  config.php
        include("../../config/config.php");
        /*
        echo BASE_DE_DATOS;

        echo '<br>';
        echo TITULO_GENERAL;
        echo USUARIO;
        echo PASSWORD;

        */
        

        //creamos la conexion
        $conexion=new mysqli(SERVIDOR,USUARIO,PASSWORD,BASE_DE_DATOS);

        if($conexion->connect_error){
            echo "no se pudo conectar a la base de datos.";
        }

          /*
            }else{
            echo "conexion correcta. Felicitaciones.";
         */
         
                //Invocamos a boostrap para estilizar nuestra lista
                //para lamar al archivo de boostrap
                ?>
                <link rel="stylesheet"  type="text/css"   href="../../css/bootstrap/css/bootstrap2.css" />

                <?php
                
                
         //'vamos a listar los registros de la tabla oferta laboral'

         $sentencia_sql="SELECT 
         oferta_laboral.id            AS TID_OFERTA,
         usuarios.id                  AS Truc_dni,
         oferta_laboral.id_empresa    AS TID_ID_EMPRESA,
         oferta_laboral.titulo        AS T_TITULO,
         oferta_laboral.descripcion   AS T_DESCRIPCION,
         oferta_laboral.horario       AS T_HORARIO,
         oferta_laboral.remuneracion  AS T_REMUNERACION,
         usuarios.nombre_razon_social AS T_NOMBRE_EMPRESA
         
            FROM oferta_laboral INNER JOIN usuarios
            ON oferta_laboral.id_empresa=usuarios.id;";  //la sentencia sql

         $resultado = mysqli_query($conexion,$sentencia_sql); // ejecutamos la sentencia

         //ejecucion en bucle para recorrer los registros de la tabla 'oferta_laboral'.
         //Por ejemplo si la tabla usuarios tiene 2 registros, este bucle dara2 vueltas.
                //mostramos un titulo
                echo'<h3>'.TITULO_GENERAL.'</h3>';
                echo'<button onClick="f_agregar()"  type="button"  class="btn btn-success">Agregar NUEVA OFERTA LABORAL</button>';

                

                //iniciamos la tabla con stilos de bootstrap
                echo "<table class='table table-striped table-hover border border-primary'>"; //iniciamos la tabla con 2 de border
                //definimos los  encabezados
                
                echo'<th>titulo</th>';
                echo'<th>descipcion</th>';
                echo'<th>horario</th>';
                echo'<th>remuneracion</th>';
                echo'<th>empresa</th>';
                echo'<th>acciones</th>';

                while($row=mysqli_fetch_array($resultado, MYSQLI_ASSOC)){
                    
                        echo'<tr>'; //creamos una fila

                    //mostramos los campos necesarios, dentro de la tabla
                       
                         echo '<td>'.$row['T_TITULO']                         .'</td>';
                         echo '<td>'.$row['T_DESCRIPCION']                    .'</td>';
                         echo '<td>'.$row['T_HORARIO']                        .'</td>';
                         echo '<td>'.$row['T_REMUNERACION']                   .'</td>';
                         //Nuevo campo id_empresa
                         echo '<td>'.$row['T_NOMBRE_EMPRESA']                  .'</td>'; 
                         //echo '<td>****</td>';                                                                                    
                                                                                      
                         
                         
                         echo'<td>';                        
                            ?>
                              <button onClick="f_editar  ('<?php echo $row['TID_OFERTA']; ?>')" class="btn btn-warning">Editar</button>
                              <button onClick="f_eliminar('<?php echo $row['TID_OFERTA']; ?>')" class="btn btn-danger">Eliminar</button>
                            <?php
                         echo'</td>';
                    
                         echo '</tr>'; //fin de la fila
                    //echo '<hr>'; //creamos una linea de separacion

                }
                echo"</table>"; //fin de la tabla



                ?> hola
                    <script>  <!-- aqui EMPIEZA javascript --> 
                        function  f_agregar() {
                            //alert("aja si funciono.");
                            //llamamos aun formulario en donde se ingresaran los datos del usuario nuevo
                            location.href="oferta_form.php";
                        }

                        function f_editar(param_id){
                            // alert("todo bien, listo para editar el registro Nro. "  + param_id);
                            location.href="oferta_edit.php?id_oferta="+param_id; //pasando id al archivo

                        }

                        function f_eliminar(param_id){
                            if(confirm("Estas seguro de eliminara ese Registro?"))
                            location.href="oferta_delete.php?id_oferta="+param_id;
                            else
                                alert("tranquilo, no hemos eliminado nada.");
                        }
                    </script>   <!-- aqui TERMINA javascript -->

            






        
         

       

