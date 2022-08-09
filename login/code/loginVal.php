<?php

include("../../connection/queries.php");
error_reporting(0);

$id=$_GET['id'];

if(strlen($_POST['name']) >= 1 && strlen($_POST['email']) >=1 && strlen($_POST['password']) >=1){
    //Obtener valores del formulario
    $name=$_POST['name'];
    $password=$_POST['password'];
    $email=$_POST['email'];
    
    //Realizar conexion BD
    $conexion = new BasicSelect("User_name,Password,Email, Id_user","User","User_Name ='$name' and Password = '$password' and Email = '$email'");
    $resultado=$conexion->getBasicSelect();
    $filas=mysqli_num_rows($resultado);

    //Convertir en string la consulta
    while($row = $resultado->fetch_assoc()) {
        $userId = $row['Id_user'];
     }

    
    //Comprobar el inicio de sesion
    if($filas){   
        session_start();
        $_SESSION['loggedUserId']=$userId;
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
    include("loginForm.php");
    ?>
    <h3 class="bad">Complete the data </h3>
    <?php
}
//cerrar conexion
?>