<!DOCTYPE html>
<html>
<head>
<?php
session_start();

if (isset($_SESSION['style'])) {
    $style = $_SESSION['style'];
    echo "<link rel='stylesheet' type='text/css' href='${style}.css' />";
}
?>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Purple+Purse&display=swap" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Rye&display=swap" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Henny+Penny&display=swap" rel="stylesheet">

</head>
<body>

<form action="choose_style.php" method="post">
  <select name="style">
    <option value="style1">Style 1</option>
    <option value="style2">Style 2</option>
    <option value="style3">Style 3</option>
  </select>
  <input type="submit" value="Appliquer le style">
</form>

</body>
</html>
