<?php  include "weapon.php";
/**
 * Created by PhpStorm.
 * User: Sig
 * Date: 21/03/2018
 * Time: 19:28
 */

class Robot
{
    private $_batteryPower;
    private $_weapon;

    function __construct(int $battery){
        $this ->_batteryPower = $battery;
        $this -> _weapon = new Weapon();
    }

    /**
     * @return string
     */
    function maakZichtbaar(){
        return "Dit is een robot met ".$this->_batteryPower." batterij inhoud<br>";
    }

    function fight(Robot $opponent){
        $endValue = $this->_batteryPower - $opponent->_batteryPower;
        $endValue2 = $opponent->_batteryPower - $this->_batteryPower;
        $this->_batteryPower = $endValue;
        $opponent->_batteryPower = $endValue2;
        if ($endValue <= 0){
            echo "I'm dead";
        }
        else{
            echo "the other robot is dead";
        }
        echo $endValue."<br>";
        echo $endValue2;
    }

    /**
     * @param Robot $opponent
     */
    function fighttwo(Robot $opponent){
        if ($this->_batteryPower < $opponent->_batteryPower){
            echo "I'm dead";
        }
        elseif ($this->_batteryPower = $opponent->_batteryPower){
            echo "equal";
        }
        else{
            echo "the other robot is dead";
        }
    }
}

?>