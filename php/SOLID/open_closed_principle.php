<?php 

/*

Open for extension

Closed for modification

Add new functionality without changing existing code

Bertrand Meyer proposed inheritance

"Software entities (classes, modules, functions, etc.) should be open for extension, but closed for modification."
— Bertrand Meyer

Interfaces instead of superclassess

*/

//🚫 Bad Example (Violates OCP)
class PaymentProcessor {
    public function pay($method) {
        if ($method == 'credit_card') {
            // process credit card
        } elseif ($method == 'paypal') {
            // process PayPal
        }
    }
}


// ✅ Good Example (Follows OCP)

interface PaymentMethod {
    public function pay();
}

class CreditCardPayment implements PaymentMethod {
    public function pay() {
        // process credit card
    }
}

class PayPalPayment implements PaymentMethod {
    public function pay() {
        // process PayPal
    }
}

class PaymentProcessor {
    public function process(PaymentMethod $method) {
        $method->pay();
    }
}
