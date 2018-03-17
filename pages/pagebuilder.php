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
         echo "snorfiets";
     }

     static function showFooter(){
            echo "&copy; Koen Corneillie";
        }





 };



?>