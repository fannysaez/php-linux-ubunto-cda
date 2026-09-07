<?php
//Exercice 11 : Factorielle

$n = 5;
$result = 1;

for ($i = 1; $i <= $n; $i++) {
    $result = $result * $i;
}

echo "La factorielle de $n est : $result";

//Explications :
// $result = 1 : accumulateur initialisé à 1 (pas 0, car on multiplie).
// La boucle multiplie $result par chaque entier de 1 à $n.