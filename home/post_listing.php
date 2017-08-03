<?php 
require_once __DIR__ .'/../_config/database.php'; 
require_once __DIR__ .'/../_model/user.php'; 
require_once __DIR__ .'/../_model/post.php'; 
require_once __DIR__ .'/../_model/likes.php'; 
if(!isset($_SESSION['logged_in']) ) header("location:".BASE_URL);

$db = new Database();
$con = $db->connect_db();

$USER = new User($con);
$POST = new Post($con);
$LIKES = new Likes($con);
$user_id = $_SESSION['user_id'];
$limit = 5;
$offset = (isset($_GET['post']) ? $_GET['post'] : 0);

$post_list = $POST->home_list($user_id,$limit,$offset,$USER,$LIKES);

// print_r($post_list);
 ?>