<?php

// Récupération des données envoyées par ESP32

$temp  = $_GET['temp'] ?? 0;
$hum   = $_GET['hum'] ?? 0;
$sol   = $_GET['sol'] ?? 0;
$pompe = $_GET['pompe'] ?? 0;
$date  = $_GET['date'] ?? "inconnue";
$heure = $_GET['heure'] ?? "inconnue";


// Alerte si humidité du sol < 60%

if($sol < 60){

    $message = "⚠️ IRRIGATION AUTOMATIQUE \n\n";
    $message .= "🌱 Humidité sol : ".$sol."%\n";
    $message .= "💧 Humidité air : ".$hum."%\n";
    $message .= "🌡️ Température : ".$temp."°C\n\n";

    if($pompe == 1){
        $message .= "🚰 Pompe : ON\n";
    }else{
        $message .= "🚰 Pompe : OFF\n";
    }

    $message .= "📅 Date : ".$date."\n";
    $message .= "⏰ Heure : ".$heure;


    // CallMeBot

    $phone = "243833374742";
    $apikey = "3019872";


    $url = "https://api.callmebot.com/whatsapp.php?phone="
    .$phone.
    "&text=".urlencode($message).
    "&apikey=".$apikey;


    file_get_contents($url);
}


// Réponse serveur

echo "OK\n";
echo "Temperature : ".$temp." C\n";
echo "Humidite air : ".$hum." %\n";
echo "Humidite sol : ".$sol." %\n";
echo "Pompe : ".$pompe."\n";
echo "Date : ".$date."\n";
echo "Heure : ".$heure;

?>
