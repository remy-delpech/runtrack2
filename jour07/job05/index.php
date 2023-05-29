<?php 
session_start();

// Initialiser le jeu si la variable de session n'existe pas
if (!isset($_SESSION["morpion"])) {
    $_SESSION["morpion"] = array(
        array("-", "-", "-"),
        array("-", "-", "-"),
        array("-", "-", "-")
    );
    $_SESSION["joueur"] = "X";
}

// Fonction pour afficher le message de victoire et réinitialiser le jeu
function afficherVictoire($joueur) {
    echo "<h3>" . $joueur . " a gagné !</h3>";
    echo '<form method="POST" action=""><input type="submit" name="reinitialiser" value="Réinitialiser la partie"></form>';
    $_SESSION["morpion"] = array(
        array("-", "-", "-"),
        array("-", "-", "-"),
        array("-", "-", "-")
    );
    $_SESSION["joueur"] = "X";
}

// Fonction pour vérifier si un joueur a gagné
function verifierVictoire($joueur) {
    $morpion = $_SESSION["morpion"];

    // Vérifier les lignes
    for ($i = 0; $i < 3; $i++) {
        if ($morpion[$i][0] == $joueur && $morpion[$i][1] == $joueur && $morpion[$i][2] == $joueur) {
            return true;
        }
    }

    // Vérifier les colonnes
    for ($j = 0; $j < 3; $j++) {
        if ($morpion[0][$j] == $joueur && $morpion[1][$j] == $joueur && $morpion[2][$j] == $joueur) {
            return true;
        }
    }

    // Vérifier les diagonales
    if (($morpion[0][0] == $joueur && $morpion[1][1] == $joueur && $morpion[2][2] == $joueur) || 
        ($morpion[0][2] == $joueur && $morpion[1][1] == $joueur && $morpion[2][0] == $joueur)) {
        return true;
    }

    return false;
}

// Vérifier si un bouton a été cliqué
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ligne = $_POST["ligne"];
    $colonne = $_POST["colonne"];

    // Mettre à jour la case avec le symbole du joueur actuel
    $_SESSION["morpion"][$ligne][$colonne] = $_SESSION["joueur"];

    // Vérifier si le joueur actuel a gagné
    if (verifierVictoire($_SESSION["joueur"])) {
        afficherVictoire($_SESSION["joueur"]);
        exit;
    }

    // Vérifier s'il y a un match nul
    $morpion = $_SESSION["morpion"];
    $casesRemplies = 0;
    foreach ($morpion as $ligne) {
        foreach ($ligne as $case) {
            if ($case != "-") {
                $casesRemplies++;
            }
        }
    }
    if ($casesRemplies == 9) {
        echo "<h3>Match nul !</h3>";
        echo '<form method="POST" action=""><input type="submit" name="reinitialiser" value="Réinitialiser la partie"></form>';
        $_SESSION["morpion"] = array(
            array("-", "-", "-"),
            array("-", "-", "-"),
            array("-", "-", "-")
        );
        $_SESSION["joueur"] = "X";
        exit;
    }

    // Passer au joueur suivant
    $_SESSION["joueur"] = ($_SESSION["joueur"] == "X") ? "O" : "X";
}

// Afficher la grille du morpion
$morpion = $_SESSION["morpion"];

echo "<table>";
for ($i = 0; $i < 3; $i++) {
    echo "<tr>";
    for ($j = 0; $j < 3; $j++) {
        echo '<td><form method="POST" action=""><input type="hidden" name="ligne" value="' . $i . '"><input type="hidden" name="colonne" value="' . $j . '">';
        if ($morpion[$i][$j] == "-") {
            echo '<input type="submit" name="submit" value="-">';
        } else {
            echo $morpion[$i][$j];
        }
        echo "</form></td>";
    }
    echo "</tr>";
}
echo "</table>";

// Bouton pour réinitialiser la partie
echo '<form method="POST" action=""><input type="submit" name="reinitialiser" value="Réinitialiser la partie"></form>';

// Vérifier si le bouton "Réinitialiser la partie" a été cliqué
if (isset($_POST["reinitialiser"])) {
    $_SESSION["morpion"] = array(
        array("-", "-", "-"),
        array("-", "-", "-"),
        array("-", "-", "-")
    );
    $_SESSION["joueur"] = "X";
}
?>