<?php

namespace App\Models;

class Entity_ProductCategory
{
    public $id;
    public $product_id;
    public $category_id;

    public function __construct(
        $_id,
        $_product_id,
        $_category_id,
    ) {
        $this->id = $_id;
        $this->product_id = $_product_id;
        $this->category_id = $_category_id;
    }
}
