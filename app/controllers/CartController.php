<?php

namespace App\Controllers;

use App\Models\Entity_Cart;
use App\Models\Entity_CartProducts;
use App\Models\Model_Cart;
use App\Models\Model_CartProducts;
use App\Models\Model_Image;

class CartController
{
    public function cart()
    {
        if (isset($_SESSION['user'])) {
            $cartModel = new Model_Cart();
            $imageModel = new Model_Image();
            $cart_id = null;
            if ($cartModel->checkExistCart($_SESSION['user']['id'])->num_rows > 0) {
                $cart_id = $cartModel->checkExistCart($_SESSION['user']['id'])->fetch_array()['id'];
            } else {
                $cart_id = $cartModel->createCart($_SESSION['user']['id']);
            }
            $total_product = $cartModel->getTotalProductInCart($cart_id)->fetch_array()['total_product'];
            $total_amount_before_discount = $cartModel->getTotalAmountBeforeDiscount($cart_id)->fetch_array()['total_amount_before_discount'];
            $total_amount_after_discount = $cartModel->getTotalAmountAfterDiscount($cart_id);
            $list_product_in_cart = $cartModel->getProductInCart($cart_id);
            include_once('view/site/layouts/header.php');
            include_once('view/site/pages/giohang.php');
            include_once('view/site/layouts/footer.php');
            return;
        } else {
            return header('Location: ' . SCRIPT_ROOT . '/customer/login');
        }
    }

    public function add_item()
    {
        if (isset($_SESSION['user'])) {
            $cartModel = new Model_Cart();
            $cartProductModel = new Model_CartProducts();
            $cartProductEntity = new Entity_CartProducts(
                $id = null,
                $product_id = null,
                $cart_id = null,
                $quantity = null
            );
            $cartProductEntity->product_id = $_POST['id'];
            $cartProductEntity->quantity = $_POST['quantity'];
            if ($cartModel->checkExistCart($_SESSION['user']['id'])->num_rows > 0) {
                $cartProductEntity->cart_id = $cartModel->checkExistCart($_SESSION['user']['id'])->fetch_array()['id'];
            } else {
                $cartProductEntity->cart_id = $cartModel->createCart($_SESSION['user']['id']);
            }
            $result = $cartProductModel->saveCartProduct($cartProductEntity);
            if ($result == 1) {
                $_SESSION['cart_total_product'] = $cartProductModel->getCountProductInCart()->fetch_array()['count_product'];
                if ($cartModel->checkExistCart($_SESSION['user']['id'])->num_rows > 0) {
                    $cart_id = $cartModel->checkExistCart($_SESSION['user']['id'])->fetch_array()['id'];
                } else {
                    $cart_id = $cartModel->createCart($_SESSION['user']['id']);
                }
                $_SESSION['cart_product'] = $cartModel->getProductInCart($cart_id);
                return header('Location: ' . SCRIPT_ROOT . '/thanhtoan/giohang');
            }
            return;
        } else {
            return header('Location: ' . SCRIPT_ROOT . '/customer/login');
        }
    }

    public function drop_item($id)
    {
        if (isset($_SESSION['user'])) {
            $cartProductModel = new Model_CartProducts();
            $result = $cartProductModel->dropCartProduct($id);
            if ($result == 1) {
                $_SESSION['cart_total_product'] = $cartProductModel->getCountProductInCart()->fetch_array()['count_product'];
                $cartModel = new Model_Cart();
                if ($cartModel->checkExistCart($_SESSION['user']['id'])->num_rows > 0) {
                    $cart_id = $cartModel->checkExistCart($_SESSION['user']['id'])->fetch_array()['id'];
                } else {
                    $cart_id = $cartModel->createCart($_SESSION['user']['id']);
                }
                $_SESSION['cart_product'] = $cartModel->getProductInCart($cart_id);
                return header('Location: ' . SCRIPT_ROOT . '/thanhtoan/giohang');
            }
            return;
        } else {
            return header('Location: ' . SCRIPT_ROOT . '/customer/login');
        }
    }
}
