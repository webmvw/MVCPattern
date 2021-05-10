<?php
require_once('public/assets/header.php');
?>

	<article class="content">
		<?php
		foreach ($postDetails as $value) {
		?>

		<div class="single_post">
			<h2><?php echo $value['title'];?></h2>
			<p>Category: <a href="<?php echo BASE_URL; ?>/index.php?url=Controller/postByCategory/<?php echo $value['category_id']; ?>"><?php echo $value['name'];?></a></p><br>
			<p><?php echo $value['content'];?></p>
		</div>
		<?php	
		}
		?>
	</article>

	
	
	
<?php
require_once('public/assets/sidebar.php');
require_once('public/assets/footer.php');
?>