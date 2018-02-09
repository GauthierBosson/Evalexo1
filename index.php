<?php
$presentation = array(
    "Prenom" => "Gauthier",
    "Nom" => "Bosson",
    "Code postal" => 27340,
    "Ville" => "Pont de l'Arche",
    "Email" => "bosson.gauthier27@gmail.com",
    "Date de naissance" => "1995-01-08"
);

foreach($presentation as $clé => $valeur) {
    echo $clé . " = " . $valeur . "<br>";
};