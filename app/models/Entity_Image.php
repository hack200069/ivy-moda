<?php

namespace App\Models;

class Entity_Image
{
    public $id;
    public $product_id;
    public $link;

    public function __construct(
        $_id,
        $_product_id,
        $_link,
    ) {
        $this->id = $_id;
        $this->product_id = $_product_id;
        $this->link = $_link;
    }
}
