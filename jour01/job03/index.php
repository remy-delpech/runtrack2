<?php
    // Création de variables de différents types primitifs
    $boolVariable = true;  // Variable de type booléen
    $intVariable = 42;  // Variable de type entier
    $strVariable = "LaPlateforme";  // Variable de type chaîne de caractères
    $floatVariable = 3.14;  // Variable de type nombre à virgule flottante

    // Création d'un tableau pour stocker les informations sur les variables
    $variables = [
        ['Type' => gettype($boolVariable), 'Nom' => 'boolVariable', 'Valeur' => $boolVariable],
        ['Type' => gettype($intVariable), 'Nom' => 'intVariable', 'Valeur' => $intVariable],
        ['Type' => gettype($strVariable), 'Nom' => 'strVariable', 'Valeur' => $strVariable],
        ['Type' => gettype($floatVariable), 'Nom' => 'floatVariable', 'Valeur' => $floatVariable]
    ];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tableau des variables</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Type</th>
                <th>Nom</th>
                <th>Valeur</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($variables as $variable) : ?>
            <tr>
                <td><?php echo $variable['Type']; ?></td>
                <td><?php echo $variable['Nom']; ?></td>
                <td><?php echo $variable['Valeur']; ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>