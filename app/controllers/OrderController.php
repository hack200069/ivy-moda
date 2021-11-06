<?php

namespace App\Controllers;

class OrderController
{
    public function index()
    {
        if (isset($_SESSION['user'])) {
            if ($_SESSION['user']['role'] == ADMIN) {
                $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                $url_components = parse_url($actual_link);
                if (isset($url_components['query'])) {
                    parse_str($url_components['query'], $params);
                }
                // $categoryModel = new Model_Category();
                // $page_no = 1;
                // if (isset($params['page_no'])) {
                //     $page_no = $params['page_no'];
                // }
                // $q = '';
                // if (isset($params['q'])) {
                //     $q = $params['q'];
                // }
                // $total_pages = $categoryModel->getTotalPage(10, $q);
                // $categories = $categoryModel->getCategoryList($page_no, 10, $q);
                include_once('view/admin/layouts/header.php');
                include_once('view/admin/pages/order/index.php');
                include_once('view/admin/layouts/footer.php');
                return;
            } else {
                return header('Location: ' . SCRIPT_ROOT . '/');
            }
        } else {
            return header('Location: ' . SCRIPT_ROOT . '/customer/login');
        }
    }
    public function dathang_step1()
    {
        if (isset($_SESSION['user'])) {
            include_once('view/site/layouts/header.php');
            include_once('view/site/pages/dathang_step1.php');
            include_once('view/site/layouts/footer.php');
            return;
        } else {
            return header('Location: ' . SCRIPT_ROOT . '/customer/login');
        }
    }
    public function dathang_step2()
    {
        if (isset($_SESSION['user'])) {
            include_once('view/site/layouts/header.php');
            include_once('view/site/pages/dathang_step2.php');
            include_once('view/site/layouts/footer.php');
            return;
        } else {
            return header('Location: ' . SCRIPT_ROOT . '/customer/login');
        }
    }
    public function dathang_step3()
    {
        if (isset($_SESSION['user'])) {
            include_once('view/site/layouts/header.php');
            include_once('view/site/pages/dathang_step3.php');
            include_once('view/site/layouts/footer.php');
            return;
        } else {
            return header('Location: ' . SCRIPT_ROOT . '/customer/login');
        }
    }
}