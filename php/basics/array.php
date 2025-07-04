<?php 

function ppa(array $value){
    echo '<pre>';
    print_r($value);
    echo '</pre>';
}

$items = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
ppa(array_chunk($items, 2)); // output [1, 2], [3,4], [5]
ppa(array_chunk($items, 2, true));
// output ['a' => 1, 'b' => 2], ['c' => 3, 'd' => 4], ['e' => 5]

$array1=['a', 'b', 'c'];
$array2=[5, 10, 15];
ppa(array_combine($array1, $array2)); // both array size must be same otherwise it will through erro
// output ['a' => 5, 'b' => 10, 'c' => 15]


$array = [1,2,3,4,5,6,7,8,9,10];
$even = array_filter($array, fn($number) => $number %2 === 0);
$even = array_filter($array, fn($number) => $number %2 === 0, ARRAY_FILTER_USE_KEY); // THIS IS DEFAULT
$even = array_filter($array, fn($number, $key) => $number %2 === 0, ARRAY_FILTER_USE_KEY);
ppa($even); // keeps the index unchanged


$even = array_values($even);


$array = ['a' => 5, 'b' => 10, 'c' => 15, 'd' => 5, 'e' => 10];
$keys = array_keys($array); // ['a','b','c','d','e']
$keys = array_keys($array, 10); // ['b','e']
$keys = array_keys($array, 10, true); // ['b','e']