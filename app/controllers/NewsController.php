<?php 
namespace App\Controllers;

class NewsController
{
    public function index()
    {
        include_once('view/site/layouts/header.php'); 
        include_once('view/site/pages/tin_tuc.php');
        include_once('view/site/layouts/footer.php'); 
        return;
    }
    public function detail()
    {
        include_once('view/site/layouts/header.php'); 
        include_once('view/site/pages/bai_viet.php');
        include_once('view/site/layouts/footer.php'); 
        return;
    }
}
