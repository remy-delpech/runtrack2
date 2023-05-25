<?php
if (isset($_POST['username']) && isset($_POST['password'])) {
    if ($_POST['username'] === 'John' && $_POST['password'] === 'Rambo') {
        echo "C’est pas ma guerre";
    } else {
        echo "Votre pire cauchemar";
    }
} else {
    echo "Merci de remplir tous les champs";
}
?>
