# An introduction to OOP
### BeCode challenge OOP

Let's first check out what this **OOP** stands for maybe, I've heard it fall a few times in class and
saw it explained the first time in a watch that Yasser gave.

If I google a bit I can find the following:

**OOP** stands for `Object-Oriented Programming` and it is a computer programming model that organizes software design 
around data, or objects, rather than functions and logic. An object can be defined as a data field that has unique 
attributes and behavior. 

I really like the following sentence I found online:
>OOP focuses on the objects that developers want to manipulate rather than the logic required to manipulate them. 
This approach to programming is well-suited for programs that are large, complex and actively updated or maintained.

Because when I was looking at my code for the PHP form, I was thinking "wow I'm kind of getting lost in all this code if I would need to fix or add something".
From that moment on I started to think even more like, I love that everything works but I want to lear a different and cleaner way.

And that is when Sicco and Tim came to tell us "All you little cracking becoders are going to get an introduction to OOP."
I can still hear Sicco say,
> "It took me years to master this and I will learn you all in a matter of days! Mic drop, get CRACKIN!"

So let's get started with **OOP!**

****

## The objective

I think this one is pretty clear, get to know OOP, understand how it works, read about the terminology and start using it more in our future projects.
I'm really finding an urge to learn and tackle this. I've always been more in my comfort zone with frontend, but I really want to 
improve and get comfortable with PHP. When I first encountered PHP I guess I was about 16 years old and didn't really want to give it a chance
because I found it very hard and gave up to easily, by lack of understanding what's happening. Thanks to these few months at BeCode 
when I now look at code it's starting to click what is happening, how it gets certain values, etc. This gives me more confidence 
to tackle my weaknesses and PHP. I don't have this feeling anymore like I had when I was 16, that was like PHP smells and I 
have to get away from it into fresh air. Which makes me really happy, that the feeling I had is gone.

****

### As usual with a challenge we have some MUST HAVES - BASICS

### First up: CLASSES

Classes are one of the building blocks when we start working with OOP. We can say these are user-defined data types that act 
as the blueprint for individual objects, attributes and methods.

Now if we look at the assignment we can see we have some TO-DOs here.
We need to create:
- [x] A class called beverage
```php
class Beverage { 

}
```
- [x] In our class we need some properties, color (string), price (float), temperature (string)
  - A class property is an element that can be re-used and referred to within the class.
  - With each property we defined a valid type (like string if it is text, a float which includes decimal fractions (simply put, a float has numbers on both sides of the decimal, an integer does not) , so that we always know what we'll receive from the property, as well as what values will be accepted.
```php
class Beverage { 
    // BEVERAGE PROPERTIES
    public string $color;
    public float $price;
    public string $temperature;
}
```
- [x] Also foresee a `construct`
    - Oew what is this `construct`? Let's google it:
      - "Constructors are ordinary methods which are called during the instantiation of their corresponding object. As such, they may define an arbitrary number of arguments, which may be required, may have a type, and may have a default value. Constructor arguments are called by placing the arguments in parentheses after the class name." In my opinion this gives me a nice explanation about what a constructor is and what it does/can do.
      - Thanks to Alex I found something easy we can do in PhpStorm, so if I would right click in my class, click -> "generate" -> "constructor" it will pop open a window in which I can select the properties I want to use as a parameter for the constructor and it creates the constructor for us.
      - Mmmh what does `$this` actually do or mean?`
        - In PHP `$this` keyword references the current `object`of the class. It allows us to access the properties and methods of the current object within the class using the `object operator ->`. The `$this` keyword is only available within a class, it doesn't exist outside of the class. If you attempt to use `$this` outside of a class, you will get an error.
```php
class Beverage { 
    // BEVERAGE PROPERTIES
    ...
    
    // OUR CONSTRUCTOR WITH PARAMETERS
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
}
```
- [x] Have a default value "cold" in the construct for temperature.
  - As you can see in the code above I gave our string temperature a default value between the parameter brackets. I heard about Yasser this was possible and I liked, it also works, it doesn't ask me to give in a value for temperature but if I want I can type in another value and it overrides "cold".
- [x] I see this word "Methods" a lot, I want to find a definition for this.
  - "Methods are functions that are defined inside a class that describe the behaviors of an object. Each method contained in class definitions starts with a reference to an instance object. Programmers use methods for reusability or keeping functionality encapsulated inside one object at a time."
  - Cool so they are actually functions but inside a class and they give our objects certain behaviours. This word kind of scared me but actually we already know functions, it's just another name because we define it in a class.
- [x] Make a getInfo function which returns "This beverage is <temperature> and <color>."
  - You see that after the function name I put `: string` this is a return type, so here I want it to return a string.
  -   
```php
class Beverage { 
    // BEVERAGE PROPERTIES
    ...
    
    // OUR CONSTRUCTOR WITH PARAMETERS
    ...
    
    // FUNCTION TO get THE BEVERAGE INFO
    public function getBeverageInfo() : string {
        // BETTER TO RETURN A FUNCTION THAT IS INSIDE A CLASS
        return "This beverage is $this->temperature and $this->color.";
    }
}
```
- [x] Instantiate an object which represents cola. Make sure that the color is set to black, the price equals 2 euro and the temperature to cold automatically print the getInfo on the screen.
    - "Instantiate" sounds fancy to me. It means we are going to create a new object of our class Beverage. For our example our object will be "cola", another object can be "fanta" or a "corona" these are all beverages. We create an object outside of our class.
```php
class Beverage { 
    // OUR CLASS WITH PROPERTIES, CONSTRUCTOR AND OUR GETINFO FUNCTION
    ...
    }
}
// HERE WE CAN INSTANTIATE OUR OBJECT
$cola = new Beverage("black", 2); // THE FIRST PARAMETER IS COLOR IT IS A STRING SO WE PUT IT BETWEEN "", SECOND IS OUR PRICE WHICH IS A FLOAT SO WE CAN JUST PUT IN 2, IT IS ALSO POSSIBLE TO PUT IN 2.5, WE ALREADY SET THE TEMPERATURE SO WE DON'T NEED TO FILL THIS IN.

// NEXT UP WE ECHO OUR FUNCTION IT WILL PRINT OUR RETURN VALUE OF THE FUNCTION
echo $cola->getBeverageInfo();
```
- So what is happening here?:
  - So we are creating an object and name it `cola` this is a new beverage we've created. As you can see we can assign it properties. It has a color black and a price of 2.
  - Then we echo out the object's `getBeverageInfo()` function, and this will return us "This beverage is cold and black."

****

### Exercise 2: EXTENDING

If I google a bit, I find that extending has to do with object inheritance. Inheritance is a well-established programming principle, and it seems that PHP makes use of this principle in its object model. This principle affects the way many classes and objects 'relate' to one another.
When extending a class, the subclass inherits all the public and protected methods, properties and constants from the parent class. Unless a class overrides those methods, they will retain their original functionality.

Let's check out what we have to do for this exercise and learn some more.

- [x] Make a class beer that extends from Beverage.
  - So here we derive Beer from Beverage and Beer will have all the public and protected properties of the class Beverage.
```php
class Beverage { 
    // OUR CLASS WITH PROPERTIES, CONSTRUCTOR AND OUR GETINFO FUNCTION
    ...
    }
}

class Beer extends Beverage {

}
```
- [x] In our extended class we will create the properties name (string) and alcoholPercentage (float).
```php
class Beverage { 
    // OUR CLASS WITH PROPERTIES, CONSTRUCTOR AND OUR GETINFO FUNCTION
    ...
    }
}

class Beer extends Beverage {
    // OUR NEW PROPERTIES $NAME AND $ALCOHOLPERCENTAGE
    public string $name;
    public float $alcoholPercentage;
}
```
- [x] Now let's foresee a construct that allows us to use all the properties from beverage and that sets the values for name and alcoholpercentage.
  - I can create a new constructor in the same way I did before (look at exercise 1 classes).
  - I fill in all the properties I want to be able to use as parameters for the construct function.
  - The constructor of a child class doesn't automatically call the constructor of its parent class, that is why we use `parent::__construct(parameter(s))` to call the parent constructor from the constructor in the child class.
```php
class Beverage { 
    // OUR CLASS WITH PROPERTIES, CONSTRUCTOR AND OUR GETINFO FUNCTION
    ...
    }
}

class Beer extends Beverage {
    // OUR NEW PROPERTIES $NAME AND $ALCOHOLPERCENTAGE
    public string $name;
    public float $alcoholPercentage;
    
    // OUR NEW CONSTRUCTOR
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
}
```
- [x] Make a getAlcoholPercentage function which returns the alocoholPercentage.
  - I generated a new `getter` for this one.
```php
class Beverage { 
    ...
}

class Beer extends Beverage {
    // OUR NEW PROPERTIES $NAME AND $ALCOHOLPERCENTAGE
    ...
    
    // OUR NEW CONSTRUCTOR
    ...
    
    // OUR NEW FUNCTION THAT WILL RETURN THE ALCOHOLPERCENTAGE
    /**
     * @return float
     */
    public function getAlcoholPercentage(): float
    {
        return $this->alcoholPercentage;
    }
}
```
- [x] Instantiate an object which represents Duvel. Make sure that the color is set to blond, the price equals 3.5 euro and the temperature to cold automatically.
- [x] Also the name equal to Duvel and the alcohol percentage to 8,5%.
```php
class Beverage { 
    ...
}

class Beer extends Beverage {
    // OUR NEW PROPERTIES $NAME AND $ALCOHOLPERCENTAGE
    ...
    
    // OUR NEW CONSTRUCTOR
    ...
    
    // OUR NEW FUNCTION THAT WILL RETURN THE ALCOHOLPERCENTAGE
    ...
}
// INSTANTIATING A NEW DUVEL OBJECT, we give it the color "blond", it will have a price of 3.5, the name of our new beer will be "Duvel" and we give it an alcoholpercentage of 8.5
$duvel = new Beer("blond", 3.5, "Duvel", 8.5);
```
- [x] Print the getAlcoholPercentage 2 times on the screen in two different ways, print the color on the screen and the getInfo.
```php
class Beverage {
    ...
}

class Beer extends Beverage {
    ...
}
// OUR NEW OBJECT
$duvel = new Beer("blond", 3.5, "Duvel", 8.5);

// PRINTING THE ALCOHOLPERCANTE ONE WAY
echo $duvel->getAlcoholPercentage();
echo "<br/>";
// WE CAN ALSO SAY ECHO FROM OBJECT $duvel THE PROPERTY alcoholPercentage, because it is public it wil show us the value.
echo $duvel->alcoholPercentage;
echo "<br/>";
// IN THE SAME WAY WE CAN ECHO THE VALUE FOR ITS COLOR
echo $duvel->color;
echo "<br/>";
// HERE WE ECHO OUR getBeverageInfo() method for the $duvel object
echo $duvel->getBeverageInfo();
```

I love seeing al this data we put in appear on the screen.

****

### Exercise 3: PRIVATE

GOOGLE TIME! I find `visibility`, The visibility of a property, a method or (as of PHP 7.1.0) a constant can be defined by prefixing the declaration with the keywords public, protected or `private`.
Class members declared as private may only be accessed by the class that defines the member.

Let's take a look at what our TO DOs are for this exercise.

- [x] Copy the code of exercise 2 to here and delete everything related to cola. 
- [x] Make all properties private.
  - These first 2 things we have to do are very explanatory in my opinion, so all our properties we set to private, not our functions
```php
class Beverage {

    private string $color;
    private float $price;
    private string $temperature;

    /**
     * @param string $color
     * @param float $price
     * @param string $temperature
     */

    public function __construct(string $color, float $price, string $temperature="cold")
    {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }

    public function getBeverageInfo() : string {
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
    public function getAlcoholPercentage(): float
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
```
- [x] Make all the other prints work without error.
  - Well we do get some errors here. To make things work better I will create a getter and setter for the properties `color`, `alcoholPercentage` and I'm also going to make one for the `name`. For color and name I didn't define any and I see that I have a getter for the alcoholPercentage so let's change these and see what will happen.
  - I can't get the values for the properties anymore, which is logical since they are set to private. Here it is handy to work with the getter and setter, they are also public so I can see what they will return.
```php
class Beverage {

    // OUR PRIVATE PROPERTIES
    ...

    // OUR CONSTRUCTOR
    ...

    // FUNCTION TO GET THE BEVERAGE INFO
    ...
    
    // OUR GETTER AND SETTER FOR COLOR
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

class Beer extends Beverage {

    // OUR PRIVATE PROPERTIES
    ...

    // OUR CONSTRUCTOR
    ...
    
    // GETTERS AND SETTERS FOR NAME AND ALCOHOLPERCENTAGE
    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return float
     */
    public function getAlcoholPercentage(): float
    {
        return $this->alcoholPercentage;
    }

    /**
     * @param float $alcoholPercentage
     */
    public function setAlcoholPercentage(float $alcoholPercentage): void
    {
        $this->alcoholPercentage = $alcoholPercentage;
    }
}

//TODO: Make all the other prints work without error.
$duvel = new Beer("blond", 3.5, "Duvel", 8.5);

echo $duvel->getAlcoholPercentage(); // HERE WE GET THE ALCOHOLPERCENTAGE WE HAVE SET WHEN WE CREATED THE DUVEL OBJECT
echo "<br/>";
$duvel->setAlcoholPercentage(8.5); // WITH THE SETTER I CAN FIRST DEFINE THE VALUE WE WANT TO GIVE THE ALCOHOLPERCENTAGE, SO IF I WOULD SAY 6 INSTEAD OF 8.5, WHEN I GET IT IT WILL OVERRIDE THE 8.5 WE DEFINED WHEN WE CREATED THE DUVEL OBJECT
echo $duvel->getAlcoholPercentage(); // HERE WE GET THE RETURNED VALUE FOR THE ALCOHOLPERCENTAGE IT WILL BE 8.5, IF WE WOULD HAVE SAID 6 IT WOULD HAVE RETURNED 6, YOU CAN TRY IT YOURSELF
echo "<br/>";
echo $duvel->getColor(); // IT WILL RETURN OUR BLOND COLOR
echo "<br/>";
echo $duvel->getBeverageInfo(); // HERE WE RETURN OUR BEVERAGE INFO WHICH WILL BE, This beverage is cold and blond.
echo "<br/><br/>";
```
- [x] After fixing the errors. Change the color of Duvel to light instead of blond and also print this new color on the screen after all the other things that were already printed (to be sure that the color has changed).
```php
class Beverage {
    ...
}

class Beer extends Beverage {
    ...
}
// OUR DUVEL OBJECT
...

// OUR PREVIOUS ECHOs
...

$duvel->setColor('light');      // HERE WE SET OUR COLOR TO LIGHT
echo $duvel->getColor();        // HERE WE GET OUR RETURN VALUE FOR THE COLOR AND IT WILL RETURN US LIGHT INSTEAD OF BLOND
echo "<br/>";
echo $duvel->getBeverageInfo(); // IF WE NOW RETURN OUR BEVERAGEINFO WE WILL SEE THAT BLOND HAS CHANGED TO LIGHT, BECAUSE WE SET IT TO LIGHT, IT OVERRIDES THE BLOND VALUE
echo "<br/><br/>";
```
- [x] Create a new private method in the Beer class called beerInfo which returns "Hi i'm Duvel and have an alcochol percentage of 8.5 and I have a light color.", make sure that you use the variables and not just this text line.
  - First I was thinking like ow a `private` method, if we want to echo it this will give us an error. But then with some googling I found a very great thing to do. I don't know if this is best practice or anything but it worked for me. So I made this private method we have to make and after this one I made a new public method that will return the private method, and boom we get what we want.
- [x] Print this method on the screen on a new line.
```php
class Beverage {
    ...
}

class Beer extends Beverage {
    // OUR PRIVATE PROPERTIES
    ...

    // OUR CONSTRUCT
    ...

    // GETTER AND SETTER FOR NAME AND ALCOHOLPERCENTAGE
    ...

    // OUR NEW PRIVATE METHOD
    private function beerInfo(): string
    {
        return "Hi I'm " . $this->name . " and have an alcohol percentage of " . $this->alcoholPercentage . " and I have a " . $this->getColor() . " color.";
    }

    public function printBeerInfo(): string
    {
        return $this->beerInfo();
    }
}

// PRINTING THE PRIVATE BY CALLING THE PUBLIC ONE
echo $duvel->printBeerInfo();
```

****

### Exercise 4: PROTECTED

We know something about `private` now so let's take a look at `protected`. As we now know, "The visibility of a property, a method or (as of PHP 7.1.0) a constant can be defined by prefixing the declaration with the keywords public, `protected` or private."
The `protected` properties and methods can be accessed from the inside of the class and any class that extends the class.

What do they want us to do for this exercise:
- [x] Copy the code of exercise 3 to here.
- [x] Make all properties protected.
  - Because our properties are now protected, it's not good to call getters in our child class. We can just use $this->property and it will be able to access its value.
  - As we found out and is stated above, "`protected` properties and methods can be accessed from the inside of the class and any class that extends the class".
```php
class Beverage {

    // PROTECTED PROPERTIES
    protected string $color;
    protected float $price;
    protected string $temperature;

    // CONSTRUCTOR
    ...

    // OUR METHODS, GETTERS AND SETTERS
    ...
}

class Beer extends Beverage {
    
    // PROTECTED PROPERTIES
    protected string $name;
    protected float $alcoholPercentage;

    // CONSTRUCTOR
    ...

    // OUR METHODS, GETTERS AND SETTERS
    ...
    
    protected function beerInfo(): string
    {
        return "Hi I'm " . $this->name . " and have an alcohol percentage of " . $this->alcoholPercentage . " and I have a " . $this->color . " color.";
    }

    ...
}
```
- [x] Make all the other prints work without error without changing the beverage class.
  - I didn't have to change a lot here, I only made sure the getters aren't called in the child class.
  - To echo it we still do it the same way we would do it with private properties.
```php
class Beverage {
    ...
}

class Beer extends Beverage {
    ...
}

$duvel = new Beer("blond", 3.5, "Duvel", 8.5);

echo $duvel->getAlcoholPercentage();
echo "<br/>";
$duvel->setAlcoholPercentage(8.5);
echo $duvel->getAlcoholPercentage();
echo "<br/>";
echo $duvel->getColor();
echo "<br/>";
echo $duvel->getBeverageInfo();
echo "<br/><br/>";

$duvel->setColor('light');
echo $duvel->getColor();
echo "<br/>";
echo $duvel->getBeverageInfo();
echo "<br/><br/>";

echo $duvel->printBeerInfo();
```

****

### ### Exercise 5: PUBLIC

Exercise 5 the last one of our `Must haves`. Let's see what kind of challenge they have for us on this one.

- [x] Copy the class of exercise 1
- [x] Change the properties to private.
- [x] Fix the errors without using getter and setter functions.
  - I changed the getBeverageInfo() method to beverageInfo(). beverageInfo() can only echo the value and not return it.
```php
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

    public function beverageInfo() : void {
        echo "This beverage is $this->temperature and $this->color, the price is $this->price euro.";
    }
}

$beverage1 = new Beverage("black", 2);

$beverage1->beverageInfo();

echo "<br/>";
```
- [x] Change the price to 3.5 euro and print it also on the screen on a new line.
  - I created a new private float property $newPrice and a new function printPrice. In this function I will say if the newPrice is under O it will return a string "Wow where did you find a bartender that pays you to drink, LOL!" else if, it has a value of 0 it will be a round from the bartender and else it will return what the price for the beverage will be.
  - Afterwards I will echo the beverage its method and fill in a newPrice, this will return us one of the possible results.
```php
class Beverage {
    // PRIVATE PROPERTIES
    ...
    private float $newPrice;

    // CONSTRUCT METHOD
    ...
    
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
```

### RECAP
I really like this exercise, and it made me understand working with PHP a lot better, and it learned me a lot about OOP. It really interested me and showed me a way that it can be easy and fun to write code.
![OOP Visual](https://cdn.ttgtmedia.com/rms/onlineimages/whatis-object_oriented_programming.png)