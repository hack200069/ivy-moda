<?php

namespace App\Models;

class Database
{
	public $conn = NULL;
	private $server = 'localhost';
	private $dbName = 'ivy';
	private $user = 'root';
	private $password = '';

	public function connect()
	{
		$this->conn = new \mysqli($this->server, $this->user, $this->password, $this->dbName);

		if ($this->conn->connect_error) {
			die("Connection failed: " . $this->conn->connect_error);
		} else {
			$this->conn->set_charset("utf8");
		}
	}

	public function closeDatabase()
	{
		if ($this->conn) {
			$this->conn->close();
		}
	}
}
