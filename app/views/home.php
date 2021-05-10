<?php
require_once('public/assets/header.php');
?>

	<article class="content">
		<?php
		if(isset($posts)){
			foreach ($posts as $post) {
		?>
		<div class="single_post">
			<h2><?php echo $post['title'];?></h2>
			<p>Category: <a href="<?php echo BASE_URL; ?>/index.php?url=Controller/postByCategory/<?php echo $post['category_id']; ?>"><?php echo $post['name'];?></a></p><br>
			<p><?php
			$text = $post['content'];
			if(strlen($text) > 500){
				echo substr($text, 0, 500).'[...]';
			}
			?></p>
			<a href="<?php echo BASE_URL; ?>/index.php?url=Controller/postDetails/<?php echo $post['id']; ?>" class="readmore">Read More...</a>
		</div>
		<?php		
			}
		}
		?>
	</article>

	
	
	
<?php
require_once('public/assets/sidebar.php');
require_once('public/assets/footer.php');
?>