<?php
/**
 * Created by PhpStorm.
 * User: geertvangent
 * Date: 24/03/2018
 * Time: 11:06
 */
class RobotWithSiren extends Robot{
    public function __construct(int $initialBattery)
    {
        parent::__construct($initialBattery);
    }
    public function activate(){
        echo "tuta";
    }
}
