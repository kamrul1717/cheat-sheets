<?php

// Target Interface
interface PaymentGateway {
    public function pay(int $amount);
}

// Existing System that uses PaymentGateway
class PaymentProcessor {
    private PaymentGateway $gateway;

    public function __construct(PaymentGateway $gateway) {
        $this->gateway = $gateway;
    }

    public function process(int $amount) {
        echo "Processing payment of $amount...\n";
        $this->gateway->pay($amount);
    }
}

// This is a third-party payment library we cannot modify
class ThirdPartyStripePayment {
    public function makeStripePayment(float $valueInDollars) {
        echo "✅ Payment of $$valueInDollars done using Stripe API.\n";
    }
}


// Adapter that makes ThirdPartyStripePayment compatible with PaymentGateway
class StripeAdapter implements PaymentGateway {
    private ThirdPartyStripePayment $stripe;

    public function __construct(ThirdPartyStripePayment $stripe) {
        $this->stripe = $stripe;
    }

    public function pay(int $amount) {
        // Convert amount if needed (e.g., cents → dollars)
        $this->stripe->makeStripePayment($amount / 100);
    }
}


// Client code uses the adapter transparently
$stripeService = new ThirdPartyStripePayment();
$stripeAdapter = new StripeAdapter($stripeService);

$processor = new PaymentProcessor($stripeAdapter);
$processor->process(5000); // 5000 cents = $50

// Output:
// Processing payment of 5000...
// ✅ Payment of $50 done using Stripe API.
