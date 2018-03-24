<?php
/**
 * Created by PhpStorm.
 * User: geertvangent
 * Date: 10/03/2018
 * Time: 10:03
 */

 /*abstract*/ class PageBuilder{

     public $id = 0;

     /*public function __construct(){

     }*/

     static function showTitle(){
         echo "Title";
     }

     static function showNav(){
         echo "Navigation";
     }

     static function showMain(){
         echo "Koeniboeni";
     }

     static function showAside(){
         echo "aside";
     }

     static function showFooter(){
            echo "&copy; Koen Corneillie";
        }


     static function showRobot(){
         $arena = new Arena();

         $superRobot = new Robot("Super Robot", 9000);
         echo $superRobot->maakZichtbaar();


         $uberRobot = new Robot("Uber Robot", 200);
         echo $uberRobot->maakZichtbaar();

         $newRobot = new RobotWithSpeaker("Snorfiets", 9000, "I don't wanna fight no mo! <br />");
         echo $newRobot->maakZichtbaar();
         $newRobot->scream();

         $sirenRobot = new RobotWithSiren("Luiden Aap", 100);
         echo $sirenRobot->maakZichtbaar();
         $sirenRobot->siren();

         $arena->addRobot($uberRobot);
         $arena->addRobot($superRobot);
         $arena->addRobot($newRobot);

         echo $uberRobot->fight($superRobot);

         echo $superRobot->fightTwo($uberRobot);


     }



 };



?>