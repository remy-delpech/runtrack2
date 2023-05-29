<?php
function calcule($nombre1, $operation, $nombre2) {
    switch ($operation) {
        case '+':
            return $nombre1 + $nombre2;
        case '-':
            return $nombre1 - $nombre2;
        case '*':
            return $nombre1 * $nombre2;
        case '/':
            return $nombre1 / $nombre2;
        case '%':
            return $nombre1 % $nombre2;
        default:
            return "Opération non valide";
    }
}

// Exemples d'appels de la fonction calcule()
$resultat1 = calcule(5, '+', 3);  // Addition : 5 + 3 = 8
$resultat2 = calcule(10, '-', 4); // Soustraction : 10 - 4 = 6
$resultat3 = calcule(6, '*', 2);  // Multiplication : 6 * 2 = 12
$resultat4 = calcule(15, '/', 5); // Division : 15 / 5 = 3
$resultat5 = calcule(7, '%', 3);  // Modulo : 7 % 3 = 1

// Affichage des résultats
echo $resultat1 . "<br>"; // Affiche 8
echo $resultat2 . "<br>"; // Affiche 6
echo $resultat3 . "<br>"; // Affiche 12
echo $resultat4 . "<br>"; // Affiche 3
echo $resultat5 . "<br>"; // Affiche 1

?>