<?php

class Solution {
    public function countSubstrings(string $s): int {
        $res = 0;
        $n = strlen($s);

        for ($i = 0; $i < $n; $i++) {
            // Odd length palindromes
            $l = $i;
            $r = $i;
            while ($l >= 0 && $r < $n && $s[$l] === $s[$r]) {
                $res++;
                $l--;
                $r++;
            }

            // Even length palindromes
            $l = $i;
            $r = $i + 1;
            while ($l >= 0 && $r < $n && $s[$l] === $s[$r]) {
                $res++;
                $l--;
                $r++;
            }
        }

        return $res;
    }
}