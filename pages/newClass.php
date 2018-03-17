<?php
/**
 * Created by PhpStorm.
 * User: k44r5
 * Date: 17/03/2018
 * Time: 11:09
 */

//klasse is het grondplan voor het maken van een object
//single line comments
/*Multi line comments*/


class NewClass{
    const SUPERHERO = "Philippe";
    private $necessaryData;

    //Constructor is de fundering van het huis
    function __consttruct($data){
        //altijd een dollar voor een this
        //geen dollar voor necessarydataz want variabele al aangemaakt
        $this->necessaryData;
    }

    function canFly(){
        echo "Tjilp";
    }
}

//statische functie kan je rechtsteeks aanroepen uit document
//gewone functies kan nu nog wel maar in de toekomst niet meer ==> niet doen dus ook voor EXAMEN