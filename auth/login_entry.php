<?php 

include_once(__DIR__.'/../_config/database.php');
include_once(__DIR__.'/../_model/user.php');

$db = new Database();
$con = $db->connect_db();
$uid = 0;
$user = new User($con);

$user->username = $_POST['username'];
$user->password = $_POST['password'];
if($uid = $user->login()){
	$_SESSION['logged_in'] = true;
	$_SESSION['username'] = $user->username ;
	$_SESSION['user_id'] = $uid;

	header('location:'.BASE_URL.'home');
}else{
	header('location:'.BASE_URL.'auth');
}
exit();
 ?>