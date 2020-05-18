<?php
/*
 * Author : Refaat Aish
 * Problem Name : Let's Review
 * Problem Link : https://www.hackerrank.com/challenges/30-review-loop/problem
 *  */

// get the number of lines from user
$n = intval(fgets(STDIN));

for ($i = 0; $i < $n; $i++) {
    // get the word from user
    $line = rtrim(fgets(STDIN));
    $even_chars = $odd_chars = '';
    for ($j = 0; $j < strlen($line); $j++) {
        ($j % 2 == 0) ? $even_chars .= $line[$j] : $odd_chars .= $line[$j];
    }
    print($even_chars . " " . $odd_chars . "\n");
}

