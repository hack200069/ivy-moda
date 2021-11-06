<?php

namespace App\Controllers;

use App\Models\Model_News;
use App\Models\Model_Order;
use App\Models\Model_Product;
use App\Models\Model_User;

class AdminController
{
    public function index()
    {
        if (isset($_SESSION['user'])) {
            if ($_SESSION['user']['role'] == ADMIN) {
                $productModel = new Model_Product();
                $orderModel = new Model_Order();
                $userModel = new Model_User();
                $newsModel = new Model_News();
                $total_product = $productModel->getTotalProduct();
                $total_order = $orderModel->getTotalOrder();
                $total_customer = $userModel->getTotalCustomer();
                $total_news = $newsModel->getTotalNews();
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
