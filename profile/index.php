<?php 
require_once 'my_post_listing.php'; 
if(!isset($_SESSION['logged_in']) ) header('location:'.BASE_URL.'');;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
</head>
<body>
	<header>
		<?php include_once __DIR__.'/../_templates/header.php'; ?>
	</header>
	<div>
		<h1>Hi <?=$_SESSION['username']?></h1>
	</div>
	<hr>
	<div>
		<form method="post" action="post_entry.php">
			<textarea cols="100" name="content"></textarea>
			<br>
			<input type="submit" name="submit">
		</form>
	</div>
	<hr>
	<br>
	<?php foreach ($post_list as $row) { ?>

	<div style="border: solid 2px black;padding: 5px;">
		<blockquote><?=$row['content'] ?></blockquote>
		<?php 
			$link = "";
			$disable = false;

			if($row['likes']!=0){
				
			}
		?>
	</div>
	<br>

	<?php } ?>

	<footer>
		<?php include_once __DIR__.'/../_templates/footer.php'; ?>
	</footer>
</body>
</html>