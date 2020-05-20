<?php
/*
 * Author : Refaat Aish
 * Problem Name : Arrays
 * Problem Link : https://www.hackerrank.com/challenges/30-arrays/problem
 *  */

function reverse_array($arr){
    $arr = array_reverse($arr);
    foreach ($arr as $item){
        print($item." ");
    }
}

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

fscanf($stdin, "%[^\n]", $arr_temp);

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

reverse_array($arr);

fclose($stdin);

