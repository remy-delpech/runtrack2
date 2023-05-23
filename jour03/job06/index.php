<?php
$str = "Les choses que l'on possède finissent par nous posséder.";
$reverseStr = mb_convert_encoding(strrev(mb_convert_encoding($str, 'UTF-16BE', 'UTF-8')), 'UTF-8', 'UTF-16LE');

echo $reverseStr;
?>