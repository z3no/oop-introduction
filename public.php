<?php

declare(strict_types=1);

/* EXERCISE 5
Copy the class of exercise 1.
TODO: Change the properties to private.
TODO: Fix the errors without using getter and setter functions.
TODO: Change the price to 3.5 euro and print it also on the screen on a new line.
*/

class Beverage {

    private string $color;
    private float $price;
    private string $temperature;

    /**
     * @param string $color
     * @param float $price
     * @param string $temperature
     */

    public function __construct(string $color, float $price)
    {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = "cold";
    }

    public function getBeverageInfo() : string {
        return "This beverage is $this->temperature and $this->color.";
    }

}

// INSTANTIATE A NEW BEVERAGE(OBJECT)
$beverage1 = new Beverage("black", 2);

// PRINT THE INFO OF BEVERAGE 1, BETTER TO ECHO OUTSIDE OF YOUR CLASS
echo $beverage1->getBeverageInfo();