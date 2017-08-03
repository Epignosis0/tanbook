<?php 
include_once(__DIR__.'/../_config/database.php');
include_once(__DIR__.'/../_model/user.php');

$db = new Database();
$con = $db->connect_db();

$user = new User($con);

$user->username = $_POST['username'];
$user->password = $_POST['password'];

if($user->register()){
	header('location:'.BASE_URL.'auth');
}else{
	header('location:'.BASE_URL.'auth');
}
exit();
 ?>