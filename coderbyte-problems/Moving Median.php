<?php

function movingMedian($arr, $k) {
    $result = [];

    for ($i = 0; $i <= count($arr) - $k; $i++) {
        $window = array_slice($arr, $i, $k);
        sort($window);

        $mid = floor($k / 2);

        if ($k % 2 == 0) {
            $median = ($window[$mid - 1] + $window[$mid]) / 2;
        } else {
            $median = $window[$mid];
        }

        $result[] = $median;
    }

    return $result;
}

print_r(movingMedian([5, 15, 1, 3], 3)); // Output: [5, 3]
