<?php 
include_once(__DIR__.'/../_config/database.php');
include_once(__DIR__.'/../_model/post.php');
include_once(__DIR__.'/../_model/likes.php');

$db = new Database();
$con = $db->connect_db();

$POST = new Post($con);
$LIKES = new Likes($con);

$POST->id = $_GET['post_id'];

$LIKES->id = $_GET['like_id'];

$con->begin_transaction();
$POST->dislike();
$LIKES->delete();
$con->commit();
header('location:'.BASE_URL.'home');

exit();
 ?>