<?php
include_once (dirname(__FILE__) . '/../InterfaceClass/Fruits.php');

class Orange extends Fruits
{
    public function howToEat()
    {
        return "Orange could be juiced";  // TODO: Implement howToEat() method.
    }
}