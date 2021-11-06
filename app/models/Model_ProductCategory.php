<?php

namespace App\Models;

use App\Models\Entity_ProductCategory;
use App\Models\Database;
use DateTime;

class Model_ProductCategory
{
    protected $db;
    public function __construct()
    {
        $this->db = new Database();
        $this->db->connect();
    }
    public function getProductCategoryListByProductId($product_id){
        $sql = "SELECT * FROM product_categories WHERE product_id = $product_id";
        $result = $this->db->conn->query($sql);
        $list = array();
        while($data = $result->fetch_array()) {
            $list[] = $data;
        }
        return $list;
    }
    public function getProductCategoryListByCategoryId($category_id){
        $sql = "SELECT * FROM product_categories WHERE category_id = $category_id";
        $result = $this->db->conn->query($sql);
        $list = array();
        while($data = $result->fetch_array()) {
            $list[] = $data;
        }
        return $list;
    }

}