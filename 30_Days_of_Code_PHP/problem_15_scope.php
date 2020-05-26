<?php
/*
 * Author : Refaat Aish
 * Problem Name : Scope
 * Problem Link : https://www.hackerrank.com/challenges/30-scope/problem
 *  */


class Difference
{
    public $maximumDifference;
    private $elements = [];

    public function __construct($elements)
    {
        $this->elements = $elements;
    }

    public function ComputeDifference()
    {
        $max = 0;
        for ($i = 0; $i < count($this->elements); $i++) {
            for ($j = 0; $j < count($this->elements); $j++) {
                $temp = abs($this->elements[$i] - $this->elements[$j]);
                $max = max($max, $temp);
            }
        }
        $this->maximumDifference = $max;
    }
}

$N = intval(fgets(STDIN));
$a = array_map('intval', explode(' ', fgets(STDIN)));
$d = new Difference($a);
$d->ComputeDifference();
print ($d->maximumDifference);

