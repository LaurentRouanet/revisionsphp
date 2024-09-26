<?php
$tab1 = [];

// Génération de 5 nombres aléatoires entre 0 et 99
for ($i = 0; $i < 5; $i++) {
    $tab1[] = rand(0, 99);
}

// Afficher le tableau
print_r($tab1);


// Trouver le plus grand et le plus petit nombre
function plusGrand($tab1)
    {
        return max($tab1);
    }

function plusPetit($tab1)
    {
        return min($tab1);
    }
// Afficher le plus grand et le plus petit nombre
echo "Le plus grand nombre est : " . plusGrand($tab1) . "\n";
echo "Le plus petit nombre est : " . plusPetit($tab1) . "\n";
?>