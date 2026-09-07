<?php
//Exercice 14 : Recherche dans un tableau
$nombres = [10, 42, 5, 8, 42, 19];
$recherche = 42;

if (in_array($recherche, $nombres)) {
    $positions = array_keys($nombres, $recherche);
    // var_dump($positions);
    echo "$recherche trouvé à la /les position(s): " . implode(",", $positions);
} else {
    echo "$recherche n'est pas présent dans le tableau";
}

//**Fonctions utiles** : 
//`in_array()`, `array_keys()`, `array_search()`

//Explications : 
// in_array() : vérifie si la valeur existe.
// array_keys($nombres, $recherche) : renvoie toutes les positions où elle apparaît.
// implode(", ", $positions) : transforme le tableau de positions en texte lisible.