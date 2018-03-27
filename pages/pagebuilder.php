<?php
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
         
         $robot = new Robot(5);
         echo $robot->maakZichtbaar();
         $robot2 = new Robot(20);
         echo $robot2->maakZichtbaar();
         $robot2->fight($robot);
         $robot3 = new RobotWithSPeaker(40, "stop");
         echo $robot3->maakZichtbaar();
         $robot3->scream();
         $robot4 = new RobotWithSiren(80);
         $robot4->activate();
     }

     static function showAside(){
         echo "Aside";
     }

     static function showFooter(){
            echo "&copy; Geert Van Gent";
        }





 };



?>
