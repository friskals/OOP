<?php

class Team
{
    protected $name;

    protected $members = [];

    /**
     * Team constructor
     */
    public function __construct($name, $members = [])
    {
        $this->name = $name;
        $this->members = $members;
    }


    /**
     * Static method for starting a team which has the same params with the constructor.
     * Static is used for using a method within a class without instantiating it
     */
    public static function start(...$params)
    {
        return new static(...$params);
    }


    /**
     * Set the name of a class
     */
    public function name($name)
    {
        $this->name = $name;
    }


    /**
     * return the members of Team 
     */
    public function members()
    {
        return $this->members;
    }


    /**
     * A team can add a member
     */
    public function add($name)
    {
        $this->members[] = $name;
    }


    /**
     * A member can be canceled
     */
    public function cancel()
    {
    }


    /**
     * A team has a manager
     */
    public function manager()
    {
    }
}

class Member
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
}


/**
 * instantiate an object
 */
$design = Team::start('Blue Design', [
    new Member('John Doe'),
    new Member('Jane Doe')
]);

var_dump($design->members());
