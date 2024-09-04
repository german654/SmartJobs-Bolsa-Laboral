<?php
    //RECIBIMOS EL ID DEL USUARIO A ELIMINAR
    $id_oferta=$_REQUEST['id_oferta'];

    //NOS CONECTAMOS A LA BASE DE DATOS 
    include("../../config/config.php");
    $conexion=new mysqli(SERVIDOR,USUARIO,PASSWORD,BASE_DE_DATOS);

    $sql="DELETE FROM oferta_laboral WHERE id='$id_oferta'";

    mysqli_query($conexion,$sql);

    //echo "Registro eliminado correctamente.";

    header("Location: index.php"); //Redirecciona automaticamente
