<?php

namespace App\Models;

use App\Models\Database;

class Model_OrderProducts
{
    protected $db;
    public function __construct()
    {
        $this->db = new Database();
        $this->db->connect();
    }

}
