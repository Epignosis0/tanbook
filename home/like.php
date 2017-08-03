<?php 
include_once(__DIR__.'/../_config/database.php');
include_once(__DIR__.'/../_model/post.php');
include_once(__DIR__.'/../_model/likes.php');

$db = new Database();
$con = $db->connect_db();

$POST = new Post($con);
$LIKES = new Likes($con);

$POST->id = $_GET['post_id'];

$LIKES->user_id = $_SESSION['user_id'];
$LIKES->post_id = $POST->id;

$con->begin_transaction(MYSQLI_TRANS_START_READ_ONLY);
$POST->like();
$LIKES->add();
$con->commit();
header('location:'.BASE_URL.'home');
exit();
 ?>