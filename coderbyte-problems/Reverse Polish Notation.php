<?php

function evalRPN($tokens) {
    $stack = [];

    foreach ($tokens as $token) {
        if (is_numeric($token)) {
            array_push($stack, intval($token));
        } else {
            $b = array_pop($stack);
            $a = array_pop($stack);

            switch ($token) {
                case '+': array_push($stack, $a + $b); break;
                case '-': array_push($stack, $a - $b); break;
                case '*': array_push($stack, $a * $b); break;
                case '/': array_push($stack, intdiv($a, $b)); break; // integer division
            }
        }
    }

    return array_pop($stack);
}
echo evalRPN(["2", "1", "+", "3", "*"]);  // Output: 9
echo "\n";
echo evalRPN(["4", "13", "5", "/", "+"]); // Output: 6 (13 / 5 = 2 → 4 + 2 = 6)
