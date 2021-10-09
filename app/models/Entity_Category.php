<?php

namespace App\Models;

class Entity_Category
{
    public $id;
    public $name;
    public $slug;
    public $for_object;
    public $parent_category;
    public $soft_delete;

    public function __construct(
        $_id,
        $_name,
        $_slug,
        $_for_object,
        $_parent_category,
        $_soft_delete,
    ) {
        $this->id = $_id;
        $this->name = $_name;
        $this->slug = $_slug;
        $this->for_object = $_for_object;
        $this->parent_category = $_parent_category;
        $this->soft_delete = $_soft_delete;
    }
}
