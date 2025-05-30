<?php

// Behavioral Design Pattern

/* Step 1: Create the Strategy Interface */
interface PaymentStrategy {
    public function pay($amount);
}

/* Step 2: Create Concrete Strategies */
class CreditCardPayment implements PaymentStrategy {
    public function pay($amount) {
        echo "Paid $amount using Credit Card.\n";
    }
}

class PayPalPayment implements PaymentStrategy {
    public function pay($amount) {
        echo "Paid $amount using PayPal.\n";
    }
}

/* Step 3: Create Context Class */
class ShoppingCart {
    private $paymentMethod;

    public function setPaymentMethod(PaymentStrategy $method) {
        $this->paymentMethod = $method;
    }

    public function checkout($amount) {
        $this->paymentMethod->pay($amount);
    }
}

/* Step 4: Use it */
$cart = new ShoppingCart();

// User chooses to pay via Credit Card
$cart->setPaymentMethod(new CreditCardPayment());
$cart->checkout(100); // Output: Paid 100 using Credit Card.

// User chooses PayPal instead
$cart->setPaymentMethod(new PayPalPayment());
$cart->checkout(200); // Output: Paid 200 using PayPal.

