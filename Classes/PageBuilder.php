<?php

include "Robot.php";
include "RobotWithSpeaker.php";
include "RobotWithSirene.php";
include "Arena.php";


abstract class PageBuilder{

    public $id = 0;

    static function showTitle(){
        echo "Title";
    }

    static function showNav(){
        echo "Navigation";
    }

    static function showMain(){
        $arena = new \RobotWar\Arena();

        echo "Main";
        $superRobot1 = new \RobotWar\Robot("Alex", 500);
        $superRobot2 = new \RobotWar\Robot("Tom", 350);
        $robot1 = new \RobotWar\RobotWithSpeaker("Jan", 850,"Stop");
        $robot2 = new \RobotWar\RobotWithSirene("Piet", 350);
        echo $superRobot1->maakZichtbaar();
        echo $superRobot2->maakZichtbaar();
        $superRobot1->fight($superRobot2);
        echo $superRobot1->maakZichtbaar();
        echo $superRobot2->maakZichtbaar();
        echo $robot1->maakZichtbaar();
        $robot1->scream();
        echo $robot2->maakZichtbaar();
        $robot2->activate();

        $arena->addRobot($robot1);
    }

    static function showAside(){
        echo "Aside";
    }

    static function showFooter(){
        echo "Geert Van Gent";
    }





};



?>