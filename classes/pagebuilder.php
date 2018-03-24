<?php include 'Robot.php' ?>
<?php include 'RobotWithSpeaker.php' ?>
<?php include 'RobotWithSirene.php' ?>
<?php include 'Arena.php' ?>
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
         $arena = new Arena(); /* arena bestaat zolang deze pagina bestaat. Arena bevat alle robots */

         echo "Main";

         $superRobot1 = new Robot (  "Alex",  500);
         $superRobot2 = new Robot ( "Tom",  350);
         $robot1 = new RobotWithSpeaker(  "Jan",  850,"erhr");
         $robot2 = new RobotWithSirene(  "Piet", 350);
         echo $superRobot1->maakZichtbaar;
         echo $superRobot2->maakZichtbaar;
         $superRobot1->fight($superRobot2);
         echo $superRobot1->maakZichtbaar;
         echo $superRobot2->maakZichtbaar;
         echo $robot1->maakZichtbaar;
         $robot1->scream();
         echo $robot2->maakZichtbaar;
         $robot2->activate();
         $arena->addRobot($robot1);

     }

     static function showAside(){
         echo "Aside";
     }

     static function showFooter(){
            echo "&copy; Geert Van Gent";
        }





 };



?>