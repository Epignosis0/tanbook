<?php 
session_start();

define('BASE_URL', 'http://localhost/tanbook/');

class Database{
	private $database = "tanbook";
	private $username = "root";
	private $password = "";
	private $host     = "localhost";

	public $con;


	public function connect_db(){
		$this->con = null;

		try{
			$this->con = new mysqli($this->host,$this->username,$this->password,$this->database);
		}catch(mysqli_sql_exception $e){
			throw $e;
		}
		return $this->con;
	}
}


 ?>