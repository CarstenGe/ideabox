<?php 
	include '../includes/header-loggedin.php';
	$url = $_GET['url'];
	$title = mysqli_query($db,"SELECT ideatitle FROM ideas WHERE url='$url' ");
	$ideatitle = mysqli_fetch_row($title);
	$ideatitle = $ideatitle['0'];
?>

<h3>Edit idea</h3>
<div class="grey-box edit">
<form method="post" action="idea-edited.php">
<p>New title</p>
<input type="text" name="ideatitle" value="<?php echo $ideatitle ?>">

<p>New idea</p>
<?php
	$ide = mysqli_query($db, "SELECT idea FROM ideas WHERE ideatitle='$ideatitle'");
	$idea = mysqli_fetch_row($ide); 
?>
<textarea name="idea" rows="5"><?php echo $idea['0']; ?></textarea>

<p>New category</p>
<?php
	$cat = mysqli_query($db, "SELECT category FROM ideas WHERE ideatitle='$ideatitle'");
	$category = mysqli_fetch_row($cat); 

if ($category['0'] == "app-development" || $category['0'] == "app development" ) {
	?>
		<select required="required" name="category">
			<option value="app-development">App development</option>
			<option value="graphic-design">Graphic Design</option>
			<option value="webdesign">Webdesign</option>
			<option value="other">Other</option>
		</select>
	<?php
}
elseif ($category['0'] == "graphic-design" || $category['0'] == "graphic design") {
	?>
		<select required="required" name="category">
			<option value="graphic-design">Graphic Design</option>
			<option value="app-development">App development</option>
			<option value="webdesign">Webdesign</option>
			<option value="other">Other</option>
		</select>
	<?php
}
elseif ($category['0'] == "webdesign") {
	?>
		<select required="required" name="category">
			<option value="webdesign">Webdesign</option>
			<option value="app-development">App development</option>
			<option value="graphic-design">Graphic Design</option>
			<option value="other">Other</option>
		</select>
	<?php
}
elseif ($category['0'] == "other") {
	?>
		<select required="required" name="category">
			<option value="other">Other</option>
			<option value="app-development">App development</option>
			<option value="graphic-design">Graphic Design</option>
			<option value="webdesign">Webdesign</option>
		</select>
	<?php
}

	$i = mysqli_query($db, "SELECT uid FROM ideas WHERE ideatitle='$ideatitle'");
	$id = mysqli_fetch_row($i); 
?>
<input type="hidden" name="id" value="<?php echo $id['0']; ?>">
<br><br>
<input type="submit" value="Update">
<a href="javascript:javascript:history.go(-1)"><input type="button" name="Back to idea" value="Back to idea" class="button-full"></a>
</form>
</div>