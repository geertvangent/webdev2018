<?php
/**
examen tip
- camelCase : functie
- PascalCase : klasse
- Upper : constanten 'CONST'
 */
/*
Recap--
Datatypes > functies
    - string
    - int
    - bool
    - array
    - char
    - object
    - float
    - double


class: blu-print voor een Object

+--> http://php.net/manual/en/language.oop5.php <--+

            ::OBJECT::
static:

abstract: onderdelen kunnen gebruikt worden voor andere klasse


-properties (eigenschappen),  fields :
-constructor '__construct':
    (werkt enkel binnen een class (bijna geen verschil met een function))
-methods,    functions > getters :
                         setters :
-destructor:

REST: betere conditie voor traffic met server (capaciteit benefit)
CRUD: create read update delete



 */
                // PascalCase
 abstract class PageBuilder{

     // property declaration
     public $id = 0;

     // method declaration
                     // camelCase
     static function showTitle(){
         echo 'Title';
     }

     static function showNav(){
         echo 'Navigation';
     }

     static function showMain(){
         echo 'Main';
     }

     static function showAside(){
         echo 'Aside';
     }

     static function showFooter(){
            echo '&copy; &Delta;BEL';
        }

 };

