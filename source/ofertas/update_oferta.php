<?php
   //recibimos los posibles nuevos datos
   $var_id                  =$_POST["txt_id"];
   $var_titulo              =$_POST["txt_titulo"];
   $var_descripcion         =$_POST["txt_descripcion"];
   $var_horario             =$_POST["txt_horario"];
   $var_remuneracion        =$_POST["txt_remuneracion"];

   //tambien recibimos los datos del usuario
   $var_id = $_POST["id_oferta"];

   include("../../config/config.php");
   $conexion=new mysqli(SERVIDOR,USUARIO,PASSWORD,BASE_DE_DATOS);

   $sql="
        UPDATE  oferta_laboral SET
     
        titulo             ='$var_titulo',
        descripcion        ='$var_descripcion',
        horario            ='$var_horario',
        remuneracion       ='$var_remuneracion'

        WHERE id='$var_id'
    
        ";
        mysqli_query($conexion,$sql);
        header('Location: index.php'); //redireccionamos =index.php

