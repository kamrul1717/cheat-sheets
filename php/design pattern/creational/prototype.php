<?php

class Document {
    public string $type;
    public string $header;
    public string $footer;

    public function __construct(string $type) {
        $this->type = $type;
        $this->loadDefaults();
    }

    private function loadDefaults() {
        echo "Loading default settings for {$this->type}\n";
        $this->header = "Default Header";
        $this->footer = "Default Footer";
    }

    public function __clone() {
        // You can reset or modify cloned object properties here if needed
        echo "Cloning {$this->type} document...\n";
    }
}


// Create prototype
$invoicePrototype = new Document("Invoice");

// Clone instead of creating new object from scratch
$invoice1 = clone $invoicePrototype;
$invoice1->header = "Invoice #1";

$invoice2 = clone $invoicePrototype;
$invoice2->header = "Invoice #2";

// Display results
echo $invoice1->header . "\n"; // Invoice #1
echo $invoice2->header . "\n"; // Invoice #2

// output:
/*
Loading default settings for Invoice
Cloning Invoice document...
Cloning Invoice document...
Invoice #1
Invoice #2
*/