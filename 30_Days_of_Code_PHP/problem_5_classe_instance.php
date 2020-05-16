<?php
/*
 * Author : Refaat Aish
 * Problem Name : Class Vs Instance
 * Problem Link : https://www.hackerrank.com/challenges/30-class-vs-instance/problem
 * */


class Person
{
    public $age;

    public function __construct($initialAge)
    {
        if ($initialAge < 0) {
            $this->age = 0;
            print("Age is not valid, setting age to 0.\n");
        } else {
            $this->age = $initialAge;
        }
    }

    public function amIOld()
    {
        if ($this->age < 13) {
            print("You are young.\n");
        } elseif ($this->age >= 13 && $this->age < 18) {
            print("You are a teenager.\n");
        } else {
            print("You are old.\n");
        }
    }

    public function yearPasses()
    {
        $this->age += 1;
    }

}

$T = intval(fgets(STDIN));
for ($i = 0; $i < $T; $i++) {
    $age = intval(fgets(STDIN));
    $p = new Person($age);
    $p->amIOld();
    for ($j = 0; $j < 3; $j++) {
        $p->yearPasses();
    }
    $p->amIOld();
    echo "\n";

}
