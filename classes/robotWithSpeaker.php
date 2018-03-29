<?php
/**
 * Created by PhpStorm.
 * User: steve
 * Date: 24-3-2018
 * Time: 10:02
 */

namespace RobotWar;


class RobotWithSpeaker extends Robot
{
    private $quote;

    public function __construct(string $name, int $batteryPower, string $quote)
    {
        parent::__construct($name, $batteryPower);
        $this->quote = $quote;
    }
    /*public function __construct(string $name, int $batteryPower)
    {

    }*/
    public function scream()
    {
        echo $this->quote . "<br>";
    }
    public function makeSomeNoise(){
        $this->scream();
    }
}