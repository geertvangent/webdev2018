<?php
/**
 * Created by PhpStorm.
 * User: steve
 * Date: 24-3-2018
 * Time: 11:21
 */

namespace RobotWar;


class Arena
{
    private $robots= [];

    public function __construct()
    {

    }

    public function addRobot(Robot $robot)
    {
        $robot->makeSomeNoise();

        array_push($this->robots, $robot);

        var_dump($this->robots);
    }

    public function addAllRobot(array $robots){

    }

}