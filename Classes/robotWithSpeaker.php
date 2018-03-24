<?php
/**
 * Created by PhpStorm.
 * User: k44r5
 * Date: 24/03/2018
 * Time: 10:04
 */


class RobotWithSpeaker extends Robot
{
    private $_name;
    private $_quote;

    public function __construct(string $name, int $batteryPower, string $quote)
    {
        parent::__construct($name, $batteryPower);
        $this->_name = $name;
        $this->_quote = $quote;
    }

    public function scream(){
        echo $this->_name . " zegt: " . $this->_quote;
    }
}