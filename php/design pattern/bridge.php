<?php
interface Color {
    public function fill();
}

class Red implements Color {
    public function fill() {
        return "Red";
    }
}

class Blue implements Color {
    public function fill() {
        return "Blue";
    }
}
 

abstract class Shape {
    protected Color $color;

    public function __construct(Color $color) {
        $this->color = $color;
    }

    abstract public function draw();
}

class Circle extends Shape {
    public function draw() {
        echo "Drawing a " . $this->color->fill() . " Circle\n";
    }
}

class Square extends Shape {
    public function draw() {
        echo "Drawing a " . $this->color->fill() . " Square\n";
    }
}

$redCircle = new Circle(new Red());
$redCircle->draw(); // Drawing a Red Circle

$blueSquare = new Square(new Blue());
$blueSquare->draw(); // Drawing a Blue Square


