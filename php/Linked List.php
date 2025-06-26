<?php

class Node {
    public $data;
    public $next;

    public function __construct($data) {
        $this->data = $data;
        $this->next = null;
    }
}


class Queue {
    private $front = null;
    private $rear = null;

    // Add element to end of queue
    public function enqueue($data) {
        $newNode = new Node($data);

        if ($this->rear === null) {  // Empty queue
            $this->front = $this->rear = $newNode;
        } else {
            $this->rear->next = $newNode;
            $this->rear = $newNode;
        }
    }

    // Remove and return front element
    public function dequeue() {
        if ($this->front === null) {
            return null; // Queue is empty
        }

        $temp = $this->front;
        $this->front = $this->front->next;

        if ($this->front === null) { // Queue became empty
            $this->rear = null;
        }

        return $temp->data;
    }

    // Return front element without removing
    public function peek() {
        return $this->front !== null ? $this->front->data : null;
    }

    // Check if queue is empty
    public function isEmpty() {
        return $this->front === null;
    }
}


$queue = new Queue();

$queue->enqueue(10);
$queue->enqueue(20);
$queue->enqueue(30);

echo $queue->dequeue(); // Output: 10
echo "\n";

echo $queue->peek();    // Output: 20
echo "\n";

echo $queue->isEmpty() ? "Empty" : "Not empty"; // Output: Not empty
