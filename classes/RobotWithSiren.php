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
     * @param int $battery
     */
    public function __construct(string $name, int $battery){
        parent::__construct($name, $battery);
    }


    public function activate() {
        echo "Tuta <br>";
    }

    public function makeSomeNoise() {
        $this->activate();
    }

}