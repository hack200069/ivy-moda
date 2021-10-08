<?php 
namespace App\Controllers;

class CategoryController
{
    public function index()
    {
        include 'view/site/layouts/header.php'; 
        include 'view/site/pages/danh_muc.php';
        include 'view/site/layouts/footer.php'; 
    }
}
