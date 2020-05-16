<?php
/*
 * Author : Refaat Aish
 * Problem Name : Diagonal Difference
 * Problem Link : https://www.hackerrank.com/challenges/diagonal-difference/problem
 * */

function diagonalDifference($arr)
{
    $arr_length = count($arr);
    $primary_diagonal = 0;
    $secondary_diagonal = 0;
    $last_index = $arr_length - 1;
    if ($arr_length) {
        for ($i = 0; $i < $arr_length; $i++) {
            $primary_diagonal += $arr[$i][$i];
            $secondary_diagonal += $arr[$i][$last_index--];
        }
    }
    return abs($primary_diagonal-$secondary_diagonal);
}

$n = intval(trim(fgets(STDIN)));

$arr = [];

for ($i = 0; $i < $n; $i++) {
    $arr_temp = rtrim(fgets(STDIN));

    $arr[] = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));
}

$result = diagonalDifference($arr);

print($result);
?>

