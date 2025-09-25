<?php

// Behavioral Patterns

/*
Definition:
A design pattern that lets you pass requests along a chain of handlers. Each handler decides either to process the request or pass it to the next handler in the chain.

Key Point:
Decouples sender and receiver. Allows multiple objects to handle a request without the sender needing to know which object will handle it.
*/




// Abstract Handler
abstract class Handler
{
    protected $nextHandler;

    public function setNext(Handler $handler): Handler
    {
        $this->nextHandler = $handler;
        return $handler;
    }

    public function handle($request)
    {
        if ($this->nextHandler) {
            return $this->nextHandler->handle($request);
        }

        return null;
    }
}

// Concrete Handlers
class FrontDesk extends Handler
{
    public function handle($request)
    {
        if ($request == "basic") {
            return "FrontDesk handled the request.";
        }
        return parent::handle($request);
    }
}

class Supervisor extends Handler
{
    public function handle($request)
    {
        if ($request == "moderate") {
            return "Supervisor handled the request.";
        }
        return parent::handle($request);
    }
}

class Manager extends Handler
{
    public function handle($request)
    {
        if ($request == "serious") {
            return "Manager handled the request.";
        }
        return parent::handle($request);
    }
}

// Client Code
$frontDesk = new FrontDesk();
$supervisor = new Supervisor();
$manager = new Manager();

$frontDesk->setNext($supervisor)->setNext($manager);

echo $frontDesk->handle("moderate") . PHP_EOL;  // Supervisor handled the request.
echo $frontDesk->handle("serious") . PHP_EOL;   // Manager handled the request.
echo $frontDesk->handle("critical") . PHP_EOL;  // NULL (no one handled)
