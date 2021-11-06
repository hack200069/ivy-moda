<?php

namespace App\Models;

use App\Models\Database;

class Model_Order
{
    protected $db;
    public function __construct()
    {
        $this->db = new Database();
        $this->db->connect();
    }

    public function getTotalOrder(){
        $sql = "SELECT COUNT(*) 
                FROM orders";
        $result = $this->db->conn->query($sql);
        return $result->fetch_array()[0];
    }
}
