<?php
//recibimos los datos enviados desde el formulario

  $var_id             =$_POST["txt_id"];
  $var_titulo         =$_POST["txt_titulo"];
  $var_descripcion    =$_POST["txt_descripcion"];
  $var_horario        =$_POST["txt_horario"];
  $var_remuneracion   =$_POST["txt_remuneracion"];
  
  $var_empresa        =$_POST["select_empresa"];

  //verificamos si los datos llegan correctamente
  /*
   echo'<br>el DNI que llega es:' .$var_dni;
   echo'<br>el nombre que llega es:' .$var_nombres;
   echo'<br>el correo que llega es:' .$var_correo;
   echo'<br>el celular que llega es:' .$var_celular;
   echo'<br>el rol que llega es:' .$var_rol;
   */

   //nos conectamos a la base de datos

   include("../../config/config.php");
   $conexion=new mysqli(SERVIDOR,USUARIO,PASSWORD,BASE_DE_DATOS);


     //sentencia sql para insertar los datos recibidos en la tabla usuarios

   $sql="INSERT INTO oferta_laboral(id,titulo,descripcion,horario,remuneracion,id_empresa) 
   VALUES('$var_id','$var_titulo','$var_descripcion','$var_horario','$var_remuneracion','$var_empresa')";
     // echo $sql;

    mysqli_query($conexion,$sql);
    header('Location: index.php');

?>