<?php
function occurrences($str, $char) {
    $count = 0;
    $length = strlen($str);
    
    for ($i = 0; $i < $length; $i++) {
        if ($str[$i] === $char) {
            $count++;
        }
    }
    
    return $count;
}

// Exemple d'appel de la fonction occurrences()
$str = "Bonjour";
$char = "o";
$resultat = occurrences($str, $char);

// Affichage du résultat
echo "Le nombre d'occurrences de '".$char."' dans '".$str."' est : ".$resultat;
?>