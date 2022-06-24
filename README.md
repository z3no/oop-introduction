# An introduction to OOP
BeCode challenge OOP

Let's first check out what this OOP stands for maybe, I've heard it a fall a few times in class and
saw it explained the first time in a watch that Yasser gave.

If I google a bit I can find the following:

OOP stands for `Object-Oriented Programming` and it is a computer programming model that organizes software design 
around data, or objects, rather than functions and logic. An object can be defined as a data field that has unique 
attributes and behavior. 

I really like the following sentence I found online:
OOP focuses on the objects that developers want to manipulate rather than the logic required to manipulate them. 
This approach to programming is well-suited for programs that are large, complex and actively updated or maintained.

Because when I was looking at my code for the PHP form, I was thinking "wow I'm kind of getting lost in all this code if I would need to fix or add something".
From that moment on I started to think even more like, I love that everything works but I want to lear a different and cleaner way.

And that is when Sicco and Tim came to tell us "All you little cracking becoders are going to get an introduction to OOP."
I can still hear Sicco say, it took me years to master this and I will learn you all in a matter of days! Mic drop, get CRACKIN!

So let's get started with OOP!

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
```
class Beverage { 

}
```
- [x] In our class we need some properties, color (string), price (float), temperature (string)
  - A class property is an element that can be re-used and referred to within the class.
  - With each property we defined a valid type (like string if it is text, a float which includes decimal fractions (simply put, a float has numbers on both sides of the decimal, an integer does not) , so that we always know what we'll receive from the property, as well as what values will be accepted.
```
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
```
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
```
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
  - 
