<?php
//Exercice 12 : Compter les multiples d’un nombre
$limite = 50;
$multipleDe = 7;
$total = 0;

for ($i = 1; $i <= $limite; $i++) {
    if ($i % $multipleDe == 0) {
        $total++;
    }
}

// var_dump($total);
// var_dump($multipleDe);
// var_dump($limite);
echo "Il y a $total multiples de $multipleDe entre 1 et $limite.";

//Explications :
// % : donne le reste de la division. Si le reste est 0, c'est un multiple.
// La boucle teste chaque nombre de 1 à $limite et incrémente $compteur si c'est un multiple.