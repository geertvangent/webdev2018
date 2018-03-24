<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 24-Mar-18
 * Time: 11:21 AM
 */

class Arena
{
    private $robots=[];
    public function __construct(){

    }

    public function addRobot(Robot $robot){
        $robot->MakeSomeNoise();
        array_push($this->robots, $robot);
        var_dump( $this->robots); /*probeert zo veel mogelijk info weer te geven*/
    }

    public function addAllRobot(array $robots){

}

}