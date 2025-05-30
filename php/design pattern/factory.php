<?php

// Creational Patterns

/*
Definition:
A design pattern that provides a method to create a single object without exposing the exact class name to the client. The object type is usually decided based on input.

Key Point:
It creates one object from a set of possible classes.
*/

/* Step 1: Shape Interface */
interface Shape {
    public function draw();
}
/* Step 2: Concrete Shape Classes */
class Circle implements Shape {
    public function draw() {
        echo "Drawing a Circle\n";
    }
}

class Square implements Shape {
    public function draw() {
        echo "Drawing a Square\n";
    }
}

/* Step 3: Factory Class */
class ShapeFactory {
    public static function createShape($type): ?Shape {
        switch (strtolower($type)) {
            case 'circle':
                return new Circle();
            case 'square':
                return new Square();
            default:
                return null; // unknown shape
        }
    }
}

/* Step 4: Client Code */
$circle = ShapeFactory::createShape('circle');
$circle->draw(); // Output: Drawing a Circle

$square = ShapeFactory::createShape('square');
$square->draw(); // Output: Drawing a Square
