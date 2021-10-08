<?php 
namespace App\Controllers;

class ContactController
{
    public function index()
    {
        include 'view/site/layouts/header.php'; 
        include 'view/site/pages/lien_he.php';
        include 'view/site/layouts/footer.php'; 
    }
}
