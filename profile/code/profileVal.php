<?php

include("../../connection/queries.php");
session_start();
$idUser = $_SESSION['loggedUserId'];
$userName =     $_POST['username'];
$userLastName = $_POST['userlastname'];
$userPassword = $_POST['password'];
$userEmail =    $_POST['email'];
$userGender =   $_POST['gender'];

if($userGender != null){
    $gender = new BasicUpdate("user", "gender", $userGender, "Id_user = $idUser");
    $gender->setClose($gender);
}
if($userName != null){
    $username = new BasicUpdate("user", "User_name", $userName, "Id_user = $idUser");
    $username->setClose($username);
}
if($userLastName != null){
    $userlastname = new BasicUpdate("user", "User_lastname", $userLastName, "Id_user = $idUser");
    $userlastname->setClose($userlastname);
}
if($userPassword != null){
    $password = new BasicUpdate("user", "Password", $userPassword, "Id_user = $idUser");
    $password->setClose($password);
}
if($userEmail != null){
    $email = new BasicUpdate("user", "Email", $userEmail, "Id_user = $idUser");
    $email->setClose($email);
}





header("location:/wikicar/profile/code/profileCheck.php");
?>