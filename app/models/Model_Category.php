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

    public function saveCategory(Entity_Category $categoryEntity){
        $slug = changeTitle($categoryEntity->name);
        if($this->checkExistSlug($slug)){
            $slug = $this->getUniqueSlug($slug);
        }
		$sql = "INSERT INTO categories (name, slug, for_object, parent_category, soft_delete)
							VALUES ('$categoryEntity->name', '$slug', '$categoryEntity->for_object', '$categoryEntity->parent_category', '0')";
		$result = $this->db->conn->query($sql);
		return $result;
    }

    public function checkExistSlug($slug){
        $sql = "SELECT * FROM categories where slug = '$slug'";
        $result = $this->db->conn->query($sql);
        return $result->num_rows > 0 ? true : false;
    }

    public function getUniqueSlug($slug){
        $originSlug = $slug;
        $result = $this->checkExistSlug($slug);
        do{
            $slug = $originSlug .'-'. (string)rand(100,999);
            $result = $this->checkExistSlug($slug);
        }while($result);
        return $slug;
    }
}
