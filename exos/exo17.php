<?php
//Exercice 17 : Deviner une lettre dans un mot

$mot = 'ordinateur';
$lettre = 'r';

$mot = strtolower($mot);
$lettre = strtolower($lettre);
$positions = [];

for ($i = 0; $i < strlen($mot); $i++) {
    if (substr($mot, $i, 1) == $lettre) {
        $positions[] = $i;
    }
}

if (count($positions) > 0) {
    echo "'$lettre' trouvée à la/les position(s) : " . implode(", ", $positions);
} else {
    
echo "'$lettre' n'est pas présente dans le mot";
}
//**Fonctions utiles** : 
//`strlen()`, `substr()`, boucle `for`, `strtolower()`

//Explications :
// strlen($mot) : longueur du mot.
// substr($mot, $i, 1) : extrait 1 caractère à la position $i.
// Boucle for : parcourt chaque position du mot.
// $positions[] : stocke les positions où la lettre correspond.