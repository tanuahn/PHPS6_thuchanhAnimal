<?php
include_once (dirname(__FILE__) . '/../InterfaceClass/Fruits.php');

class Apple extends Fruits
{
    public function howToEat()
    {
        return "Apple could be slided";   // TODO: Implement howToEat() method.
    }
}