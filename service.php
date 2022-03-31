<?php
include "navigation.php";
?>

<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service</title>
    <link rel="stylesheet" href="layout.css">
</head>

<body class="Serviceseite">
<h1>Service</h1>
<p>Das höchste Gut und Übel" Cicero
    Absatz 1.10.32 - 1.10.33
    </p>
    <p>
    Damit Ihr indess erkennt, woher dieser ganze Irrthum gekommen ist,
    und weshalb man die Lust anklagt und den Schmerz lobet,
    so will ich Euch Alles eröffnen und auseinander setzen,
    was jener Begründer der Wahrheit und gleichsam Baumeister des glücklichen Lebens selbst darüber gesagt hat.
    Niemand, sagt er, verschmähe, oder hasse, oder fliehe die Lust als solche,
    sondern weil grosse Schmerzen ihr folgen, wenn man nicht mit Vernunft ihr nachzugehen verstehe.
    Ebenso werde der Schmerz als solcher von Niemand geliebt, gesucht und verlangt,
    sondern weil mitunter solche Zeiten eintreten,
    dass man mittelst Arbeiten und Schmerzen eine grosse Lust sich zu verschaften suchen müsse.
    Um hier gleich bei dem Einfachsten stehen zu bleiben,
    so würde Niemand von uns anstrengende körperliche Übungen vornehmen,
    wenn er nicht einen Vortheil davon erwartete. Wer dürfte aber wohl Den tadeln, der nach einer Lust verlangt,
    welcher keine Unannehmlichkeit folgt, oder der einem Schmerze ausweicht, aus dem keine Lust hervorgeht?</p>
</body>
<br><br>
<?php
echo "<select name='alter'>\n";
for($min = 1, $max = 10; $min < 70; $min += 10, $max += 10) {
    echo "<option>$min - $max</option>\n";
}
echo "</select>\n";
?>

<hr>
<footer>
    <?php
    include "copyright.php";
    ?>
</footer>
</html>
