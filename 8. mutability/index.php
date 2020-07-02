<?php

/**
 * Immutable object is an object whose internal state shound never change
 * There is not setter method 
 * User private(for consistency)
 */
class Age
{
    private $age;

    public function __construct($age)
    {
        if ($age < 0 || $age > 120) {
            throw InvalidArgumentException("it no sense");
        }
        $this->age = $age;
    }

    public function increment()
    {
        return new self($this->age + 1);
    }

    public function get()
    {
        return $this->age;
    }
}
$age = new Age(23);
$age->increment();
var_dump($age->get());
