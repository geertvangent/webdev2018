<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 24-Mar-18
 * Time: 11:06 AM
 */

class RobotWithSirene extends Robot
{
    public function __construct (string $name, int $batteryPower){
        parent :: __construct ($name, $batteryPower);
        $this->quote = $quote;
    }
    public function activate(){
        echo 'tuut'<br> ;
    }

    public function makeSomeNoise(){
        this->$this->scream()
    }
}


{

}