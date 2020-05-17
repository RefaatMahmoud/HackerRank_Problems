<?php
/*
 * Author : Refaat Aish
 * Problem Name : Loops
 * Problem Link : https://www.hackerrank.com/challenges/30-loops/problem
 *  */


$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

for ($i = 1; $i <= 10; $i++) {
    print($n . " x " . $i . " = " . $i * $n . "\n");
}

fclose($stdin);
