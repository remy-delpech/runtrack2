<?php
session_start();

// Vérifier si la variable de session "nbvisites" existe
if (!isset($_SESSION["nbvisites"])) {
    $_SESSION["nbvisites"] = 0; // Si non, initialiser à 0
}

// Incrémenter le compteur de visites
$_SESSION["nbvisites"]++;

// Afficher le contenu de la variable de session "nbvisites"
echo "Nombre de visites : " . $_SESSION["nbvisites"] . "<br>";

// Vérifier si le bouton "reset" a été cliqué
if (isset($_POST["reset"])) {
    // Réinitialiser le compteur en mettant la variable de session à 0
    $_SESSION["nbvisites"] = 0;
}

?>

<!-- Formulaire contenant le bouton "reset" -->
<form method="POST" action="">
    <input type="submit" name="reset" value="Réinitialiser">
</form>
