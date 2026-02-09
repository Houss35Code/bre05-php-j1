<?php
$numbers = [28, 32, 44, -67, 18, 24, -98];

foreach ($numbers as $number) {
    // On vérifie si le nombre est inférieur à 0
    if ($number < 0) {
        echo $number . "<br>";
    }
}
?>