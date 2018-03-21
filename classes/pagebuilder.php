<?php
/**
 * Created by PhpStorm.
 * User: geertvangent
 * Date: 10/03/2018
 * Time: 10:03
 */

include "robot.php";

 abstract class PageBuilder{

     public $id = 0;

     static function showTitle(){
         echo "RobotFight";
     }

     static function showNav(){
         echo "";
     }

     static function showMain(){
         echo "";
     }

     static function showAside(){
         echo "";
     }

     static function showFooter(){
            echo "<br> &copy; Kevin De Backer";
        }

/* robot specifications */

     static function showRobot(){
         $superRobot = new Robot(50);
         echo $superRobot -> maakZichtbaar();

         $ultraRobot = new Robot(50);
         echo $ultraRobot -> maakZichtbaar();

         $ultraRobot -> fight($superRobot);
     }



 };



?>