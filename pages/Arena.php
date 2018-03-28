<?php
/**
 * Created by PhpStorm.
 * User: vanda
 * Date: 28/03/2018
 * Time: 19:49
 */

class arena
{
    private $robots = [];

    public function __construct()
    {

    }

    public function addRobot(Robot $robot)
    {
        $robot->makeSomeNoise();

        array_push($this->robots, $robot);

        var_dump($this->robots);
    }

    public function addAllRobot(array $robots)
    {

    }
}
