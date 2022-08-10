
<html lang="en">
<head>
    <link rel="stylesheet" href="../css/validaciones.css">
</head>
</html>
<?php
session_start();

include("../../connection/queries.php");

    $plate = trim($_POST['plate']);
    $color = trim($_POST['color']);
    $mileage = trim($_POST['mileage']);
    $deficiency = trim($_POST['deficiency']);
    $model = trim($_POST['model']);
    $idUser = $_SESSION['loggedUserId'];

    $brandInsert = new BasicInsert("null,'$plate','$color','$deficiency','$mileage','$idUser', '$model'", "car", "Id_car, Registration_plate, Color, Deficiency, Mileage, User_id, Model_id");
    $brandInsert->setClose($brandInsert);

    header("location:/wikicar/profile/code/garageCheck.php");
    
?>


