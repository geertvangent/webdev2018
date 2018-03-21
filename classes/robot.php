<?php
/**
 * Created by PhpStorm.
 * User: Gebruiker
 * Date: 21/03/2018
 * Time: 19:29
 */

include "weapon.php";

class Robot {

    private $_batteryPower;
    private $_weapon;

    public function __construct(int $battery){

        $this -> _weapon = new Weapon();
        $this -> _batteryPower =  $battery;

    }

    function maakZichtbaar(){
        return "Dit is een robot met ". $this -> _batteryPower ."% batterij inhoud <br><br>";
    }

    function fight (robot $opponent){
        $endValue = $this ->_batteryPower - $opponent -> _batteryPower;
        $endValue2 = $opponent -> _batteryPower - $this -> _batteryPower;
        $this -> _batteryPower = $endValue;
        $opponent -> _batteryPower = $endValue2;

        if ($endValue <= 0){
            echo "I'm dead";
        }else{
            echo "Opponent is dead";
        }

    function fightTwo (robot $opponent){
        if ($this -> _batteryPower < $opponnent -> _batteryPower){
            echo "I'm dead";
        }else if($this -> _batteryPower = $opponent -> _batteryPower){
            echo "It's a tie";
        }else{
            echo "Opponent is dead";

        }
    }
/*
        echo $endValue ."<br>";
        echo $endValue2 ."<br>";
*/
    }



}

?>