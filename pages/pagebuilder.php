<?php include "robot.php";
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

        $superRobot = new Robot(5);
        echo $superRobot ->maakZichtbaar();

        $ultraRobot = new Robot(20);
        echo $ultraRobot ->maakZichtbaar();

        $ultraRobot ->fight($superRobot);

        $test = -5;
        $test =- $test;
        echo $test;
    }

    static function showAside(){
        echo "Aside";
    }

    static function showFooter(){
        echo "Geert Van Gent";
    }





};



?>