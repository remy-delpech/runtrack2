<?php
$str = "Certaines choses changent, et d'autres ne changeront jamais.";
$newStr = substr($str, 1) . $str[0];

echo $newStr;
?>