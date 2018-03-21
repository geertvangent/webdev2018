<?php

    include "Robot.php";

/**
 * Created by PhpStorm.
 * User: geertvangent
 * Date: 10/03/2018
 * Time: 10:03
 */

 abstract class PageBuilder{

     public $id = 0;

     static function showTitle(){
         echo "Title";
     }

     static function showNav(){
         echo "Navigation";
     }

     static function showMain(){
         echo "Main";
         $superRobot1 = new \RobotWar\Robot("Alex", 500);
         $superRobot2 = new \RobotWar\Robot("Tom", 350);
         echo $superRobot1->maakZichtbaar();
         echo $superRobot2->maakZichtbaar();
         $superRobot1->fight($superRobot2);
         echo $superRobot1->maakZichtbaar();
         echo $superRobot2->maakZichtbaar();
     }

     static function showAside(){
         echo "Aside";
     }

     static function showFooter(){
            echo "Geert Van Gent";
        }





 };



?>