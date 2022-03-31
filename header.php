<?php
ini_set('display_errors', '0');
date_default_timezone_set("Europa/Berlin");
$uhrzeit= date("H:i:s d.m.Y");


if($uhrzeit > 5 || $uhrzeit < 10) {
    $farbe = "orange";
    $gruss = "Gute Morgen";
}
  elseif ($uhrzeit > 10 || $uhrzeit < 18) {
    $farbe = "white";
    $gruss = "Guten Tag";
}
  elseif ($uhrzeit > 18 || $uhrzeit < 20) {
    $farbe = "white";
    $gruss = "Guten Abend";
}
else {
    $farbe = "blue";
    $gruss = "Guten Nacht";
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width", initial-scale="1.0">
    <style>
        body{
            background-color: <?php echo $farbe; ?>
        }

    </style>
</head>
<body>
<?php
echo $uhrzeit;
echo "<br>" .$gruss;
?>
</body>

</html>
