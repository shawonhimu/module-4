<?php

class Product {
    // properties
    private $id;
    private $name;
    private $price;

    public function __construct($id, $name, $price) {
        // Initialize properties
        $this->id = $id;
        $this->name = $name;
        $this->price = $this->getFormattedPrice($price);

    }

    // getFormattedPrice method
    private function getFormattedPrice($price) {
        $formatedPrice = $this->price = $price;
        return strval("$" . round($formatedPrice, 2));
    }

    // showDetails method

    public function showDetails() {
        echo "Product Details:", PHP_EOL;
        echo "-ID: {$this->id}", PHP_EOL;
        echo "-Name: {$this->name}", PHP_EOL;
        echo "-Price: {$this->price}", PHP_EOL;

    }
}

// Test the Product class
$product = new Product(1, 'T-shirt', 19.99);
$product->showDetails();