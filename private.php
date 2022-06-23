<?php

declare(strict_types=1);

/* EXERCISE 3
TODO: Copy the code of exercise 2 to here and delete everything related to cola.
TODO: Make all properties private.
TODO: Make all the other prints work without error.
TODO: After fixing the errors. Change the color of Duvel to light instead of blond and also print this new color on the screen after all the other things that were already printed (to be sure that the color has changed).
TODO: Create a new private method in the Beer class called beerInfo which returns "Hi i'm Duvel and have an alcochol percentage of 8.5 and I have a light color."
Make sure that you use the variables and not just this text line.
TODO: Print this method on the screen on a new line.
USE TYPEHINTING EVERYWHERE!
*/


// TODO: Copy the code of exercise 2 to here and delete everything related to cola.
// TODO: Make all properties private.
class Beverage {

    // BEVERAGE PROPERTIES
    private string $color;
    private float $price;
    private string $temperature;

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
    public function getBeverageInfo() : string {
        // BETTER TO RETURN A FUNCTION THAT IS INSIDE A CLASS
        return "This beverage is $this->temperature and $this->color.";
    }

}

class Beer extends Beverage {

    private string $name;
    private float $alcoholPercentage;

    /**
     * @param string $name
     * @param float $alcoholPercentage
     */
    public function __construct(string $color, float $price, string $name, float $alcoholPercentage)
    {
        parent::__construct($color, $price);
        $this->name = $name;
        $this->alcoholPercentage = $alcoholPercentage;
    }

    /**
     * @return float
     */
    private function getAlcoholPercentage(): float
    {
        return $this->alcoholPercentage;
    }

}

$duvel = new Beer("blond", 3.5, "Duvel", 8.5);

echo $duvel->getAlcoholPercentage();
echo "<br/>";
echo $duvel->alcoholPercentage;
echo "<br/>";
echo $duvel->color;
echo "<br/>";
echo $duvel->getBeverageInfo();