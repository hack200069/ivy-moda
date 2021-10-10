<?php 
namespace App\Controllers;

use App\Models\Model_Product;
use App\Models\Entity_Product;

class ProductController
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
                $productModel = new Model_Product();
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
                include_once('view/admin/pages/product/index.php');
                include_once('view/admin/layouts/footer.php');
                return;
            } else {
                return header('Location: ' . SCRIPT_ROOT . '/');
            }
        } else {
            return header('Location: ' . SCRIPT_ROOT . '/customer/login');
        }
    }
}
