<?php
/*
 * Author : Refaat Aish
 * Problem Name : Abstract Classes
 * Problem Link : https://www.hackerrank.com/challenges/30-abstract-classes/problem
 *  */

abstract class Book
{
    protected $title;
    protected $author;

    function __construct($t, $a)
    {
        $this->title = $t;
        $this->author = $a;
    }

    abstract protected function display();
}

class MyBook extends Book
{
    private $price;

    public function __construct($t, $a, $price)
    {
        parent::__construct($t, $a);
        $this->price = $price;
    }

    public function display()
    {
        print("Title: {$this->title}");
        print("Author: {$this->author}");
        print("Price: {$this->price}");
    }
}

//Write MyBook class

$title = fgets(STDIN);
$author = fgets(STDIN);
$price = intval(fgets(STDIN));
$novel = new MyBook($title, $author, $price);
$novel->display();

