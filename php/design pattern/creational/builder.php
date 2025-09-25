<?php
class Car {
    public string $engine;
    public string $color;
    public int $seats;

    public function show() {
        echo "Car with {$this->engine} engine, {$this->color} color, {$this->seats} seats.\n";
    }
}

class CarBuilder {
    private Car $car;

    public function __construct() {
        $this->car = new Car();
    }

    public function setEngine(string $engine): CarBuilder {
        $this->car->engine = $engine;
        return $this;
    }

    public function setColor(string $color): CarBuilder {
        $this->car->color = $color;
        return $this;
    }

    public function setSeats(int $seats): CarBuilder {
        $this->car->seats = $seats;
        return $this;
    }

    public function build(): Car {
        return $this->car;
    }
}

$builder = new CarBuilder();

// Build a sports car
$sportsCar = $builder
    ->setEngine("V8")
    ->setColor("Red")
    ->setSeats(2)
    ->build();

$sportsCar->show();

// Build an SUV
$suv = $builder
    ->setEngine("V6")
    ->setColor("Black")
    ->setSeats(7)
    ->build();

$suv->show();

// Output:
/*
Car with V8 engine, Red color, 2 seats.
Car with V6 engine, Black color, 7 seats.
*/
