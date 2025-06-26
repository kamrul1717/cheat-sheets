<?php

function PrimeMover($num) {
    $count = 0;
    $n = 2;

    while (true) {
        if (isPrime($n)) {
            $count++;
            if ($count == $num) {
                return $n;
            }
        }
        $n++;
    }
}

function isPrime($n) {
    if ($n < 2) return false;
    if ($n == 2) return true;
    if ($n % 2 == 0) return false;

    for ($i = 3; $i * $i <= $n; $i += 2) {
        if ($n % $i == 0) return false;
    }
    return true;
}
