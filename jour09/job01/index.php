<?php
$hostname = 'hostname';
$username = 'username';
$password = 'password';
$dbname = 'jour08';

try {
    // Créez une nouvelle instance PDO
    $pdo = new PDO("mysql:host=$hostname;dbname=$dbname;charset=utf8", $username, $password);

    // Préparez et exécutez la requête SQL
    $stmt = $pdo->query('SELECT * FROM etudiants');

    // Récupérez tous les résultats
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Créez un tableau HTML
    echo "<table border='1'>";

    // Créez le thead
    echo "<thead>";
    foreach ($results[0] as $key => $value) {
        echo "<th>{$key}</th>";
    }
    echo "</thead>";

    // Créez le tbody
    echo "<tbody>";
    foreach ($results as $row) {
        echo "<tr>";
        foreach ($row as $key => $value) {
            echo "<td>{$value}</td>";
        }
        echo "</tr>";
    }
    echo "</tbody>";

    echo "</table>";
} catch (PDOException $e) {
    echo "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}
?>
