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
         echo $newRobot->maakZichtbaar();

         $newRobot2 = new Robot("Chaos 2", 100);
         echo $newRobot2->maakZichtbaar();


         $newRobot->fight($newRobot2);

         $newRobot3 = new RobotWithSpeaker("Killalot", 100, "stop");
         echo $newRobot3->maakZichtbaar();
         echo $newRobot3->scream();

         $newRobot4 = new RobotWithSiren("Blijter", 20);
         echo $newRobot4->maakZichtbaar();
         echo $newRobot4->activate();

         $newArena->addRobot();

     }

     static function showAside() {
         echo "Aside";
     }

     static function showFooter() {
            echo "&copy; Jonas Laurens";
     }


 };
