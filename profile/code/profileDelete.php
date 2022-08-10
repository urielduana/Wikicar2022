<?php
    include("../../connection/queries.php");
    session_start();
    $idUser = $_SESSION['loggedUserId'];
    $conexion = new BasicDelete("User","Id_user=",$idUser);
    $resultado=$conexion->getBasicDelete();

    if($resultado){
        Header("Location: ../../index.php");
    }

?>