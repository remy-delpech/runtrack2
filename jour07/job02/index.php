<?php // Vérifier si le cookie "nbvisites" existe
if (!isset($_COOKIE["nbvisites"])) {
    // Si non, initialiser à 0 et créer le cookie
    $nbvisites = 0;
    setcookie("nbvisites", $nbvisites, time() + (86400 * 30), "/"); // expire après 30 jours
} else {
    // Si oui, récupérer la valeur du cookie
    $nbvisites = $_COOKIE["nbvisites"];
}

// Vérifier si le bouton "reset" a été cliqué
if (isset($_POST["reset"])) {
    // Réinitialiser le compteur en mettant la valeur du cookie à 0
    $nbvisites = 0;
    setcookie("nbvisites", $nbvisites, time() + (86400 * 30), "/"); // mettre à jour le cookie
}

// Incrémenter le compteur de visites
$nbvisites++;

// Mettre à jour la valeur du cookie avec le nouveau compteur
setcookie("nbvisites", $nbvisites, time() + (86400 * 30), "/"); // mettre à jour le cookie

// Afficher le contenu du cookie "nbvisites"
echo "Nombre de visites : " . $nbvisites . "<br>";

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

    <!-- Formulaire contenant le bouton "reset" -->
    <form method="POST" action="">
        <input type="submit" name="reset" value="Réinitialiser">
    </form>

</body>
</html>