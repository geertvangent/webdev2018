<?php include "weapon.php";
/**
 * Created by PhpStorm.
 * User: hanscnops
 * Date: 21/03/2018
 * Time: 19:28
 */

class Robot {

    private $_batteryPower;
    private $_weapon;

    public function __construct(int $battery){

        $this->_weapon = new Weapon();
        $this->_batteryPower = $battery;

    }

    function maakZichtbaar(){
        return "dit is een robot met ". $this->_batteryPower." batterij inhoud <br>";
    }

    function fight(Robot $opponent){
        $endValue=$this->_batteryPower - $opponent->_batteryPower;
        $endValue2=$opponent->_batteryPower - $this->_batteryPower;
        $this->_batteryPower=$endValue;
        $opponent->_batteryPower=$endValue2;
        if ($endValue <=0){
            echo "I'm dead";
        }else{
            echo "the other robot is dead";
        }
    }

    function fightTwo (Robot $opponent){
        if ($this->_batteryPower < $opponent->_batteryPower){
            echo "I'm dead";
        }else if($this->_batteryPower = $opponent->_batteryPower){
            echo "equal";
        }else {
            echo "The other is dead";
        }
    }





}


?>