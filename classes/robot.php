<?php
/**
 * Created by PhpStorm.
 * User: abel
 * Date: 21/03/18
 * Time: 19:28
 */

include 'weapon.php';

class Robot{

    //properties

    private $_batteryPower;
    private $_Weapon;

    // datatype specificatie kan enkel via de parameter
    public function __construct(int $battery){
        $this->_Weapon =  new Weapon();
        $this->_batteryPower = $battery;

    }

    function maakZichtbaar(){
        return "Dit is een robot met een Battery life van ".$this->_batteryPower."</br>";
    }

    function fight(Robot $rival){
        $result = $this->_batteryPower - $rival->_batteryPower;
        $result2 = $rival->_batteryPower - $this->_batteryPower;

        $this->_batteryPower = $result;
        $rival->_batteryPower = $result2;

        if ($result <= 0){
            echo "i'm dead, other has x battery left";
        }else{
            echo "other died, i have x battery left";
        };
    }

    function fight2(Robot $rival){
        if ($this->_batteryPower < $rival->_batteryPower){
            echo "i'm dead, other has x battery left";
        }else if($this->_batteryPower = $rival->_batteryPower){
            echo "equal";
        }else{
            echo "other died, i have x battery left";
        };
    }
}
