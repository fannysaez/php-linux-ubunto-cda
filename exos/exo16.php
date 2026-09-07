<?php
//Exercice 16 : Jeu du nombre mystère automatisé avec tirages aléatoires

$mysteres = [38, 72, 15];

foreach ($mysteres as $mystere) {
    $essais = 0;
    $proposition = 0;

    while ($proposition != $mystere) {
        $proposition = rand(1, 100);
        $essais++;
    }
    // var_dump($essais);
    echo "<pre>";
    echo "Nombre mystère $mystere trouvé en $essais essai(s)\n";
    echo "<pre>";
}

//Explications :
// Boucle imbriquée : while à l'intérieur d'un foreach.
// rand() : génération de nombres aléatoires.
// Compteur : mesurer un nombre d'essais jusqu'à un résultat.
// Simulation par force brute : deviner un nombre par tirages aléatoires successifs, sans logique de "plus grand/plus petit".