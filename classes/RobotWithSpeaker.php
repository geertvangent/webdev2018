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
     * @param int $battery
     * @param string $quote
     */
    public function __construct(string $name, int $battery, string $quote){
        parent::__construct($name, $battery);
        $this->quote = $quote;
    }


    public function scream() {
        echo $this->quote."<br>";
    }

    public function makeSomeNoise() {
        $this->scream();
    }

}