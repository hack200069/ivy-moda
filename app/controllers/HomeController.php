<?php 
namespace App\Controllers;

class HomeController
{
    public function index()
    {
        include_once('view/site/layouts/header.php'); 
        include_once('view/site/pages/home.php');
        include_once('view/site/layouts/footer.php'); 
        return;
    }
}
