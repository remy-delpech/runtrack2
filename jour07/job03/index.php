<?php
session_start();

// Vérifier si la variable de session "prenoms" existe
if (!isset($_SESSION["prenoms"])) {
    $_SESSION["prenoms"] = array(); // Si non, initialiser un tableau vide
}

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer la valeur du prénom soumis
    $prenom = $_POST["prenom"];

    // Ajouter le prénom à la variable de session "prenoms"
    $_SESSION["prenoms"][] = $prenom;
}

// Vérifier si le bouton "reset" a été cliqué
if (isset($_POST["reset"])) {
    // Réinitialiser la variable de session "prenoms" en un tableau vide
    $_SESSION["prenoms"] = array();
}

// Afficher l'ensemble des prénoms
if (!empty($_SESSION["prenoms"])) {
    echo "Liste des prénoms : <br>";
    foreach ($_SESSION["prenoms"] as $prenom) {
        echo $prenom . "<br>";
    }
} else {
    echo "Aucun prénom enregistré.<br>";
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
    <!-- Formulaire contenant le champ de texte et le bouton de soumission -->
<form method="POST" action="">
    <label for="prenom">Prénom :</label>
    <input type="text" id="prenom" name="prenom" required><br><br>
    <input type="submit" value="Ajouter">
</form>

<!-- Bouton "reset" pour réinitialiser la liste des prénoms -->
<form method="POST" action="">
    <input type="submit" name="reset" value="Réinitialiser">
</form>
</body>
</html>