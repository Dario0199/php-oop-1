<?php
// create un file index.php in cui:
// - è definita una classe ‘Movie’
//    => all’interno della classe sono dichiarate delle variabili d’istanza
//    => all’interno della classe è definito un costruttore
//    => all’interno della classe è definito almeno un metodo
// - vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà

class Movie{
    public $name;
    public $genre;
    public $price;

    public function __construct($name, $genre, $price){
        $this->name = $name;
        $this->genre = $genre;
        $this->price = $price;
        
    }
};

$iron_man = new Movie('Iron Man', 'Azione, Fantascienza', '7€');
// $iron_man->name = 'Iron Man';
// $iron_man->genre = 'Azione, Fantascienza, Fantasy';
echo $iron_man->name . '<br>';
echo $iron_man->genre . '<br>';
echo $iron_man->price . '<br><br>';


$thor = new Movie('Thor', 'Azione, Fantascienza, Fantasy', '6,50€');

echo $thor->name . '<br>';
echo $thor->genre . '<br>';
echo $thor->price;

?>