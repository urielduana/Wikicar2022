<html lang="en">
<head>
    <link rel="stylesheet" href="../css/validaciones.css">
</head>
</html>
<?php

include("../../connection/queries.php");

    $model = trim($_POST['model']);
    $type = trim($_POST['type']);
    $door = trim($_POST['door']);
    $seats = trim($_POST['seats']);
    $capacity = trim($_POST['capacity']);
    $type = trim($_POST['type']);
    $year = trim($_POST['year']);
    $start = trim($_POST['start']);
    $actual = trim($_POST['actual']);
    $configuration = trim($_POST['configuration']);
    $brand = trim($_POST['brand']);


    $modelInsert = new BasicInsert("null,'$model','$type','$door','$seats','$capacity', '$type','$year', '$start', '$actual', '$configuration', '$brand'", 
    "model", "Id_model, Model_name, Model_type, Doors, Seats, GasTank_capacity, Gas_type, Model_year, Starting_price, Actual_price, Configuration, Brand_id");
    $modelInsert->setClose($brandInsert);

    header("location:/wikicar/model/code/modelCheck.php");
    
?>


