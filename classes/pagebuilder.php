<?php
/**
 * Created by PhpStorm.
 * User: Jonas
 * Date: 10/03/2018
 * Time: 10:03
 */


include 'robot.php';
include 'RobotWithSpeaker.php';
include 'RobotWithSiren.php';
include 'Arena.php';

/**
 * Class PageBuilder
 */
abstract class PageBuilder{

     public $id = 0;

     static function showTitle() {
         echo "Title";
     }

     static function showNav() {
         echo "Navigation";
     }

    /**
     * @throws Exception
     */
    static function showMain() {
         echo "Main";


        $newArena = new Arena();

        $newRobot = new Robot("Hypnodisc", 100);
        $newRobot2 = new Robot("Chaos 2", 100);
        $newRobot3 = new RobotWithSpeaker("Killalot", 100, "stop");
        $newRobot4 = new RobotWithSiren("Blijter", 20);

        echo $newRobot->maakZichtbaar();
        echo $newRobot2->maakZichtbaar();
        echo $newRobot3->maakZichtbaar();
        echo $newRobot4->maakZichtbaar();

        $newRobot->fight($newRobot2);
        echo $newRobot3->scream();
        echo $newRobot4->activate();

        $newArena->addRobot($newRobot3);

     }

     static function showAside() {
        echo "Aside";
     }

     static function showFooter() {
            echo "&copy; Jonas Laurens";
     }


 };
