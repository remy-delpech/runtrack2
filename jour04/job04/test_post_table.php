<!DOCTYPE html>
<html>
<body>

<table border="1">
  <tr>
    <th>Argument</th>
    <th>Valeur</th>
  </tr>

<?php
foreach ($_POST as $argument => $valeur) {
    echo "<tr><td>" . htmlspecialchars($argument) . "</td>";
    echo "<td>" . htmlspecialchars($valeur) . "</td></tr>";
}
?>

</table>

</body>
</html>
