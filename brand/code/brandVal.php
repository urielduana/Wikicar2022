<html lang="en">
<head>
    <link rel="stylesheet" href="../css/validaciones.css">
</head>
</html>
<?php

include("../../connection/queries.php");

    $brand = trim($_POST['brand']);
    $founders = trim($_POST['founders']);
    $date = trim($_POST['date']);
    $country = trim($_POST['country']);
    $history = trim($_POST['history']);

    $brandInsert = new BasicInsert("'$brand','$founders','$date','$history','1','$country'", "brand", "Brand_name,Founders,Foundation_date,Brand_history,Object_id,Country_id");
    $brandInsert->setClose($brandInsert);

    header("location:/wikicar/home.php");
    
?>


