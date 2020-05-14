<?php
/*
 * Challenge Name : Operators
 * Challenge Link : https://www.hackerrank.com/challenges/30-operators/problem
 * */

// Complete the solve function below.
function solve($meal_cost, $tip_percent, $tax_percent)
{
    $meal_percent = ($meal_cost * $tip_percent / 100);
    $meal_tax = ($meal_cost * $tax_percent / 100);
    print(round($meal_cost + $meal_percent + $meal_tax));
}

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%lf\n", $meal_cost);

fscanf($stdin, "%d\n", $tip_percent);

fscanf($stdin, "%d\n", $tax_percent);

solve($meal_cost, $tip_percent, $tax_percent);

fclose($stdin);
