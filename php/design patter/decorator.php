<?php

/* Step 1: Create a Coffee interface */
interface Coffee {
    public function getCost();
    public function getDescription();
}

/* Step 2: Create the base coffee class */
class SimpleCoffee implements Coffee {
    public function getCost() {
        return 5;
    }

    public function getDescription() {
        return "Simple Coffee";
    }
}

/* Step 3: Create the abstract Decorator */
abstract class CoffeeDecorator implements Coffee {
    protected $coffee;

    public function __construct(Coffee $coffee) {
        $this->coffee = $coffee;
    }
}

/* Step 4: Create concrete decorators */
class MilkDecorator extends CoffeeDecorator {
    public function getCost() {
        return $this->coffee->getCost() + 1;
    }

    public function getDescription() {
        return $this->coffee->getDescription() . ", Milk";
    }
}

class SugarDecorator extends CoffeeDecorator {
    public function getCost() {
        return $this->coffee->getCost() + 0.5;
    }

    public function getDescription() {
        return $this->coffee->getDescription() . ", Sugar";
    }
}

/* Step 5: Use the decorators */
$coffee = new SimpleCoffee();
echo $coffee->getDescription() . " = $" . $coffee->getCost() . "\n";
// Output: Simple Coffee = $5

$coffeeWithMilk = new MilkDecorator($coffee);
echo $coffeeWithMilk->getDescription() . " = $" . $coffeeWithMilk->getCost() . "\n";
// Output: Simple Coffee, Milk = $6

$coffeeWithMilkAndSugar = new SugarDecorator($coffeeWithMilk);
echo $coffeeWithMilkAndSugar->getDescription() . " = $" . $coffeeWithMilkAndSugar->getCost() . "\n";
// Output: Simple Coffee, Milk, Sugar = $6.5
