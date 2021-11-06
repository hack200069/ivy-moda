<?php

namespace App\Models;

class Entity_News
{
    public $id;
    public $title;
    public $slug;
    public $image;
    public $detail;
    public $category;
    public $created_at;
    public $soft_delete;

    public function __construct(
        $_id,
        $_title,
        $_slug,
        $_image,
        $_detail,
        $_category,
        $_created_at,
        $_soft_delete,
    ) {
        $this->id = $_id;
        $this->title = $_title;
        $this->slug = $_slug;
        $this->image = $_image;
        $this->detail = $_detail;
        $this->category = $_category;
        $this->created_at = $_created_at;
        $this->soft_delete = $_soft_delete;
    }
}
