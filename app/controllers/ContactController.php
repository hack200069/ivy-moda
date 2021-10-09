<?php 
namespace App\Controllers;

class ContactController
{
    public function index()
    {
        include_once('view/site/layouts/header.php'); 
        include_once('view/site/pages/lien_he.php');
        include_once('view/site/layouts/footer.php'); 
        return;
    }
}
