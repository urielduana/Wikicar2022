<html lang="en">
<head>
    <link rel="stylesheet" href="../css/validaciones.css">
</head>
</html>
<?php

include("../../connection/queries.php");


if(strlen($_POST['name']) >= 1 && strlen($_POST['last']) >=1 && strlen($_POST['email']) >=1 && strlen($_POST['password']) >=1 && strlen($_POST['gender']) >=1){
    $name = trim($_POST['name']);
    $last = trim($_POST['last']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $gender = trim($_POST['gender']);

    $conexion = new BasicProcedure("createAccount","$name,$last,$email,$password,$gender,@exit");

    $consulta = "insert into user( User_name,User_lastname,Password,Email,Gender) VALUES ('".$name."','".$last."','".$password."','".$email."','".$gender."')";
    $resultado = mysqli_query($conexion->getConexion());
    if($resultado){
        ?>
        <?php
        include("login.php");
        ?>
        <h3 class="ok">Registration completed, enjoy your account</h3>
        <?php
    }else{
        ?>
        <?php
        include("createaccount.php");
        ?>
         <?php
        include("createaccount.php");
        ?>
        <h3 class="bad">An error has occurred</h3>
        <?php
    }
}else{
    ?>
    <?php
    include("createaccount.php");
    ?>
    <h3 class="bad">Complete the data</h3>
    <?php
}

$conexion->setClose($conexion->getConexion());