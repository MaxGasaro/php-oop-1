<?php

class Movies {

    public $title;
    public $author;
    public $genre;
    public $cast;
    public $vote;
    public $year;
    public $seen;

    function __construct($_title, $_author, $_genre)
    {
        $this->title = $_title;
        $this->author = $_author;
        $this->genre = $_genre;
    }

    public function setYear($year) {
        $this->year = $year;
    }

    public function setVote($vote) {
        $this->vote = $vote;
    }

    public function getSeen() {
        if($this->seen) {
           echo '<p>Il film è già stato visto</p>';
        } else {
           echo '<p>Il film è ancora da vedere</p>';
        }
    } 
}

$film_uno = new Movies('The hateful eight','Tarantino','drama');
echo "<p>Il titolo del film è: $film_uno->title</p>";
echo "<p>L'autore del film è: $film_uno->author</p>";
echo "<p>Il genere del film è: $film_uno->genre</p>";

$film_uno->setYear('2018');
echo "<p>Anno di uscita: $film_uno->year</p>";

$film_uno->setVote('7.8');
echo "<p>Voto: $film_uno->vote</p>";

$film_uno->seen = true;
$film_uno->getSeen();


$film_due = new Movies('The Social Network','David Fincher','Biografico');
echo "<p>Il titolo del film è: $film_due->title</p>";
echo "<p>L'autore del film è: $film_due->author</p>";
echo "<p>Il genere del film è: $film_due->genre</p>";

$film_due->setYear('2010');
echo "<p>Anno di uscita: $film_due->year</p>";

$film_due->setVote('7.2');
echo "<p>Voto: $film_due->vote</p>";

$film_due->seen = false;
$film_due->getSeen();

