<?php

namespace App\Models;

use App\Models\Entity_Image;
use App\Models\Database;
use DateTime;

class Model_Image
{
    protected $db;
    public function __construct()
    {
        $this->db = new Database();
        $this->db->connect();
    }
    public function getImageList($product_id){
        $sql = "SELECT * FROM images WHERE product_id = $product_id";
        $result = $this->db->conn->query($sql);
        $list = array();
        while($data = $result->fetch_array()) {
            $list[] = $data;
        }
        return $list;
    }
}