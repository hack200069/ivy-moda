<?php

namespace App\Models;

class Entity_OrderProducts
{
    public $id;
    public $product_id;
    public $order_id;
    public $name;
    public $quantity;
    public $discount;
    public $images;
    public $categories;
    public $description;
    public $soft_delete;

    public function __construct(
        $_id,
        $_product_id,
        $_order_id,
        $_name,
        $_discount,
        $_quantity,
    ) {
        $this->id = $_id;
        $this->product_id = $_product_id;
        $this->order_id = $_order_id;
        $this->name = $_name;
        $this->discount = $_discount;
        $this->quantity = $_quantity;
    }
}
