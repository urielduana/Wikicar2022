<html lang="en">
<head>
    <link rel="stylesheet" href="../css/validaciones.css">
</head>
</html>
<?php

include("../../connection/queries.php");


$conexion = new Conexion("localhost:3306","wikicar","root","");

if(strlen($_POST['name']) >= 1 && strlen($_POST['last']) >=1 && strlen($_POST['email']) >=1 && strlen($_POST['password']) >=1 && strlen($_POST['gender']) >=1){
    $name = trim($_POST['name']);
    $last = trim($_POST['last']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $gender = trim($_POST['gender']);

<<<<<<< HEAD
    $conexion = new BasicProcedure("createAccount", "'$name','$last','$password','$email','$gender'", "@exit");
    $resultado = $conexion->getProcedureOutput();

=======
    
    $connection = new BasicProcedure("createAccount", "'$name','$last','$password','$email','$gender',@out");
    $result = $connection->getProcedure();

    $consulta = "insert into user( User_name,User_lastname,Password,Email,Gender,Permission) VALUES ('".$name."','".$last."','".$password."','".$email."','".$gender."','N')";
    $resultado = mysqli_query($conexion->getConexion(),$consulta);
>>>>>>> a9e022a (vistas creadas)
    if($resultado){
        ?>
        <?php
        include("loginForm.php");
        ?>
        <h3 class="ok">Registration completed, enjoy your account</h3>
        <?php
    }else{
        ?>
        <?php
        include("registrationForm.php");
        ?>
         <?php
        include("registrationForm.php");
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
