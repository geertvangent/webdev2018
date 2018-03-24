<?php include 'Classes/Robot.php' ?>
<?php include 'Classes/RobotWithSpeaker.php' ?>
<?php include 'Classes/RobotWithSiren.php' ?>
<?php
/**
 * Created by PhpStorm.
 * User: k44r5
 * Date: 24/03/2018
 * Time: 11:21
 */

//array mag niet in constructor

class Arena
{
    private $_robots = [];

    public function __construct()
    {

    }

    public function addRobot(Robot $robot)
    {
        array_push($this->_robots, $robot);
        var_dump($this->_robots);
    }

    /*public function addAllRobots(array $robots)
    {
        $this->_robots = $robots;
    }*/

}