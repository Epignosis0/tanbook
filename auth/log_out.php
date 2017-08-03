<?php 
include_once(__DIR__.'/../_config/database.php');

session_destroy();

header('location:'.BASE_URL.'home/');

 ?>