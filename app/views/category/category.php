<?php
require_once('public/assets/header.php');
?>
	<article class="content">
		<h3>Category List</h3>
		<hr>
		<table width="40%" border="1" style="border-collapse: collapse;">
			<thead>
				<tr>
					<th>SL</th>
					<th>Name</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($categories as $key=>$value){ ?>
				<tr>
					<td><?php echo $value['id']; ?></td>
					<td><?php echo $value['name']; ?></td>
				</tr>
				<?php }?>
			</tbody>
		</table>
	</article>	
<?php
require_once('public/assets/sidebar.php');
require_once('public/assets/footer.php');
?>