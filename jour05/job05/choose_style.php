<?php
session_start();

if (isset($_POST['style'])) {
    $style = $_POST['style'];
    // Empêcher l'inclusion de fichiers non désirés
    $allowed_styles = ['style1', 'style2', 'style3'];
    if (in_array($style, $allowed_styles)) {
        $_SESSION['style'] = $style;
    }
} else {
    echo "Merci de choisir un style";
}

header("Location: index.php"); // Redirige vers la page du formulaire
?>