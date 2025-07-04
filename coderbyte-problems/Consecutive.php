<?php 
function Consecutive($arr) {
    $min = min($arr);
    $max = max($arr);
    $totalConsecutive = $max - $min + 1;
    $needed = $totalConsecutive - count($arr);
    return $needed;
}

// Example:
echo Consecutive([4, 8, 6]);  // Output: 2
