<?php
$tab1 = [];

// Génération de 5 nombres aléatoires entre 0 et 99
for ($i = 0; $i < 5; $i++) {
    $tab1[] = rand(0, 99);
}

// Afficher le tableau
print_r($tab1);
