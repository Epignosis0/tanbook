<?php 

class Post{
	private $db;
	
	public $TABLE 		= "post";
	public $ID 			= "id";
	public $USER_ID 	= "user_id";
	public $CONTENT 	= "content";
	public $LIKES 		= "likes";

	public $id;
	public $user_id;
	public $content;
	public $likes;
	
	public function __construct($db){
		$this->db = $db;
	}

	public function add(){
		$query = "INSERT INTO $this->TABLE($this->USER_ID,$this->CONTENT) VALUES('$this->user_id','$this->content')";
		$this->db->query($query);
		return $query;
	}

	public function dislike(){
		$query = "UPDATE $this->TABLE SET $this->LIKES = $this->LIKES - 1 WHERE $this->ID = $this->id";
		$this->db->query($query);
		return $query;  
	}

	public function like(){
		$query = "UPDATE $this->TABLE SET $this->LIKES = $this->LIKES + 1 WHERE $this->ID = $this->id";
		$this->db->query($query);
		return $query;
	}

	public function my_list($user_id,$limit,$offset,$USER,$LIKES){
		$query = "SELECT u.$USER->USERNAME,p.*, IFNULL(l.$LIKES->ID,0) as user_like FROM $this->TABLE p ".
		 "LEFT JOIN $USER->TABLE u ON p.$this->USER_ID = u.$USER->ID ".
		 "LEFT JOIN $LIKES->TABLE l ON ( p.$this->USER_ID = l.$LIKES->USER_ID AND  p.$this->USER_ID = $user_id ) ".
		 "WHERE u.$USER->ID = $user_id ".
		 "ORDER BY $this->ID ASC ".
		 "LIMIT $limit ".
		 "OFFSET $offset";
		// print_r($user_id);
				 
		$result = $con->query($query);

		return $result->fetch_all(MYSQLI_ASSOC);
	}


	public function home_list($user_id,$limit,$offset,$USER,$LIKES){
		$query = "SELECT u.$USER->USERNAME,p.*, IFNULL(l.$LIKES->ID,0) as user_like FROM $this->TABLE p ".
		 "LEFT JOIN $USER->TABLE u ON p.$this->USER_ID = u.$USER->ID ".
		 "LEFT JOIN $LIKES->TABLE l ON ( p.$this->ID = l.$LIKES->POST_ID AND  p.$this->USER_ID = $user_id )" .
		 "ORDER BY $this->ID ASC ".
		 "LIMIT $limit ".
		 "OFFSET $offset";
		 
		$result = $con->query($query);

		return $result->fetch_all(MYSQLI_ASSOC);
	}
}





 ?>