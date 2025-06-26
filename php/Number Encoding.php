<?php 
function numberEncoding($str) {
    $result = '';

    for ($i = 0; $i < strlen($str); $i++) {
        $ch = strtolower($str[$i]);

        if (ctype_alpha($ch)) {
            $pos = ord($ch) - ord('a') + 1;
            $result .= $pos;
        } else {
            $result .= $ch;
        }

        // Add space if next character is letter or number
        if ($i < strlen($str) - 1) {
            $next = strtolower($str[$i + 1]);
            if ((ctype_alpha($ch) || ctype_alpha($next)) && $next !== ' ') {
                $result .= ' ';
            }
        }
    }

    return trim($result);
}

// Test
echo numberEncoding("abc def!"); // Output: "1 2 3 4 5 6!"
