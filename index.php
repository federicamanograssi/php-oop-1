<?php
ini_set('display_errors', 1);

class Movie {
    private $title;
    public $director;
    public $genre;
    private $year;
    private $age;

    public function setAge(){
        $this->age = getdate()['year'] - $this->year;
    }

    public function __construct($_title, $_year)
    {
        $this->title = $_title;
        $this->year = $_year;
    }
}

$movie01 = new Movie('I Simpson - il film', 2007);
$movie01->director = 'David Silverman';
$movie01->genre = 'animazione';
$movie01->setAge();
var_dump($movie01);

$movie02 = new Movie('Giallo in casa Muppet',1981);
$movie02->director = 'Jim Henson';
$movie02->genre = 'animazione';
$movie02->setAge();
var_dump($movie02);
