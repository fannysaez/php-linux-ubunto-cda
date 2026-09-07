<?php
//Exercice 13 : Doubler les éléments d’un tableau

$nombres = [1, 3, 5, 7, 9];
$doubles = [];

foreach ($nombres as $nombre) {
    $doubles[] = $nombre * 2;
}
// var_dump($doubles);
print_r($doubles);

//Explications :
// $doubles = [] : tableau vide au départ.
// foreach parcourt chaque nombre du tableau $nombres.
// $doubles[] = ... : ajoute une nouvelle valeur à la fin du tableau $doubles.
// print_r() affiche la structure complète d'un tableau (clés + valeurs).