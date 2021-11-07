<?php

namespace App\Models;

use App\Models\Database;

class Model_CartProducts
{
	protected $db;
	public function __construct()
	{
		$this->db = new Database();
		$this->db->connect();
	}

	public function saveCartProduct(Entity_CartProducts $cartProductEntity)
	{
		$isExistCartProduct = $this->checkExistCartProduct($cartProductEntity->product_id);
		if ($isExistCartProduct->num_rows > 0) {
			$id = $isExistCartProduct->fetch_array()['id'];
			$sql = "UPDATE cart_products
                    SET quantity = quantity + $cartProductEntity->quantity
                    WHERE id = $id";
		} else {
			$sql = "INSERT INTO cart_products(product_id,cart_id,quantity) VALUES ($cartProductEntity->product_id,$cartProductEntity->cart_id,$cartProductEntity->quantity)";
		}
		$result = $this->db->conn->query($sql);
		return $result;
	}

	public function dropCartProduct($id)
	{
		$sql = "DELETE FROM cart_products WHERE id = $id";
		$result = $this->db->conn->query($sql);
		return $result;
	}

	public function checkExistCartProduct($product_id)
	{
		$sql = "SELECT * FROM cart_products WHERE product_id = $product_id";
		$result = $this->db->conn->query($sql);
		return $result;
	}

	public function getCountProductInCart()
	{
		$id = $_SESSION['user']['id'];
		$sql = "SELECT COUNT(*) AS count_product 
		FROM cart_products
		INNER JOIN carts ON carts.id = cart_products.cart_id
		WHERE user_id = $id";
		$result = $this->db->conn->query($sql);
		return $result;
	}
}
