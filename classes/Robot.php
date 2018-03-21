<?php
/**
 * Created by PhpStorm.
 * User: steve
 * Date: 21-3-2018
 * Time: 19:32
 */

namespace RobotWar;

include "weapon.php";


class Robot
{
    private $_name;
    private $_batteryPower;
    private $_weapon;


    public function __construct(string $name, int $batteryPower){
        $this->_name = $name;
        $this->_weapon = new Weapon();
        $this->_batteryPower = $batteryPower;

    }

    public function maakZichtbaar(){
        return "dit is een robot ".$this->_name." met ".$this->_batteryPower." batterij inhoud";

    }

    public function fight(Robot $opponent){
        $endValue = $this->_batteryPower - $opponent->_batteryPower;
        $endValue2=$opponent->_batteryPower - $this->_batteryPower;

        $this->_batteryPower = $endValue;
        $opponent->_batteryPower = $endValue2;

        if ($endValue<= 0){
            echo "I'm dead";
        }else{
            echo "You are dead";
        }
        echo $endValue;
        echo $endValue2;
    }
    public function fight2(Robot $opponent){
        if ($this->_batteryPower < $opponent->_batteryPower){
            echo "I'm dead";
        }else if($this->_batteryPower > $opponent->_batteryPower){
            echo "We are both dead";
        }else{
            echo "You are dead";
        }
    }

}