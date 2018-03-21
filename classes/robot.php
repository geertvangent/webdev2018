<?php
/**
 * Created by PhpStorm.
 * User: Maarten
 * Date: 21/03/2018
 * Time: 19:30
 */
include "weapon.php";

class Robot {
    private $_batteryPower;
    private $_weapon;

    public function __construct(int $battery){
        $this->_batteryPower = $battery;
    }

    function maakZichtbaar(){
        return "dit is een robot met " . $this->_batteryPower . " battery level <br>";
    }

    function fight(Robot $opponent){
        $endValue1 = $this->_batteryPower - $opponent->_batteryPower;
        $endValue2 = $opponent->_batteryPower - $this->_batteryPower;
        $this->_batteryPower = $endValue1;
        $opponent->_batteryPower = $endValue2;

        if ($endValue1 <= 0){
            echo "I'm dead";
        } else {
            echo "the other robot is dead";
        }
    }

    function fight2(Robot $opponent){
        if ($this->_batteryPower < $opponent->_batteryPower){
            echo "I'm dead";
        } else if ($this->_batteryPower = $opponent->_batteryPower){
            echo "draw";
        } else {
            echo "the other robot is dead";
        }
    }

}

?>