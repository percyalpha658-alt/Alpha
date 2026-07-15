<?php

// Récupération des données envoyées par ESP32
$temp = $_GET['temp'] ?? 0;
$hum  = $_GET['hum'] ?? 0;
$sol  = $_GET['sol'] ?? 0;
$pompe = $_GET['pompe'] ?? 0;

// Affichage de test
echo "ESP32 connecté\n";
echo "Temperature : ".$temp." °C\n";
echo "Humidite air : ".$hum." %\n";
echo "Humidite sol : ".$sol." %\n";
echo "Pompe : ".$pompe."\n";

?>
