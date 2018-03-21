<?php include 'robot.php' ?>

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
         echo "Main";

         $superRobot = new Robot ();
         echo $superRobot->maakZichtbaar;

         $uberRobot = new Robot ();
         echo $uberRobot->maakZichtbaar;
         )
     }

     static function showAside(){
         echo "Aside";
     }

     static function showFooter(){
            echo "&copy; Geert Van Gent";
        }





 };



?>