<?php
//Exercice 18 : Jeu de dés (simulation)

$de1 = rand(1,6);
$de2 = rand(1,6);
$somme = $de1 + $de2;

echo "<pre>";
echo "Dé 1 : $de1\n";
echo "Dé 2 : $de2\n";
echo "Somme : $somme\n";
echo "<pre>";

if ($somme == 7 || $somme == 11) {
    echo "Gagné !";
} else {
    echo " Perdu !";
}

//Explications : 
// rand(1, 6) : simule un dé à 6 faces.
// || : opérateur logique OU (au moins une des conditions est vraie).
// Résultat aléatoire à chaque exécution.