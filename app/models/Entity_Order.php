<?php

namespace App\Models;

class Entity_Order
{
    public $id;
    public $user_id;
    public $status;
    public $total;

    public function __construct(
        $_id,
        $_user_id,
        $_status,
        $_total,
    ) {
        $this->id = $_id;
        $this->user_id = $_user_id;
        $this->status = $_status;
        $this->total = $_total;
    }
}
