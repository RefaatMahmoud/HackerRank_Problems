<?php
/*
 * Author : Refaat Aish
 * Problem Name : Solve Me First
 * Problem Link : https://www.hackerrank.com/challenges/solve-me-first/problem
 * */

function solveMeFirst($a,$b){
    return $a+$b;
}

$handle = fopen ("php://stdin","r");
$_a = fgets($handle);
$_b = fgets($handle);
$sum = solveMeFirst((int)$_a,(int)$_b);
print ($sum);
fclose($handle);
?>

