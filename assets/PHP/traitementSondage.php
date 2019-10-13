<?php

require 'ConnectionBDD.php'; //Connection à la base de données.

$connaissanceRecu = (isset($_GET["variable4"])) ? $_GET["variable4"] : NULL;
$niveauRecu = (isset($_GET["variable5"])) ? $_GET["variable5"] : NULL;
$navigationRecu = (isset($_GET["variable6"])) ? $_GET["variable6"] : NULL;

//var_dump ($variable4);

$sondage = $pdo->prepare("INSERT INTO sondage(Connaissance, Niveau, Navigation) VALUES('".$connaissanceRecu."', '".$niveauRecu."', '".$navigationRecu."')");
$sondage->execute();

echo "Sondage envoyé avec succes. Merci";

?>