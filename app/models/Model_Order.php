<?php

namespace App\Models;

use App\Models\Database;

class Model_Order
{
    protected $db;
    public function __construct()
    {
        $this->db = new Database();
        $this->db->connect();
    }

    public function getTotalOrder()
    {
        $sql = "SELECT COUNT(*) 
                FROM orders";
        $result = $this->db->conn->query($sql);
        return $result->fetch_array()[0];
    }

    public function getTotalNonConfirmOrder()
    {
        $sql = "SELECT COUNT(*) 
                FROM orders
                WHERE status = 1";
        $result = $this->db->conn->query($sql);
        return $result->fetch_array()[0];
    }

    public function getTotalOrderByStatusAndUserId($status)
    {
        $id = $_SESSION['user']['id'];
        $sql = "SELECT COUNT(*) 
                FROM orders
                WHERE status = $status AND user_id = $id";
        $result = $this->db->conn->query($sql);
        return $result->fetch_array()[0];
    }

    public function getOrderByStatusAndUserId($status)
    {
        $id = $_SESSION['user']['id'];
        $sql = "SELECT * FROM orders 
            INNER JOIN users ON users.id = orders.user_id
            WHERE status = $status AND user_id = $id
            ORDER BY orders.id DESC";
        $result = $this->db->conn->query($sql);
        $list = array();
        while ($data = $result->fetch_array()) {
            $list[] = $data;
        }
        return $list;
    }

    // 1: Dang xu ly 2:Xac nhan 3:Thanh cong 4:Da huy
    public function submitOrder($cart_id)
    {
        $cartModel = new Model_Cart();
        $sql = "SELECT *
        FROM cart_products
        INNER JOIN products ON cart_products.product_id = products.id
        WHERE cart_id = $cart_id";
        $result = $this->db->conn->query($sql);

        $listProductInCart = array();
        while ($data = $result->fetch_array()) {
            $listProductInCart[] = $data;
        }

        $totalAmount = $cartModel->getTotalAmountAfterDiscount($cart_id);
        $user_id = $_SESSION['user']['id'];
        $sql = "INSERT INTO orders(user_id, status, total) VALUES($user_id, 1, $totalAmount)";
        $this->db->conn->query($sql);
        $order_id = $this->db->conn->insert_id;
        foreach ($listProductInCart as $product) {
            $discount = $product['discount_fifty_percent'] == 0 ? ($product['price'] * $product[3] * 0.5) : 0;
            $sql = "INSERT INTO order_products(product_id,order_id,name,price,quantity,discount) VALUES($product[id],$order_id,'$product[name]',$product[price],$product[3],$discount)";
            $this->db->conn->query($sql);
            $sql = "UPDATE products SET quantity = quantity - $product[3] WHERE id = $product[id]";
            $this->db->conn->query($sql);
        }

        $sql = "DELETE FROM cart_products WHERE cart_id = $cart_id";
        $this->db->conn->query($sql);

        return $order_id;
    }

    public function getOrderList($page_no, $no_of_records_per_page, $q)
    {
        $offset = ($page_no - 1) * $no_of_records_per_page;
        if ($q != null) {
            $sql = "SELECT * FROM orders 
            INNER JOIN users ON users.id = orders.user_id
            WHERE CONCAT(first_name,' ',last_name) LIKE '%$q%'
            ORDER BY orders.id DESC 
            LIMIT $offset, $no_of_records_per_page";
        } else {
            $sql = "SELECT * FROM orders 
            INNER JOIN users ON users.id = orders.user_id
            ORDER BY orders.id DESC 
            LIMIT $offset, $no_of_records_per_page";
        }
        $result = $this->db->conn->query($sql);
        $list = array();
        while ($data = $result->fetch_array()) {
            $list[] = $data;
        }
        return $list;
    }

    public function getTotalPage($no_of_records_per_page, $q)
    {
        if ($q != null) {
            $sql = "SELECT COUNT(*) FROM orders
            INNER JOIN users ON users.id = orders.user_id
            WHERE CONCAT(first_name,' ',last_name) LIKE '%$q%'";
        } else {
            $sql = "SELECT COUNT(*) FROM orders
            INNER JOIN users ON users.id = orders.user_id";
        }
        $result = $this->db->conn->query($sql);
        $total_rows = $result->fetch_array()[0];
        $total_pages = ceil($total_rows / $no_of_records_per_page);
        return $total_pages;
    }

    public function confirmOrder($id)
    {
        $sql = "UPDATE orders SET status = '2'
                                      WHERE id = $id";
        $result = $this->db->conn->query($sql);
        return $result;
    }

    public function cancelOrder($id)
    {
        $sql = "UPDATE orders SET status = '4'
                                      WHERE id = $id";
        $result = $this->db->conn->query($sql);
        $sql = "SELECT *
        FROM order_products
        INNER JOIN products ON order_products.product_id = products.id
        WHERE order_id = $id";
        $result = $this->db->conn->query($sql);

        $listProductInOrder = array();
        while ($data = $result->fetch_array()) {
            $listProductInOrder[] = $data;
        }
        foreach ($listProductInOrder as $product) {
            $sql = "UPDATE products SET quantity = quantity + $product[5] WHERE id = $product[product_id]";
            $this->db->conn->query($sql);
        }
        return $result;
    }

    public function completeOrder($id)
    {
        $sql = "UPDATE orders SET status = '3'
                                      WHERE id = $id";
        $result = $this->db->conn->query($sql);
        return $result;
    }
}
