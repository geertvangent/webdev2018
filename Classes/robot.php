<?php include 'weapon.php';

/**
 * Created by PhpStorm.
 * User: Jonas Cordemans
 * Date: 21/03/2018
 * Time: 19:29
 * als het in dezelfde map zit geen verdere verwijzing. Nu zijn weapon en robot gelinked. we testen de link

// we willen een spel maken met robots
// 1ste stap dat we willen doen is een classe aanmaken
// wat wil je weten over de robot -> de batterijinhoud -> dat is een property
 * de index pagina is de algemene webpagina.
 */

class Robot {
    private  $_batteryPower;
    private $_weapon;/**public is buiten de classe oproepbaar**/

    public function __construct(int $battery){
        $this-> _weapon = new Weapon(); /** dit is een variabele. newWeapon is het lege vak in het systeem. In het vak moeten we het wapen gaan steken. het plan voor dit wapen staat in de weapon.Php**/
        $this->_batteryPower = $battery;
    }

    function maakZichtbaar(){
        return " dit is een robot met ". $this->_batteryPower. " batterij inhoud <br>";
    }

    function fight(Robot $opponent){
        $endValue=$this->_batteryPower - $opponent->_batteryPower."<br>";
        $endValue2=$opponent->_batteryPower - $this->_batteryPower."<br>";
        $this->_batteryPower = $endValue;
        $opponent->_batteryPower=$endValue2;
        if ($endValue<=0){
            echo "I'm dead";
        }else{
            echo "the other robot is dead";
        }
    }

    function fightTwo (Robot $opponent){
        if ($this->_batteryPower<=$opponent ->_batteryPower){
            echo "I'm dead";
        }else if ($this ->_batteryPower = $opponent->_batteryPower) {
            echo "equal";
        }else{
            echo "the other robot is dead";
        }
    }
}


?>