<?php
$hostname = 'hostname';
$username = 'username';
$password = 'password';
$dbname = 'jour08';

try {
    $pdo = new PDO("mysql:host=$hostname;dbname=$dbname;charset=utf8", $username, $password);

    $stmt = $pdo->query("SELECT * FROM salles ORDER BY capacite DESC");

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
        foreach ($row as $value) {
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
