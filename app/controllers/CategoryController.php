<?php

namespace App\Controllers;

use App\Models\Model_Category;
use App\Models\Entity_Category;
use App\Models\Model_Image;
use App\Models\Model_Product;
use App\Models\Model_ProductCategory;

class CategoryController
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
                $categoryModel = new Model_Category();
                $page_no = 1;
                if (isset($params['page_no'])) {
                    $page_no = $params['page_no'];
                }
                $q = '';
                if (isset($params['q'])) {
                    $q = $params['q'];
                }
                $total_pages = $categoryModel->getTotalPage(10, $q);
                $categories = $categoryModel->getCategoryList($page_no, 10, $q);
                include_once('view/admin/layouts/header.php');
                include_once('view/admin/pages/category/index.php');
                include_once('view/admin/layouts/footer.php');
                return;
            } else {
                return header('Location: ' . SCRIPT_ROOT . '/');
            }
        } else {
            return header('Location: ' . SCRIPT_ROOT . '/customer/login');
        }
    }

    public function create()
    {
        if (isset($_SESSION['user'])) {
            if ($_SESSION['user']['role'] == ADMIN) {
                include_once('view/admin/layouts/header.php');
                include_once('view/admin/pages/category/create.php');
                include_once('view/admin/layouts/footer.php');
                return;
            } else {
                return header('Location: ' . SCRIPT_ROOT . '/');
            }
        } else {
            return header('Location: ' . SCRIPT_ROOT . '/customer/login');
        }
    }

    public function edit($id)
    {
        if (isset($_SESSION['user'])) {
            if ($_SESSION['user']['role'] == ADMIN) {
                $categoryModel = new Model_Category();
                $current_category = $categoryModel->getCategory($id);
                if (isset($current_category)) {
                    include_once('view/admin/layouts/header.php');
                    include_once('view/admin/pages/category/edit.php');
                    include_once('view/admin/layouts/footer.php');
                } else {
                    $this->__not_found();
                }
                return;
            } else {
                return header('Location: ' . SCRIPT_ROOT . '/');
            }
        } else {
            return header('Location: ' . SCRIPT_ROOT . '/customer/login');
        }
    }

    public function delete($id)
    {
        if (isset($_SESSION['user'])) {
            if ($_SESSION['user']['role'] == ADMIN) {
                $categoryModel = new Model_Category();
                $result = $categoryModel->deleteCategory($id);
                if ($result) {
                    $_SESSION['delete_category_success'] = 'success';
                    return header('Location: ' . SCRIPT_ROOT . '/admin/category');
                }
                $_SESSION['delete_category_error'] = 'error';
                return header('Location: ' . SCRIPT_ROOT . '/admin/category');
            } else {
                return header('Location: ' . SCRIPT_ROOT . '/');
            }
        } else {
            return header('Location: ' . SCRIPT_ROOT . '/customer/login');
        }
    }

    public function detail($slug)
    {
        $categoryModel = new Model_Category();
        $productModel = new Model_Product();
        $imageModel = new Model_Image();
        $current_category = $categoryModel->getCategoryBySlug($slug);

        $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $url_components = parse_url($actual_link);
        if (isset($url_components['query'])) {
            parse_str($url_components['query'], $params);
        }
        $page_no = 1;
        if (isset($params['page_no'])) {
            $page_no = $params['page_no'];
        }
        $total_pages = $productModel->getTotalPageByCategoryId(12, $current_category['id']);
        $products = $productModel->getProductListByCategoryId($page_no, 12, $current_category['id']);
        if (isset($current_category)) {
            include_once('view/site/layouts/header.php');
            include_once('view/site/pages/danh_muc.php');
            include_once('view/site/layouts/footer.php');
        } else {
            $this->__not_found();
        }
        return;
    }

    public function sale($slug)
    {
        $productModel = new Model_Product();
        $imageModel = new Model_Image();
        $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $url_components = parse_url($actual_link);
        if (isset($url_components['query'])) {
            parse_str($url_components['query'], $params);
        }
        $page_no = 1;
        if (isset($params['page_no'])) {
            $page_no = $params['page_no'];
        }
        $total_pages = $productModel->getTotalPageBySaleObject(12, $slug);
        $products = $productModel->getProductListBySaleObject($page_no, 12, $slug);
        $title = 'Sale nam';
        if($slug == 'sale-nu'){
            $title = 'Sale nữ';
        }
        if($slug == 'sale-tre-em'){
            $title = 'Sale trẻ em';
        }
        include_once('view/site/layouts/header.php');
        include_once('view/site/pages/sale.php');
        include_once('view/site/layouts/footer.php');
        return;
    }

    public function submitCreate()
    {
        $categoryModel = new Model_Category();
        $categoryEntity = new Entity_Category(
            $id = null,
            $name = null,
            $slug = null,
            $for_object = null,
            $parent_category = null,
            $soft_delete = null,
        );

        $error = array();
        $error['name'] = $error['for_object'] = $error['parent_category'] = $error['sthg_wrong'] = NULL;
        $flag = true;
        if (empty($_POST['name'])) {
            $error['name'] = 'Hãy nhập tên danh mục';
            $flag = false;
        } else {
            $categoryEntity->name = $_POST['name'];
        }
        if (empty($_POST['for_object'])) {
            $error['for_object'] = 'Hãy chọn đối tượng';
            $flag = false;
        } else {
            $categoryEntity->for_object = $_POST['for_object'];
        }
        if (empty($_POST['parent_category'])) {
            $error['parent_category'] = 'Hãy chọn danh mục cha';
            $flag = false;
        } else {
            $categoryEntity->parent_category = $_POST['parent_category'];
        }
        if ($flag) {
            $result = $categoryModel->saveCategory($categoryEntity);
            if ($result == 1) {
                $_SESSION['create_category_success'] = 'success';
                if (isset($_SESSION['create_category_input'])) {
                    unset($_SESSION['create_category_input']);
                }
                return header('Location: ' . SCRIPT_ROOT . '/admin/category');
            } else {
                $error['sthg_wrong'] = "Có lỗi, vui lòng thử lại sau!";
            }
        }
        $_SESSION['create_category_input'] = (array)$categoryEntity;
        $_SESSION['create_category_error'] = $error;
        return header('Location: ' . SCRIPT_ROOT . '/admin/category/create');
    }

    public function submitEdit()
    {
        $categoryModel = new Model_Category();
        $categoryEntity = new Entity_Category(
            $id = null,
            $name = null,
            $slug = null,
            $for_object = null,
            $parent_category = null,
            $soft_delete = null,
        );

        $error = array();
        $error['name'] = $error['for_object'] = $error['parent_category'] = $error['sthg_wrong'] = NULL;
        $flag = true;
        if (empty($_POST['id'])) {
            $error['sthg_wrong'] = "Có lỗi, vui lòng thử lại sau!";
            $flag = false;
        } else {
            $categoryEntity->id = $_POST['id'];
        }
        if (empty($_POST['name'])) {
            $error['name'] = 'Hãy nhập tên danh mục';
            $flag = false;
        } else {
            $categoryEntity->name = $_POST['name'];
        }
        if (empty($_POST['for_object'])) {
            $error['for_object'] = 'Hãy chọn đối tượng';
            $flag = false;
        } else {
            $categoryEntity->for_object = $_POST['for_object'];
        }
        if (empty($_POST['parent_category'])) {
            $error['parent_category'] = 'Hãy chọn danh mục cha';
            $flag = false;
        } else {
            $categoryEntity->parent_category = $_POST['parent_category'];
        }
        if ($flag) {
            $result = $categoryModel->updateCategory($categoryEntity);
            if ($result == 1) {
                $_SESSION['edit_category_success'] = 'success';
                return header('Location: ' . SCRIPT_ROOT . '/admin/category');
            } else {
                $error['sthg_wrong'] = "Có lỗi, vui lòng thử lại sau!";
            }
        }
        $_SESSION['edit_category_error'] = $error;
        return header('Location: ' . SCRIPT_ROOT . '/admin/category/edit');
    }

    public function __not_found()
    {
        include_once('view/site/layouts/header.php');
        include_once('view/site/pages/404.php');
        include_once('view/site/layouts/footer.php');
        return;
    }
}
