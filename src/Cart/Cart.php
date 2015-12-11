<?php

namespace CodeEducation\Cart;

class Cart {

    private $total;
    private $items = [];

    /**
     * @param Product $product
     */
    public function addProduct(Product $product)
    {
        $this->items += [
            'name'  => $product->getName(),
            'price' => $product->getPrice()
        ];
        $this->total += $product->getPrice();
    }

    public function getTotal()
    {
        return $this->total;
    }

    public function getItems()
    {
        return $this->items;
    }
}