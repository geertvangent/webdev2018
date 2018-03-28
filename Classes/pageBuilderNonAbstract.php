<?php


class PageBuilder{

    public $id = 0;

    public function __construct(){

    }

    static function showTitle(){
        echo "Title";
    }

    static function showNav(){
        echo "Navigation";
    }

    static function showMain(){
        echo "Main";
    }

    static function showAside(){
        echo "Aside";
    }

    static function showFooter(){
        echo "&copy; Geert Van Gent";
    }





};



?>