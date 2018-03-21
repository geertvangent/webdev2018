<?php
include "classes/robot.php";
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
         echo "<br>";
         $newRobot = new Robot(100);
         echo $newRobot->maakZichtbaar();

         $ultraRobot = new Robot(1000);
         echo $ultraRobot->maakZichtbaar();

         $ultraRobot->fight($newRobot);

     }

     static function showAside(){
         echo "Aside";
     }

     static function showFooter(){
         echo "&copy; Maarten Alles";
     }


 };



?>