<?php

namespace App\Models;

use App\Models\Entity_Category;
use App\Models\Database;

class Model_Category
{
    protected $db;
    public function __construct()
    {
        $this->db = new Database();
        $this->db->connect();
    }

    public function saveCategory(Entity_Category $categoryEntity)
    {
        $slug = changeTitle($categoryEntity->name);
        if ($this->checkExistSlug($slug)) {
            $slug = $this->getUniqueSlug($slug);
        }
        $sql = "INSERT INTO categories (name, slug, for_object, parent_category, soft_delete)
							VALUES ('$categoryEntity->name', '$slug', '$categoryEntity->for_object', '$categoryEntity->parent_category', '1')";
        $result = $this->db->conn->query($sql);
        return $result;
    }

    public function updateCategory(Entity_Category $categoryEntity)
    {
        $slug = changeTitle($categoryEntity->name);
        if ($this->checkExistSlug($slug)) {
            $slug = $this->getUniqueSlug($slug);
        }
        $sql = "UPDATE categories SET name = '$categoryEntity->name',
                                      for_object = '$categoryEntity->for_object',
                                      parent_category = '$categoryEntity->parent_category',
                                      slug = '$slug' 
                                      WHERE id = $categoryEntity->id";
        $result = $this->db->conn->query($sql);
        return $result;
    }
    
    public function deleteCategory($id)
    {
        $sql = "UPDATE categories SET soft_delete = '0'
                                      WHERE id = $id";
        $result = $this->db->conn->query($sql);
        return $result;
    }

    public function checkExistSlug($slug)
    {
        $sql = "SELECT * FROM categories where slug = '$slug'";
        $result = $this->db->conn->query($sql);
        return $result->num_rows > 0 ? true : false;
    }

    public function getUniqueSlug($slug)
    {
        $originSlug = $slug;
        $result = $this->checkExistSlug($slug);
        do {
            $slug = $originSlug . '-' . (string)rand(100, 999);
            $result = $this->checkExistSlug($slug);
        } while ($result);
        return $slug;
    }

    public function getCategory($id){
        $sql = "SELECT * FROM categories WHERE id = $id AND soft_delete = 1";
        $result = $this->db->conn->query($sql);
		$data = $result->fetch_array();
		return $data;
    }

    public function getCategoryBySlug($slug){
        $sql = "SELECT * FROM categories WHERE slug LIKE '$slug' AND soft_delete = 1";
        $result = $this->db->conn->query($sql);
		$data = $result->fetch_array();
		return $data;
    }

    public function getAllCategory()
    {
        $sql = "SELECT * FROM categories WHERE soft_delete = 1";
        $result = $this->db->conn->query($sql);
        $list = array();
        while($data = $result->fetch_array()) {
            $list[] = $data;
        }
        return $list;
    }

    public function getCategoryList($page_no, $no_of_records_per_page, $q)
    {
        $offset = ($page_no - 1) * $no_of_records_per_page;
        $sql = "SELECT * FROM categories WHERE name LIKE '%$q%' AND soft_delete = 1 LIMIT $offset, $no_of_records_per_page ";
        $result = $this->db->conn->query($sql);
        $list = array();
        while($data = $result->fetch_array()) {
            $list[] = $data;
        }
        return $list;
    }

    public function getTotalPage($no_of_records_per_page, $q)
    {
        $sql = "SELECT COUNT(*) FROM categories WHERE name LIKE '%$q%' AND soft_delete = 1";
        $result = $this->db->conn->query($sql);
        $total_rows = $result->fetch_array()[0];
        $total_pages = ceil($total_rows / $no_of_records_per_page);
        return $total_pages;
    }
}
