<?php

abstract class AchievementType
{
    public function name()
    {
        $class = (new ReflectionClass($this))->getShortName();
        return trim(preg_replace('[/A-Z/]', ' $0', $class));
    }

    public function icon()
    {
        return strtolower(str_replace(' ', '-', $this->name())) . '.png';
    }

    abstract public function qualifier();
}

class FirstThousandPoints extends AchievementType
{
    /**
     * Implement abstract class from the parent class
     */
    public function qualifier()
    {
    }
}

var_dump((new FirstThousandPoints())->name());
