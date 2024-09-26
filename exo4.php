<?php
$tab1 = [];

// Génération de 5 nombres aléatoires entre 0 et 99
for ($i = 0; $i < 5; $i++) {
    $tab1[] = rand(0, 99);
}

// Afficher le tableau
print_r($tab1);


// Fonction indiquant si doublon ou non
function aDesDoublons($tab1) {
    // Utiliser array_unique pour enlever les doublons, puis comparer les longueurs des tableaux
    if (count($tab1) != count(array_unique($tab1))) {
        return true; // Il y a des doublons
    }
    return false; // Pas de doublons
}

// Afficher si il y a des doublons
echo aDesDoublons($tab1) ? "Il y a des doublons (True) \n" : "Pas de doublons (False) \n";
?>