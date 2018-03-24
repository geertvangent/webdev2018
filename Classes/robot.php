<?php include 'weapon.php';
/**
 * Created by PhpStorm.
 * User: k44r5
 * Date: 21/03/2018
 * Time: 19:28
 */

//contractueel programmeren
//don't care niets aantrekken van welke gegevens worden ingegeven
//programma mag niet blokkeren als ze nonsense data ingeven

//defensief programmeren
//throws error
//programma geeft een error wanneer correcte informatie niet wordt ingegeven

//totaal programmeren
//nooit errors throwen

//magic method is een methode die al ingebouwd is in php. aangeduid met dubbele underscore
//BIJVOORBEELD __construct
//underscore gebruiken voor private functies
//dollarteken voor parameter van functie plaatsen


//docblocks rechtermuisklik ==> Generate ==> php docblocks (omschrijving van wat functie/klasse doet)
/**
 * Class Robot
 * @property (string) $_name -> The robot's name
 * @property (int) $_batteryPower -> battery power remaining
 * @property (string) $_weapon -> Robot's weapon type
 * @param
 * @throws
 */
class Robot{

    //Properties
    //Constructor
    //Methods (functies)
    private $_name;
    private $_batteryPower;
    private $_weapon;


    /**
     * Robot constructor.
     * @param (int) $batteryPower -> sets the robot's battery power
     */
    public function __construct(string $name, int $batteryPower)
    {
        $this->_name = $name;
        $this->_weapon = new Weapon();
        $this->_batteryPower = $batteryPower;

    }


    /**
     * @return (string) -> puts the robot's current status on screen
     */
    function maakZichtbaar(){
        return '<p>Dit is robot ' . $this->_name . ' met ' . $this-> _batteryPower .' batterij-inhoud <p/>';
    }

    /**
     * @param Robot $target
     * @return (string) $_batteryPower -> returns battery power of the target after the fight
     * @throws (Exception)
     */
    public function fight(Robot $target){
        if(is_null($target)){
            throw new Exception("Geen robot ingegeven");
        }
        $damage = $this->_batteryPower - $target->_batteryPower;
        $target->_batteryPower = $damage;
        if($target->_batteryPower <= 0){
            return  "The target is dead" ."<br />";
        }else {
            return $target->_batteryPower;
        }
    }

    public function fightTwo(Robot $target){
        if($this->_batteryPower < $target->_batteryPower){
            return "I'm dead" ."<br />";
        }else if($this->_batteryPower > $target->_batteryPower){
            return "The target is dead" ."<br />";
        }else{
            return "Everybody is dead" ."<br />";
        }
    }

    //wordt vaak gebruikt => functie verwerken in andere functie , etc. tot 1 hoofdfunctie die alles oproept
    public function fightThree(Robot $myRobot, Robot $target){
        $this->fight($target);
    }
}
