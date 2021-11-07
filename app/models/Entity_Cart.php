<?php

namespace App\Models;

class Entity_Cart
{
    public $id;
    public $user_id;

    public function __construct(
        $_id,
        $_user_id
    ) {
        $this->id = $_id;
        $this->user_id = $_user_id;
    }
}
