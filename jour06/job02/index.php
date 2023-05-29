<?php
function bonjour($jour) {
    if ($jour) {
        echo "Bonjour ";
    } else {
        echo "Bonsoir ";
    }
}

// Appel de la fonction bonjour() avec le paramètre true
bonjour(true); // Affiche "Bonjour"

// Appel de la fonction bonjour() avec le paramètre false
bonjour(false); // Affiche "Bonsoir"

?>