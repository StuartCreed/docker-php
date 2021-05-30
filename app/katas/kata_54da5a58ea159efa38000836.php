<?php

// https://www.codewars.com/kata/54da5a58ea159efa38000836/train/php
function findIt(array $seq): int {
    $numCounts = array_count_values($seq);
    foreach($numCounts as $num => $numCnt) {
        if ($numCnt % 2) {
            return $num;
        }
    }
}

// Tests
$array1 = [20,1,-1,2,-2,3,3,5,5,1,2,4,20,4,-1,-2,5];
$array2 = [1,1,2,-2,5,2,4,4,-1,-2,5];
var_dump(findIt($array1));
var_dump(findIt($array2));