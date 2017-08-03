<?php 
include_once(__DIR__.'/../_config/database.php');
include_once(__DIR__.'/../_model/post.php');

$db = new Database();
$con = $db->connect_db();

$POST = new Post($con);

$POST->user_id = $_SESSION['user_id'];
$POST->content = $_POST['content'];

if($POST->add()){
	header('location:'.BASE_URL.'profile');
}else{
	header('location:'.BASE_URL.'profile');
}
exit();
 ?>