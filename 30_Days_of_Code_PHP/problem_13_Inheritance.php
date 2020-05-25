<?php
/*
 * Author : Refaat Aish
 * Problem Name : Inheritance
 * Problem Link : https://www.hackerrank.com/challenges/30-inheritance/problem
 *  */

class person
{
    protected $firstName, $lastName, $id;

    public function __construct($first_name, $last_name, $identification)
    {
        $this->firstName = $first_name;
        $this->lastName = $last_name;
        $this->id = $identification;
    }

    function printPerson()
    {
        print("Name: {$this->lastName}, {$this->firstName}\n");
        print("ID: {$this->id}\n");
    }
}

class Student extends person
{
    private $testScores;

    public function __construct($first_name, $last_name, $identification, $testScores)
    {
        parent::__construct($first_name, $last_name, $identification);
        $this->testScores = $testScores;
    }

    public function calculate()
    {
        $averageScore = is_array($this->testScores) ? array_sum($this->testScores) / count($this->testScores) : 0;
        if ($averageScore >= 90 && $averageScore <= 100) {
            return 'O';
        } elseif ($averageScore >= 80 && $averageScore < 90) {
            return 'E';
        } elseif ($averageScore >= 70 && $averageScore < 80) {
            return 'A';
        } elseif ($averageScore >= 55 && $averageScore < 70) {
            return 'P';
        } elseif ($averageScore >= 40 && $averageScore < 55) {
            return 'D';
        } else {
            return 'T';
        }
    }
}

$file = fopen("php://stdin", "r");

$name_id = explode(' ', fgets($file));

$first_name = $name_id[0];
$last_name = $name_id[1];
$id = (int)$name_id[2];

fgets($file);

$scores = array_map('intval', explode(' ', fgets($file)));

$student = new Student($first_name, $last_name, $id, $scores);

$student->printPerson();

print("Grade: {$student->calculate()}");
