<?php

namespace App\Controllers;

use App\Models\Model_Cart;
use App\Models\Model_CartProducts;
use App\Models\Model_Order;

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
                $orderModel = new Model_Order();
                $page_no = 1;
                if (isset($params['page_no'])) {
                    $page_no = $params['page_no'];
                }
                $q = '';
                if (isset($params['q'])) {
                    $q = $params['q'];
                }
                $total_pages = $orderModel->getTotalPage(10, $q);
                $orders = $orderModel->getOrderList($page_no, 10, $q);
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
            $cartModel = new Model_Cart();
            $cart_id = null;
            if ($cartModel->checkExistCart($_SESSION['user']['id'])->num_rows > 0) {
                $cart_id = $cartModel->checkExistCart($_SESSION['user']['id'])->fetch_array()['id'];
            } else {
                $cart_id = $cartModel->createCart($_SESSION['user']['id']);
            }
            $total_product = $cartModel->getTotalProductInCart($cart_id)->fetch_array()['total_product'];
            if ($total_product == 0) {
                return header('Location: ' . SCRIPT_ROOT . '/thanhtoan/giohang');
            } else {
                $total_amount_before_discount = $cartModel->getTotalAmountBeforeDiscount($cart_id)->fetch_array()['total_amount_before_discount'];
                $total_amount_after_discount = $cartModel->getTotalAmountAfterDiscount($cart_id);
                $list_product_in_cart = $cartModel->getProductInCart($cart_id);
                include_once('view/site/layouts/header.php');
                include_once('view/site/pages/dathang_step1.php');
                include_once('view/site/layouts/footer.php');
            }
            return;
        } else {
            return header('Location: ' . SCRIPT_ROOT . '/customer/login');
        }
    }
    public function dathang_step2()
    {
        if (isset($_SESSION['user'])) {
            $cartModel = new Model_Cart();
            $cart_id = null;
            if ($cartModel->checkExistCart($_SESSION['user']['id'])->num_rows > 0) {
                $cart_id = $cartModel->checkExistCart($_SESSION['user']['id'])->fetch_array()['id'];
            } else {
                $cart_id = $cartModel->createCart($_SESSION['user']['id']);
            }
            $total_product = $cartModel->getTotalProductInCart($cart_id)->fetch_array()['total_product'];
            if ($total_product == 0) {
                return header('Location: ' . SCRIPT_ROOT . '/thanhtoan/giohang');
            } else {
                $total_amount_before_discount = $cartModel->getTotalAmountBeforeDiscount($cart_id)->fetch_array()['total_amount_before_discount'];
                $total_amount_after_discount = $cartModel->getTotalAmountAfterDiscount($cart_id);
                $list_product_in_cart = $cartModel->getProductInCart($cart_id);
                include_once('view/site/layouts/header.php');
                include_once('view/site/pages/dathang_step2.php');
                include_once('view/site/layouts/footer.php');
            }
            return;
        } else {
            return header('Location: ' . SCRIPT_ROOT . '/customer/login');
        }
    }
    public function dathang_step3()
    {
        if (isset($_SESSION['user'])) {
            if (!isset($_SESSION['order_id'])) {
                return header('Location: ' . SCRIPT_ROOT . '/thanhtoan/giohang');
            } else {
                $order_id = $_SESSION['order_id'];
                unset($_SESSION['order_id']);
                include_once('view/site/layouts/header.php');
                include_once('view/site/pages/dathang_step3.php');
                include_once('view/site/layouts/footer.php');
            }
            return;
        } else {
            return header('Location: ' . SCRIPT_ROOT . '/customer/login');
        }
    }

    public function submit_order()
    {
        if (isset($_SESSION['user'])) {
            $cartModel = new Model_Cart();
            $cartProductModel = new Model_CartProducts();
            $orderModel = new Model_Order();
            $cart_id = null;
            if ($cartModel->checkExistCart($_SESSION['user']['id'])->num_rows > 0) {
                $cart_id = $cartModel->checkExistCart($_SESSION['user']['id'])->fetch_array()['id'];
            } else {
                $cart_id = $cartModel->createCart($_SESSION['user']['id']);
            }
            $total_product = $cartModel->getTotalProductInCart($cart_id)->fetch_array()['total_product'];
            if ($total_product == 0) {
                header('Location: ' . SCRIPT_ROOT . '/thanhtoan/giohang');
            } else {
                $result = $orderModel->submitOrder($cart_id);
                $_SESSION['order_id'] = $result;
                $_SESSION['cart_total_product'] = $cartProductModel->getCountProductInCart()->fetch_array()['count_product'];
                if ($cartModel->checkExistCart($_SESSION['user']['id'])->num_rows > 0) {
                    $cart_id = $cartModel->checkExistCart($_SESSION['user']['id'])->fetch_array()['id'];
                } else {
                    $cart_id = $cartModel->createCart($_SESSION['user']['id']);
                }
                $_SESSION['cart_product'] = $cartModel->getProductInCart($cart_id);
                header('Location: ' . SCRIPT_ROOT . '/thanhtoan/dathang_step3');
            }
            return;
        } else {
            return header('Location: ' . SCRIPT_ROOT . '/customer/login');
        }
    }

    public function order_list()
    {
        if (isset($_SESSION['user'])) {
            $orderModel = new Model_Order();
            $total_non_confirm = $orderModel->getTotalOrderByStatusAndUserId(1);
            $total_confirm = $orderModel->getTotalOrderByStatusAndUserId(2);
            $total_complete = $orderModel->getTotalOrderByStatusAndUserId(3);
            $total_cancel = $orderModel->getTotalOrderByStatusAndUserId(4);
            $list_non_confirm = $orderModel->getOrderByStatusAndUserId(1);
            $list_confirm = $orderModel->getOrderByStatusAndUserId(2);
            $list_complete = $orderModel->getOrderByStatusAndUserId(3);
            $list_cancel = $orderModel->getOrderByStatusAndUserId(4);
            include_once('view/site/layouts/header.php');
            include_once('view/site/pages/order_list.php');
            include_once('view/site/layouts/footer.php');
            return;
        } else {
            return header('Location: ' . SCRIPT_ROOT . '/customer/login');
        }
    }

    public function confirm($id)
    {
        if (isset($_SESSION['user'])) {
            if ($_SESSION['user']['role'] == ADMIN) {
                $orderModel = new Model_Order();
                $result = $orderModel->confirmOrder($id);
                if ($result) {
                    $_SESSION['confirm_order_success'] = 'success';
                    return header('Location: ' . SCRIPT_ROOT . '/admin/order');
                }
                $_SESSION['confirm_order_error'] = 'error';
                return;
            } else {
                return header('Location: ' . SCRIPT_ROOT . '/');
            }
        } else {
            return header('Location: ' . SCRIPT_ROOT . '/customer/login');
        }
    }

    public function cancel($id)
    {
        if (isset($_SESSION['user'])) {
            if ($_SESSION['user']['role'] == ADMIN) {
                $orderModel = new Model_Order();
                $result = $orderModel->cancelOrder($id);
                if ($result) {
                    $_SESSION['cancel_order_success'] = 'success';
                    return header('Location: ' . SCRIPT_ROOT . '/admin/order');
                }
                $_SESSION['cancel_order_error'] = 'error';
                return;
            } else {
                return header('Location: ' . SCRIPT_ROOT . '/');
            }
        } else {
            return header('Location: ' . SCRIPT_ROOT . '/customer/login');
        }
    }

    public function complete($id)
    {
        if (isset($_SESSION['user'])) {
            if ($_SESSION['user']['role'] == ADMIN) {
                $orderModel = new Model_Order();
                $result = $orderModel->completeOrder($id);
                if ($result) {
                    $_SESSION['complete_order_success'] = 'success';
                    return header('Location: ' . SCRIPT_ROOT . '/admin/order');
                }
                $_SESSION['complete_order_error'] = 'error';
                return;
            } else {
                return header('Location: ' . SCRIPT_ROOT . '/');
            }
        } else {
            return header('Location: ' . SCRIPT_ROOT . '/customer/login');
        }
    }

    public function cancel_order($id)
    {
        if (isset($_SESSION['user'])) {
            $orderModel = new Model_Order();
            $result = $orderModel->cancelOrder($id);
            if ($result) {
                $_SESSION['cancel_order_success'] = 'success';
                return header('Location: ' . SCRIPT_ROOT . '/customer/order_list');
            }
            $_SESSION['cancel_order_error'] = 'error';
            return;
        } else {
            return header('Location: ' . SCRIPT_ROOT . '/customer/login');
        }
    }
}
