<?php
session_start();
$users=array(
    "daviddsuza"=>54321,
    "ravindraR"=>98765,
    "adelAli"=>13269
);

$user=$_SESSION["user"];
$pass=$_SESSION["pass"];
$list_of_users=array_keys($users);
if(!in_array($user,$list_of_users) || $pass!=$users[$user])
    header("Location: login.php");
?>