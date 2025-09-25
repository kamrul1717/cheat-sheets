<?php

// The Singleton Design Pattern ensures that a class has only one instance and provides a global point of access to that instance. It's commonly used when exactly one object is needed to coordinate actions across a system — like a database connection, logging service, or configuration manager.

/*
Private constructor — prevents direct object creation.

Static variable to hold the single instance.

Static method (commonly getInstance()) to return that single instance.
*/


class Singleton {
    private static $instance = null;

    // Private constructor to prevent instantiation
    private function __construct() {
        echo "Instance created\n";
    }

    // Prevent cloning
    private function __clone() {}

    // Prevent unserialization
    private function __wakeup() {}

    // Static method to access the instance
    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new Singleton();
        }
        return self::$instance;
    }

    public function sayHello() {
        echo "Hello from Singleton\n";
    }
}

// Usage
$one = Singleton::getInstance();
$one->sayHello();

$two = Singleton::getInstance();
$two->sayHello();

// Outputs "Instance created" only once
