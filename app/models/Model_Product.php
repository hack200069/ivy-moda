<?php

namespace App\Models;

use App\Models\Entity_Product;
use App\Models\Database;
use DateTime;

class Model_Product
{
    protected $db;
    public function __construct()
    {
        $this->db = new Database();
        $this->db->connect();
    }

    public function saveProduct(Entity_Product $productEntity)
    {
        $slug = changeTitle($productEntity->name);
        if ($this->checkExistSlug($slug)) {
            $slug = $this->getUniqueSlug($slug);
        }
        $sql = "INSERT INTO products (name, slug, price, discount_fifty_percent, quantity, description, soft_delete)
							VALUES ('$productEntity->name', '$slug', '$productEntity->price', '$productEntity->discount_fifty_percent', '$productEntity->quantity', '$productEntity->description', '1')";
        $result = $this->db->conn->query($sql);
        if ($result) {
            $last_id = $this->db->conn->insert_id;
            $images = $productEntity->images;
            $target_dir = "public/images/product/";
            $total = count($images['name']);
            for ($i = 0; $i < $total; $i++) {
                $tmpFilePath = $images['tmp_name'][$i];
                if ($tmpFilePath != "") {
                    $date = new DateTime();
                    $newFilePath = $target_dir . $date->format('YmdHis') . $images['name'][$i];
                    if (move_uploaded_file($tmpFilePath, $newFilePath)) {
                        $sql = "INSERT INTO images(product_id, link) VALUES ('$last_id', '/$newFilePath')";
                        $result = $this->db->conn->query($sql);
                    }
                }
            }
            $categories = $productEntity->categories;
            $total = count($categories);
            for ($i = 0; $i < $total; $i++) {
                $sql = "INSERT INTO product_categories(product_id, category_id) VALUES ('$last_id', '$categories[$i]')";
                $result = $this->db->conn->query($sql);
            }
        }
        return $result;
    }

    public function updateProduct(Entity_Product $productEntity)
    {
        $slug = changeTitle($productEntity->name);
        if ($this->checkExistSlug($slug)) {
            $slug = $this->getUniqueSlug($slug);
        }
        $sql = "UPDATE products SET name = '$productEntity->name',
                                    slug = '$slug',
                                    price = '$productEntity->price',
                                    discount_fifty_percent = '$productEntity->discount_fifty_percent',
                                    quantity = '$productEntity->quantity',
                                    description = '$productEntity->description'
                                    WHERE id = $productEntity->id";
        $result = $this->db->conn->query($sql);
        if ($result) {
            $last_id = $productEntity->id;
            // Remove images and add new images
            if ($productEntity->images['size'][0] != 0) {
                $sql = "SELECT * FROM images WHERE product_id = $last_id";
                $result = $this->db->conn->query($sql);
                foreach ($result as $r) {
                    unlink('.' . $r['link']);
                }
                $sql = "DELETE FROM images WHERE product_id = $last_id";
                $result = $this->db->conn->query($sql);

                $images = $productEntity->images;
                $target_dir = "public/images/product/";
                $total = count($images['name']);
                for ($i = 0; $i < $total; $i++) {
                    $tmpFilePath = $images['tmp_name'][$i];
                    if ($tmpFilePath != "") {
                        $date = new DateTime();
                        $newFilePath = $target_dir . $date->format('YmdHis') . $images['name'][$i];
                        if (move_uploaded_file($tmpFilePath, $newFilePath)) {
                            $sql = "INSERT INTO images(product_id, link) VALUES ('$last_id', '/$newFilePath')";
                            $result = $this->db->conn->query($sql);
                        }
                    }
                }
            }

            // Remove and add new categories
            $sql = "DELETE FROM product_categories WHERE product_id = $last_id";
            $result = $this->db->conn->query($sql);

            $categories = $productEntity->categories;
            $total = count($categories);
            for ($i = 0; $i < $total; $i++) {
                $sql = "INSERT INTO product_categories(product_id, category_id) VALUES ('$last_id', '$categories[$i]')";
                $result = $this->db->conn->query($sql);
            }
        }
        return $result;
    }

    public function deleteProduct($id)
    {
        $sql = "UPDATE products SET soft_delete = '0'
                                      WHERE id = $id";
        $result = $this->db->conn->query($sql);
        return $result;
    }

    public function checkExistSlug($slug)
    {
        $sql = "SELECT * FROM products where slug = '$slug'";
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

    public function getProduct($id)
    {
        $sql = "SELECT * FROM products WHERE id = $id AND soft_delete = 1";
        $result = $this->db->conn->query($sql);
        $data = $result->fetch_array();
        return $data;
    }

    public function getProductBySlug($slug)
    {
        $sql = "SELECT * FROM products WHERE slug LIKE '$slug' AND soft_delete = 1";
        $result = $this->db->conn->query($sql);
        $data = $result->fetch_array();
        return $data;
    }

    public function getAllProduct()
    {
        $sql = "SELECT * FROM products WHERE soft_delete = 1";
        $result = $this->db->conn->query($sql);
        $list = array();
        while ($data = $result->fetch_array()) {
            $list[] = $data;
        }
        return $list;
    }

    public function getProductList($page_no, $no_of_records_per_page, $q)
    {
        $offset = ($page_no - 1) * $no_of_records_per_page;
        $sql = "SELECT * FROM products 
                WHERE name LIKE '%$q%' AND soft_delete = 1 
                ORDER BY name
                LIMIT $offset, $no_of_records_per_page ";
        $result = $this->db->conn->query($sql);
        $list = array();
        while ($data = $result->fetch_array()) {
            $list[] = $data;
        }
        return $list;
    }

    public function getTotalPage($no_of_records_per_page, $q)
    {
        $sql = "SELECT COUNT(*) FROM products WHERE name LIKE '%$q%' AND soft_delete = 1";
        $result = $this->db->conn->query($sql);
        $total_rows = $result->fetch_array()[0];
        $total_pages = ceil($total_rows / $no_of_records_per_page);
        return $total_pages;
    }

    public function getProductListByCategoryId($page_no, $no_of_records_per_page, $category_id)
    {
        $offset = ($page_no - 1) * $no_of_records_per_page;
        $sql = "SELECT products.id, name, slug, price, discount_fifty_percent
            FROM products 
            INNER JOIN product_categories ON products.id = product_categories.product_id
            WHERE soft_delete = 1 AND product_categories.category_id = '$category_id'
            ORDER BY name
            LIMIT $offset, $no_of_records_per_page";
        $result = $this->db->conn->query($sql);
        $list = array();
        while ($data = $result->fetch_array()) {
            $list[] = $data;
        }
        return $list;
    }

    public function getTotalPageByCategoryId($no_of_records_per_page, $category_id)
    {
        $sql = "SELECT COUNT(*) 
                FROM products 
                INNER JOIN product_categories ON products.id = product_categories.product_id
                WHERE soft_delete = 1 AND product_categories.category_id = '$category_id'";
        $result = $this->db->conn->query($sql);
        $total_rows = $result->fetch_array()[0];
        $total_pages = ceil($total_rows / $no_of_records_per_page);
        return $total_pages;
    }

    public function getProductListBySaleObject($page_no, $no_of_records_per_page, $sale_object)
    {
        $offset = ($page_no - 1) * $no_of_records_per_page;
        $EObject = 1;
        if ($sale_object == 'sale-nu') {
            $EObject = 2;
        }
        if ($sale_object == 'sale-tre-em') {
            $EObject = 3;
        }
        $sql = "SELECT DISTINCT products.id, products.name, products.slug, price, discount_fifty_percent
            FROM products 
            INNER JOIN product_categories ON products.id = product_categories.product_id
            INNER JOIN categories ON categories.id = product_categories.category_id
            WHERE products.soft_delete = 1 
            AND categories.for_object = $EObject 
            AND products.discount_fifty_percent = 0
            ORDER BY name
            LIMIT $offset, $no_of_records_per_page";
        $result = $this->db->conn->query($sql);
        $list = array();
        while ($data = $result->fetch_array()) {
            $list[] = $data;
        }
        return $list;
    }

    public function getTotalPageBySaleObject($no_of_records_per_page, $sale_object)
    {
        $EObject = 1;
        if ($sale_object == 'sale-nu') {
            $EObject = 2;
        }
        if ($sale_object == 'sale-tre-em') {
            $EObject = 3;
        }
        $sql = "SELECT COUNT(DISTINCT(products.id)) 
                FROM products 
                INNER JOIN product_categories ON products.id = product_categories.product_id
                INNER JOIN categories ON categories.id = product_categories.category_id
                WHERE products.soft_delete = 1 
                AND categories.for_object = $EObject 
                AND products.discount_fifty_percent = 0";
        $result = $this->db->conn->query($sql);
        $total_rows = $result->fetch_array()[0];
        $total_pages = ceil($total_rows / $no_of_records_per_page);
        return $total_pages;
    }

    public function getTotalProduct(){
        $sql = "SELECT COUNT(*) 
                FROM products 
                WHERE soft_delete = 1";
        $result = $this->db->conn->query($sql);
        return $result->fetch_array()[0];
    }
}
