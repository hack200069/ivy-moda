<?php

namespace App\Models;

class Entity_Product
{
    public $id;
    public $name;
    public $slug;
    public $price;
    public $discount_fifty_percent;
    public $quantity;
    public $images;
    public $categories;
    public $description;
    public $soft_delete;

    public function __construct(
        $_id,
        $_name,
        $_slug,
        $_price,
        $_discount_fifty_percent,
        $_quantity,
        $_images,
        $_categories,
        $_description,
        $_soft_delete,
    ) {
        $this->id = $_id;
        $this->name = $_name;
        $this->slug = $_slug;
        $this->price = $_price;
        $this->discount_fifty_percent = $_discount_fifty_percent;
        $this->quantity = $_quantity;
        $this->images = $_images;
        $this->categories = $_categories;
        $this->description = $_description;
        $this->soft_delete = $_soft_delete;
    }
}
