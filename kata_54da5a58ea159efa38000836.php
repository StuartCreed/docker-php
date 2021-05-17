<?php

// https://www.codewars.com/kata/54da5a58ea159efa38000836/train/php
function findIt(array $seq): int {
    // Remove all duplicates in the array
    $numbers = array_unique($seq);
    // Iterate over the numbers
    foreach($numbers as $number) {
        $occurrences = array_filter($seq, fn($n) => $n === $number);
        // For each number find how many occurrences are in $seq
        $occurrencesCount = count($occurrences);
        // If the number of occurrences is odd then return that number
        if ($occurrencesCount % 2) return $number;
    }
}

// Tests
$array1 = [20,1,-1,2,-2,3,3,5,5,1,2,4,20,4,-1,-2,5];
$array2 = [1,1,2,-2,5,2,4,4,-1,-2,5];
var_dump(findIt($array1));
var_dump(findIt($array2));