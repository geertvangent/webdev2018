<?php

class RobotWithSpeaker extends Robot /*robot van daarnet kan van alles schreeuwen, maar deze moet het ook kunnen*/
{
    private $quote;

    public function __construct(string $name, int $batteryPower, string $quote)
    {
        parent:: __construct($name, $batteryPower);
        $this->quote = $quote;
    }

    public function scream()
    { /* is constructor nodig? Mag, maar hoeft niet. */
        echo $this->quote;
    }

    public function makeSomeNoise()
    {
        $this->scream();
    }
}