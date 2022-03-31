<?php
$navigation = [
    "kleine_webseite.php" => "Start",
    "service.php" => "Service",
    "impressum.php" => "Impressum"
];
echo "<ul>";
foreach ($navigation as $nav => $titel) {
    echo "<li><a href='$nav' class='titel'>$titel</a></li>\n";
}
echo "</ul>";
?>