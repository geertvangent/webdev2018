<?php
/**
 * Created by PhpStorm.
 * User: steve
 * Date: 24-3-2018
 * Time: 11:06
 */

namespace RobotWar;


class RobotWithSirene extends Robot

{
        public function __construct(string $name, int $batteryPower)
    {
        parent::__construct($name, $batteryPower);

    }

    public function activate(){
        echo "tuta<br>";
    }
    public function makeSomeNoise(){
        $this->activate();
    }
}