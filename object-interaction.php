<?php

//create a song classification

class Fruit {

     public $name;
     public $color;
     public function __construct($name, $color)
     {
         $this->name = $name;
         $this->color = $color;
     }
   
     public function intro(){
         echo "The fruit is {$this->name} and the color is {$this->color}.";
     }

}


class Strawberry extends Fruit{
     
    public $weight;

    public function __construct($name, $color, $weight){
        $this-> name;
        $this-> color;
        $this-> color;
    }

    public function intro(){
        echo "The fruit is {$this->name} and the color is {$this -> color} and the weight is {$this ->weight}";
    }

    public function message(){
        echo " Am l a fruit or a munuh and ";

    }
}


$strawberry = new Strawberry("Strawberry", "red", 23);
$strawberry->message();
$strawberry->intro();

$fruit = new Fruit("Apple", "GUD");
$fruit -> intro();