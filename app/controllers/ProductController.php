<?php 
namespace App\Controllers;

class ProductController
{
    public function index()
    {
        include 'view/site/layouts/header.php'; 
        include 'view/site/pages/sanpham.php';
        include 'view/site/layouts/footer.php'; 
    }
}
