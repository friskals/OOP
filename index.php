<?php

class Team
{
    protected $name;

    protected $members = [];

    public function __construct($name, $members = [])
    {
        $this->name = $name;
        $this->members = $members;
    }

    public static function start(...$params)
    {
        return new static(...$params);
    }


    public function name($name)
    {
        $this->name = $name;
    }


    public function members()
    {
        return $this->members;
    }


    public function cancel()
    {
    }

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


$design = Team::start('Blue Design', [
    new Member('Jane Doe'),
    new Member('Jane Doe')
]);

var_dump($design->members());
