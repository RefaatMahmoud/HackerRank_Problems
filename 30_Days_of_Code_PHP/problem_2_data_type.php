<?php
/*
 * Author : Refaat Aish
 * Problem Name : Data Types
 * Problem Link : https://www.hackerrank.com/challenges/30-data-types
 * */

$handle = fopen ("php://stdin","r");
$i = 4;
$d = 4.0;
$s = "HackerRank ";

// Declare second integer, double, and String variables.
$x =  (int)readline();
$y = (float)readline();
$z = (string)readline();

// Read and save an integer, double, and String to your variables.
$i += $x;
$d += $y;
$s .= $z;

// Print the sum of both integer variables on a new line.
print($i . "\n");
// Print the sum of the double variables on a new line.
print(number_format((float)$d, '1', '.', '') . "\n");
// Concatenate and print the String variables on a new line
print($s . "\n");



fclose($handle);
?>

