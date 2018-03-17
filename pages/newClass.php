<?php
/**
 * Created by PhpStorm.
 * User: Glenn
 * Date: 17-3-2018
 * Time: 10:11
 */

class NewClass
{
    const SUPERHERO = "Glenn";

    private $nescessaryData;

    function __construct($data)
    {
        $this -> nescessaryData = $data;
    }

    function canFly(){
        echo 'Tjilp';
    }

}