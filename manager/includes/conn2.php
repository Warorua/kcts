<?php
/*
class Database
{

	private $server = "mysql:host=45.84.206.68;dbname=tsavosit_kakamega";
	private $username = "tsavosit_kakamega";
	private $password = "zSC1OL)*R(ln";
	private $options  = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,);
	protected $conn;

	public function open()
	{
		try {
			$this->conn = new PDO($this->server, $this->username, $this->password, $this->options);
			return $this->conn;
		} catch (PDOException $e) {
			echo "There is some problem in connection: " . $e->getMessage();
		}
	}

	public function close()
	{
		$this->conn = null;
	}
}

//*/


//*
if (!class_exists('Database')) {
	// Define your own Database class if it's not already defined
	class Database
	{

		private $server = "mysql:host=45.84.206.68;dbname=tsavosit_kakamega";
		private $username = "tsavosit_kakamega";
		private $password = "zSC1OL)*R(ln";
		private $options  = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,);
		protected $conn;

		public function open()
		{
			try {
				$this->conn = new PDO($this->server, $this->username, $this->password, $this->options);
				return $this->conn;
			} catch (PDOException $e) {
				echo "There is some problem in connection: " . $e->getMessage();
			}
		}

		public function close()
		{
			$this->conn = null;
		}
	}
}
//*/

$pdo = new Database();

$conn = $pdo->open();

// Check the session status
if (session_status() === PHP_SESSION_ACTIVE) {
    // Session is active
   // echo "Session is active";
} else {
    // Session is not active
    //echo "Session is not active";
	session_start();
}
//session_start();
