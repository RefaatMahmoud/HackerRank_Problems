<?php
/*
 * Author : Refaat Aish
 * Problem Name : 2D Arrays [hourglass sum]
 * Problem Link : https://www.hackerrank.com/challenges/30-2d-arrays/problem
 *  */


$stdin = fopen("php://stdin", "r");

for ($i = 0; $i < 6; $i++) {
    fscanf($stdin, "%[^\n]", $arr_temp);
    $arr[] = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));
}

function getHourglassSum($arr)
{
    $max_sum = -63; //  constraints : -9<= A[$i][$j] <=9  , so that -9*7 = -63
    for ($i = 0; $i < count($arr) - 2; $i++) {
        for ($j = 0; $j < count($arr) - 2; $j++) {
            $current_sum = $arr[$i][$j] + $arr[$i][$j + 1] + $arr[$i][$j + 2] + $arr[$i + 1][$j + 1] + $arr[$i + 2][$j] + $arr[$i + 2][$j + 1] + $arr[$i + 2][$j + 2];
            $max_sum = max($max_sum, $current_sum);
        }
    }
    return $max_sum;
}

print(getHourglassSum($arr));


fclose($stdin);



