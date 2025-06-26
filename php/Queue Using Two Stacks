<?php

class QueueUsingStacks {
    private $stack1 = [];
    private $stack2 = [];

    // Add element to the queue
    public function enqueue($x) {
        array_push($this->stack1, $x);
    }

    // Remove element from the queue
    public function dequeue() {
        if (empty($this->stack2)) {
            while (!empty($this->stack1)) {
                array_push($this->stack2, array_pop($this->stack1));
            }
        }

        if (empty($this->stack2)) {
            return null; // Queue is empty
        }

        return array_pop($this->stack2);
    }

    // Peek front element without removing
    public function peek() {
        if (empty($this->stack2)) {
            while (!empty($this->stack1)) {
                array_push($this->stack2, array_pop($this->stack1));
            }
        }

        return empty($this->stack2) ? null : end($this->stack2);
    }

    // Check if queue is empty
    public function isEmpty() {
        return empty($this->stack1) && empty($this->stack2);
    }
}
