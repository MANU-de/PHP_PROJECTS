<?php
//Verbindung zur Datenbank aufbauen
//PHP Fehlermeldungen anzeigen
error_reporting(E_ALL);
ini_set('display errors', true);

//Zugangsdaten zur Datenbank
$DB_HOST = "localhost"; //Host-Adresse
$DB_NAME = "ms_user"; //Datenbankname
$DB_BENUTZER = "root"; //Benutzername
$DB_PASSWORT = ""; //Passwort

//Zeichenkodierung UTF-8 (utf8mb4) bei der Verbindung setzen
//Eine PDOException bei einem Fehler auslösen
$OPTION = [
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8mb4",
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
];

try {
    //Verbindung zur Datenbank aufbauen
    $db = new PDO ("mysql:host=" . $DB_HOST . ";dbname=" . $DB_NAME,
    $DB_BENUTZER, $DB_PASSWORT, $OPTION);
} 
catch(PDOException $e) {
    //Bei einer Fehlerhaften Verbindung eine Nachricht ausgeben
    exit("Verbindung fehlgeschlagen! " . $e->getMessage());
}

//var_dump; die();

$datei ='books.xml';
//Übersetzt eine XML_Datei in ein Object
$beitrag = simplexml_load_file($datei);
var_dump($beitrag); die();
//xpath-methode durchsucht die simple xmlKnoten nach Childelementen, die der Expression entsprechen

if($result = $beitrag->xpath('/bookstore/book//title')) {
    var_dump($result); die();
    foreach ($result as $value) {
        $title = (string)$result;
        $title = iconv(mb_detect_encoding($title, mb_detect_order(), true),
        "UTF-8", $title);

        echo "Titel: " . $value . "</br>";
    }
}
die();
?>

