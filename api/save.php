<?php

$temp = $_GET['temp'] ?? 0;
$hum = $_GET['hum'] ?? 0;
$sol = $_GET['sol'] ?? 0;
$pompe = $_GET['pompe'] ?? 0;


// Configuration WhatsApp
$phone = "243833374742";
$apikey = "3019872";


// Fonction envoi WhatsApp
function envoyerWhatsApp($message, $phone, $apikey)
{
    $url = "https://api.callmebot.com/whatsapp.php?phone="
    .$phone."&text=".urlencode($message)
    ."&apikey=".$apikey;

    file_get_contents($url);
}


// Alerte si sol sec
if($sol < 60)
{
    $message = "⚠️ Smart Agriculture\n";
    $message .= "Humidite du sol faible : ".$sol."%\n";
    $message .= "Pompe : ".$pompe;

    envoyerWhatsApp($message, $phone, $apikey);
}


// Réponse serveur
echo "ESP32 connecté\n";
echo "Temperature : ".$temp." °C\n";
echo "Humidite air : ".$hum." %\n";
echo "Humidite sol : ".$sol." %\n";
echo "Pompe : ".$pompe;

?>
