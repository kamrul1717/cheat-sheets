<?php

// Kadane’s Algorithm (Optimized O(n) Solution):

function MaxSubArray($arr) {
    $maxSoFar = $arr[0];
    $maxEndingHere = $arr[0];

    for ($i = 1; $i < count($arr); $i++) {
        $maxEndingHere = max($arr[$i], $maxEndingHere + $arr[$i]);
        $maxSoFar = max($maxSoFar, $maxEndingHere);
    }

    return $maxSoFar;
}

// Example use
echo MaxSubArray([-2, 1, -3, 4, -1, 2, 1, -5, 4]);