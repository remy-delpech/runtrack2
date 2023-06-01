<?php
$hostname = 'hostname';
$username = 'username';
$password = 'password';
$dbname = 'jour08';

try {
    $pdo = new PDO("mysql:host=$hostname;dbname=$dbname;charset=utf8", $username, $password);

    // Job 03 requête
    $stmt = $pdo->query("SELECT prenom, nom, naissance FROM etudiants WHERE sexe = 'Femme'");

    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo "<table border='1'>";

    echo "<thead>";
    foreach ($results[0] as $key => $value) {
        echo "<th>{$key}</th>";
    }
    echo "</thead>";

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
