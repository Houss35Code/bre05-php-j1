<?php
// Tableau des étudiants
$students = [
    [
        "firstName" => "Hannah",
        "lastName" => "Fields",
        "grades" => [12, 11, 15],
        "average" => -1
    ],
    [
        "firstName" => "Richard",
        "lastName" => "Stein",
        "grades" => [18, 12, 13],
        "average" => -1
    ],
    [
        "firstName" => "Mark",
        "lastName" => "Hartoff",
        "grades" => [9, 11, 10],
        "average" => -1
    ],
    [
        "firstName" => "Charlie",
        "lastName" => "Nestle",
        "grades" => [9, 8, 5],
        "average" => -1
    ],
    [
        "firstName" => "Suzy",
        "lastName" => "Brent",
        "grades" => [18, 15, 16],
        "average" => -1
    ]
];

// ÉTAPE 3 : Fonction pour calculer la moyenne
function computeAverage(array $grades): float {
    // Calculer la somme des notes
    $sum = array_sum($grades);
    
    // Calculer la moyenne
    $average = $sum / count($grades);
    
    // Arrondir à 2 décimales
    return round($average, 2);
}

// ÉTAPE 4 : Fonction pour déterminer la classe CSS selon la moyenne
function getClassByAverage(float $average): string {
    if ($average < 10) {
        return "red";
    } elseif ($average >= 10 && $average <= 13) {
        return "orange";
    } else {
        return "green";
    }
}
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bulletin de notes</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Bulletin de notes</h1>
        <h2>Liste des étudiants</h2>
        
        <ul id="students">
            <?php
            // ÉTAPE 1, 2, 3, 4 : Parcourir tous les étudiants
            foreach ($students as $student) {
                // Calculer la moyenne de l'étudiant
                $average = computeAverage($student["grades"]);
                
                // Déterminer la classe CSS
                $cssClass = getClassByAverage($average);
                
                // Afficher les informations de l'étudiant
                ?>
                <li>
                    <article class="<?php echo $cssClass; ?>">
                        <header>
                            <!-- ÉTAPE 1 : Afficher nom et prénom -->
                            <h1><?php echo $student["firstName"] . " " . $student["lastName"]; ?></h1>
                        </header>
                        
                        <section>
                            <h2>Notes :</h2>
                            <ul>
                                <?php
                                // ÉTAPE 2 : Afficher les notes
                                foreach ($student["grades"] as $grade) {
                                    echo "<li>$grade / 20</li>";
                                }
                                ?>
                            </ul>
                        </section>
                        
                        <footer>
                            <!-- ÉTAPE 3 : Afficher la moyenne calculée -->
                            <h3>Moyenne : <?php echo $average; ?> / 20</h3>
                        </footer>
                    </article>
                </li>
                <?php
            }
            ?>
        </ul>
    </div>
</body>
</html>