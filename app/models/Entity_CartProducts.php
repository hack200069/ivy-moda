<?php

namespace App\Models;

class Entity_CartProducts
{
    public $id;
    public $product_id;
    public $cart_id;
    public $quantity;

    public function __construct(
        $_id,
        $_product_id,
        $_cart_id,
        $_quantity
    ) {
        $this->id = $_id;
        $this->product_id = $_product_id;
        $this->cart_id = $_cart_id;
        $this->quantity = $_quantity;
    }
}
