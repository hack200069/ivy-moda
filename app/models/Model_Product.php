<?php

namespace App\Models;

use App\Models\Entity_Product;
use App\Models\Database;

class Model_Product
{
    protected $db;
    public function __construct()
    {
        $this->db = new Database();
        $this->db->connect();
    }

   
}
