<?php
if (isset($_GET['largeur']) && isset($_GET['hauteur'])) {
    $largeur = intval($_GET['largeur']);
    $hauteur = intval($_GET['hauteur']);

    // Vérification que la largeur est un nombre impair pour un toit correctement centré
    if ($largeur % 2 == 0) {
        $largeur--;
    }

    // Toit de la maison
    for ($i = 1; $i <= $largeur; $i += 2) {
        echo str_repeat(' ', ($largeur - $i) / 2);
        echo '/';
        if ($i == 1) {
            echo '\\';
        } else {
            echo str_repeat(' ', $i - 2);
            echo '\\';
        }
        echo str_repeat(' ', ($largeur - $i) / 2);
        echo '<br />';
    }

    // Ligne du bas du toit
    echo str_repeat('-', $largeur);
    echo '<br />';

    // Base de la maison
    for ($i = 0; $i < $hauteur; $i++) {
        echo '|';
        echo str_repeat(' ', $largeur - 2);
        echo '|';
        echo '<br />';
    }

    // Ligne du bas de la maison
    echo str_repeat('-', $largeur);
} else {
    echo "Merci d'entrer la largeur et la hauteur";
}
?>
