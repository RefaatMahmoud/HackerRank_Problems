<?php
/*
 * Author : Refaat Aish
 * Problem Name : Binary
 * Problem Link : https://www.hackerrank.com/challenges/30-binary-numbers/problem
 *  */

$stdin = fopen("php://stdin", "r");
fscanf($stdin, "%d\n", $n);
$max_sum = 0;
$temp_sum = 0;
while ($n > 0) {
    if ($n % 2 == 1) {
        $temp_sum++;
        if ($temp_sum > $max_sum) {
            $max_sum = $temp_sum;
        }
        $n -= 1;
    } else {
        $temp_sum = 0;
    }
    $n /= 2;
}
echo $max_sum;
fclose($stdin);



