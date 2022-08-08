<?php

include("../../connection/queries.php");

if(strlen($_POST['name']) >= 1 && strlen($_POST['email']) >=1 && strlen($_POST['password']) >=1){
    
    $name=$_POST['name'];
    $password=$_POST['password'];
    $email=$_POST['email'];
    $conexion = new BasicSelect("User_name,Password,Email","User","");

    $resultado=$conexion->getBasicSelect();
    $filas=mysqli_num_rows($resultado);

    if($filas){            
        header("location:../../home.php");
    }else{
    ?>
    <?php
    include("loginForm.php");
    ?>
    <h3 class="bad">Authentication failed</h3>
    <?php
    }
}else{
    ?>
    <?php
    include("login.php");
    ?>
    <h3 class="bad">Complete the data</h3>
    <?php
}
//cerrar conexion
$conexion->setClose($conexion->getConexion());
?>