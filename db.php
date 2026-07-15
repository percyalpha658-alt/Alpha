<?php
$host = "sql107.infinityfree.com";
$user = "if0_42331218";
$pass = "gxYL2fLF6TgreC";
$db   = "if0_42331218_iot_db";

$conn = mysqli_connect($host, $user, $pass, $db);

if(!$conn){
    die("Erreur connexion DB : " . mysqli_connect_error());
}
?>
