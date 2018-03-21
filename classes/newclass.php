<?php
/**
 * Created by PhpStorm.
 * User: abel
 * Date: 17/03/18
 * Time: 09:56
 */

class NewClass{

    /* const: waarde kan je niet meer veranderen */
    CONST SUPERHERO = 'DOOM';

    /* private: enkel voor deze klasse
        leeg gedeclareerd
    */
    private $necessaryData;

    /* __con (parameter) : de basis (How2Build)
        is altijd public
        __ (< magic method) */
    public function  __construct($data){
        $this->necessaryData = $data;
    }

    function canFly(){
        echo ' Bang ';
    }


};