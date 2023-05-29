<?php // Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer la valeur du prénom soumis
    $prenom = $_POST["prenom"];

    // Créer le cookie avec le prénom
    setcookie("prenom", $prenom, time() + (86400 * 30), "/"); // expire après 30 jours
}

// Vérifier si l'utilisateur est déjà connecté en vérifiant l'existence du cookie
if (isset($_COOKIE["prenom"])) {
    $prenom = $_COOKIE["prenom"];
    echo "Bonjour " . $prenom . "!<br>";
    echo '<form method="POST" action=""><input type="submit" name="deco" value="Déconnexion"></form>';
} else {
    // Afficher le formulaire de connexion
    echo '
    <form method="POST" action="">
        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" required>
        <input type="submit" name="connexion" value="Connexion">
    </form>
    ';
}

// Vérifier si le bouton "Déconnexion" a été cliqué
if (isset($_POST["deco"])) {
    // Supprimer le cookie en le mettant à une date passée
    setcookie("prenom", "", time() - 3600, "/"); // Supprimer le cookie
    header("Location: index.php"); // Rediriger vers la page d'accueil (à ajuster selon votre configuration)
    exit;
}
?>