<?php
/**
 * Created by PhpStorm.
 * User: Jonas
 * Date: 10/03/2018
 * Time: 10:03
 */

include 'robot.php';

 abstract class PageBuilder{

     public $id = 0;

     static function showTitle() {
         echo "Title";
     }

     static function showNav() {
         echo "Navigation";
     }

     static function showMain() {
         echo "Main";
     }

     static function showAside() {
         echo "Aside";
     }

     static function showFooter() {
            echo "&copy; Jonas Laurens";
     }

     static function showRobot() {
         $newRobot = new Robot(100);
         echo $newRobot->maakZichtbaar();

         $uberRobot = new Robot(80);
         echo $uberRobot->maakZichtbaar();

         $newRobot->fight($uberRobot);
     }

 };
