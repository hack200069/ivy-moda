<?php

namespace App\Controllers;

class AdminController
{
    public function index()
    {
        if (isset($_SESSION['user'])) {
            if ($_SESSION['user']['role'] == ADMIN) {
                include_once('view/admin/layouts/header.php');
                include_once('view/admin/pages/home.php');
                include_once('view/admin/layouts/footer.php');
                return;
            }else{
                return header('Location: ' . SCRIPT_ROOT . '/');
            }
        } else {
            return header('Location: ' . SCRIPT_ROOT . '/customer/login');
        }
    }
}
