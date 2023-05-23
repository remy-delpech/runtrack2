<?php
$excluded_numbers = array(26, 37, 88, 1111, 3233);

for ($i = 0; $i <= 1337; $i++) {
    if (!in_array($i, $excluded_numbers)) {
        echo $i . "<br />";
    }
}
?>