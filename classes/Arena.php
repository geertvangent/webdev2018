<?php
/**
 * Created by PhpStorm.
 * User: Jonas
 * Date: 24/03/2018
 * Time: 11:21
 */


class Arena {

    private $robots = [];


    public function __construct() {

    }


    public function addRobot(Robot $robot) {
        $robot->makeSomeNoise();
        array_push($this->robots, $robot);
        var_dump($this->robots);
    }

    public function addAllRobots($robots) {

    }

}