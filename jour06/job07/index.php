<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $str = $_POST["str"];
    $fonction = $_POST["fonction"];

    if ($fonction == "gras") {
        $str = mettreEnGras($str);
    } elseif ($fonction == "cesar") {
        $str = decalerCesar($str);
    } elseif ($fonction == "plateforme") {
        $str = ajouterUnderscore($str);
    }

    // Affichage du résultat
    echo "Résultat : " . $str;
}

function mettreEnGras($str) {
    // Mettre en gras les mots commençant par une lettre majuscule
    $mots = explode(" ", $str);
    foreach ($mots as &$mot) {
        if (ctype_upper(substr($mot, 0, 1))) {
            $mot = "<strong>$mot</strong>";
        }
    }
    $str = implode(" ", $mots);
    return $str;
}

function decalerCesar($str, $decalage = 2) {
    // Décaler chaque caractère selon le chiffrement César
    $str = str_replace(" ", "", $str); // Supprimer les espaces
    $decalee = "";
    for ($i = 0; $i < strlen($str); $i++) {
        $ascii = ord($str[$i]);
        $decalee .= chr($ascii + $decalage);
    }
    return $decalee;
}

function ajouterUnderscore($str) {
    // Ajouter un "_" aux mots finissant par "me"
    $mots = explode(" ", $str);
    foreach ($mots as &$mot) {
        if (substr($mot, -2) === "me") {
            $mot .= "_";
        }
    }
    $str = implode(" ", $mots);
    return $str;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="">
        <label for="str">Texte :</label>
        <input type="text" id="str" name="str" required><br><br>
        
        <label for="fonction">Fonction :</label>
        <select id="fonction" name="fonction" required>
            <option value="gras">Gras</option>
            <option value="cesar">Cesar</option>
            <option value="plateforme">Plateforme</option>
        </select><br><br>
        
        <input type="submit" value="Valider">
    </form>

</body>
</html>