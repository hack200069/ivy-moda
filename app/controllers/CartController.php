<?php

namespace App\Controllers;

class CartController
{
    public function cart(){
        if (isset($_SESSION['user'])) {
            include_once('view/site/layouts/header.php');
            include_once('view/site/pages/giohang.php');
            include_once('view/site/layouts/footer.php');
            return;
        } else {
            return header('Location: ' . SCRIPT_ROOT . '/customer/login');
        }
    }

    public function add_item(){

    }

    public function drop_item(){
        
    }
}