<?php
/*
 * Author : Refaat Aish
 * Problem Name : Dictionaries and Maps
 * Problem Link : https://www.hackerrank.com/challenges/30-dictionaries-and-maps/problem
 *  */

$_fp = fopen("php://stdin", "r");
$phone_books = [];
$n = (int) intval(fgets($_fp)) * 2;
while ($line = fgets($_fp)) {
    $data = explode(" ", $line);
    if (!empty($data[1])) {
        $name = trim($data[0], "\n");
        $phone = trim($data[1], "\n");
        $phone_books[$name] = $phone;
    } else {
        $name = trim($data[0], "\n");
        if (array_key_exists($name, $phone_books)) {
            echo "$name=$phone_books[$name]\n";
        } else {
            echo "Not found\n";
        }
    }
//    $n--;
}

