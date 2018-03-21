<?php include 'weapon.php'

class Robot{
    private $_batteryPower;

    private $_weapons;
    /*private of public? het kan allebei. Als je weapon rechtstreeks wil aanspreken, dan moet het public zijn. Als je getter wil gebruiken, dan kan het ook private*/
    public function __construct(int $battery){
        $this-> _weapon = new Weapon();
        $this->_batteryPower = $battery; /*met deze functie maak je een robot aan. Hij maakt een variabele aan en steekt daar een element van het type weapon in. Hier stopt hij er zijn eigen beginwaarde in.

 Wnr je een robot aanmaakt, maak je een variabele aan + steekt daar wapen in
 je zegt: mijn eigen batterypower stel je gelijk aan die waarde
 eens dat dat gebeurd is, wat gebeurt er dan met de variabele $newWeapon? Niets. Waarom maken we die dan aan? Om er iets in te steken

 waarop voor weapon aparte klasse en voor battery niet?
 battery is getal, daar schrijf je geen volledige klasse voor. Weapon zal meer zijn dan dat.

 class= plan
 construct = how to build?
 */
    }
    function maakZichtbaar(){
        return "dit is een robot met ".$this->_batteryPower."batterij-inhoud";
    }

    function fight(Robot $opponent){
        $endValue=$this->_batteryPower - $opponent->_batteryPower;
        $endValue2=$opponent->_batteryPower - $this->_batteryPower;
        $this->_batteryPower= $endValue ;
        $opponent->_batteryPower=$endValue2;
        if($endValue>=0){
            echo "I'm dead"
        }else{
            echo "The other robot is dead"
        }

    }

    function fight2(Robot $opponent){
        if($this->_batteryPower < $opponent->_batteryPower){
            echo "I'm dead"
        }else if(
            $this->_batteryPower > $opponent->_batteryPower
        ){
            echo "The other robot is dead"
        }else{
            echo "equal score"
        }
    }
};

?>