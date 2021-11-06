<?php

namespace App\Controllers;

use App\Models\Entity_News;
use App\Models\Model_News;
use DateTime;
use DateTimeZone;

class NewsController
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
                $newsModel = new Model_News();
                $page_no = 1;
                if (isset($params['page_no'])) {
                    $page_no = $params['page_no'];
                }
                $q = '';
                if (isset($params['q'])) {
                    $q = $params['q'];
                }
                $total_pages = $newsModel->getTotalPage(10, $q);
                $lstNews = $newsModel->getNewsList($page_no, 10, $q);
                include_once('view/admin/layouts/header.php');
                include_once('view/admin/pages/news/index.php');
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
                include_once('view/admin/pages/news/create.php');
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
                $newsModel = new Model_News();
                $current_news = $newsModel->getNews($id);
                if (isset($current_news)) {
                    include_once('view/admin/layouts/header.php');
                    include_once('view/admin/pages/news/edit.php');
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
                $newsModel = new Model_News();
                $result = $newsModel->deleteNews($id);
                if ($result) {
                    $_SESSION['delete_news_success'] = 'success';
                    return header('Location: ' . SCRIPT_ROOT . '/admin/news');
                }
                $_SESSION['delete_news_error'] = 'error';
                return header('Location: ' . SCRIPT_ROOT . '/admin/news');
            } else {
                return header('Location: ' . SCRIPT_ROOT . '/');
            }
        } else {
            return header('Location: ' . SCRIPT_ROOT . '/customer/login');
        }
    }

    public function eventNews()
    {
        $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $url_components = parse_url($actual_link);
        if (isset($url_components['query'])) {
            parse_str($url_components['query'], $params);
        }
        $page_no = 1;
        if (isset($params['page_no'])) {
            $page_no = $params['page_no'];
        }
        $newsModel = new Model_News();
        $total_pages = $newsModel->getTotalPageByCategory(10, "Sự kiện thời trang");
        $list_main_news = $newsModel->getNewsListByCategory($page_no, 10, "Sự kiện thời trang");
        $ten_lastest_news = $newsModel->getTenLastestNews();
        if(isset($list_main_news)){
            include_once('view/site/layouts/header.php');
            include_once('view/site/pages/su_kien_thoi_trang.php');
            include_once('view/site/layouts/footer.php');
        } else{
            $this->__not_found();
        }
        return;
    }

    public function blogNews()
    {
        $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $url_components = parse_url($actual_link);
        if (isset($url_components['query'])) {
            parse_str($url_components['query'], $params);
        }
        $page_no = 1;
        if (isset($params['page_no'])) {
            $page_no = $params['page_no'];
        }
        $newsModel = new Model_News();
        if (!isset($page)) {
            $page = 1;
        }
        $total_pages = $newsModel->getTotalPageByCategory(10, "Blog chia sẻ");
        $list_main_news = $newsModel->getNewsListByCategory($page_no, 10, "Blog chia sẻ");
        $ten_lastest_news = $newsModel->getTenLastestNews();
        if(isset($list_main_news)){
            include_once('view/site/layouts/header.php');
            include_once('view/site/pages/blog.php');
            include_once('view/site/layouts/footer.php');
        } else{
            $this->__not_found();
        }
        return;
    }

    public function internalNews()
    {
        $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $url_components = parse_url($actual_link);
        if (isset($url_components['query'])) {
            parse_str($url_components['query'], $params);
        }
        $page_no = 1;
        if (isset($params['page_no'])) {
            $page_no = $params['page_no'];
        }
        $newsModel = new Model_News();
        $total_pages = $newsModel->getTotalPageByCategory(10, "Tin nội bộ");
        $list_main_news = $newsModel->getNewsListByCategory($page_no, 10, "Tin nội bộ");
        $ten_lastest_news = $newsModel->getTenLastestNews();
        if(isset($list_main_news)){
            include_once('view/site/layouts/header.php');
            include_once('view/site/pages/tin_noi_bo.php');
            include_once('view/site/layouts/footer.php');
        } else{
            $this->__not_found();
        }
        return;
    }

    public function mainNews()
    {
        $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $url_components = parse_url($actual_link);
        if (isset($url_components['query'])) {
            parse_str($url_components['query'], $params);
        }
        $page_no = 1;
        if (isset($params['page_no'])) {
            $page_no = $params['page_no'];
        }
        $newsModel = new Model_News();
        $total_pages = $newsModel->getTotalPage(10, "");
        $list_main_news = $newsModel->getNewsList($page_no, 10, "");
        $ten_lastest_news = $newsModel->getTenLastestNews();
        if(isset($list_main_news)){
            include_once('view/site/layouts/header.php');
            include_once('view/site/pages/tin_chinh.php');
            include_once('view/site/layouts/footer.php');
        } else{
            $this->__not_found();
        }
        return;
    }

    public function detail($slug)
    {
        $newsModel = new Model_News();
        $current_news = $newsModel->getNewsBySlug($slug);
        $ten_lastest_news = $newsModel->getTenLastestNews();
        if (isset($current_news)) {
            include_once('view/site/layouts/header.php');
            include_once('view/site/pages/bai_viet.php');
            include_once('view/site/layouts/footer.php');
        } else {
            $this->__not_found();
        }
        return;
    }

    public function submitCreate()
    {
        $newsModel = new Model_News();
        $newsEntity = new Entity_News(
            $id = null,
            $title = null,
            $slug = null,
            $image = null,
            $detail = null,
            $category = null,
            $created_at = null,
            $soft_delete = null
        );
        $error = array();
        $error['title'] = $error['image'] = $error['category'] = $error['detail'] = $error['sthg_wrong'] = NULL;
        $flag = true;
        if (empty($_POST['title'])) {
            $error['title'] = 'Hãy nhập tiêu đề';
            $flag = false;
        } else {
            $newsEntity->title = $_POST['title'];
        }
        if (empty($_FILES['image'])) {
            $error['image'] = 'Hãy chọn ảnh';
            $flag = false;
        } else {
            $newsEntity->image = $_FILES['image'];
        }
        if (empty($_POST['category'])) {
            $error['category'] = 'Hãy chọn danh mục';
            $flag = false;
        } else {
            $newsEntity->category = $_POST['category'];
        }
        if (empty($_POST['detail'])) {
            $error['detail'] = 'Hãy nhập nội dung';
            $flag = false;
        } else {
            $newsEntity->detail = $_POST['detail'];
        }

        if ($flag) {
            $date = new DateTime();
            $newsEntity->created_at = $date->format('Y-m-d H:i:s');
            $result = $newsModel->saveNews($newsEntity);
            if ($result == 1) {
                $_SESSION['create_news_success'] = 'success';
                if (isset($_SESSION['create_news_input'])) {
                    unset($_SESSION['create_news_input']);
                }
                return header('Location: ' . SCRIPT_ROOT . '/admin/news');
            } else {
                $error['sthg_wrong'] = "Có lỗi, vui lòng thử lại sau!";
            }
        }
        $_SESSION['create_news_input'] = (array)$newsEntity;
        $_SESSION['create_news_error'] = $error;
        return header('Location: ' . SCRIPT_ROOT . '/admin/news/create');
    }

    public function submitEdit()
    {
        $newsModel = new Model_News();
        $newsEntity = new Entity_News(
            $id = null,
            $title = null,
            $slug = null,
            $image = null,
            $detail = null,
            $category = null,
            $created_at = null,
            $soft_delete = null
        );
        $error = array();
        $error['title'] = $error['category'] = $error['detail'] = $error['sthg_wrong'] = NULL;
        $flag = true;
        if (empty($_POST['id'])) {
            $error['sthg_wrong'] = "Có lỗi, vui lòng thử lại sau!";
            $flag = false;
        } else {
            $newsEntity->id = $_POST['id'];
        }
        if (empty($_POST['title'])) {
            $error['title'] = 'Hãy nhập tiêu đề';
            $flag = false;
        } else {
            $newsEntity->title = $_POST['title'];
        }
        if (!empty($_FILES['image'])) {
            $newsEntity->image = $_FILES['image'];
        }
        if (empty($_POST['category'])) {
            $error['category'] = 'Hãy chọn danh mục';
            $flag = false;
        } else {
            $newsEntity->category = $_POST['category'];
        }
        if (empty($_POST['detail'])) {
            $error['detail'] = 'Hãy nhập nội dung';
            $flag = false;
        } else {
            $newsEntity->detail = $_POST['detail'];
        }

        if ($flag) {
            $result = $newsModel->updateNews($newsEntity);
            if ($result == 1) {
                $_SESSION['edit_news_success'] = 'success';
                if (isset($_SESSION['edit_news_input'])) {
                    unset($_SESSION['edit_news_input']);
                }
                return header('Location: ' . SCRIPT_ROOT . '/admin/news');
            } else {
                $error['sthg_wrong'] = "Có lỗi, vui lòng thử lại sau!";
            }
        }
        $_SESSION['edit_news_input'] = (array)$newsEntity;
        $_SESSION['edit_news_error'] = $error;
        return header('Location: ' . SCRIPT_ROOT . '/admin/news/edit/' . $newsEntity->id);
    }

    public function __not_found()
    {
        include_once('view/site/layouts/header.php');
        include_once('view/site/pages/404.php');
        include_once('view/site/layouts/footer.php');
        return;
    }
}
