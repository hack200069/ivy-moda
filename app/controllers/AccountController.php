<?php 
namespace App\Controllers;

class AccountController
{
    public function login()
    {
        include 'view/site/layouts/header.php'; 
        include 'view/site/pages/login.php';
        include 'view/site/layouts/footer.php'; 
    }
    public function register()
    {
        include 'view/site/layouts/header.php'; 
        include 'view/site/pages/register.php';
        include 'view/site/layouts/footer.php'; 
    }
    public function forgot_pass(){
        include 'view/site/layouts/header.php'; 
        include 'view/site/pages/forgot_pass.php';
        include 'view/site/layouts/footer.php'; 
    }
}
