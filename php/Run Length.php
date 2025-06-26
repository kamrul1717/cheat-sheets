<?php

function runLength($str) {
    $result = "";
    $count = 1;

    for ($i = 1; $i < strlen($str); $i++) {
        if ($str[$i] == $str[$i - 1]) {
            $count++;
        } else {
            $result .= $count . $str[$i - 1];
            $count = 1;
        }
    }

    // Add the last group
    $result .= $count . $str[strlen($str) - 1];

    return $result;
}

// Test
echo runLength("aaaabbbcca"); // Output: 4a3b2c1a
