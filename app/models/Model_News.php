<?php

namespace App\Models;

use App\Models\Entity_News;
use App\Models\Database;
use DateTime;

class Model_News
{
    protected $db;
    public function __construct()
    {
        $this->db = new Database();
        $this->db->connect();
    }

    public function saveNews(Entity_News $newsEntity)
    {
        $slug = changeTitle($newsEntity->title);
        if ($this->checkExistSlug($slug)) {
            $slug = $this->getUniqueSlug($slug);
        }
        // Save image
        $isSaveImage = false;
        $image = $newsEntity->image;
        $target_dir = "public/images/news/";
        $tmpFilePath = $image['tmp_name'];
        if ($tmpFilePath != "") {
            $date = new DateTime();
            $newFilePath = $target_dir . $date->format('YmdHis') . $image['name'];
            $isSaveImage = move_uploaded_file($tmpFilePath, $newFilePath);
        }
        if ($isSaveImage) {
            $sql = "INSERT INTO news (title, slug, image, detail, category, created_at, soft_delete)
            VALUES ('$newsEntity->title', '$slug', '/$newFilePath', '$newsEntity->detail', '$newsEntity->category', '$newsEntity->created_at', '1')";
            $result = $this->db->conn->query($sql);
        }
        return $result;
    }

    public function updateNews(Entity_News $newsEntity)
    {
        $slug = changeTitle($newsEntity->title);
        if ($this->checkExistSlug($slug)) {
            $slug = $this->getUniqueSlug($slug);
        }
        if ($newsEntity->image['size'] != 0) {
            $sql = "SELECT * FROM news WHERE id = $newsEntity->id";
            $result1 = $this->db->conn->query($sql);
            foreach ($result1 as $r) {
                unlink('.' . $r['image']);
            }
            // Save image
            $isSaveImage = false;
            $image = $newsEntity->image;
            $target_dir = "public/images/news/";
            $tmpFilePath = $image['tmp_name'];
            if ($tmpFilePath != "") {
                $date = new DateTime();
                $newFilePath = $target_dir . $date->format('YmdHis') . $image['name'];
                $isSaveImage = move_uploaded_file($tmpFilePath, $newFilePath);
            }
            if($isSaveImage){
                $sql = "UPDATE news SET title = '$newsEntity->title',
                                        slug = '$slug',
                                        image = '/$newFilePath',
                                        detail = '$newsEntity->detail',
                                        category = '$newsEntity->category'
                                        WHERE id = $newsEntity->id";
                $result = $this->db->conn->query($sql);
            }
        } else {
            $sql = "UPDATE news SET title = '$newsEntity->title',
                                    slug = '$slug',
                                    detail = '$newsEntity->detail',
                                    category = '$newsEntity->category'
                                    WHERE id = $newsEntity->id";
            $result = $this->db->conn->query($sql);
        }
        return $result;
    }

    public function deleteNews($id)
    {
        $sql = "UPDATE news SET soft_delete = '0'
                                      WHERE id = $id";
        $result = $this->db->conn->query($sql);
        return $result;
    }

    public function checkExistSlug($slug)
    {
        $sql = "SELECT * FROM news where slug = '$slug'";
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

    public function getNews($id)
    {
        $sql = "SELECT * FROM news WHERE id = $id AND soft_delete = 1";
        $result = $this->db->conn->query($sql);
        $data = $result->fetch_array();
        return $data;
    }

    public function getNewsBySlug($slug)
    {
        $sql = "SELECT * FROM news WHERE slug LIKE '$slug' AND soft_delete = 1";
        $result = $this->db->conn->query($sql);
        $data = $result->fetch_array();
        return $data;
    }

    public function getAllNews()
    {
        $sql = "SELECT * FROM news WHERE soft_delete = 1";
        $result = $this->db->conn->query($sql);
        $list = array();
        while ($data = $result->fetch_array()) {
            $list[] = $data;
        }
        return $list;
    }

    public function getNewsList($page_no, $no_of_records_per_page, $q)
    {
        $offset = ($page_no - 1) * $no_of_records_per_page;
        $sql = "SELECT * FROM news 
                WHERE title LIKE '%$q%' AND soft_delete = 1 
                ORDER BY id DESC 
                LIMIT $offset, $no_of_records_per_page";
        $result = $this->db->conn->query($sql);
        $list = array();
        while ($data = $result->fetch_array()) {
            $list[] = $data;
        }
        return $list;
    }

    public function getTotalPage($no_of_records_per_page, $q)
    {
        $sql = "SELECT COUNT(*) FROM news WHERE title LIKE '%$q%' AND soft_delete = 1";
        $result = $this->db->conn->query($sql);
        $total_rows = $result->fetch_array()[0];
        $total_pages = ceil($total_rows / $no_of_records_per_page);
        return $total_pages;
    }

    public function getNewsListByCategory($page_no, $no_of_records_per_page, $category)
    {
        $offset = ($page_no - 1) * $no_of_records_per_page;
        $sql = "SELECT * FROM news 
            WHERE soft_delete = 1 AND category LIKE '$category'
            LIMIT $offset, $no_of_records_per_page";
        $result = $this->db->conn->query($sql);
        $list = array();
        while ($data = $result->fetch_array()) {
            $list[] = $data;
        }
        return $list;
    }
    public function getTotalPageByCategory($no_of_records_per_page, $category)
    {
        $sql = "SELECT COUNT(*) FROM news 
                WHERE soft_delete = 1 AND category LIKE '$category'";
        $result = $this->db->conn->query($sql);
        $total_rows = $result->fetch_array()[0];
        $total_pages = ceil($total_rows / $no_of_records_per_page);
        return $total_pages;
    }

    public function getTenLastestNews()
    {
        $sql = "SELECT *
            FROM news 
            WHERE soft_delete = 1
            ORDER BY created_at DESC
            LIMIT 10";
        $result = $this->db->conn->query($sql);
        $list = array();
        while ($data = $result->fetch_array()) {
            $list[] = $data;
        }
        return $list;
    }

    public function getTotalNews(){
        $sql = "SELECT COUNT(*) 
                FROM news 
                WHERE soft_delete = 1";
        $result = $this->db->conn->query($sql);
        return $result->fetch_array()[0];
    }
}
