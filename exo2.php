<?php
$tab1 = [];

// Génération de 5 nombres aléatoires entre 0 et 99
for ($i = 0; $i < 5; $i++) {
    $tab1[] = rand(0, 99);
}

// Afficher le tableau
print_r($tab1);


// Trouver le plus grand et le plus petit nombre
$max = max($tab1);
$min = min($tab1);

// Afficher le plus grand et le plus petit nombre
echo "Le plus grand nombre est : " . $max . "\n";
echo "Le plus petit nombre est : " . $min . "\n";
?>