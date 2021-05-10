<?php
require_once('public/assets/header.php');
?>
	<article class="content">
		<h3>Category Details</h3>
		<hr>
		<?php
		foreach($catById as $key=>$value){
			echo $value['name'];
		}
		?>
	</article>	
<?php
require_once('public/assets/sidebar.php');
require_once('public/assets/footer.php');
?>