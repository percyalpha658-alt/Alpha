<?php

$temp = $_GET['temp'] ?? 0;
$hum = $_GET['hum'] ?? 0;
$sol = $_GET['sol'] ?? 0;
$pompe = $_GET['pompe'] ?? 0;


// Tes informations CallMeBot
$phone = "243833374742";
$apikey = "3019872";


if($sol < 60)
{
    $message = "⚠️ Smart Agriculture\n";
    $message .= "Humidité sol : ".$sol."%\n";
    $message .= "Température : ".$temp."°C\n";
    $message .= "Pompe : ".$pompe;


    $url = "https://api.callmebot.com/whatsapp.php?phone="
    .$phone
    ."&text="
    .urlencode($message)
    ."&apikey="
    .$apikey;


    file_get_contents($url);
}


echo "ESP32 connecté";

?>
