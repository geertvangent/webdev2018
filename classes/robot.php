<?php
/**
 * Created by PhpStorm.
 * User: steve
 * Date: 21-3-2018
 * Time: 19:32
 */

namespace RobotWar;

include "weapon.php";


/**
 * Class Robot
 * @package RobotWar
 * @property (string) $_name -> Robot's name
 * @property (int) $_batteryPower -> Robot's battery power remaining
 * @property Weapon $_weapon Robot's weapon type
 * @throws (Exception)
 */
class Robot
{
    private $_name;
    private $_batteryPower;
    private $_weapon;


    /**
     * Robot constructor.
     * @param string $name -> Initial robot's name
     * @param int $batteryPower  -> Initial robot's battery power remaining
     */
    public function __construct(string $name, int $batteryPower){

        $this->_name = $name;
        $this->_weapon = new Weapon();
        $this->_batteryPower = $batteryPower;

    }


    /**
     * @return (string) -> puts the current robot status on the screen
     */
    public function maakZichtbaar(){
        return "Dit is een robot ".$this->_name." met ".$this->_batteryPower." batterij inhoud<br>";

    }




    /**
     * @param Robot $opponent
     */
    public function fight(Robot $opponent){
        if (is_null($opponent)){
            throw new Exception("No opponent");
        }
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

    /**
     * @param Robot $opponent
     */
    public function fight2(Robot $opponent){
        if ($this->_batteryPower < $opponent->_batteryPower){
            echo "I'm dead";
        }else if($this->_batteryPower > $opponent->_batteryPower){
            echo "We are both dead";
        }else{
            echo "You are dead";
        }
    }
















//
}