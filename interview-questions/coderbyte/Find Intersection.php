<?php 
// Using Build in function
function findIntersection($arr1, $arr2) {
    return array_values(array_intersect($arr1, $arr2));
}


// Manual Way
function findIntersectionWithDuplicates($arr1, $arr2) {
    $map = array_count_values($arr1);
    $result = [];

    foreach ($arr2 as $num) {
        if (isset($map[$num]) && $map[$num] > 0) {
            $result[] = $num;
            $map[$num]--;  // avoid counting duplicates multiple times
        }
    }

    return $result;
}

// Example:
$a = [1, 2, 2, 3, 4];
$b = [2, 2, 3, 5];

print_r(findIntersectionWithDuplicates($a, $b));  // Output: [2, 2, 3]



// Method 2 of manual 
function findIntersectionWithDuplicates2($arr1, $arr2) {
    sort($arr1);
    sort($arr2);

    $i = $j = 0;
    $result = [];

    while ($i < count($arr1) && $j < count($arr2)) {
        if ($arr1[$i] === $arr2[$j]) {
            $result[] = $arr1[$i];
            $i++;
            $j++;
        } elseif ($arr1[$i] < $arr2[$j]) {
            $i++;
        } else {
            $j++;
        }
    }

    return $result;
}

// Example:
$a = [1, 2, 2, 3, 4];
$b = [2, 2, 3, 5];

print_r(findIntersectionWithDuplicates($a, $b));  // Output: [2, 2, 3]

