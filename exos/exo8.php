<?php
//Exercice 8 : Trouver le plus grand
$a = 14;
$b = 22;
$c = 6;

if ($a >= $b && $a >= $c) {
    echo "Le plus grand est : " . $a;
} else if ($b >= $a && $b >= $c) {
    echo "Le plus grand est : " . $b;
} else {
    echo "Le plus grand est : " . $c;
}


// && est l'opérateur logique ET : les deux conditions doivent être vraies en même temps.
// On teste chaque variable pour voir si elle est supérieure ou égale aux deux autres.
// >= (supérieur ou égal) permet de gérer correctement les cas d'égalité (ex: si deux valeurs sont identiques et les plus grandes).

// Deuxième solutions :
// echo "Le plus grand est : " . max($a, $b, $c);
