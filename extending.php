<?php

declare(strict_types=1);

/* EXERCISE 2
TODO: Make class beer that extends from Beverage.
TODO: Create the properties name (string) and alcoholPercentage (float).
TODO: Foresee a construct that's allows us to use all the properties from beverage and that sets the values for name and alcoholpercentage.
Remember for now we will use properties and methods that can be accessed from everywhere.
TODO: Make a getAlcoholPercentage function which returns the alocoholPercentage.
TODO: Instantiate an object which represents Duvel. Make sure that the color is set to blond, the price equals 3.5 euro and the temperature to cold automatically.
TODO: Also the name equal to Duvel and the alcohol percentage to 8,5%
TODO: Print the getAlcoholPercentage 2 times on the screen in two different ways, print the color on the screen and the getInfo.
Make sure that each print is on a different line.
Try to get this error on the screen= Fatal error: Uncaught Error: Call to undefined method Beverage::getAlcoholPercentage() in /var/www/becode/workshop/exercise2.php on line 64
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

    // FUNCTION TO GET THE BEVERAGE INFO
    public function getBeverageInfo() : string {
        // BETTER TO RETURN A FUNCTION THAT IS INSIDE A CLASS
        return "This beverage is $this->temperature and $this->color.";
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @param string $color
     */
    public function setColor(string $color): void
    {
        $this->color = $color;
    }

}

// INSTANTIATE A NEW BEVERAGE(OBJECT)
$beverage1 = new Beverage("black", 2);

// PRINT THE INFO OF BEVERAGE 1, BETTER TO ECHO OUTSIDE OF YOUR CLASS
echo $beverage1->getBeverageInfo();
echo "<br>";

// TODO: Make class beer that extends from Beverage.
class Beer extends Beverage {

    // TODO: Create the properties name (string) and alcoholPercentage (float).
    public string $name;
    public float $alcoholPercentage;

    // TODO: Foresee a construct that's allows us to use all the properties from beverage and that sets the values for name and alcoholpercentage.
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


    // TODO: Make a getAlcoholPercentage function which returns the alocoholPercentage.
    /**
     * @return float
     */
    public function getAlcoholPercentage(): float
    {
        return $this->alcoholPercentage;
    }

}

// TODO: Instantiate an object which represents Duvel. Make sure that the color is set to blond, the price equals 3.5 euro and the temperature to cold automatically.
// TODO: Also the name equal to Duvel and the alcohol percentage to 8,5%
$duvel = new Beer("blond", 3.5, "Duvel", 8.5);


// TODO: Print the getAlcoholPercentage 2 times on the screen in two different ways, print the color on the screen and the getInfo.
echo $duvel->getAlcoholPercentage();
echo "<br/>";
echo $duvel->alcoholPercentage;
echo "<br/>";
echo $duvel->color;
echo "<br/>";
echo $duvel->getBeverageInfo();