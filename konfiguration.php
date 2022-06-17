<?php
// die Konstanten auslagern in eigene Datei
// die dann per require_once ('konfiguration.php'); 
// geladen wird.

// Damit alle Fehler angezeigt werden
error_reporting(E_ALL);

// Zum Aufbau der Verbindung zur Datenbank
// die Daten erhalten Sie von Ihrem Provider
/// CONNECT TO DATABASE
$hostname="localhost"; //// specify host, i.e. 'localhost'
$user="root"; //// specify username
$pass=""; //// specify password
$dbase="crnerp_v04"; //// specify database name
?>
