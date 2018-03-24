<?php
/**
 * Created by PhpStorm.
 * User: k44r5
 * Date: 24/03/2018
 * Time: 11:08
 */

class RobotWithSiren extends Robot
{
    private $_siren = "LOEI! <br />";

    public function __construct(string $name, int $batteryPower)
    {
        parent::__construct($name, $batteryPower);
    }

    public function siren(){
        echo $this->_siren;
    }
}