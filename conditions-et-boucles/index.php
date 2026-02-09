<?php
$users = [
    [
        "firstName" => "Hugues",
        "lastName" => "Froger"
    ],
    [
        "firstName" => "Mari",
        "lastName" => "Doucet"
    ]
];

// 1. Première boucle pour parcourir la liste des utilisateurs
foreach ($users as $user) {
    // 2. On accède directement aux clés de chaque "sous-tableau" $user
    echo $user["firstName"] . " " . $user["lastName"] . "<br>";
}
?>