<?php 
	include '../includes/header-loggedin.php';
	$url = $_GET['url']; 
?>
<h3>
	<?php 
		$ideat = mysqli_query($db, "SELECT ideatitle FROM ideas WHERE url='$url'");
		$ideatitle = mysqli_fetch_row($ideat);
		echo $ideatitle['0']; 
	?>
</h3>
<div class="col-9 grey-box">
	<?php 
		$result = mysqli_query($db, "SELECT idea FROM ideas WHERE url='$url'");
		$idea = mysqli_fetch_row($result);
		?><p><?php echo $idea['0'] ?></p><?php 
		echo "<p> in ";
		$query = mysqli_query($db, "SELECT category FROM ideas WHERE url='$url'");
		$category = mysqli_fetch_row($query);
	?>
	<a href="../list-of-ideas-<?php echo $category['0']?>.php"><?php echo $category['0'];?></a>
	<?php
		$posted = mysqli_query($db,"SELECT PostedBy FROM ideas WHERE url='$url'");
		$postedBy = mysqli_fetch_row($posted);
		echo "by ".$postedBy['0']."</p>";
	?>	
</div>
<div>
	<?php
		if ($username == $postedBy['0']) {
			?>
				<div class="idea-edit-delete">
					<a href="edit-idea.php?ideatitle=<?php echo $url ?>"><input type="button" name="edit-idea" value="Edit idea" class="button-full button-2"></a>
					<a href="delete-idea.php?ideatitle=<?php echo $url?> "><input type="button" name="delete-idea" value="Delete idea" class="button-full button-2"></a>
					<a href="upload.php"><input type="button" name="upload-files" value="Upload files" class="button-full button-2"></a>
					<a href="javascript:javascript:history.go(-1)"><input type="button" name="Back to idea" value="Back to idea" class="button-full button-2"></a>
				</div>
			<?php
		}
		else {
			?>
				<div class="idea-edit-delete">
					<a href="make-this.php?url=<?php echo $url ?>"><input type="button" name="make-this" value="Make this" class="button-full button-2"></a>
					<a href="upload.php?url=<?php echo $url ?>"><input type="button" name="upload-files" value="Upload files" class="button-full button-2"></a>
					<a href="javascript:javascript:history.go(-1)"><input type="button" name="Back to idea" value="Back to idea" class="button-full button-2"></a>
				</div>
			<?php
		}
	?>
</div>
<div class="col-6">
	<h3>All files</h3>
	<div class="grey-box">
		<?php
			$sql = mysqli_query($db, "SELECT files FROM ideas WHERE url='$url'");
			$sqli = mysqli_fetch_row($sql);
			echo $sqli['0'];
		?>
	</div>
</div>