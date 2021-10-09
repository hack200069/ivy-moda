<?php

namespace App\Controllers;

use App\Models\Model_Category;
use App\Models\Entity_Category;

class CategoryController
{
    public function index()
    {
        if (isset($_SESSION['user'])) {
            if ($_SESSION['user']['role'] == ADMIN) {
                include_once('view/admin/layouts/header.php');
                include_once('view/admin/pages/home.php');
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

    public function edit($slug)
    {
        if (isset($_SESSION['user'])) {
            if ($_SESSION['user']['role'] == ADMIN) {
                include_once('view/admin/layouts/header.php');
                include_once('view/admin/pages/category/edit.php');
                include_once('view/admin/layouts/footer.php');
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
    }

    public function detail($slug)
    {
        if ($slug === "hang-nam-moi-ve") {
            include 'view/site/layouts/header.php';
            include 'view/site/pages/danh_muc.php';
            include 'view/site/layouts/footer.php';
        }
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
    }
}
