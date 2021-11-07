<?php

namespace App\Models;
use App\Models\Database;

class Model_Cart
{
	protected $db;
	public function __construct()
	{
		$this->db = new Database();
		$this->db->connect();
	}

    public function createCart($user_id)
	{
		$sql = "INSERT INTO carts(user_id) VALUES ($user_id)";
		$this->db->conn->query($sql);
		return $this->db->conn->insert_id;
	}

    public function checkExistCart($user_id)
	{
		$sql = "SELECT * FROM carts WHERE user_id = $user_id";
		$result = $this->db->conn->query($sql);
		return $result;
	}

    public function getProductInCart($cart_id){
        $sql = "SELECT *
        FROM cart_products
        INNER JOIN products ON cart_products.product_id = products.id
        WHERE cart_id = $cart_id";
        $result = $this->db->conn->query($sql);
		$list = array();
        while ($data = $result->fetch_array()) {
            $list[] = $data;
        }
        return $list;
    }

    public function getTotalProductInCart($cart_id){
        $sql = "SELECT SUM(quantity) AS total_product FROM cart_products WHERE cart_id = $cart_id";
		$result = $this->db->conn->query($sql);
		return $result;
    }

    public function getTotalAmountBeforeDiscount($cart_id){
        $sql = "SELECT SUM(cart_products.quantity*products.price) AS total_amount_before_discount
        FROM cart_products 
        INNER JOIN products ON cart_products.product_id = products.id
        WHERE cart_id = $cart_id";
		$result = $this->db->conn->query($sql);
		return $result;
    }

    public function getTotalAmountAfterDiscount($cart_id){
		return $this->getTotalAmountDiscountProductInCart($cart_id)->fetch_array()['sum_price'] 
        + $this->getTotalAmountNoneDiscountProductInCart($cart_id)->fetch_array()['sum_price'];
    }

    public function getTotalAmountDiscountProductInCart($cart_id){
        $sql = "SELECT SUM(cart_products.quantity * products.price * 0.5) AS sum_price
        FROM cart_products 
        INNER JOIN products ON cart_products.product_id = products.id
        WHERE cart_id = $cart_id AND discount_fifty_percent = 0";
		$result = $this->db->conn->query($sql);
        return $result;
    }

    public function getTotalAmountNoneDiscountProductInCart($cart_id){
        $sql = "SELECT SUM(cart_products.quantity*products.price) AS sum_price
        FROM cart_products 
        INNER JOIN products ON cart_products.product_id = products.id
        WHERE cart_id = $cart_id AND discount_fifty_percent = 1";
        $result = $this->db->conn->query($sql);
        return $result;
    }
}