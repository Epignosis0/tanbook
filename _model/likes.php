<?php 

class Likes{
	private $db;
		
	public $TABLE 		= "likes";
	public $ID 			= "id";
	public $USER_ID 	= "user_id";
	public $POST_ID 	= "post_id";

	public $id;
	public $user_id;
	public $post_id;

	public function __construct($db){
		$this->db = $db;
	}

	public function delete(){
		$query = "DELETE FROM $this->TABLE WHERE $this->ID = $this->id";
		$this->db->query($query);
		return $query;
	}

	public function add(){
		$query = "INSERT INTO $this->TABLE($this->USER_ID,$this->POST_ID) VALUES($this->user_id,$this->post_id)";
		$this->db->query($query);
		return $query;
	}
}





 ?>