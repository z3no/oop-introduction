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
    private float $newPrice;

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

    public function beverageInfo() : void {
        echo "This beverage is $this->temperature and $this->color, the price is $this->price euro.";
    }

    function printPrice(float $newPrice) : string {
        if ($newPrice < 0) {
            return "Wow where did you find a bartender that pays you to drink, LOL!";
        } elseif ($newPrice == 0) {
            return "This one you get for free from the bartender.";
        } else {
            $this->price = $newPrice;
            return "This $this->temperature beverage with a $this->color color will cost $this->price euro.";
        }
    }

}

$beverage1 = new Beverage("black", 2);

$beverage1->beverageInfo();

echo "<br/>";

echo $beverage1->printPrice(3.5)."<br/>";
echo $beverage1->printPrice(0)."<br/>";