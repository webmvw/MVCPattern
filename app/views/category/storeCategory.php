<?php
require_once('public/assets/header.php');
?>
	<article class="content">
		<h3>Create Category</h3>
		<hr>
		<?php
		if(isset($success)){
			echo "<p style='color:green'>".$success."</p>";
		}elseif(isset($error)){
			echo "<p style='color:red'>".$error."</p>";
		}
		?>
		<form action="<?php echo BASE_URL; ?>/index.php?url=CategoryController/store" method="POST">
			<table>
				<tr>
					<td>Name</td>
					<td>: <input type="text" name="name" required /></td>
				</tr>
				<tr>
					<td></td>
					<td><button type="submit" name="submit">Create</button></td>
				</tr>
			</table>
		</form>
	</article>	
<?php
require_once('public/assets/sidebar.php');
require_once('public/assets/footer.php');
?>