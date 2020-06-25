<?php

class AchievementType
{
    /**
     * return the name of an AchievementType 
     */
    public function name()
    {
        //Achievement Type   
    }


    /**
     * return the difficulty of an AchievementType 
     */
    public function difficulty()
    {
        return 'intermediate';
    }


    /**
     * return the icon of an AchievementType 
     */
    public function icon()
    {
        return '/images/.png';
    }
}

class FirstThousandPoints extends AchievementType
{
    /**
     * Determine if the current user qualifies for the current achievement type
     */
    public function qualifier($user)
    {
    }


    /**
     * Override inheritated method
     */
    public function name()
    {
        return 'Welcome';
    }
}
var_dump((new FirstThousandPoints())->name());
