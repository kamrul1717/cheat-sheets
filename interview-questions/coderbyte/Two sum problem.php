<?php 
function twoSum($nums, $target) {
    $map = [];

    foreach ($nums as $i => $num) {
        $complement = $target - $num;
        if (isset($map[$complement])) {
            return [$map[$complement], $i];
        }
        $map[$num] = $i;
    }

    return []; // no match found
}

// Example:
print_r(twoSum([2, 7, 11, 15], 9));  // Output: [0, 1]
