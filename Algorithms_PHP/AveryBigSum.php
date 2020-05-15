<?php
/*
 * Author : Refaat Aish
 * Problem Name : Avery Big Sum
 * Problem Link : https://www.hackerrank.com/challenges/a-very-big-sum/problem
 * */

function aVeryBigSum($ar)
{
    $sum = 0;
    foreach ($ar as $value) {
        $sum += $value;
    }
    return $sum;
}

?>

