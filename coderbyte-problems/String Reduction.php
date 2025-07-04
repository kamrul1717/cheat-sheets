<?php

function stringReduction($str) {
    $map = [
        'ab' => 'c', 'ba' => 'c',
        'bc' => 'a', 'cb' => 'a',
        'ac' => 'b', 'ca' => 'b'
    ];

    $minLen = strlen($str);

    function reduce($s, $map, &$minLen) {
        $changed = false;

        for ($i = 0; $i < strlen($s) - 1; $i++) {
            $pair = $s[$i] . $s[$i + 1];
            if ($s[$i] !== $s[$i + 1]) {
                $newStr = substr($s, 0, $i) . $map[$pair] . substr($s, $i + 2);
                reduce($newStr, $map, $minLen);
                $changed = true;
            }
        }

        if (!$changed) {
            $minLen = min($minLen, strlen($s));
        }
    }

    reduce($str, $map, $minLen);
    return $minLen;
}

// Test
echo stringReduction("cab"); // Output: 1
