<?php
require_once('public/assets/header.php');
?>
	<article class="content">
		<h3>Edit Category</h3>
		<hr>
		<?php
		if(isset($success)){
			echo "<p style='color:green'>".$success."</p>";
		}elseif(isset($error)){
			echo "<p style='color:red'>".$error."</p>";
		}
		?>
		<?php
		if(isset($data)){
			foreach($data as $key=>$value){
		?>

			<form action="http://localhost/mvc/index.php?url=CategoryController/update" method="POST">
				<input type="hidden" name="category_id" value="<?php echo $value['id']; ?>">
				<table>
					<tr>
						<td>Name</td>
						<td>: <input type="text" name="name" value="<?php echo $value['name']; ?>" required /></td>
					</tr>
					<tr>
						<td></td>
						<td><button type="submit" name="submit">Update</button></td>
					</tr>
				</table>
			</form>

		<?php		
			}
		}
		?>
	</article>	
<?php
require_once('public/assets/sidebar.php');
require_once('public/assets/footer.php');
?>