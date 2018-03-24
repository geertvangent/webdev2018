<?php
/**
 * Created by PhpStorm.
 * User: Jonas
 * Date: 24/03/2018
 * Time: 11:06
 */

/**
 * Class RobotWithSiren
 */
class RobotWithSiren extends Robot {

    /**
     * RobotWithSiren constructor.
     * @param string $name
     * @param int $batteryPower
     */
    public function __construct(string $name, int $batteryPower){
        parent::__construct($name, $batteryPower);
    }


    public function activate() {
        echo "Tuta <br>";
    }

    public function makeSomeNoise() {
        $this->activate();
    }

}