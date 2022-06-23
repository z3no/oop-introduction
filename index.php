<?php

declare(strict_types=1);

/* EXERCISE 1
TODO: Create a class beverage.
TODO: Create the properties color (string), price (float) and temperature (string) and also foresee a construct.
TODO: Have a default value "cold" in the construct for temperature.
Remember for now we will use properties and methods that can be accessed from everywhere.
TODO: Make a getInfo function which returns "This beverage is <temperature> and <color>."
TODO: Instantiate an object which represents cola. Make sure that the color is set to black, the price equals 2 euro and the temperature to cold automatically
 print the getInfo on the screen.
TODO: Print the temperature on the screen.
USE TYPEHINTING EVERYWHERE!
*/

class Beverage {

    // BEVERAGE PROPERTIES
    public string $color;
    public float $price;
    public string $temperature;

    // CONSTRUCTOR WITH PARAMETERS BETWEEN BRACKETS
    /**
     * @param string $color
     * @param float $price
     * @param string $temperature
     */
    public function __construct(string $color, float $price, string $temperature="cold")
    {
        // "set this class's properties with the same value as the incoming parameters"
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }

    // FUNCTION TO PRINT THE BEVERAGE INFO
    public function printBeverageInfo() : string {
        // BETTER TO RETURN A FUNCTION THAT IS INSIDE A CLASS
        return "This beverage is $this->temperature and $this->color.";
    }

}

// INSTANTIATE A NEW BEVERAGE(OBJECT)
$beverage1 = new Beverage("black", 2);

// PRINT THE INFO OF BEVERAGE 1, BETTER TO ECHO OUTSIDE OF YOUR CLASS
echo $beverage1->printBeverageInfo();