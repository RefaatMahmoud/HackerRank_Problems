<?php
/*
 * Author : Refaat Aish
 * Problem Name : Simple Array Sum
 * Problem Link : https://www.hackerrank.com/challenges/simple-array-sum/problem
 * */

function simpleArraySum($ar)
{
    $sum = 0;
    foreach ($ar as $value){
        $sum+=$value;
    }
    return $sum;
}

?>

