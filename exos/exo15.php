<?php
//Exercice 15 : Trouver le plus petit nombre dans un tableau

$valeurs = [8, 3, 5, 1, 9];
$plusPetit = $valeurs[0];

foreach ( $valeurs as $valeur) {
    if ( $valeur < $plusPetit) {
         $plusPetit = $valeur;
    }
}

// var_dump($plusPetit);
echo "Le plus petit nombre est : $plusPetit";

//Explications :
// $plusPetit = $valeurs[0] : on part du premier élément comme référence.
// La boucle compare chaque valeur, et remplace $plusPetit si elle trouve plus petit.