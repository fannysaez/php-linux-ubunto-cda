<?php
//Exercice 7 : Table de multiplication

$nombre = 3; // Le nombre dont je veux dans ma table (déclare, la variable)

for ($i = 1; $i <= 10; $i++) {
    echo "<pre>";
    echo $nombre . "x" . $i . "=" . $nombre * $i . "\n";
    echo "<pre>";
    }

// La boucle for parcourt $i de 1 à 10.
// À chaque tour, on affiche $nombre x $i = résultat.
// le produit avant de le concaténer avec ..