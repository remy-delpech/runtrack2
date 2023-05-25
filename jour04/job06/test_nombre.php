<?php
if (isset($_GET['nombre'])) {
    $nombre = intval($_GET['nombre']);
    if ($nombre % 2 == 0) {
        echo "Nombre pair";
    } else {
        echo "Nombre impair";
    }
} else {
    echo "Merci d'entrer un nombre";
}
?>
