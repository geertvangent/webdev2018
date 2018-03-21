<?php
/**
 * Created by PhpStorm.
 * User: Jonas
 * Date: 21/03/2018
 * Time: 19:28
 */
include 'weapon.php';

class Robot {
    private $_batteryPower;
    private $_weapon;

    /**
     * Robot constructor.
     */
    public function __construct($battery) {
        $this->_weapon = new Weapon();
        $this->_batteryPower = $battery;
    }


    // method
    function maakZichtbaar() {
        if($this->_batteryPower < 0) {
            echo "This robot died";
        }else {
            return "This is a robot with ".$this->_batteryPower."% battery level <br> ";
        }
    }

    function fight(Robot $opponent) {
        $endValue = $this->_batteryPower - $opponent->_batteryPower;
        $endValue2 = $opponent->_batteryPower - $this->_batteryPower;
        $this->_batteryPower = $endValue;
        $opponent->_batteryPower = $endValue2;

        if ($endValue < 0) {
            $endValue = 0;
            echo "This Robot died";
        }else if ($endValue2 < 0) {
            $endValue2 = 0;
            echo "The other Robot died <br> I'm dead";
        }

    }




    function fight2(robot $opponent) {
        if ($this->_batteryPower <= $opponent->_batteryPower) {
            echo "This Robot died";
        }else if ($opponent->_batteryPower = $this->_batteryPower) {
            echo "They both died";
        }else {
            echo "The other robot is dead";
        }
    }





    // random hit
    function fights($oppenent) {
        $hit = random_int(0, 100);
        $damage = $this->_batteryPower - $hit;
        echo "hit the opponent for ".$damage;
    }
};
