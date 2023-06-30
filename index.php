<?php

class Movie { 

    public $title;
    public $subtitle;
    public $category;
    public $dateOfRelease;

    public function __construct($title, $subtitle, $category, $dateOfRelease) {
    
        $this -> title = $title;
        $this -> subtitle = $subtitle;
        $this -> category = $category;
        $this -> dateOfRelease = $dateOfRelease;
    }

   function getTheFilm() {
        return $this -> title . " " . $this -> subtitle;
    }

}

$firstMovie = new Movie("Profondo rosso", "prova", "giallo", "1974");

$secondMovie = new Movie("Avatar", "la via dell'acqua", "fantasy", "2022");

var_dump($firstMovie);

echo "</br></br>";

var_dump($secondMovie);

?>