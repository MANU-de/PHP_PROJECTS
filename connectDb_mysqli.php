<?php

//mysqli
$mysqli = new mysqli('localhost', 'root', '', '' );

if($mysqli->connect_error) {
    die("Fehler bei der Datenbankverbindung: " .mysqli_connect_error());

}
$mysqli = new mysqli('localhost', 'root', '', '' );

if($mysqli->connect_error) {
    echo "Fehler bei der Datenbankverbindung: " .mysqli_connect_error();
    exit();
}

if(!$mysqli->set_charset('utf8mb4')){
    echo "Fehler beim Zeichensatz" .$mysqli->error;
}
echo "Verbindung hergestellt";
$mysqli->close();
?>
