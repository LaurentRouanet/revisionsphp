<?php
$tab1 = [];

// Génération de 5 nombres aléatoires entre 0 et 99
for ($i = 0; $i < 5; $i++) {
    $tab1[] = rand(0, 99);
}

// Afficher le tableau
print_r($tab1);


// Fonction indiquant si trié par ordre croissant 
function OrdreCroissant($tab1) {
    // Utiliser array_unique pour enlever les doublons, puis comparer les longueurs des tableaux
    if (count($tab1) != count(array_unique($tab1))) {
        return true; // Il y a des doublons
    }
    return false; // Pas de doublons
}

// Afficher si il y a des doublons
echo OrdreCroissant($tab1) ? "Est trié par ordre croissant (True) \n" : "N'est pas trié par ordre croissant (False)\n";
?>