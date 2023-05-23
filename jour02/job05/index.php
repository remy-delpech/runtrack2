<?php
function is_prime($n) {
    if ($n <= 1) {
        return false;
    }
    if ($n == 2) {
        return true;
    }
    if ($n % 2 == 0) {
        return false;
    }
    $m = sqrt($n);

    for ($i = 3; $i <= $m; $i += 2) {
        if ($n % $i == 0) {
            return false;
        }
    }

    return true;
}

for ($i = 2; $i <= 1000; $i++) {
    if (is_prime($i)) {
        echo $i . "<br />";
    }
}
?>