<?php 
namespace App\Controllers;

class HomeController
{
    public function index()
    {
        include 'view/site/layouts/header.php'; 
        include 'view/site/pages/home.php';
        include 'view/site/layouts/footer.php'; 
    }
}
