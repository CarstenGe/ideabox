<?php
include '../includes/header-loggedin.php';
$url = $_GET['url'];
$title = mysqli_query($db,"SELECT ideatitle FROM ideas WHERE url='$url' ");
$ideatitle = mysqli_fetch_row($title);
$ideatitle = $ideatitle['0'];
?>
<p>Are you sure you want to delete <i><?php echo $ideatitle?></i>?</p>
<div class="delete-idea">
	<form method="post" action="idea-deleted.php">
		<input type="hidden" name="ideatitle" value="<?php echo $ideatitle?>">
		<input type="submit" value="Yes, delete it">
	</form>
</div>
<div class="delete-button">
	<a href="javascript:history.go(-1)">No, go back</a>
</div>