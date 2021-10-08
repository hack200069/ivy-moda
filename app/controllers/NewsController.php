<?php 
namespace App\Controllers;

class NewsController
{
    public function index()
    {
        include 'view/site/layouts/header.php'; 
        include 'view/site/pages/tin_tuc.php';
        include 'view/site/layouts/footer.php'; 
    }
    public function detail()
    {
        include 'view/site/layouts/header.php'; 
        include 'view/site/pages/bai_viet.php';
        include 'view/site/layouts/footer.php'; 
    }
}
