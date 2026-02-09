<?php
// 1. Création du float
$data = 42.0;
echo $data . "<br>"; // Affiche 42 (PHP retire souvent le .0 à l'affichage)

// 2. Conversion en entier (int)
$int = (int)$data;
echo $int . "<br>"; // Affiche 42

// 3. Conversion en chaîne de caractères (string)
$str = (string)$int;
echo $str . "<br>"; // Affiche 42 (mais c'est maintenant du texte)
?>