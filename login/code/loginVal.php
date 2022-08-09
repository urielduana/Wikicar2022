<?php

include("../../connection/queries.php");
error_reporting(0);

$id=$_GET['id'];

if(strlen($_POST['name']) >= 1 && strlen($_POST['email']) >=1 && strlen($_POST['password']) >=1){
    $name=$_POST['name'];
    $password=$_POST['password'];
    $email=$_POST['email'];
    $conexion = new BasicSelect("User_name,Password,Email","User","User_Name ='$name' and Password = '$password' and Email = '$email'");
    $resultado=$conexion->getBasicSelect();
    $filas=mysqli_num_rows($resultado);

    while($row = $resultado->fetch_assoc()) {
        $whateverString = $row['Email'];
     }

    if($filas){   
        echo $whateverString;

        //header("location:../../home.php");
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