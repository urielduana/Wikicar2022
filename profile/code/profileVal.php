<?php

include("../../connection/queries.php");
session_start();
$idUser = $_SESSION['loggedUserId'];
$userName =     $_POST['username'];
$userLastName = $_POST['userlastname'];
$userPassword = $_POST['password'];
$userEmail =    $_POST['email'];
$userGender =   $_POST['gender'];

$username = new BasicUpdate("user", "User_name", $userName, "Id_user = $idUser");
$username->setClose($username);
$userlastname = new BasicUpdate("user", "User_lastname", $userLastName, "Id_user = $idUser");
$userlastname->setClose($userlastname);
$password = new BasicUpdate("user", "Password", $userPassword, "Id_user = $idUser");
$password->setClose($password);
$email = new BasicUpdate("user", "Email", $userEmail, "Id_user = $idUser");
$email->setClose($email);
$gender = new BasicUpdate("user", "gender", $userGender, "Id_user = $idUser");
$gender->setClose($gender);
    
?>