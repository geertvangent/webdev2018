<?php include 'weapon.php';
/**
 * Created by PhpStorm.
 * User: k44r5
 * Date: 21/03/2018
 * Time: 19:28
 */

//magic method is een methode die al ingebouwd is in php. aangeduid met dubbele underscore
//BIJVOORBEELD __construct
//underscore gebruiken voor private functies
//dollarteken voor parameter van functie plaatsen

class Robot{

    //Properties
    //Constructor
    //Methods (functies)

    private $_batteryPower;
    private $_weapon;


    public function __construct(int $batteryPower)
    {
        $this->_weapon = new Weapon();
        $this->_batteryPower = $batteryPower;

    }

    function maakZichtbaar(){
        return 'dit is een robot met ' . $this-> _batteryPower .' batterij-inhoud <br />';
    }

    function fight(Robot $target){
        $damage = $this->_batteryPower - $target->_batteryPower;
        $target->_batteryPower = $damage;
        if($target->_batteryPower <= 0){
            return  "The target is dead" ."<br />";
        }else {
            return $target->_batteryPower;
        }
    }

    function fightTwo(Robot $target){
        if($this->_batteryPower < $target->_batteryPower){
            return "I'm dead" ."<br />";
        }else if($this->_batteryPower > $target->_batteryPower){
            return "The target is dead" ."<br />";
        }else{
            return "Everybody is dead" ."<br />";
        }
    }
}
