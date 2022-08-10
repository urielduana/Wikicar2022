
<html lang="en">
<head>
    <link rel="stylesheet" href="../css/validaciones.css">
</head>
</html>
<?php
session_start();

include("../../connection/queries.php");

    $post = trim($_POST['post']);
    $section = trim($_POST['section']);
    $idUser = $_SESSION['loggedUserId'];

    $brandInsert = new BasicInsert("null, NOW(),'$post','$section','$idUser'", "post", "Id_post, Post_date, Post_text, Section_id, User_id");
    $brandInsert->setClose($brandInsert);

    header("location:/wikicar/post/code/postCheck.php");
    
?>


