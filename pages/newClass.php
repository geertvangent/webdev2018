
<?php
/**
 * Created by PhpStorm.
 * User: Jonas
 * Date: 17/03/2018
 * Time: 9:47
 */

// one line comment


class NewClass {
    const superHero = "Barry Allen";
    private $necessaryData;

    function __construct( $data) {
        $this->necessaryData = $data;
    }

    function canFly() {
        echo "the Flash";
    }

}

?>