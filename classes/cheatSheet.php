<?php
/**
 * Created by PhpStorm.
 * User: Jonas
 * Date: 21/03/2018
 * Time: 19:46
 */

//include php files
include 'weapon.php';

// create new class to show class on page
//newClass::canFly();
$superHeroMan = new NewClass("nestring");
$superHeroMan->canFly();


// class
class name {
    // property
    private $name;

    // constructor
    public function __construct() {

    }
}

/*
 * doc blocks
 * @property -> marks the properties
 * @returns -> shows the return of a function
 * @param -> shows the parameters the function takes
 * @throws -> gives back what is thrown
 */

/*
 *
 * Defensief  -> throws
 * Contactueel -> don't care
 * Totaal -> never throws
*/