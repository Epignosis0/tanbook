<?php 

class User{
	private $db;
	//FIELD NAME
	public $TABLE 		= "user";
	public $ID 			= "id";
	public $PASSWORD 	= "password";
	public $USERNAME 	= "username";

	//VARIABLES
	public $id;
	public $password;
	public $username;

	public function __construct($db){
		$this->db = $db;
	}

	public function login(){
		$query = "SELECT * FROM $this->TABLE WHERE $this->USERNAME = '$this->username' AND $this->PASSWORD = '$this->password'";

		$result = $this->db->query($query);

		if($result->num_rows > 0){
			$userdata =  $result->fetch_assoc();
			return $userdata['id'];
		}else{
			return false;
		}

	}

	public function register(){
		$query = "INSERT INTO $this->TABLE($this->USERNAME,$this->PASSWORD) VALUES('$this->username','$this->password')";

		$this->db->query($query);
		return $query;
	}

}





 ?>