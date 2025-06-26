<?php 
function arithGeo($arr) {
    if (count($arr) < 2) return -1;

    $diff = $arr[1] - $arr[0];
    $ratio = $arr[0] != 0 ? $arr[1] / $arr[0] : null;

    $isArith = true;
    $isGeo = true;

    for ($i = 1; $i < count($arr); $i++) {
        if ($arr[$i] - $arr[$i - 1] !== $diff) $isArith = false;
        if ($arr[$i - 1] == 0 || $ratio === null || $arr[$i] / $arr[$i - 1] !== $ratio) $isGeo = false;
    }

    if ($isArith) return "Arithmetic";
    if ($isGeo) return "Geometric";
    return -1;
}

// Test cases:
echo arithGeo([2, 4, 6, 8]);        // Arithmetic
echo "\n";
echo arithGeo([3, 9, 27]);          // Geometric
echo "\n";
echo arithGeo([1, 2, 4, 8, 16]);    // Geometric
echo "\n";
echo arithGeo([1, 2, 5, 8]);        // -1
