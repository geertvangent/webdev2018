<?php
include "weapon.php";
/**
 * Created by PhpStorm.
 * User: geertvangent
 * Date: 21/03/2018
 * Time: 19:28
 */

class Robot{

    private $_batteryPower;
    private $_weapon;

    //constructor altijd public.  Constructor is magic method = ingebouwd in php (te herkennen aan dubbele underscore)
    public function __construct(int $initialBattery)
    {

        $this->_batteryPower = $initialBattery;
        $this->_weapon = new Weapon();
    }

    function maakZichtbaar(){
        return "Dit is een robot met".$this->_batteryPower."% batterij"."<br>";
    }

    function fight(Robot $opponent){
        $endValue = $this->_batteryPower - $opponent->_batteryPower;
        $endValue2 = $opponent->_batteryPower - $this->_batteryPower;
        $this->_batteryPower = $endValue;
        $opponent->_batteryPower = $endValue2;


        echo $endValue."<br>";
        echo $endValue2;
    }

        function  fightTwo(Robot $opponent){
            if($this->_batteryPower <  $opponent->_batteryPower){
                echo "I'm dead";
            }else if($this->_batteryPower = $opponent->_batteryPower){
                echo "Equal";
            }else{
                echo "The other is dead";
            }
        }

}

?>