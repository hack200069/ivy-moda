<?php 
namespace App\Controllers;

class ProductController
{
    public function index()
    {
        include_once('view/site/layouts/header.php'); 
        include_once('view/site/pages/sanpham.php');
        include_once('view/site/layouts/footer.php'); 
        return;
    }
}
