<?php 
require_once 'post_listing.php'; 
?>
<!DOCTYPE html>
<html>
<head>
	<title>home</title>
</head>
<body>	
	<header>
		<?php include_once __DIR__.'/../_templates/header.php'; ?>
	</header>	
	<br>
	<?php foreach ($post_list as $row) { ?>

	<div style="border: solid 2px black;padding: 5px;">
		Post:<blockquote><?=$row['content'] ?></blockquote>
		<p>Author : <?=$row['username'] ?></p>
		<p>Likes : <?=$row['likes'] ?></p>
		<?php 
			if($row['user_like']!=0){
				$link = "dislike.php?post_id=".$row['id']."&like_id=".$row['user_like'];
				$liked = true;
			}else{
				$link = "like.php?post_id=".$row['id'];
				$liked = false;
			}
		?>
		<a href="<?=$link?>"><?=$liked ? "unlike":"like"?></a>
	</div>
	<br>

	<?php } ?>

	<?php $link = BASE_URL.'home/?post='.($offset+$limit) ?>
	<a href="<?=$link ?>">SHOW OLD POSTS</a>



	<footer>
		<?php include_once __DIR__.'/../_templates/footer.php'; ?>
	</footer>
</body>
</html>