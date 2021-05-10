<?php
ini_set('display_errors', 1);

class Movie {
    private $title;
    public $director;
    public $genre;
    private $year;
    public $age;

    public function setAge(){
        $this->age = getdate()['year'] - $this->year;
    }

    public function getTitle(){
        return $this->title;
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

echo "Titolo film : ".$movie01->getTitle()."<br>Regista : ".$movie01->director."<br>Genere : ".$movie01->genre."<br>Questo film ha ".$movie01->age." anni.<br>";

// var_dump($movie01);

$movie02 = new Movie('Giallo in casa Muppet',1981);
$movie02->director = 'Jim Henson';
$movie02->genre = 'animazione';
$movie02->setAge();
// var_dump($movie02);

echo "Titolo film : ".$movie02->getTitle()."<br>Regista : ".$movie02->director."<br>Genere : ".$movie02->genre."<br>Questo film ha ".$movie02->age." anni.<br>";
