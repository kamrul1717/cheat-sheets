<?php

function KUniqueCharacters($str, $k) {
    $n = strlen($str);
    $maxLen = 0;
    $start = 0;
    $charMap = [];

    for ($end = 0; $end < $n; $end++) {
        $char = $str[$end];
        $charMap[$char] = isset($charMap[$char]) ? $charMap[$char] + 1 : 1;

        // shrink the window if we have more than k unique chars
        while (count($charMap) > $k) {
            $startChar = $str[$start];
            $charMap[$startChar]--;

            if ($charMap[$startChar] === 0) {
                unset($charMap[$startChar]);
            }
            $start++;
        }

        // if exactly k unique characters, update max
        if (count($charMap) == $k) {
            $maxLen = max($maxLen, $end - $start + 1);
        }
    }

    return $maxLen;
}

// Example:
echo KUniqueCharacters("aaabbcc", 2);  // Output: 4
