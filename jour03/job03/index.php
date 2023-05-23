<?php
$str = "I'm sorry Dave I'm afraid I can't do that";
$vowels = array('a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U');

for ($i = 0; $i < strlen($str); $i++) {
    if (in_array($str[$i], $vowels)) {
        echo $str[$i];
    }
}
?>