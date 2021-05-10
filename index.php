<?php

class Movie {
    public $title;
    public $director;
    public $genre;
    public $year;

    public function __construct($_title)
    {
        $this->title = $_title;
    }
}

$movie01 = new Movie('I Simpson - il film');

var_dump($movie01);

$movie02 = new Movie('Giallo in casa Muppet');

var_dump($movie02);