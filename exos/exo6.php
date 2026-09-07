<?php
//Exercice 6 : Boucle `while` et somme

$n = 5;
$somme = 0;
$i = 1;

while ($i <= $n) {
    $somme = $somme + $i;
    $i++;
}
echo $somme;

//Explications : 
// $somme = 0 : variable d'accumulation, initialisée à 0 avant la boucle.
// $i = 1 : compteur qui va parcourir les nombres de 1 à $n.
// while (condition) : tant que la condition est vraie, le bloc s'exécute.
// À chaque tour : on ajoute $i à $somme, puis on incrémente $i de 1.
// La boucle s'arrête dès que $i > $n.
//