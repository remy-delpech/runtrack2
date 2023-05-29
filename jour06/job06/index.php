<?php
function leetSpeak($str) {
    $leet = array(
        'A' => '4',
        'B' => '8',
        'E' => '3',
        'G' => '6',
        'L' => '1',
        'S' => '5',
        'T' => '7',
        'a' => '4',
        'b' => '8',
        'e' => '3',
        'g' => '6',
        'l' => '1',
        's' => '5',
        't' => '7'
    );
    
    $str = strtr($str, $leet);
    
    return $str;
}

// Exemple d'appel de la fonction leetSpeak()
$texte = "Hello World!";
$resultat = leetSpeak($texte);

// Affichage du résultat
echo $resultat;

?>