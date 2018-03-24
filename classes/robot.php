<?php
/**
 * Created by PhpStorm.
 * User: Jonas
 * Date: 21/03/2018
 * Time: 19:28
 */
include 'weapon.php';


/**
 * Class Robot
 * @property string $_name The robot's name
 * @property int $_batteryPower Robot's battery power remaining
 * @property Weapon $_weapon Robot's weapon type
 * @throws Exception
 */
class Robot {
    /**
     * @var string
     */
    private $_name;
    /**
     * @var int
     */
    private $_batteryPower;
    /**
     * @var Weapon
     */
    private $_weapon;


    /**
     * Robot constructor.
     * @param string $name -> Initial robot's name
     * @param int $battery -> Initial robot's battery power
     */
    public function __construct(string $name, int $battery) {
        $this->_name = $name;
        $this->_batteryPower = $battery;
        $this->_weapon = new Weapon();
    }


    /**
     * @return string -> Put's the robot's current status on screen
     */
    function maakZichtbaar() {
        if($this->_batteryPower < 0) {
            echo "This robot died";
        }else {
            return "This is a robot with ".$this->_batteryPower."% battery level <br> ";
        }
    }


    /**
     * @param Robot $opponent -> Takes the opponent's name
     * @throws Exception
     */
    function fight(Robot $opponent) {
        if(is_null($opponent)) {
            throw new Exception("No opponent");
        }
        $endValue = $this->_batteryPower - $opponent->_batteryPower;
        $endValue2 = $opponent->_batteryPower - $this->_batteryPower;
        $this->_batteryPower = $endValue;
        $opponent->_batteryPower = $endValue2;

        if ($endValue < 0) {
            $endValue = 0;
            echo "This Robot died";
        }else if ($endValue2 < 0) {
            $endValue2 = 0;
            echo "The other Robot died <br> I'm dead";
        }

    }


    /**
     * @param Robot $opponent -> Takes the opponent's name
     */
    function fight2(robot $opponent) {
        if ($this->_batteryPower <= $opponent->_batteryPower) {
            echo "This Robot died";
        }else if ($opponent->_batteryPower = $this->_batteryPower) {
            echo "They both died";
        }else {
            echo "The other robot is dead";
        }
    }


    /**
     * @param $oppenent -> Takes the opponent's name
     * @throws Exception
     */
    function fights($oppenent) {
        $hit = random_int(0, 100);
        $damage = $this->_batteryPower - $hit;
        echo "hit the opponent for ".$damage;
    }
};
