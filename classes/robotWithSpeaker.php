<?php
/**
 * Created by PhpStorm.
 * User: geertvangent
 * Date: 24/03/2018
 * Time: 10:02
 */

class RobotWithSPeaker extends Robot{

    private  $quote;

    public function __construct(int $initialBattery, string $quote)
    {
        parent::__construct($initialBattery);
        $this->quote = $quote;
    }

    public function scream(){
        echo $this->quote;
    }
}