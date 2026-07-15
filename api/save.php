<?php

include("../db.php");

// Récupération des données
$temp   = $_GET['temp'] ?? 0;
$hum    = $_GET['hum'] ?? 0;
$sol    = $_GET['sol'] ?? 0;
$pompe  = $_GET['pompe'] ?? 0;
$lcd    = $_GET['lcd'] ?? 0;

// Enregistrement dans la base
$sql = "INSERT INTO data
(temperature_air, humidite_air, humidite_sol, pompe, lcd)
VALUES
('$temp','$hum','$sol','$pompe','$lcd')";

if(mysqli_query($conn,$sql)){
    echo "Données enregistrées avec succès.<br>";
}else{
    echo "Erreur : ".mysqli_error($conn);
}

// Alerte WhatsApp si le sol est sec
if($sol < 60){

    $message  = "⚠️ Smart Agriculture\n";
    $message .= "Humidité du sol : ".$sol."%\n";
    $message .= "Humidité de l'air : ".$hum."%\n";
    $message .= "Température : ".$temp."°C\n";
    $message .= "Pompe : ".$pompe;

    $phone = "243833374742";
    $apikey = "3019872";

    $url = "https://api.callmebot.com/whatsapp.php?phone=".$phone.
           "&text=".urlencode($message).
           "&apikey=".$apikey;

    file_get_contents($url);
}

mysqli_close($conn);

?>
