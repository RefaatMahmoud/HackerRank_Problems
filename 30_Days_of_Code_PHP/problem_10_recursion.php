<?php
/*
 * Author : Refaat Aish
 * Problem Name : Recursion
 * Problem Link : https://www.hackerrank.com/challenges/30-recursion/problem
 *  */

function factorial($n)
{
    if ($n == 1) {
        return 1;
    } else {
        $n = $n * factorial($n - 1);
    }
    return $n;
}

$n = (int) rtrim(fgets(STDIN));
$result = factorial($n);
echo $result;


