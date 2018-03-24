<?php
/**
 * Created by PhpStorm.
 * User: Jonas
 * Date: 24/03/2018
 * Time: 10:02
 */

/**
 * Class RobotWithSpeaker
 */
class RobotWithSpeaker extends Robot {

    private $quote;

    /**
     * RobotWithSpeaker constructor.
     * @param string $name
     * @param int $batteryPower
     * @param string $quote
     */
    public function __construct(string $name, int $batteryPower, string $quote){
        parent::__construct($name, $batteryPower);
        $this->quote = $quote;
    }


    public function scream() {
        echo $this->quote."<br>";
    }

    public function makeSomeNoise() {
        $this->scream();
    }

}