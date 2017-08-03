<?php 
include_once '_config/database.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>

<header>
	<?php include_once __DIR__.'/_templates/header.php'; ?>
</header>	

<main>
	<h1>Welcome</h1>
	<a href="<?=BASE_URL?>auth">Login/Register</a>
</main>


<footer>
	<?php include_once __DIR__.'/_templates/footer.php'; ?>
</footer>	
</body>
</html>