<?php
include "weapon.php";
/**
 * Created by PhpStorm.
 * User: geertvangent
 * Date: 21/03/2018
 * Time: 19:28
 * @property (string) $_name -> The robot's name
 * @property (int) $_batteryPower -> Robot's Battery power remaining
 * @property (Weapon) $_weapon -> Robot's weapon type
 * @throw (Exception)
 */

class Robot{

   private $_name;

    /**
     * @var int
     */
    private $_batteryPower;
    /**
     * @var Weapon
     */
    private $_weapon;

    //constructor altijd public.  Constructor is magic method = ingebouwd in php (te herkennen aan dubbele underscore)

    /**
     * Robot constructor.
     * @param (string) $name -> Robot's name
     * @param (int) $initialBattery
     */
    public function __construct(int $initialBattery)
    {
        $this->_name = $name;
        $this->_batteryPower = $initialBattery;
        $this->_weapon = new Weapon();
    }

    /**
     * @return (string -> Puts the robot's current on screen
     */
    public function maakZichtbaar(){
        return "Dit is een robot met".$this->_batteryPower."% batterij"."<br>";
    }

    /**
     * @param Robot $opponent
     */
    public function fight(Robot $opponent){
        if(is_null($opponent)){
            throw new Exception("There is no opponent");
        }

        $endValue = $this->_batteryPower - $opponent->_batteryPower;
        $endValue2 = $opponent->_batteryPower - $this->_batteryPower;
        $this->_batteryPower = $endValue;
        $opponent->_batteryPower = $endValue2;


        echo $endValue."<br>";
        echo $endValue2;
    }

    /**
     * @param Robot $opponent
     */
    public function  fightTwo(Robot $opponent){
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