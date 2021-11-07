<?php

namespace App\Controllers;

use App\Models\Model_Product;
use App\Models\Model_Category;
use App\Models\Entity_Product;
use App\Models\Model_Image;
use App\Models\Model_ProductCategory;

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
                $page_no = 1;
                if (isset($params['page_no'])) {
                    $page_no = $params['page_no'];
                }
                $q = '';
                if (isset($params['q'])) {
                    $q = $params['q'];
                }
                $total_pages = $productModel->getTotalPage(10, $q);
                $products = $productModel->getProductList($page_no, 10, $q);
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

    public function create()
    {
        if (isset($_SESSION['user'])) {
            if ($_SESSION['user']['role'] == ADMIN) {
                $categoryModel = new Model_Category();
                $categories = $categoryModel->getAllCategory();
                include_once('view/admin/layouts/header.php');
                include_once('view/admin/pages/product/create.php');
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
                $productModel = new Model_Product();
                $current_product = $productModel->getProduct($id);
                if (isset($current_product)) {
                    $categoryModel = new Model_Category();
                    $productCategoryModel = new Model_ProductCategory();
                    $categories = $categoryModel->getAllCategory();
                    $product_categories = $productCategoryModel->getProductCategoryListByProductId($id);
                    include_once('view/admin/layouts/header.php');
                    include_once('view/admin/pages/product/edit.php');
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
                $productModel = new Model_Product();
                $result = $productModel->deleteProduct($id);
                if ($result) {
                    $_SESSION['delete_product_success'] = 'success';
                    return header('Location: ' . SCRIPT_ROOT . '/admin/product');
                }
                $_SESSION['delete_product_error'] = 'error';
                return header('Location: ' . SCRIPT_ROOT . '/admin/product');
            } else {
                return header('Location: ' . SCRIPT_ROOT . '/');
            }
        } else {
            return header('Location: ' . SCRIPT_ROOT . '/customer/login');
        }
    }

    public function detail($slug)
    {
        $productModel = new Model_Product();
        $imageModel = new Model_Image();
        $current_product = $productModel->getProductBySlug($slug);
        $images = $imageModel->getImageList($current_product['id']);
        if (isset($current_product)) {
            include_once('view/site/layouts/header.php');
            include_once('view/site/pages/sanpham.php');
            include_once('view/site/layouts/footer.php');
        } else {
            $this->__not_found();
        }
        return;
    }

    public function search()
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
        $q = '';
        if (isset($params['q'])) {
            $q = $params['q'];
        }

        $total_pages = $productModel->getTotalPage(12, $q);
        $products = $productModel->getProductList($page_no, 12, $q);
        include_once('view/site/layouts/header.php');
        include_once('view/site/pages/tim_kiem.php');
        include_once('view/site/layouts/footer.php');
        return;
    }

    public function submitCreate()
    {
        $productModel = new Model_Product();
        $productEntity = new Entity_Product(
            $id = null,
            $name = null,
            $slug = null,
            $price = null,
            $discount_fifty_percent = null,
            $quantity = null,
            $images = null,
            $categories = null,
            $description = null,
            $soft_delete = null
        );
        $error = array();
        $error['name'] = $error['price'] = $error['quantity'] = $error['images'] = $error['categories'] = $error['description'] = $error['sthg_wrong'] = NULL;
        $flag = true;
        if (empty($_POST['name'])) {
            $error['name'] = 'Hãy nhập tên sản phẩm';
            $flag = false;
        } else {
            $productEntity->name = $_POST['name'];
        }
        if (empty($_POST['price'])) {
            $error['price'] = 'Hãy nhập giá bán';
            $flag = false;
        } else {
            $productEntity->price = $_POST['price'];
        }
        if (empty($_POST['quantity'])) {
            $error['quantity'] = 'Hãy nhập số lượng';
            $flag = false;
        } else {
            $productEntity->quantity = $_POST['quantity'];
        }
        if (empty($_FILES['images'])) {
            $error['images'] = 'Hãy chọn ảnh sản phẩm';
            $flag = false;
        } else {
            $productEntity->images = $_FILES['images'];
        }
        if (empty($_POST['categories'])) {
            $error['categories'] = 'Hãy chọn danh mục';
            $flag = false;
        } else {
            $productEntity->categories = $_POST['categories'];
        }
        if (empty($_POST['discount_fifty_percent'])) {
            $productEntity->discount_fifty_percent = 1;
        } else {
            $productEntity->discount_fifty_percent = 0;
        }
        if (empty($_POST['description'])) {
            $error['description'] = 'Hãy nhập mô tả';
            $flag = false;
        } else {
            $productEntity->description = $_POST['description'];
        }

        if ($flag) {
            $result = $productModel->saveProduct($productEntity);
            if ($result == 1) {
                $_SESSION['create_product_success'] = 'success';
                if (isset($_SESSION['create_product_input'])) {
                    unset($_SESSION['create_product_input']);
                }
                return header('Location: ' . SCRIPT_ROOT . '/admin/product');
            } else {
                $error['sthg_wrong'] = "Có lỗi, vui lòng thử lại sau!";
            }
        }
        $_SESSION['create_product_input'] = (array)$productEntity;
        $_SESSION['create_product_error'] = $error;
        return header('Location: ' . SCRIPT_ROOT . '/admin/product/create');
    }

    public function submitEdit()
    {
        $productModel = new Model_Product();
        $productEntity = new Entity_Product(
            $id = null,
            $name = null,
            $slug = null,
            $price = null,
            $discount_fifty_percent = null,
            $quantity = null,
            $images = null,
            $categories = null,
            $description = null,
            $soft_delete = null
        );
        $error = array();
        $error['name'] = $error['price'] = $error['quantity'] = $error['images'] = $error['categories'] = $error['description'] = $error['sthg_wrong'] = NULL;
        $flag = true;
        if (empty($_POST['id'])) {
            $error['sthg_wrong'] = "Có lỗi, vui lòng thử lại sau!";
            $flag = false;
        } else {
            $productEntity->id = $_POST['id'];
        }
        if (empty($_POST['name'])) {
            $error['name'] = 'Hãy nhập tên sản phẩm';
            $flag = false;
        } else {
            $productEntity->name = $_POST['name'];
        }
        if (empty($_POST['price'])) {
            $error['price'] = 'Hãy nhập giá bán';
            $flag = false;
        } else {
            $productEntity->price = $_POST['price'];
        }
        if (empty($_POST['quantity'])) {
            $error['quantity'] = 'Hãy nhập số lượng';
            $flag = false;
        } else {
            $productEntity->quantity = $_POST['quantity'];
        }
        if (!empty($_FILES['images'])) {
            $productEntity->images = $_FILES['images'];
        }
        if (empty($_POST['categories'])) {
            $error['categories'] = 'Hãy chọn danh mục';
            $flag = false;
        } else {
            $productEntity->categories = $_POST['categories'];
        }

        if (empty($_POST['discount_fifty_percent'])) {
            $productEntity->discount_fifty_percent = 1;
        } else {
            $productEntity->discount_fifty_percent = 0;
        }

        if (empty($_POST['description'])) {
            $error['description'] = 'Hãy nhập mô tả';
            $flag = false;
        } else {
            $productEntity->description = $_POST['description'];
        }

        if ($flag) {
            $result = $productModel->updateProduct($productEntity);
            if ($result == 1) {
                $_SESSION['edit_product_success'] = 'success';
                if (isset($_SESSION['edit_product_input'])) {
                    unset($_SESSION['edit_product_input']);
                }
                return header('Location: ' . SCRIPT_ROOT . '/admin/product');
            } else {
                $error['sthg_wrong'] = "Có lỗi, vui lòng thử lại sau!";
            }
        }
        $_SESSION['edit_product_input'] = (array)$productEntity;
        $_SESSION['edit_product_error'] = $error;
        return header('Location: ' . SCRIPT_ROOT . '/admin/product/edit/' . $productEntity->id);
    }

    public function __not_found()
    {
        include_once('view/site/layouts/header.php');
        include_once('view/site/pages/404.php');
        include_once('view/site/layouts/footer.php');
        return;
    }
}
