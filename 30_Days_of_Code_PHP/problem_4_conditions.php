<?php
/*
 * Author : Refaat Aish
 * Problem Name : Intro to Conditional Statements
 * Problem Link : https://www.hackerrank.com/challenges/30-conditional-statements/problem
 * */

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $N);

//first solution
if ($N % 2 != 0) {
    printf("%s", 'Weird');
} elseif ($N % 2 == 0 && ($N >= 2 && $N <= 5)) {
    printf("%s", 'Not Weird');
} elseif ($N % 2 == 0 && ($N >= 6 && $N <= 20)) {
    printf("%s", 'Weird');
} else {
    printf("%s", 'Not Weird');
}

//second solution
/*
$output = $N % 2 != 0 || ($N % 2 == 0 && ($N >= 6 && $N <= 20)) ? "Weird" : "Not Weird";
printf("%s", $output);
*/

//third solution
/*
switch ($N) {
    case $N % 2 != 0 || ($N % 2 == 0 && ($N >= 6 && $N <= 20)) :
        printf("%s", 'Weird');
        break;
    default:
        printf("%s", 'Not Weird');
}
*/

fclose($stdin);
