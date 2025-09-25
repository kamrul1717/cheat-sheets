<?php

// Creational Patterns

/*
Definition:
A design pattern that provides an interface to create a group of related objects (called a product family), without specifying their concrete classes.

Key Point:
It creates multiple related objects (a family), ensuring they are compatible with each other.
*/

// Product Interfaces
interface Button {
    public function render(): string;
}

interface Checkbox {
    public function render(): string;
}

// Light Theme Products
class LightButton implements Button {
    public function render(): string {
        return "Light Button";
    }
}

class LightCheckbox implements Checkbox {
    public function render(): string {
        return "Light Checkbox";
    }
}

// Dark Theme Products
class DarkButton implements Button {
    public function render(): string {
        return "Dark Button";
    }
}

class DarkCheckbox implements Checkbox {
    public function render(): string {
        return "Dark Checkbox";
    }
}

// Abstract Factory Interface
interface UIFactory {
    public function createButton(): Button;
    public function createCheckbox(): Checkbox;
}

// Light Theme Factory
class LightFactory implements UIFactory {
    public function createButton(): Button {
        return new LightButton();
    }
    public function createCheckbox(): Checkbox {
        return new LightCheckbox();
    }
}

// Dark Theme Factory
class DarkFactory implements UIFactory {
    public function createButton(): Button {
        return new DarkButton();
    }
    public function createCheckbox(): Checkbox {
        return new DarkCheckbox();
    }
}

// Usage
function renderUI(UIFactory $factory) {
    echo $factory->createButton()->render();
    echo "\n";
    echo $factory->createCheckbox()->render();
}

renderUI(new LightFactory());
// Output: Light Button \n Light Checkbox

renderUI(new DarkFactory());
// Output: Dark Button \n Dark Checkbox
