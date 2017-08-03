<?php 
require_once __DIR__ .'/../_config/database.php'; 
require_once __DIR__ .'/../_model/user.php'; 
require_once __DIR__ .'/../_model/post.php'; 
require_once __DIR__ .'/../_model/likes.php'; 

$db = new Database();
$con = $db->connect_db();

$USER = new User($con);
$POST = new Post($con);
$LIKES = new Likes($con);

$user_id = $_SESSION['user_id'];
$limit = 10;
$offset = (isset($_GET['post']) ? $_GET['post'] : 0);

$post_list = $POST->my_list($user_id,$limit,$offset,$USER,$LIKES);

 ?>