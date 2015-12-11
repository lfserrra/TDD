<?php

namespace CodeEducation\Cart;

class ProductX implements Product {

    private $name  = "Product X";
    private $price = 10;

    public function getName()
    {
        return $this->name;
    }

    public function getPrice()
    {
        return $this->price;
    }
}