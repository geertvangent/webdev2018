<?php include 'weapon.php'

/**
 * Class Robot
 * @property (string) $_name->Robot's Name
 * @property (int)$_batteryPower->Robot's battery power remaining
 * @property Weapon $_weapons Robot's weapon type
 * @ throws (Exception)
 */class Robot{
     private $_name;
     private $_batteryPower;
     private $_weapons;

    /*private of public? het kan allebei. Als je weapon rechtstreeks wil aanspreken, dan moet het public zijn. Als je getter wil gebruiken, dan kan het ook private*/
    /**
     * Robot constructor.
     * param string ^name -> Initial robot's name
     * @param int $battery -> Initil robot's battery power remaining
     */
    public function __construct(string $name, int $battery){
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

    /**
     * @return (string)->puts the robot's current status on the screen
     */
    public function maakZichtbaar(){
        return "dit is een robot met ".$this->_batteryPower."batterij-inhoud";
    }


    /**
     * @param Robot $opponent
     */
    function fight(Robot $opponent){
        if(is_null($opponent)){
            throw new Exception("No opponent");
        }
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

    /**
     * @param Robot $opponent
     */
    public function fight2(Robot $opponent){
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
/*
    public function fight3(Robot $myRobot, Robot $opponent){ /*Robot begint te roepen*/
        $myRobot->scream(quote: "stop");
        this->fight($opponent); /*functie met veel parameters = hoofdfunctie. Die gebruiken om functie met minder parameters te maken*/
    }
    /*
    public function fight4(Robot){ /*Robot laat twee andere robots naar keuze vechten: alle robots staan op bepaalde plaats in geheugen. Om ze te kunnen aanroepen, moet je een omgeving creren */

    }

    public function scream(string( $quote)){
        echo $quote;
    }
};

?>