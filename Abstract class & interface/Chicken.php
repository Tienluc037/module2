<?php
include_once "Animal.php";
include_once "Edible.php";
class Chicken extends Animal implements Edible
{
    public function makeSound()
    {
        echo "Chip...chip";
    }
    public function howToEat()
    {
        echo "Chiên giòn";
    }
}