<?php

/**
 * Interface is a contract for all the classes which implements 
 * itself. Interface contain common behavior from several classes. Mammal 
 * eat some food. Herbivore, Carnivore and Onivore are Mammal which eat as well but 
 * with different way
 */

interface Mammal
{
    public function eat();
}

class Herbivore implements Mammal
{
    public function eat()
    {
        die('Eat some plants');
    }
}

class Omnivore implements Mammal
{
    public function eat()
    {
        die('at everything');
    }
}

class Carnivore implements Mammal
{
    public function eat()
    {
        die('Eat some smaller animals');
    }
}

class MammalFoodTypeChecker
{
    public function check(Mammal $mammal)
    {
        $mammal->eat();
    }
}

$checker = new MammalFoodTypeChecker();
$checker->check(new Carnivore);
