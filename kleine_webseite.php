<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kleine Webseite</title>
    <link rel="stylesheet" href="layout.css">
    
</head>
<body class="Startseite">
    <h1>Startseite</h1>
<?php
include "navigation.php";
include "header.php";
$bilder = [

    ["pfad" => "saint-isaac-cathedral-g7ff670341_1920.jpg",
        "alt" => "cathedral",
        "titel" => "Saint-isaac-cathedral"],

    ["pfad" => "traffic-g0e32c32fc_1920.jpg",
        "alt" => "traffic",
        "titel" => "Traffic"],

    ["pfad" => "tulip-gbbb2be3a5_1920.jpg",
        "alt" => "tulip",
        "titel" => "Tulip"],
];

$zufallszahl = array_rand($bilder);
echo "<img src = '{$bilder[$zufallszahl]['pfad']}'
       width ='250'
       height ='300'
       alt = '{$bilder[$zufallszahl]['alt']}'
       titel = '{$bilder[$zufallszahl]['titel']}'><br>\n";
       echo "<br>";
       echo "<br>";
       echo "<hr>";
       ?>

       <button id = "color">Farbwechsel</button>
       <script>
           document.getElementById('color').onclick = changeColor;

           var currentColor = "black";
           function changeColor(){
                   if(currentColor == "black") {
                       document.body.style.color = "green";
                       currentColor = "green";
                    } else {
                        document.body.style.color = "black";
                       currentColor = "black";
                    }
                 return currentColor;
           }
           

           
       </script>

</body>
<footer>
    <?php
    include "copyright.php";
    ?>
</footer>
</html>