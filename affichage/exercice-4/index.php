<?php
    $users = [
        [
            "firstName" => "Bugs",
            "lastName" => "Bunny",
            "age" => 29
        ],
        [
            "firstName" => "Roger",
            "lastName" => "Rabbit",
            "age" => 17
        ]
    ];
?>
<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 4</title>
    </head>
    <body>
        <h1>Liste des utilisateurs</h1>
        <ul>
            <?php foreach ($users as $user): ?>
                <li>
                    <?php 
                        echo $user["firstName"] . " " . $user["lastName"]; 
                        
                        // Ajout de la condition pour l'âge
                        if ($user["age"] >= 18) {
                            echo " (Majeur)";
                        } else {
                            echo " (Mineur)";
                        }
                    ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </body>
</html>

<!-- 
Je pourrais aussi utiliser une condition ternaire pour rendre le code plus court à l'intérieur du <li> :
<li>
    <?= $user["firstName"] ?> <?= $user["lastName"] ?> 
    - <?= ($user["age"] >= 18) ? "Majeur" : "Mineur" ?>
</li> 
-->